<?php 

	class Connect_controller extends CI_Controller{

		

		function __construct(){
			parent::__construct();
			$this->load->database();
			$this->load->model('Connect_model');
		}

		public function index(){

			$query = $this->db->get('hobby_list');
			$result['hobbies'] = $query->result();

			$this->load->view('header_view');
			$this->load->view('hobby_list_view',$result);
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
			$this->load->view('locations_view',$result);
			$this->load->view('footer_view');
		}



		public function show_people(){
			$location = $this->input->post('Locations');

			$this->session->set_userdata('current_location', $location);

			

			$result['profile_list'] = $this->Connect_model->get_ids($location);

			/*foreach($ids as $id){
				array_push($profileArray, $id );
				array_push($profileArray, $this->Connect_model->get_profile($id->userID));
			}*/


			/*$this->db->where('location', $location);
			$query = $this->db->get($this->session->userdata('current_hobby'));

			$result['people'] = $query->result();*/

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