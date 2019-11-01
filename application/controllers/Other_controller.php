<?php

	class Other_controller extends CI_Controller{

		function __construct(){
			parent::__construct();
		}

		public function index(){
			$this->load->view('header_view');
			$this->load->view('other_info_view');
			$this->load->view('footer_view');
		}

		public function report(){
			$this->load->view('header_view');
			$this->load->view('report_view');
			$this->load->view('footer_view');
		}

		public function contact(){
			$this->load->view('header_view');
			$this->load->view('contact_view');
			$this->load->view('footer_view');
		}

		public function send_contact(){

			
			


			$this->load->view('header_view');
			$this->load->view('contact_sent_view');
			$this->load->view('footer_view');
		}

	}

?>