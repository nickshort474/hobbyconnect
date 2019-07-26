<?php

	class Image_controller extends CI_Controller{

		function __construct(){
			parent::__construct();
			
		}

		function index(){
			$this->load->view('header_view');
			$this->load->view('image_upload_view');
			$this->load->view('footer_view');
		}

		function upload(){
			
			$userFile = $this->input->post('profileImage');

			$config['upload_path'] = './uploads';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = 1000;
			$config['max_width'] = 2000;
			$config['max_height'] = 1000;
			$this->load->library('upload', $config);

			if(! $this->upload->do_upload('profileImage')){
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('header_view');
				$this->load->view('image_upload_view', $error);
				$this->load->view('footer_view');
			}else{

				$data = array('upload_data' => $this->upload->data());
				$this->load->view('header_view');
				$this->load->view('upload_success_view', $data);
				$this->load->view('footer_view');

				$this->uploadImageRef($data);
			}
		}

		function uploadImageRef($data){

			forEach($data['upload_data'] as $item => $val){
				
				if($item == 'file_name'){
					$imageSrc = $val;
				}
				
			} 

			$this->load->model('Profile_model');
			$this->Profile_model->insertImage($imageSrc);
			$this->session->set_userdata('profileImageSrc', $imageSrc);
		}

	}

?>