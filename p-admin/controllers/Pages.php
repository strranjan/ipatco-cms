<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('Pages_model');
	}
		
	public function create(){
		$this->form_validation->set_rules('title', 'Title', 'required|min_length[1]|max_length[100]');
		$this->form_validation->set_rules('description', 'Description', 'required|min_length[10]');
		
		if ($this->form_validation->run() === FALSE){
			$data['title'] = "Add Page";
			$data['page'] = "pages/create";
			admin($data);
		} else {
			if($_FILES['userfile']['name']){
				$image = $this->Basic_model->uploadImage();
			}else{
				$image = "default.png";
			}
			$insert = $this->Pages_model->insert($image);
			if($insert){
				redirect(MyAdmin.'pages/list');
			}else{
				$data['title'] = "Add Page";
				$data['page'] = "pages/create";
				admin($data);
			}
		}
	}
	
	public function update($id){
		$data['pages'] = $this->Pages_model->listing($id);
		$this->form_validation->set_rules('title', 'Title', 'required|min_length[10]|max_length[100]');
		$this->form_validation->set_rules('slug', 'Slug', 'required');
		$this->form_validation->set_rules('description', 'Description', 'required|min_length[10]');
		
		if ($this->form_validation->run() === FALSE){
			$data['title'] = "Edit Page";
			$data['page'] = "pages/update";
			admin($data);
		} else {
			if($_FILES['userfile']['name']){
				$image = $this->Basic_model->uploadImage();
				$old = $this->input->post('oldPicture');
				unlink(MyUploads.$old);
			}else{
				$image = $this->input->post('oldPicture');
			}
			$insert = $this->Pages_model->update($id, $image);
			if($insert){
				redirect(MyAdmin.'pages/edit/'.$id);
			}else{
				$data['title'] = "Edit Page";
				$data['page'] = "pages/update";
				admin($data);
			}
		}
	}
	
	public function remove($id){
		$data['page'] = "pages/create";
		admin($data);
	}
	
	public function listing($offset = 0){
		$data['pages'] = $this->Pages_model->listing();
		$data['title'] = "Pages Listing";
		$data['page'] = "pages/listing";
		admin($data);
	}
}
