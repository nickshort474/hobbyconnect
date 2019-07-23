<?php

	class Create_profile_controller extends CI_Controller{
		
		function __construct(){
			parent::__construct();
			$this->load->database();
			$this->load->helper('url');
		}

		public function index(){
			$this->load->helper('form');
			$this->load->view('header');
			$this->load->view('create_profile');
			$this->load->view('footer');
		}

		public function create(){
			
			$this->load->model('Profile_model');

			$data = array(
				'first_name' => $this->input->post('first_name'),
				'last_name' => $this->input->post('last_name'),
				'username' => $this->input->post('user_name'),
				'email' => $this->input->post('email'),
				'password' => $this->input->post('password')

			);

			if($this->Profile_model->insert($data)){
				$this->load->view('header');
				$this->load->view('thankyou_profile');
				$this->load->view('footer');
			}


			
		}
	}

?>