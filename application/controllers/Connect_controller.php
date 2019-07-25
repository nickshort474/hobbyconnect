<?php 

	class Connect_controller extends CI_Controller{

		

		function __construct(){
			parent::__construct();
			$this->load->helper('url');
			$this->load->library('session');
			$this->load->helper('form');
			$this->load->database();

			//$this->output->cache(20);
			
		}

		public function index(){

			$query = $this->db->get('hobby_list');
			$result['hobbies'] = $query->result();

			$this->load->view('header_view');
			$this->load->view('connect_view',$result);
			$this->load->view('footer_view');
		}

		public function get_locations(){
			$hobby = $this->input->post('Hobby');

			

			if(isset($hobby) == FALSE){
				$hobby = $this->session->userdata('current_hobby');

			}else{
				$this->session->set_userdata('current_hobby', $hobby);
			};

			

			$query = $this->db->get($hobby);
			$result['locations'] = $query->result();

			$this->load->view('header_view');
			$this->load->view('connects_view',$result);
			$this->load->view('footer_view');
		}

		public function show_people(){
			$location = $this->input->post('Locations');

			$this->session->set_userdata('current_location', $location);

			$this->db->where('location', $location);
			$query = $this->db->get($this->session->userdata('current_hobby'));

			$result['people'] = $query->result();

			$this->load->view('header_view');
			$this->load->view('people_view',$result);
			$this->load->view('footer_view');
		}

		public function Show_user(){
			$this->load->view('header_view');
			$this->load->view('user_profile_view');
			$this->load->view('footer_view');
		}

	}

?>