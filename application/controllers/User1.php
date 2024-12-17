<?php 
	class User1 extends CI_Controller{

			public function __construct(){
				parent::__construct();
				$this->load->helper('url');
				$this->load->library('form_validation');
				$this->load->model('User_model1');
				$this->load->database();
				$this->load->library('session');
			}
			
			
			
			

			
			public function home(){
                            
                                 $this->load->view('layout/header');
                                 $this->load->view('change_password_form');   
                                 $this->load->view('layout/footer');
				
			}

			public function logout(){
				
			
				$this->session->unset_userdata('id');
				redirect('user/login');
			}

			public function change_password(){
				if($this->session->has_userdata('username')){
                                       
                                         $this->load->view('layout/header');
					$this->load->view('change_password_form');
                                         $this->load->view('layout/footer');
				}else{
					redirect('user/login');
				}
			}

			public function update_password(){
				$this->form_validation->set_rules('old_password','Old Password','required');
				$this->form_validation->set_rules('new_password','New Password','required');
				$this->form_validation->set_rules('confirm_password','Confirm Password','required|matches[new_password]');

				if($this->form_validation->run()==FALSE){
                                        
					$this->load->view('layout/header');
					$this->load->view('change_password_form');
                                         $this->load->view('layout/footer');
				}else{
					$old_password = $this->input->post('old_password');
					$new_password = $this->input->post('new_password');
				

					if(strcmp($old_password, $new_password)== 0){
                                                  $data = "New password should be a different password"; 
                                                 $this->load->view('layout/header');
                                                 $this->load->view('change_password_form', $data);
                                                 $this->load->view('layout/footer');
					}else{

						$id = $this->session->userdata('username');
						if($this->User_model1->oldPasswordMatches($id,$old_password)){
							$this->User_model1->changeUserPassword($id,$new_password);
                                                        $data['message'] = 'Saved Successfully!';
							 //$this->session->set_flashdata('success', "Saved Successfully!");
                                                             $this->load->view('layout/header');
                                                            $this->load->view('change_password_form', $data);
                                                             $this->load->view('layout/footer');
                                                        
                                                       
						}else{
                                                             $data['message'] = 'Your old Password is wrong!';
                                                             $this->load->view('layout/header');
                                                            $this->load->view('change_password_form', $data);
                                                             $this->load->view('layout/footer');
                                                       
                                                         
							
						}
						
					}

					
					
				}
			}
	}


?>
