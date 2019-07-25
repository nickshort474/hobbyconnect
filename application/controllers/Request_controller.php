<?php 

	class Request_controller extends CI_Controller{

		

		function __construct(){
			parent::__construct();
			
		}

		public function index(){

			$this->load->view('header_view');
			$this->load->view('send_request_view');
			$this->load->view('footer_view');
		}

		
		public function send_request(){
			$this->load->view('header_view');
			$this->load->view('request_sent_view');
			$this->load->view('footer_view');
		}

	}

?>