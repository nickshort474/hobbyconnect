<?php 

	class Add_controller extends CI_Controller{

		function __construct(){
			parent::__construct();
			$this->load->database();
			$this->load->dbforge();
		}

		public function index(){
			$this->load->view('header_view');
			$this->load->view('add_hobby_view');
			$this->load->view('footer_view');
		}

		public function add(){
			

			$data = array(
				'hobby_name' => $this->input->post('hobby'),
				'hobby_table_name' => $this->input->post('hobby_table')
			);

			$this->db->insert('hobby_list', $data);

			$fields = array(
		        'userID' => array(
		                'type' => 'VARCHAR',
		                'constraint' => '255'
		                               
		        ),
		        'location' => array(
		                'type' => 'VARCHAR',
		                'constraint' => '255'
		        )
			);
			$this->dbforge->add_field($fields);
			$this->dbforge->create_table($this->input->post('hobby_table'));


			$this->load->view('header_view');
			$this->load->view('add_hobby_view');
			$this->load->view('footer_view');
		}
			

	}

?>