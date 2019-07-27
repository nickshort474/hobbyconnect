<?php

	class Profile_model extends CI_Model{

		function __construct(){
			parent::__construct();
			$this->load->database();
		}

		public function insert($data){
			if($this->db->insert('profile',$data)){
				return true;
			}
		}

		public function get($data){
			
			
			$this->db->where('email', $data['email']);
			$query = $this->db->get('profile');
			$result = $query->result();
			


			if($result){

				$this->db->where('email', $data['email']);
				$this->db->where('password', $data['password']);
				$query2 = $this->db->get('profile');
				$result2 = $query2->result();
				
				if($result2){
					return $result2;
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