<?php 
   class Email_controller extends CI_Controller { 
 
      function __construct() { 
         parent::__construct(); 
         $this->load->library('session'); 
         $this->load->helper('form'); 
         $this->load->library('email');
$config = array();
$config['protocol'] = 'smtp';
$config['smtp_host'] = '10.1.1.2';
$config['smtp_user'] = 'shure@igcar.gov.in';
$config['smtp_pass'] = 'Phrmd@2020';
$config['smtp_port'] = 25;
$this->email->initialize($config);
$this->email->set_newline("\r\n");
      } 
		
     
      public function senmail($data1) { 
          
          
         $from_email = "shure@igcar.gov.in"; 
        //$to_email = $this->input->post('email'); 
         $to_email = "kanagam@igcar.gov.in";
         $id = $data1['id'];
         //Load email library 
         $this->load->library('email'); 
   
         $this->email->from($from_email, 'High Value Audit Committe'); 
         $this->email->to($to_email);
         $this->email->subject('Approval for High Value Equipment / Systems'); 
         $this->email->message(' $id .Testing the email class.'); 
   
         //Send mail 
         if($this->email->send()) 
         $this->session->set_flashdata("email_sent","Email sent successfully."); 
         else 
         $this->session->set_flashdata("email_sent","Error in sending Email."); 
        // $this->load->view('email_form'); 
      } 
   } 
