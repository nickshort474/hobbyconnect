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
			$query = $this->db->get('profile');
			$result = $query->result();
			


			if($result){
				$this->db->where('email',$data['email']);
				$this->db->where('password',$data['password']);
				$query2 = $this->db->get('profile');
				$result2 = $query2->result();
				
				if($result2){
					return $result;
				}else{
					return 'incorrect password';
				}

			}else{
				return 'no email';
			}


			
		}

	}
?>