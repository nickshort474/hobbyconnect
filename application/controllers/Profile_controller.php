<?php

	class Profile_controller extends CI_Controller{
		
		function __construct(){
			parent::__construct();
			$this->load->database();
		}

		public function index(){
			
			$this->load->view('header_view');
			$this->load->view('create_profile_view');
			$this->load->view('footer_view');
		}

		public function create(){
			
			$this->load->model('Profile_model');

			$data = array(
				'first_name' => $this->input->post('first_name'),
				'last_name' => $this->input->post('last_name'),
				'username' => $this->input->post('username'),
				'email' => $this->input->post('email'),
				'password' => $this->input->post('password')

			);

			if($this->Profile_model->insert($data)){
				$this->load->view('header_view');
				$this->load->view('thankyou_profile_view');
				$this->load->view('footer_view');
			}


			
		}

		public function show_profile(){

			$this->load->view('header_view');
			$this->load->view('profile_view');
			$this->load->view('footer_view');
		}

		public function update_profile(){

		}


	}

?>