<?php

	class Authentication_controller extends CI_Controller{
		
		function __construct(){
			parent::__construct();
			$this->load->database();
			$this->load->library('form_validation');
		}

		public function index(){
			
			$this->load->view('header_view');
			$this->load->view('signin_view');
			$this->load->view('footer_view');
		}



		public function signin(){
			
			$this->load->model('Profile_model');

			$this->form_validation->set_rules('email', 'Email', 'required'); 
			$this->form_validation->set_rules('pass_word', 'Password', 'required');

			if($this->form_validation->run() ==  FALSE) {
				$this->load->view('header_view');
		        $this->load->view('signin_view');
		        $this->load->view('footer_view');
			}else{
				
				$data = array(
				
					'email' => $this->input->post('email'),
					'pass_word' => $this->input->post('pass_word')

				);

				$return['signin'] = $this->Profile_model->get($data);
				
				if($return['signin'] === 'no email'){

					$error['error'] = 'Email not recognized';

					$this->load->view('header_view');
					$this->load->view('signin_view',$error);
					$this->load->view('footer_view');

				}elseif($return['signin'] === 'incorrect password'){
					$error['error'] = 'Email and password do not match';

					$this->load->view('header_view');
					$this->load->view('signin_view',$error);
					$this->load->view('footer_view');

				}else{
					$this->startSession($return);
				}

			}
		}

		public function startSession($return){
			
			$this->load->model('Request_model');



			foreach ($return['signin'] as $row) {
				$newdata = array(
        			'username'  => html_escape($row->username),
        			'email'     => html_escape($row->email),
        			'first_name' => html_escape($row->first_name),
        			'last_name' => html_escape($row->last_name),
        			'userID' => html_escape($row->userID),
        			'profileImageSrc' => html_escape($row->profileImageSrc),
        			'general_location' => html_escape($row->general_location),
        			'hobby' => html_escape($row->hobby),
        			'about_me' => html_escape($row->about_me),
       				'logged_in' => TRUE
				);

				$username = $row->username;
			}

			

			$requestArray = $this->Request_model->get_requests($username);

			$newdata['requests'] = $requestArray;

			$this->session->set_userdata($newdata);

			$this->load->view('header_view');
			$this->load->view('signin_success_view',$return);
			$this->load->view('footer_view');
		}


		public function sign_out(){
			$this->session->userdata = array();
			$this->session->sess_destroy();

			$this->load->view('header_view');
			$this->load->view('signout_view');
			$this->load->view('footer_view');
			
			
		}

		public function change_password(){
			$this->load->view('header_view');
			$this->load->view('change_password_view');
			$this->load->view('footer_view');
		}

		public function update_password(){

			$this->form_validation->set_rules('old_password', 'Old password', 'required');
			$this->form_validation->set_rules('new_password', 'New password', 'required');
			$this->form_validation->set_rules('confirm_password', 'Confirm new password', 'required|matches[new_password]');

			if($this->form_validation->run() == FALSE){
				$this->load->view('header_view');
				$this->load->view('change_password_view');
				$this->load->view('footer_view');
			}else{

				$oldPassword = $this->input->post('old_password');
				$newPassword = $this->input->post('new_password');
				$confirmPassword = $this->input->post('confirm_password');

				$data = array(
					'old_password' => $oldPassword,
					'new_password' => $newPassword

				);


				//$this->profile_model->

				$this->load->view('header_view');
				$this->load->view('password_updated_view');
				$this->load->view('footer_view');
			}
			
		}

		

		
	}

?>