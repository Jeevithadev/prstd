<?php  
  
class Login_model extends CI_Model {  
    
     function getUsernames(){

    $this->db->select('username');
    $records = $this->db->get('user_login');
    $users = $records->result_array();
    return $users;
  }
  
  function getrole(){

    $this->db->select('role');
     $this->db->where('username', $this->input->post('username'));  
    $query = $this->db->get('user_login');
    foreach ($query->result() as $row) {
   $role =  $row->role;
   }
    return $role;
  }
  
    public function log_in_correctly() {  
        
        $this->db->where('username', $this->input->post('username'));  
        $this->db->where('password', ($this->input->post('password')));  
        $query = $this->db->get('user_login');  
  
        if ($query->num_rows() == 1)  
        {  
            return true;  
        } else 
        {  
            return false;  
        }  
  
    }  
  
  function saverecords($data)
	{
        $this->db->insert('high_new',$data);
        return true;
	}
        
        
        //testing for for each in controller
          public function approve1()
    {
         
         
         
         
         //  $divs = $this->input->post('divs');
        // $query = $this->db->query("SELECT * FROM employeemaster where IC_No in (SELECT Division_Head_Name from "
           //      . "divisiondtlforjrfsrf where Division_Short_Name = '$divs')");
           $query = $this->db->query("SELECT * FROM employeemaster where IC_No = '10567'");
          return $query->row();
    }
       
	    
}  
  