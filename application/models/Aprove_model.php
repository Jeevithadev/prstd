 <?php
class Aprove_model extends CI_Model{
 
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
        $icno =  $this->session->userdata('username');
         $query = $this->db->query("SELECT * FROM high_new where id in (SELECT eq_id from eq_status where aprovename = '$icno')");

        $projects =$query->result();
            return $projects;
    }
     public function get_all1()
    {
        $icno =  $this->session->userdata('username');
         $query = $this->db->query("SELECT * FROM high_new where id in (SELECT eq_id from eq_status where aprovename = '$icno'and estatus = 'Approved')");

     $projects =$query->result();
    return $projects;

       
          
    }
    
    
    public function get1()
    {
      $icno =  $this->session->userdata('username');
         $query = $this->db->query("SELECT * FROM high_new where id in (SELECT eq_id from eq_status where aprovename = '$icno' and estatus='Pending')");

       
     $users = $query->result(); 
    return $users;
      
        
       
    }
    
    public function get($id)
    {
       
        $project = $this->db->get_where('high_new', ['id' => $id ])->row();
        
        return $project;
    }
    
    
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
                        'grp_user' => $this->input->post('grp_user')
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
    
    public function aupdate1($id) 
    {
           $data1 = [  'eqi_id' => $id,
        'user_ip' => $this->input->ip_address(),
        'user_name' => $this->session->userdata('username') 
           
          ];
         
         $this->db->insert('userlog', $data1);
         return true;
    }
    
     public function aupdate($id) 
    {
     $data2 = 
        [
         
         'ip' => $this->input->ip_address(),
          'aprovename' => $this->session->userdata('username'),
         'estatus' => 'Approved'
         ];
         $result = $this->db->where('eq_id',$id)->update('eq_status',$data2);
       return $result;
    }
    }