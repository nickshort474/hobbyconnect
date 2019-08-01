<?php

	class Request_model extends CI_Model{

		function __construct(){
			parent::__construct();
			$this->load->database();
		}


		public function send_request_message($data){
			
			
			if($this->db->insert('requests', $data)){
				return true;
			}
			

		}


		public function get_requests($username){
			
			$this->db->where('message_to', $username);
			$query = $this->db->get('requests');
			if($query){
				return $query->result();
			}else{
				return 'no data';
			}
			
		}

		public function delete_requests(){

		}


	}

?>