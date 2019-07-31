<?php

	class Authentication_controller extends CI_Controller{
		
		function __construct(){
			parent::__construct();
			$this->load->database();

		}

		public function index(){
			
			$this->load->view('header_view');
			$this->load->view('signin_view');
			$this->load->view('footer_view');
		}



		public function signin(){
			
			$this->load->model('Profile_model');

			$data = array(
				
				'email' => $this->input->post('email'),
				'password' => $this->input->post('password')

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

		public function startSession($return){
			
			$this->load->model('Request_model');



			foreach ($return['signin'] as $row) {
				$newdata = array(
        			'username'  => $row->username,
        			'email'     => $row->email,
        			'first_name' => $row->first_name,
        			'last_name' => $row->last_name,
        			'userID' => $row->userID,
        			'profileImageSrc' => $row->profileImageSrc,
        			'general_location' => $row->general_location,
        			'hobby' => $row->hobby,
        			'about_me' => $row->about_me,
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

		

		

		
	}

?>