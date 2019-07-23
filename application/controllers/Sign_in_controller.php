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
			
			if($this->Profile_model->get($data)){
				$this->load->view('header');
				$this->load->view('success');
				$this->load->view('footer');
			}else{

				$error['error'] = 'Email and password do match an entry in our database';

				$this->load->helper('form');
				$this->load->view('header');
				$this->load->view('sign_in',$error);
				$this->load->view('footer');
			}

			

			
		}

		
	}

?>