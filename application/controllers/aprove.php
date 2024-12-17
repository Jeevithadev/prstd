<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class aprove extends CI_Controller {
 
   public function __construct() {
      parent::__construct(); 
      $this->load->library('form_validation');
      $this->load->library('session');
      $this->load->model('Aprove_model', 'project');
      $this->load->helper('url');
       $this->load->model('Datamodel');
 
   }
 
   /*
      Display all records in page
   */
  public function index()
  {
      
    $data['projects'] = $this->project->get_all();
    $data['title'] = "Equipement Details";
    $this->load->view('layout/aheader');       
   $this->load->view('aproject/index',$data);
    $this->load->view('layout/footer');
  }
   public function index1()
  {
      
    $data['projects'] = $this->project->get_all1();
    $data['title'] = "Equipement Details";
    $this->load->view('layout/aheader');       
   $this->load->view('aproject/index1',$data);
    $this->load->view('layout/footer');
  }
     public function show()
  {
      // $name = $this->session->all_userdata();
       // = $name['username'];
    //$id = $this->uri->segement('4'); 
    $data['users'] = $this->project->get1();
    $data['title'] = "Show Pending Details";
    $this->load->view('layout/aheader');
    $this->load->view('aproject/show', $data);
    $this->load->view('layout/footer'); 
  }
  
   public function edit($id)
  {
    $data['project'] = $this->project->get($id);
    $data['title'] = "Edit Project";
    $this->load->view('layout/aheader');
    $this->load->view('aproject/edit', $data);
    $this->load->view('layout/footer');     
  }
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
        redirect(base_url('aproject/edit/' . $id));
    }
    else
    {
       $this->project->update($id);
       $this->project->update1($id);
       
       $this->session->set_flashdata('success', "Updated Successfully!");
       redirect(base_url('aprove/show'));
    }
 
  }
 
  public function aupdate($id)
  {
     $this->project->aupdate($id);
       $this->project->aupdate1($id);
       $this->session->set_flashdata('success', "Updated Successfully!");
       redirect(base_url('aprove/')); 
  }
  
  public function eqaprove($id)
  {
    $data['project'] = $this->project->get($id);
    $data['title'] = "Edit Project";
    $this->load->view('layout/aheader');
    $this->load->view('aproject/eqaprove', $data);
    $this->load->view('layout/footer');     
  }
  public function search(){
      
     $data['title'] = "Equipement Details";
    $this->load->view('layout/aheader');       
    $this->load->view('aproject/eqi_view');
     $this->load->view('layout/footer');
      
  } 
  
}
  