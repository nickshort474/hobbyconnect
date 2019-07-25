<?php

	class Authentication_controller extends CI_Controller{
		
		function __construct(){
			parent::__construct();
			$this->load->database();
			$this->load->library('session');
			$this->load->helper('url');
			$this->load->helper('form');
			
		}

		public function index(){
			
			$this->load->view('header_view');
			$this->load->view('signin_view');
			$this->load->view('footer_view');
		}



		public function signin(){
			$this->output->delete_cache();
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
			
			
			
			foreach ($return['signin'] as $row) {
				$newdata = array(
        			'username'  => $row->username,
        			'email'     => $row->email,
        			'first_name' => $row->first_name,
        			'last_name' => $row->last_name,
       				'logged_in' => TRUE
				);
			}

			

			$this->session->set_userdata($newdata);

			$this->load->view('header_view');
			$this->load->view('signin_success_view',$return);
			$this->load->view('footer_view');
		}


		public function sign_out(){
			$this->session->sess_destroy();

			$this->load->view('header_view');
			$this->load->view('signout_view');
			$this->load->view('footer_view');
		}

		

		

		
	}

?>