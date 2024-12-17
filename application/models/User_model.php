<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {
  function getUsernames(){

    $this->db->select('IC_No');
    $records = $this->db->get('employeemaster');
    $users = $records->result_array();
    return $users;
  }
  function getUserDetails($postData=array()){
 
    $response = array();
 
    if(isset($postData['icno']) ){
 
      // Select record
	  $this->db->select('*');
            $this->db->from('employeemaster');
            $this->db->join('postingorder', 'postingorder.IC_No = employeemaster.IC_No');
            $this->db->like('employeemaster.IC_No', $postData['icno'],'both');
             $this->db->like('postingorder.IC_No', $postData['icno'],'both');
              $records = $this->db->get();
            $response = $records->result_array(); 	  
	 
		
    }
 
    return $response;
  }
  
  
    function getUsername($postData=array()){
 
    $response = array();
 
    if(isset($postData['inicno']) ){
 
      // Select record
	  $this->db->select('*');
            $this->db->from('employeemaster');
            $this->db->join('postingorder', 'postingorder.IC_No = employeemaster.IC_No');
            $this->db->like('employeemaster.IC_No', $postData['inicno']);
             $this->db->like('postingorder.IC_No', $postData['inicno']);
              $records = $this->db->get();
            $response = $records->result_array(); 	  
	 
		
    }
 
    return $response;
  }
  
  
   function getUserid($postData=array()){
 
    $response = array();
 
    if(isset($postData['uid']) ){
 
      // Select record
	  $this->db->select('*');
            $this->db->from('high_new');
             $this->db->where('uid', $postData['uid']);
             $records = $this->db->get();
            $response = $records->result_array(); 	  
	 
		
    }
 
    return $response;
  }


}