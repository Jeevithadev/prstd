<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
  public function __construct(){
    parent::__construct();

    // Load Model
    $this->load->model('User_model');

    // Load base_url
    $this->load->helper('url');
  }
  public function index(){
   

    $this->load->view('Project/create');
  }

  public function userDetails(){
    // POST data
    $postData = $this->input->post();

    // get data
    $data = $this->User_model->getUserDetails($postData);

    echo json_encode($data);
  }

    public function getusername1(){
    // POST data
    $postData = $this->input->post();

    // get data
    $data = $this->User_model->getUsername($postData);

    echo json_encode($data);
  }
  public function userid(){
    // POST data
    $postData = $this->input->post();

    // get data
    $data = $this->User_model->getUserid($postData);

    echo json_encode($data);
  }
  
}
