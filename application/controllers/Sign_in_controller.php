<?php

	class Sign_in_controller extends CI_Controller{
		
		function __construct(){
			parent::__construct();
			$this->load->database();
			$this->load->helper('url');
		}

		public function index(){
			$this->load->helper('form');
			$this->load->view('header');
			$this->load->view('sign_in');
			$this->load->view('footer');
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

				$this->load->helper('form');
				$this->load->view('header');
				$this->load->view('sign_in',$error);
				$this->load->view('footer');

			}elseif($return['signin'] === 'incorrect password'){
				$error['error'] = 'Email and password do not match';

				$this->load->helper('form');
				$this->load->view('header');
				$this->load->view('sign_in',$error);
				$this->load->view('footer');

			}else{
				$this->startSession($return);
			}

		}

		public function startSession($return){
			$this->load->library('session');
			
			foreach ($return['signin'] as $row) {
				$newdata = array(
        			'user_name'  => $row->username,
        			'email'     => $row->email,
       				'logged_in' => TRUE
				);
			}

			

			$this->session->set_userdata($newdata);
			$this->load->view('header');
			$this->load->view('success',$return);
			$this->load->view('footer');
		}

		
	}

?>