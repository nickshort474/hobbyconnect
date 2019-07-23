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
			
			$this->db->where('email',$data['email']);
			$this->db->where('password',$data['password']);

			$query = $this->db->get('profile');
			$result = $query->result();
			
			if($result){
				return true;
			}else{
				return false;
			}
			
		}

	}
?>