<?php

	class Connect_model extends CI_Model{

		function __construct(){
			parent::__construct();
			$this->load->database();
		}

		function get_ids($location){
			$this->db->where('location', $location);
			$query = $this->db->get($this->session->userdata('current_hobby'));

			return $this->get_profile($query->result());
		}

		function get_profile($ids){

			$profileArray = [];

			foreach ($ids as $id) {
				$this->db->where('userID', $id->userID);
				$query = $this->db->get('profile');
				array_push($profileArray, $query->result());
			}
			
			return $profileArray;
		}

	}

?>