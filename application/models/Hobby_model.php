<?php

	class Hobby_model extends CI_Model{

		function __construct(){
			parent::__construct();
			$this->load->database();
		}

		public function update($oldHobby){
			

			//get data from session
			$data = array(
				'userID' => $this->session->userdata('userID'),
				'location' => $this->session->userdata('general_location')
			);

			//remove reference to this user from old hobby
			$this->db->where('userID', $this->session->userdata('userID'));
			$this->db->delete($oldHobby);

			//add this user to new hobby listing

			if($this->db->insert($this->session->userdata('hobby'), $data)){
				return true;
			}
					
			
				
			


		}


	}
?>