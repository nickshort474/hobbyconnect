<?php

	class Profile_model extends CI_Model{

		function __construct(){
			parent::__construct();
			$this->load->database();
		}

		public function insert($data){
			if($this->db->insert('profile',$data)){
				
				//get id of newly created entry 
				$data['userID'] = $this->db->insert_id();

				//save to session
				$this->session->set_userdata($data);
				return true;
			}
		}


		public function get($data){
			
			
			$this->db->where('email', $data['email']);
			$query = $this->db->get('profile');
			$result = $query->result();
			
			

			if($result){

				foreach($result as $item){
					$hash = $item->pass_word;
				}

				if(password_verify($data['pass_word'], $hash)){
					return $result;
				}else{
					return 'incorrect password';
				}
			
			}else{
				return 'no email';
			}

		}


		public function insertIntoHobby($username,$location,$hobby){

			$this->db->where('username', $username);
			$query = $this->db->get('profile');
			$result = $query->result();
			
			foreach($result as $row){
				$userID = $row->userID;
			}

			$data = array(
				'userID' => $userID,
				'location' => $location
			);

			$this->db->insert($hobby,$data);

		}


		public function insertImage($imageSrc){

			$data = array(

				"profileImageSrc" =>  $imageSrc
			);

			
			$this->db->where('userID', $this->session->userdata('userID'));
			$this->db->update('profile',$data);
		}



		public function update($data){

			$this->db->where('userID', $this->session->userdata('userID'));

			if($this->db->update('profile',$data)){
				
				return true;
			}
		}

	}
?>