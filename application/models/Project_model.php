<?php
 
 
class Project_model extends CI_Model{
 
    public function __construct()
    {
        $this->load->database();
        $this->load->helper('url');
    }
 
    /*
        Get all the records from the database
    */
    public function get_all()
    {
         $this->db->order_by('id', 'DESC');
         $this->db->where('temp', '0');
        $projects = $this->db->get("studentfi")->result();
        
        return $projects;
    }
 
    /*
        Store the record in the database
    */
    public function insertStudent($data){
        $this->db->insert('student_master', $data);
        return $this->db->insert_id();
    }
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
    
        return $ip_address;
    }
    
    public function store()
    {    
        $data = [
            'icno' => $this->input->post('icno'),
			'tit'=> $this->input->post('tit'),
			'uname' => $this->input->post('uname'),
                        'grp'=> $this->input->post('grp'),
			'sgrp'=> $this->input->post('sgrp'),
			'divs'=> $this->input->post('divs'),
                        'sec'=> $this->input->post('sec'),
			'email'=> $this->input->post('email'),
			'uid'=> $this->input->post('uid'),
                        'tyre'=>$this->input->post('tyre'),
			'ename'=> $this->input->post('ename'),
                        'po'=>$this->input->post('po'),
                        'edate'=> $this->input->post('edate'),
			'val'=> $this->input->post('val'),
			'capno'=> $this->input->post('capno'),
                       'tval'=>$this->input->post('tval'),
			'ework'=> $this->input->post('ework'),
			'eworkno'=> $this->input->post('eworkno'),
                         'amc'=> $this->input->post('amc1'),
                        'eloc'=> $this->input->post('eloc'),
			'inicno'=> $this->input->post('inicno'),
                        'inname'=> $this->input->post('inname'),
                        'icemail'=> $this->input->post('icemail'),
                        'icintercom'=> $this->input->post('icintercom'),
			'efea'=> $this->input->post('efea'),
                         'searchkey'=> $this->input->post('searchkey'),
                    	'resh'=> $this->input->post('resh'),
                      'man'=> $this->input->post('man'),
			'etime'=> $this->input->post('etime'),
			'comp'=> $this->input->post('comp'),
                     'compot'=>$this->input->post('compot'),
			'ndays'=> $this->input->post('ndays'),
			'nexp'=>$this->input->post('nexp'),
                        'nnexp'=>$this->input->post('nnexp'),
			'secuse'=>$this->input->post('secuse'),
			'secusey'=>$this->input->post('secusey'),
                       'secusen'=>$this->input->post('secusen'),
			'useage'=>$this->input->post('useage'),
			'testr'=>$this->input->post('testr'),
                        'testrn'=>$this->input->post('testrn'),
			'testa'=>$this->input->post('testa'),
			'testan'=>$this->input->post('testan'),
                        'log'=>$this->input->post('log'),
			'logn'=>$this->input->post('logn'),
			'rreplace'=>$this->input->post('rreplace'),
                        'replacey'=>$this->input->post('replacey'),
			'replacer'=>$this->input->post('replacer'),
			'aigcar'=>$this->input->post('aigcar'),
                        'aigcarr'=>$this->input->post('aigcarr'),
			'contri'=> $this->input->post('contri'),
			'sugg' => $this->input->post('sugg'),
                        'grp_user' => $this->input->post('grp_user'),
                            'statustemp'=>'1'
        ];
 
        $result = $this->db->insert('student_master', $data);
        return $result;
    }
    
     public function approve() 
    {
         
         
         
           $divs = $this->input->post('divs');
         $query = $this->db->query("SELECT * FROM employeemaster where IC_No in (SELECT Division_Head_Name from divisiondtlforjrfsrf where Division_Short_Name = '$divs')");

        foreach ($query->result() as $row) {
             $icno =  $row->IC_No;
             }
              $this->db->where('username',$icno);
             $q = $this->db->get('user_login');
              if ( $q->num_rows() <= 0 ) 
                 {
                  
                     $data1 = 
                     ['username' => $icno,
                    'password' => $icno,
                    'oldpass' => $icno,
                     'role' => 'aprove'
                         ];
                $result = $this->db->insert('user_login', $data1);
                return $result;
    
                 }
    
        
   
    }
 
    
   public function store1() 
    {
        $id = $this->db->insert_id();
        $data1 = 
        ['eqi_id' => $id,
        'user_ip' => $this->input->ip_address(),
        'user_name' => $this->session->userdata('username') 
         ];
         
         $this->db->insert('userlog', $data1);
         //staus table
         
         $divs = $this->input->post('divs');
         $query = $this->db->query("SELECT * FROM employeemaster where IC_No in (SELECT Division_Head_Name from divisiondtlforjrfsrf where Division_Short_Name = '$divs')");

            foreach ($query->result() as $row) {
             $icno =  $row->IC_No;
             }
         
          $data2 = 
        ['eq_id' => $id,
         'username' => $this->input->post('icno'), 
         'ip' => $this->input->ip_address(),
        'aprovename' => $icno,
         'estatus' => 'Pending'
         ];
        $this->db->insert('eq_status', $data2);
         
       
         $this->db->select('*');
     $this->db->from('high_new');
      $this->db->where('id' , $id);
     $query1=$this->db->get();
     $users1 = $query1->result(); 
     $this->db->from('employeemaster');
    $this->db->where('IC_No' , $icno);
    $query2=$this->db->get();
     $users = $query2->result();
     return array_merge($users1, $users);   
         
    }
    /*
        Get an specific record from the database
    */
    public function get($id)
    {
       
        $project = $this->db->get_where('high_new', ['id' => $id ])->row();
        
        return $project;
    }
 
  public function get1()
    {
      $id12 = $this->session->userdata('username'); 
      $id1 = strtolower($id12);
        if($id1=='admin'){$id1='%';}
     //$users = $this->db->query("Select * from high_new where grp_user='$id1'");
      
         //  return $users->result();
      $this->db->select('*');
     $this->db->from('studentfi');
  //  $this->db->where("statustemp LIKE '1'");
     $this->db->where("temp LIKE '0'");
    $query=$this->db->get();
     $users = $query->result(); 
    return $users;
      
        
       // return $users;
    }

    public function getstud1()
    {
      $id12 = $this->session->userdata('username'); 
      $id1 = strtolower($id12);
        if($id1=='admin'){$id1='%';}

      $this->db->select('*');
     $this->db->from('student_master');
    $query=$this->db->get();
     $users = $query->result(); 
    return $users;
    
    }


    public function getstud($id)
    {
       
        $project = $this->db->get_where('student_master', ['id' => $id ])->row();
        
        return $project;
    }

    public function getscreenstud(){

        $query = "
        SELECT 
            sm.id, 
            sm.name, 
            sm.discipline, 
            sm.status,
            COALESCE(ss.remarks, '') AS remarks
        FROM student_master sm
        LEFT JOIN (
            SELECT 
                id, 
                status, 
                remarks
            FROM stud_status
            WHERE time = (
                SELECT MAX(time) 
                FROM stud_status AS ss2 
                WHERE ss2.id = stud_status.id
            )
        ) ss ON sm.id = ss.id
    ";
        $students = $this->db->query($query)->result();
        return $students;

    }
    
    public function screenstud(){
        $this->db->select('*');
        $this->db->from('student_master');
        $this->db->order_by("sdate", "ASC");
        $query = $this->db->get();
        $stud = $query->result();
        return $stud;
    }


    /*
        Update or Modify a record in the database
    */
    public function update($id) 
    {
        $data = [
                     'icno' => $this->input->post('icno'),
			'tit'=> $this->input->post('tit'),
			'uname' => $this->input->post('uname'),
                        'grp'=> $this->input->post('grp'),
			'sgrp'=> $this->input->post('sgrp'),
			'divs'=> $this->input->post('divs'),
                        'sec'=> $this->input->post('sec'),
			'email'=> $this->input->post('email'),
			'uid'=> $this->input->post('uid'),
                        'tyre'=>$this->input->post('tyre'),
			'ename'=> $this->input->post('ename'),
                        'po'=>$this->input->post('po'),
                        'edate'=> $this->input->post('edate'),
			'val'=> $this->input->post('val'),
			'capno'=> $this->input->post('capno'),
                       'tval'=>$this->input->post('tval'),
			'ework'=> $this->input->post('ework'),
			'eworkno'=> $this->input->post('eworkno'),
                         'amc'=> $this->input->post('amc1'),
                        'eloc'=> $this->input->post('eloc'),
			'inicno'=> $this->input->post('inicno'),
                        'inname'=> $this->input->post('inname'),
                         'icemail'=> $this->input->post('icemail'),
                        'icintercom'=> $this->input->post('icintercom'),
			'efea'=> $this->input->post('efea'),
                        'searchkey'=> $this->input->post('searchkey'),
			'resh'=> $this->input->post('resh'),
                      'man'=> $this->input->post('man'),
			'etime'=> $this->input->post('etime'),
			'comp'=> $this->input->post('comp'),
                     'compot'=>$this->input->post('compot'),
			'ndays'=> $this->input->post('ndays'),
			'nexp'=>$this->input->post('nexp'),
                        'nnexp'=>$this->input->post('nnexp'),
			'secuse'=>$this->input->post('secuse'),
			'secusey'=>$this->input->post('secusey'),
                       'secusen'=>$this->input->post('secusen'),
			'useage'=>$this->input->post('useage'),
			'testr'=>$this->input->post('testr'),
                        'testrn'=>$this->input->post('testrn'),
			'testa'=>$this->input->post('testa'),
			'testan'=>$this->input->post('testan'),
                        'log'=>$this->input->post('log'),
			'logn'=>$this->input->post('logn'),
			'rreplace'=>$this->input->post('rreplace'),
                        'replacey'=>$this->input->post('replacey'),
			'replacer'=>$this->input->post('replacer'),
			'aigcar'=>$this->input->post('aigcar'),
                        'aigcarr'=>$this->input->post('aigcarr'),
			'contri'=> $this->input->post('contri'),
			'sugg' => $this->input->post('sugg'),
                        'grp_user' => $this->input->post('grp_user'),
                         'statustemp'=> $this->input->post('statustemp')
        ];
 
        $result = $this->db->where('id',$id)->update('high_new',$data);
        return $result;
                 
    }
 
    public function update1($id) 
    {
           $data1 = [  'eqi_id' => $id,
        'user_ip' => $this->input->ip_address(),
        'user_name' => $this->session->userdata('username') 
           
          ];
         
         $this->db->insert('userlog', $data1);
         return true;
    }

    public function updatestud($id)
    {
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
                'user' => $this->session->userdata('username'),
                'ip' => $this->project->get_client_ip(),
                'status' => "Updated"
            );

            $student_name = $this->input->post('name');
            $config['upload_path'] = './student_uploads/';  // Path to upload the files
        $config['allowed_types'] = 'pdf|jpg|jpeg|png';   // Allowed file types
        $config['max_size'] = 2048;  // Maximum file size in KB

        $this->load->library('upload', $config);

        if (!empty($_FILES['uploadmark']['name'])) {
          $config['file_name'] = $student_name . '_mark_';
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
          $config['file_name'] = $student_name . '_hod_' ;
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
          $config['file_name'] = $student_name . '_sop_' ;
          $this->upload->initialize($config);
          
          if ($this->upload->do_upload('uploadsop')) {
              $file_data = $this->upload->data();
              $data['upload_sop'] = 'student_uploads/' . $file_data['file_name'];
          } else {
              $this->session->set_flashdata('error', $this->upload->display_errors());
              redirect(base_url('project/create'));
          }
      }

        $result = $this->db->where('id', $id)->update('student_master',$data);
        
        return $result;
    }
    
    /*
        Destroy or Remove a record in the database
    */
    public function delete($id)
    {
        $result = $this->db->delete('projects', array('id' => $id));
        return $result;
    }
     
    function getUsers($postData){
 
    $response = array();
  
    $this->db->select('*');

    if($postData['search'] ){
 
      // Select record
      $this->db->where("IC_No like '%".$postData['search']."%' ");
      
      $records = $this->db->get('employeemaster')->result();

      foreach($records as $row ){
        $response[] = array("value"=>$row->First_Name,"label"=>$row->IC_No);
      }
 
    }
    
    return $response;
  }
  
 
    
    
    public function get_colleges($query) {
    $this->db->like('cname', $query); // Adjust this based on your column name
    $query = $this->db->get('college master'); // Change 'colleges' to your table name

    return $query->result_array(); // Return results as an associative array
}
}
