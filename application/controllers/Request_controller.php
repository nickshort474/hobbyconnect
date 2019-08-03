<?php 

	class Request_controller extends CI_Controller{

		

		function __construct(){
			parent::__construct();
			$this->load->model('Request_model');
		}


		public function index(){

			//save ref to current page to session for back button as next page has multiple entry points
			$data = array(
				"current_page" => "index.php/messages"
			);

			
			$this->session->set_userdata($data);


			$this->load->view('header_view');
			$this->load->view('message_view');
			$this->load->view('footer_view');
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

		public function reply($from){

			$data['from'] = array(
				"from" => $from
			);

			$this->load->view('header_view');
			$this->load->view('reply_view',$data);
			$this->load->view('footer_view');
		}

		public function send_reply(){

			$data = array(
				'message_to' => $this->input->post('username'),
				'message_from' => $this->session->userdata('username'),
				'message_body' => $this->input->post('message')

			);

			$result['insert'] = $this->Request_model->send_request_message($data);

			$this->get_requests();

			$this->load->view('header_view');
			$this->load->view('reply_sent_view');
			$this->load->view('footer_view');
		}

		public function delete_message($id){

			$this->Request_model->delete_message($id);
		
			/*$requestArray =  $this->Request_model->get_requests($this->session->userdata('username'));

			$newdata['requests'] = $requestArray;

			$this->session->set_userdata($newdata);*/

			$this->get_requests();

			$this->load->view('header_view');
			$this->load->view('message_view');
			$this->load->view('footer_view');
		}

		function get_requests(){
			$requestArray =  $this->Request_model->get_requests($this->session->userdata('username'));

			$newdata['requests'] = $requestArray;

			$this->session->set_userdata($newdata);
		}


	}

?>