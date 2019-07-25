<?php 

	class Add_controller extends CI_Controller{

		function __construct(){
			parent::__construct();
			$this->load->database();
		}

		public function index(){
			$this->load->view('header_view');
			$this->load->view('add_hobby_view');
			$this->load->view('footer_view');
		}

		public function add(){
			

			$data = array(
				'name' => $this->input->post('hobby')
			);

			$this->db->insert('hobby_list', $data);
			$this->load->view('header_view');
			$this->load->view('add_hobby_view');
			$this->load->view('footer_view');
		}
			

	}

?>