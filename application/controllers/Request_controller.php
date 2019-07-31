<?php 

	class Request_controller extends CI_Controller{

		

		function __construct(){
			parent::__construct();
			$this->load->model('Request_model');
		}


		public function index(){

		}


		public function add_message($id){
			$array['id'] = $id;
			$this->load->view('header_view');
			$this->load->view('send_request_view',$array);
			$this->load->view('footer_view');
		}


		public function send_request(){

			$data = array(
				'message_to' => $this->input->post('username'),
				'message_from' => $this->session->userdata('username'),
				'message_body' => $this->input->post('message')
			);
			$result['insert'] = $this->Request_model->send_request_message($data);

			$this->load->view('header_view');
			$this->load->view('request_sent_view',$result);
			$this->load->view('footer_view');
		}

	}

?>