<?php

	class Profile_controller extends CI_Controller{
		
		function __construct(){
			parent::__construct();
			$this->load->database();
		}

		public function index(){
			

			$query = $this->db->get('hobby_list');
			$hobbiesArray['hobbies'] = $query->result();

			$this->load->view('header_view');
			$this->load->view('create_profile_view',$hobbiesArray);
			$this->load->view('footer_view');
		}

		public function create(){
			
			$this->load->model('Profile_model');

			$data = array(
				'first_name' => $this->input->post('first_name'),
				'last_name' => $this->input->post('last_name'),
				'username' => $this->input->post('username'),
				'email' => $this->input->post('email'),
				'password' => $this->input->post('password'),
				'general_location' => $this->input->post('general_location'),
				'hobby' => $this->input->post('hobby'),
				'about_me' => $this->input->post('about_me')

			);

			if($this->Profile_model->insert($data)){
				
				/* Save userID and their location to the listed hobby table */
				$this->Profile_model->insertIntoHobby($this->input->post('username'), $this->input->post('general_location'),$this->input->post('hobby') );

				$data['logged_in'] = TRUE;
				$this->session->set_userdata($data);


				$this->load->view('header_view');
				$this->load->view('thankyou_profile_view');
				$this->load->view('footer_view');
			}


			
		}

		public function show_profile(){

			$query = $this->db->get('hobby_list');
			$hobbiesArray['hobbies'] = $query->result();

			/*$this->session->set_userdata($hobbieArray);*/

			$this->load->view('header_view');
			$this->load->view('profile_view',$hobbiesArray);
			$this->load->view('footer_view');
		}


		public function update_profile(){

			//load profile model
			$this->load->model('Profile_model');
			$this->load->model('Hobby_model');

			//create profile data array
			$data = array(
				'first_name' => $this->input->post('first_name'),
				'last_name' => $this->input->post('last_name'),
				'username' => $this->input->post('username'),
				'email' => $this->input->post('email'),
				'general_location' => $this->input->post('general_location'),
				'hobby' => $this->input->post('hobby'),
				'about_me' => $this->input->post('about_me')
			);

			//get old hobby from session for testing and removing from database
			$oldHobby = $this->session->userdata('hobby');

			//save new data to session for viewing of profile and database uploads
			$this->session->set_userdata($data);

			if($this->Profile_model->update($data)){
				
				//test if hobby has been changed
				if($oldHobby !== $this->input->post('hobby')){
				
					if($this->Hobby_model->update($oldHobby)){
						//load view
						$this->load->view('header_view');
						$this->load->view('thankyou_updating_profile_view');
						$this->load->view('footer_view');
				
					}
				
				}else{
					//load view
					$this->load->view('header_view');
					$this->load->view('thankyou_updating_profile_view');
					$this->load->view('footer_view');
				}
				
			}


			
		}


	}

?>