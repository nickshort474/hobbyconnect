<?php

	class FourOhFour_controller extends CI_Controller{

		function __construct(){
			parent::__construct();
		}

		public function index(){
			$this->load->view('header_view');
			$this->load->view('404_view');
			$this->load->view('footer_view');
		}

	}

?>