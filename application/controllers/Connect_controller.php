<?php 

	class Connect_controller extends CI_Controller{

		

		function __construct(){
			parent::__construct();
			$this->load->database();

			//load connect model
			$this->load->model('Connect_model');
		}

		public function index(){

			//create query to get hobby list
			$query = $this->db->get('hobby_list');

			//assign result to array
			$result['hobbies'] = $query->result();

			//load view with result
			$this->load->view('header_view');
			$this->load->view('hobby_list_view',$result);
			$this->load->view('footer_view');
		}

		public function get_locations(){
			
			//get selected hobby from drop down
			$hobby = $this->input->post('Hobby');

			//if coming back from next page $hobby will be empty so
			if(isset($hobby) == FALSE){

				//get $hobby from session
				$hobby = $this->session->userdata('current_hobby');

			}else{

				//save $hobby to session
				$this->session->set_userdata('current_hobby', $hobby);
			};

			
			//create query using $hobby
			$query = $this->db->get($hobby);

			//set result to array
			$result['locations'] = $query->result();

			//load view with result
			$this->load->view('header_view');
			$this->load->view('locations_view',$result);
			$this->load->view('footer_view');
		}



		public function show_people(){
			
			//get location from drop-down
			$location = $this->input->post('Locations');

			if(isset($location) == FALSE){

				//get $location from session
				$location = $this->session->userdata('current_location');

			}else{

				//save location to current_location  in session
				$this->session->set_userdata('current_location', $location);
			};

			
	
			//assign result of get_ids function to result array
			$result['profile_list'] = $this->Connect_model->get_ids($location);

			//load views
			$this->load->view('header_view');
			$this->load->view('people_view',$result);
			$this->load->view('footer_view');
		}



		public function show_user($id){

			
			
			$result['profileData'] = $this->Connect_model->get_individual_profile($id);

			$this->load->view('header_view');
			$this->load->view('user_profile_view',$result);
			$this->load->view('footer_view');
		}

		public function send_request(){

		}

	}

?>