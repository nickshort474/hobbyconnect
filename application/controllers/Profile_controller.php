<?php

	class Profile_controller extends CI_Controller{
		
		function __construct(){
			parent::__construct();
			$this->load->database();
			$this->load->library('form_validation');
			$this->load->model('Profile_model');
		}

		public function index(){
			

			$query = $this->db->get('hobby_list');
			$hobbiesArray['hobbies'] = $query->result();

			//save hobbies array to session for later use
			$this->session->set_userdata($hobbiesArray);

			$this->load->view('header_view');
			$this->load->view('create_profile_view',$hobbiesArray);
			$this->load->view('footer_view');
		}

		public function create(){
			
			
			$this->form_validation->set_rules('first_name', 'First Name', 'required'); 
			$this->form_validation->set_rules('last_name', 'Last Name', 'required');
			$this->form_validation->set_rules('username', 'Username',  'required|callback_username_check');
			$this->form_validation->set_rules('email', 'Email',  'required|callback_email_check');
			$this->form_validation->set_rules('pass_word', 'Password',  'required');
			$this->form_validation->set_rules('general_location', 'General Location',  'required');
			$this->form_validation->set_rules('hobby', 'Hobby',  'required');
			$this->form_validation->set_rules('about_me', 'About Me',  'required');

			if ($this->form_validation->run() == FALSE){
				$this->load->view('header_view');
		        $this->load->view('create_profile_view');
		        $this->load->view('footer_view');
            }
            else{
                $data = array(
					'first_name' => $this->input->post('first_name'),
					'last_name' => $this->input->post('last_name'),
					'username' => $this->input->post('username'),
					'email' => $this->input->post('email'),
					'pass_word' => $this->input->post('pass_word'),
					'general_location' => $this->input->post('general_location'),
					'hobby' => $this->input->post('hobby'),
					'about_me' => $this->input->post('about_me')

				);
				if($this->Profile_model->insert($data)){
				
					/* Save username and their location to the listed hobby table */
					$this->Profile_model->insertIntoHobby($this->input->post('username'), $this->input->post('general_location'),$this->input->post('hobby') );

					//"log" user in after profile created
					$data['logged_in'] = TRUE;
					
					//need to get users ID created on database insert for case of user updating profile straight away
					// done in Profile_model line 14..? needs testing			

					$this->session->set_userdata($data);


					$this->load->view('header_view');
					$this->load->view('thankyou_profile_view');
					$this->load->view('footer_view');
				}


            }
			
		}

		public function username_check($username){
			$this->db->where('username', $username);
			$query = $this->db->get('profile');
			if(empty($query->result())){
				return true;

			}else{

				$this->form_validation->set_message('username_check', 'Sorry username is already taken');
				return false;
			}
		}

		public function email_check($email){
			$this->db->where('email', $email);
			$query = $this->db->get('profile');
			if(empty($query->result())){
				return true;

			}else{

				$this->form_validation->set_message('email_check', 'Sorry this email is already in use');
				return false;
			}
		}

		public function show_profile(){

			$query = $this->db->get('hobby_list');
			$hobbiesArray['hobbies'] = $query->result();
			
			//save hobbies array to session for later use
			$this->session->set_userdata($hobbiesArray);
			
			$this->load->view('header_view');
			$this->load->view('profile_view',$hobbiesArray);
			$this->load->view('footer_view');
		}


		public function update_profile(){

			//load  model
			$this->load->model('Hobby_model');

			$this->form_validation->set_rules('first_name', 'First Name', 'required'); 
			$this->form_validation->set_rules('last_name', 'Last Name', 'required');
			$this->form_validation->set_rules('username', 'Username',  'required');
			$this->form_validation->set_rules('email', 'Email',  'required');
			$this->form_validation->set_rules('general_location', 'General Location',  'required');
			$this->form_validation->set_rules('hobby', 'Hobby',  'required');
			$this->form_validation->set_rules('about_me', 'About Me',  'required');

			if ($this->form_validation->run() == FALSE){
				$this->load->view('header_view');
		        $this->load->view('profile_view');
		        $this->load->view('footer_view');
            }else{
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


	}

?>