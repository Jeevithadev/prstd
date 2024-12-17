<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Project extends CI_Controller {
 
   public function __construct() {
      parent::__construct(); 
      $this->load->library('form_validation');
      $this->load->library('session');
      $this->load->model('Project_model', 'project');
      $this->load->helper('url');
       $this->load->model('Datamodel');
       
      
       
         $this->load->helper('form'); 
         $this->load->library('email');
$config = array();
$config['protocol'] = 'smtp';
$config['smtp_host'] = '10.1.1.2';
$config['smtp_user'] = 'shure@igcar.gov.in';
$config['smtp_pass'] = 'Phrmd@2020';
$config['smtp_port'] = 25;
$config['mailtype'] = 'html';
$this->email->initialize($config);
$this->email->set_newline("\r\n");
 
   }
 
   /*
      Display all records in page
   */
  public function index()
  {
      
    $data['projects'] = $this->project->get_all();
    $data['title'] = "Student Details";
    $this->load->view('layout/header');       
    $this->load->view('project/index',$data);
    $this->load->view('layout/footer');
  }
 
  /*
 
    Display a record
  */
  public function show()
  {
      // $name = $this->session->all_userdata();
       // = $name['username'];
    //$id = $this->uri->segement('4'); 
    $data['users'] = $this->project->get1();
    $data['title'] = "Show Project";
    $this->load->view('layout/header');
    $this->load->view('project/show', $data);
    $this->load->view('layout/footer'); 
  }

  public function showstud()
  {
    $data['users'] = $this->project->getstud1();
    $data['title'] = "Show Studnet";
    $this->load->view('layout/header');
    $this->load->view('project/showstud', $data);
    $this->load->view('layout/footer'); 
  }

  public function screenstud()
  {
    $students = $this->project->screenstud();
    $screenedStudents = [];
    $acceptedCount = [];
    
    foreach($students as $stud){
      $flag = 0;
      $reason = "";
      
      $id = $stud->id;
      $status = $stud->status;
      $reqstdate = strtotime($stud->reqstdate);
      $startdate = strtotime($stud->sdate);
      $enddate = strtotime($stud->edate);

      $datediff = ($startdate - $reqstdate) / (60 * 60 * 24);
      $projectperiod = ($enddate - $startdate) / (60 * 60 * 24);

      // Check minimum 15 days ahead of the current date
      if ($datediff < 15) {
        $flag++;
        $reason .= "Start date must be at least 15 days from today. ";
    }

     // Check season window
     $startmonth = date('m', $startdate);
     if ($stud->window == "summer" && !($startmonth >= 1 && $startmonth <= 5)) {
         $flag++;
         $reason .= "For summer, the date must be between Jan and May. ";
     } elseif ($stud->window == "winter" && !($startmonth >= 10 && $startmonth <= 12)) {
         $flag++;
         $reason .= "For winter, the date must be between Oct and Dec. ";
     }

     // Check project type and duration
     if ($stud->prjtype == "In-Plant Praining" && ($projectperiod < 14 || $projectperiod > 28)) {
      $flag++;
      $reason .= "In-plant training period must be between 2 to 4 weeks. ";
  } elseif ($stud->prjtype == "Project Work" && ($projectperiod < 45 || $projectperiod > 90)) {
      $flag++;
      $reason .= "Project period must be between 45 days and 3 months. ";
  }

   // Check if student is from the same college and year, and only allow first 5 requests
   $stdyear = date('Y', $startdate);
   $collegeYear = $stud->college . '_' . $stdyear;
   if (!isset($acceptedCount[$collegeYear])) {
       $acceptedCount[$collegeYear] = 0;
   }

   if ($acceptedCount[$collegeYear] >= 5) {
       $flag++;
       $reason .= "Only the first 5 students from the same college and year are accepted. ";
   }else {
        if ($flag === 0) {
            $acceptedCount[$collegeYear]++;
        }
}
  
  if($status === "Registered" || $status === "Updated" || $status === "Screened-in" || $status === "Screened-out"){
    if($flag>0){
      $stud->status = "Screened-out";
    }
    else{
      $stud->status = "Screened-in";
    }
   }

   $this->db->where('id', $id)->update('student_master', ['status' => $stud->status]);
  $stud->reason = $reason;

  $screenedStudents[] = $stud;

    }
    
    $data['stud'] = $screenedStudents;
  
    $this->load->view('layout/header');
    $this->load->view('project/screenstud', $data);
    $this->load->view('layout/footer'); 
  }

  public function showstatus(){
    $data['stud'] = $this->project->getscreenstud();
    $data['title'] = "Status";
    $this->load->view('layout/header');
    $this->load->view('project/statusmonitor', $data);
    $this->load->view('layout/footer');

  }
  public function updateStatus()
{
    $id = $this->input->post('id');
    $status = $this->input->post('status');
    $remarks = $this->input->post('remarks');
    $ip_address = $this->project->get_client_ip();

    $result = $this->db->where('id', $id)->update('student_master', ['status' => $status]);
    
    if ($result) {
      $data = [
        'id' => $id,
        'status' => $status,
        'remarks' => $remarks,
        'ip' => $ip_address
    ];

    $this->db->insert('stud_status', $data);
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false]);
    }
}

 
  
  public function search(){
      
     $data['title'] = " Details";
    $this->load->view('layout/header');       
    $this->load->view('project/eqi_view');
     $this->load->view('layout/footer');
      
  }
  
    public function report(){
      $data['data'] = $this->Datamodel->getEqi1();
     $data['title'] = "Equipement Details";
    $this->load->view('layout/header');       
    $this->load->view('project/report_view',$data);
     $this->load->view('layout/footer');
      
  }


   public function empList(){
     
     // POST data
     $postData = $this->input->post();

     // Get data
     $data = $this->Datamodel->getEqi($postData);

     echo json_encode($data);
  }
  /*
    Create a record page
  */
  public function create()
  {
    $data['title'] = "Create Project";
    $this->load->view('layout/header');
    $this->load->view('project/create',$data);
    $this->load->view('layout/footer');     
  }
 
  /*
    Save the submitted record
  */
  public function get_client_ip()
{
    $ip_address = '';

    // Check if the IP is coming through a shared internet or proxy server
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip_address = $_SERVER['HTTP_CLIENT_IP'];  // IP from shared internet
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        // Check for multiple forwarded IPs and take the first one
        $ip_address = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR'])[0];  // IP passed from a proxy
    } elseif (!empty($_SERVER['REMOTE_ADDR'])) {
        $ip_address = $_SERVER['REMOTE_ADDR'];  // Normal IP address
    }

    // If IP address is ::1 (IPv6 loopback), return 127.0.0.1 instead
    if ($ip_address === '::1') {
        $ip_address = '127.0.0.1';
    }

    return $ip_address;
}
  public function store(){

    $this->load->model('Project_model');

    $this->form_validation->set_rules('tit', 'student title', 'required');
    $this->form_validation->set_rules('name', 'student name', 'required');
    $this->form_validation->set_rules('ptit', 'parent title', 'required');
    $this->form_validation->set_rules('wardname', 'parent name', 'required');
    $this->form_validation->set_rules('gradution', 'gradution', 'required');
    $this->form_validation->set_rules('degree', 'degree', 'required');
    $this->form_validation->set_rules('branch', 'branch', 'required');
    $this->form_validation->set_rules('displine', 'displine', 'required');
    $this->form_validation->set_rules('college', 'college', 'required');
    $this->form_validation->set_rules('city', 'city', 'required');
    $this->form_validation->set_rules('state', 'state', 'required');
    $this->form_validation->set_rules('window', 'window', 'required');
    $this->form_validation->set_rules('prjtype', 'prjtype', 'required');
    $this->form_validation->set_rules('reqstDate', 'reqstDate', 'required');
    $this->form_validation->set_rules('txtFromDate', 'txtFromDate', 'required');
    $this->form_validation->set_rules('txtTodate', 'txtTodate', 'required');
    $this->form_validation->set_rules('accom', 'accom', 'required');
    $this->form_validation->set_rules('bonafide', 'bonafide', 'required');
    $this->form_validation->set_rules('hod', 'hod', 'required');
    $this->form_validation->set_rules('mark', 'mark', 'required');
    $this->form_validation->set_rules('resume', 'resume', 'required');
    $this->form_validation->set_rules('request', 'request', 'required');
    $this->form_validation->set_rules('ename', 'ename', 'required');
    $this->form_validation->set_rules('designward', 'designward', 'required');
    $this->form_validation->set_rules('unit', 'unit', 'required');
    $this->form_validation->set_rules('unitplace', 'unitplace', 'required');
    $this->form_validation->set_rules('email', 'email', 'required');
    $this->form_validation->set_rules('inter', 'inter', 'required');
    $this->form_validation->set_rules('mobile', 'mobile', 'required');


    if (!$this->form_validation->run())
    {
             
       $this->session->set_flashdata('errors', validation_errors());
        redirect(base_url('project/create'));
    }
    else
    {
      $student_name = $this->input->post('name');
      $logged_in_username = $this->session->userdata('username');
      $ip_address = $this->project->get_client_ip();


      $data = array(
        'tit' => $this->input->post('tit'),
        'name' => $this->input->post('name'),
        'ptit' => $this->input->post('ptit'),
        'pname' => $this->input->post('wardname'),
        'graduation' => $this->input->post('gradution'),
        'degree' => $this->input->post('degree'),
        'branch' => $this->input->post('branch'),
        'discipline' => $this->input->post('displine'),
        'college' => $this->input->post('college'),
        'city' => $this->input->post('city'),
        'state' => $this->input->post('state'),
        'window' => $this->input->post('window'),
        'prjtype' => $this->input->post('prjtype'),
        'reqstdate' => $this->input->post('reqstDate'),
        'sdate' => $this->input->post('txtFromDate'),
        'edate' => $this->input->post('txtTodate'),
        'accom' => $this->input->post('accom'),
        'bonafide' => $this->input->post('bonafide'),
        'hod' => $this->input->post('hod'),
        'mark' => $this->input->post('mark'),
        'resume' => $this->input->post('resume'),
        'wardemp' => $this->input->post('request'),
        'ename' => $this->input->post('ename'),
        'design' => $this->input->post('designward'),
        'unit' => $this->input->post('unit'),
        'unitplace' => $this->input->post('unitplace'),
        'email' => $this->input->post('email'),
        'intercom' => $this->input->post('inter'),
        'mobile' => $this->input->post('mobile'),
        'user' => $logged_in_username,
        'ip' => $ip_address,
        'status' => "Registered"
    );

      $config['upload_path'] = './student_uploads/';  // Path to upload the files
        $config['allowed_types'] = 'pdf|jpg|jpeg|png';   // Allowed file types
        $config['max_size'] = 2048;  // Maximum file size in KB

        $this->load->library('upload', $config);

        if (!empty($_FILES['uploadmark']['name'])) {
          $config['file_name'] = $student_name . '_mark_' . time();
          $this->upload->initialize($config);
          
          if ($this->upload->do_upload('uploadmark')) {
              $file_data = $this->upload->data();
              $data['upload_mark'] = 'student_uploads/' . $file_data['file_name'];
          } else {
              $this->session->set_flashdata('error', $this->upload->display_errors());
              redirect(base_url('project/create'));
          }
      }
      if (!empty($_FILES['uploadhod']['name'])) {
          $config['file_name'] = $student_name . '_hod_' . time();
          $this->upload->initialize($config);
          
          if ($this->upload->do_upload('uploadhod')) {
              $file_data = $this->upload->data();
              $data['upload_hod'] = 'student_uploads/' . $file_data['file_name'];
          } else {
              $this->session->set_flashdata('error', $this->upload->display_errors());
              redirect(base_url('project/create'));
          }
      }
      if (!empty($_FILES['uploadsop']['name'])) {
          $config['file_name'] = $student_name . '_sop_' . time();
          $this->upload->initialize($config);
          
          if ($this->upload->do_upload('uploadsop')) {
              $file_data = $this->upload->data();
              $data['upload_sop'] = 'student_uploads/' . $file_data['file_name'];
          } else {
              $this->session->set_flashdata('error', $this->upload->display_errors());
              redirect(base_url('project/create'));
          }
      }
            
            
            // Insert data into database
            $insert_id = $this->Project_model->insertStudent($data);
            if ($insert_id) {
                $this->session->set_flashdata('success', 'Data inserted successfully.');
                redirect(base_url('project/create'));
            } else {
                $this->session->set_flashdata('error', 'Failed to insert data.');
                redirect(base_url('project/create'));
            }
      
    }
  }


  public function store1()
  {
   $this->form_validation->set_rules('icno', 'icno', 'required');
    $this->form_validation->set_rules('icno', 'IC No ', 'required|regex_match[/^[0-9]{5}$/]');
    $this->form_validation->set_rules('uname', 'uname', 'required');
    $this->form_validation->set_rules('uid', 'Unique ID', 'required');
    $this->form_validation->set_rules('tyre', 'Type of Resource', 'required');
    $this->form_validation->set_rules('ename', 'Name of the equipment', 'required');
    $this->form_validation->set_rules('po', 'PO No', 'required');
    $this->form_validation->set_rules('edate', 'Date', 'required');
    $this->form_validation->set_rules('val', 'Value', 'required');
    $this->form_validation->set_rules('ework', 'Equipment in working condition', 'required');
    
 
    if (!$this->form_validation->run())
    {
             
       $this->session->set_flashdata('errors', validation_errors());
        redirect(base_url('project/create'));
    }
    else
    {
       $this->project->store();
       $this->project->store1();
       $this->project->approve();
         
        $ename = $this->input->post('ename');
         $val = $this->input->post('val');
         $eloc = $this->input->post('eloc');
         $inname = $this->input->post('inname');
        $divs = $this->input->post('divs');
           
         $query = $this->db->query("SELECT * FROM employeemaster where IC_No in (SELECT Division_Head_Name from divisiondtlforjrfsrf where Division_Short_Name = '$divs')");

        foreach ($query->result() as $row) {
             $tit =  $row->Title;
               $ap_name =  $row->Employee_Name;
                $to_email =  $row->Official_Email_ID;
                $icno = $row->IC_No;
             }
       
       
     
        $from_email = "shure@igcar.gov.in"; 
        //$to_email = $this->input->post('email'); 
         $to_email = "smila@igcar.gov.in";
         //$id = $data1['id'];
         //Load email library 
         $this->load->library('email'); 
   
         $this->email->from($from_email, 'High Value Audit Committe'); 
         $this->email->to($to_email);
         $this->email->subject('Approval for High Value Equipment / Systems'); 
         $this->email->message(
                 
                 'Dear &nbsp;'.$tit.'&nbsp;'. $ap_name.  
                 
                 
                 '<br/><br/>The Following high value Equiment is submitted for your approval
                 <br/><br/> <table border = 1 align= left> <tr> <td>Name :</td><td> '.$ename. '</td></tr><tr><td>Value</td><td>'.$val.'</td></tr><tr><td>Location</td><td>'.$eloc. '</td></tr><tr><td>Officer-incharge</td><td>'.$inname.


                 '</td></tr></table><br /><br />You can Login in the below link http://10.7.1.180:8080/eqi/Main/ to approve using the  following Credientials 
                  <br/><br/>Username : '.$icno . '<br>Password : '.$icno.'<br /><br /><i>This is Auto generated Email</i> <br /> <br />Regards<br />High Value Committee'
                 
                 
              ); 
   
         //Send mail 
         if($this->email->send()) 
         $this->session->set_flashdata("email_sent","Email sent successfully."); 
         else 
         $this->session->set_flashdata("email_sent","Error in sending Email."); 
        // $this->load->view('email_form'); 
       
       
       
       
       
       $this->session->set_flashdata('success', "Saved Successfully!");
       redirect(base_url('project'));
    }
 
  }
 
  /*
    Edit a record page
  */
  public function edit($id)
  {
    $data['project'] = $this->project->get($id);
    $data['title'] = "Edit Project";
    $this->load->view('layout/header');
    $this->load->view('project/edit', $data);
    $this->load->view('layout/footer');     
  }

  public function editstud($id)
  {
    $data['project'] = $this->project->getstud($id);
    $data['title'] = "Edit Project";
    $this->load->view('layout/header');
    $this->load->view('project/editstud', $data);
    $this->load->view('layout/footer');     
  }
 
  /*
    Update the submitted record
  */
  public function update($id)
  {
    $this->form_validation->set_rules('icno', 'icno', 'required');
    $this->form_validation->set_rules('uname', 'uname', 'required');
    $this->form_validation->set_rules('uid', 'Unique ID', 'required');
    $this->form_validation->set_rules('tyre', 'Type of Resource', 'required');
    $this->form_validation->set_rules('ename', 'Name of the equipment', 'required');
    $this->form_validation->set_rules('po', 'PO No', 'required');
    $this->form_validation->set_rules('edate', 'Date', 'required');
    $this->form_validation->set_rules('val', 'Value', 'required');
    $this->form_validation->set_rules('ework', 'Equipment in working condition', 'required');
   
 
    if (!$this->form_validation->run())
    {
        $this->session->set_flashdata('errors', validation_errors());
        redirect(base_url('project/edit/' . $id));
    }
    else
    {
       $this->project->update($id);
       $this->project->update1($id);
       
       $this->session->set_flashdata('success', "Updated Successfully!");
       redirect(base_url('project/show'));
    }
 
  }


  public function updatestud($id){

    $this->form_validation->set_rules('tit', 'student title', 'required');
    $this->form_validation->set_rules('name', 'student name', 'required');
    $this->form_validation->set_rules('ptit', 'parent title', 'required');
    $this->form_validation->set_rules('wardname', 'parent name', 'required');
    $this->form_validation->set_rules('gradution', 'gradution', 'required');
    $this->form_validation->set_rules('degree', 'degree', 'required');
    $this->form_validation->set_rules('branch', 'branch', 'required');
    $this->form_validation->set_rules('displine', 'displine', 'required');
    $this->form_validation->set_rules('college', 'college', 'required');
    $this->form_validation->set_rules('city', 'city', 'required');
    $this->form_validation->set_rules('state', 'state', 'required');
    $this->form_validation->set_rules('window', 'window', 'required');
    $this->form_validation->set_rules('prjtype', 'prjtype', 'required');
    $this->form_validation->set_rules('reqstDate', 'reqstDate', 'required');
    $this->form_validation->set_rules('txtFromDate', 'txtFromDate', 'required');
    $this->form_validation->set_rules('txtTodate', 'txtTodate', 'required');
    $this->form_validation->set_rules('accom', 'accom', 'required');
    $this->form_validation->set_rules('bonafide', 'bonafide', 'required');
    $this->form_validation->set_rules('hod', 'hod', 'required');
    $this->form_validation->set_rules('mark', 'mark', 'required');
    $this->form_validation->set_rules('resume', 'resume', 'required');
    $this->form_validation->set_rules('request', 'request', 'required');
    $this->form_validation->set_rules('ename', 'ename', 'required');
    $this->form_validation->set_rules('designward', 'designward', 'required');
    $this->form_validation->set_rules('unit', 'unit', 'required');
    $this->form_validation->set_rules('unitplace', 'unitplace', 'required');
    $this->form_validation->set_rules('email', 'email', 'required');
    $this->form_validation->set_rules('inter', 'inter', 'required');
    $this->form_validation->set_rules('mobile', 'mobile', 'required');


    if (!$this->form_validation->run())
    {
             
       $this->session->set_flashdata('errors', validation_errors());
        redirect(base_url('project/editstud/' . $id));
        return;
    }
    else
    {
             
            
            // update data into database
      $result = $this->project->updatestud($id);
       
      if ($result) {
        $this->session->set_flashdata('success', "Updated Successfully!");
    } else {
      log_message('error', "Database update failed for ID {$id}");
      $this->session->set_flashdata('error', "Update failed.");
      redirect(base_url('project/editstud/' . $id));
    }

    redirect(base_url('project/showstud'));
       
      
    }
  }
 
  /*
    Delete a record
  */
  public function delete($id)
  {
    $item = $this->project->delete($id);
    $this->session->set_flashdata('success', "Deleted Successfully!");
    redirect(base_url('project'));
  }
   public function logout()  
    {  
        $this->session->sess_destroy();  
        redirect('Main/login');  
    }  
public function get_dropdown() {
    $query = $this->input->post('query');
    $this->load->model('Project_model');
    $results = $this->Project_model->get_colleges($query); // Fetch colleges based on query

    // Return JSON response
    echo json_encode($results);
}

}