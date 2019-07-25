<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome_controller extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		
	}

	public function index(){
		

		$this->load->view('header_view');
		$this->load->view('welcome_view');
		$this->load->view('footer_view');
	}
}
