<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blogs extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('Blogs_model');
	}
		
	public function create(){
		$this->form_validation->set_rules('title', 'Title', 'required|min_length[10]|max_length[100]');
		$this->form_validation->set_rules('description', 'Description', 'required|min_length[10]');
		
		if ($this->form_validation->run() === FALSE){
			$data['title'] = "Add Blog";
			$data['page'] = "blogs/create";
			admin($data);
		} else {
			if($_FILES['userfile']['name']){
				$image = $this->Basic_model->uploadImage();
			}else{
				$image = "default.png";
			}
			$insert = $this->Blogs_model->insert($image);
			if($insert){
				redirect(MyAdmin.'blogs/list');
			}else{
				$data['title'] = "Add Blog";
				$data['page'] = "blogs/create";
				admin($data);
			}
		}
	}
	
	public function update($id){
		$data['blog'] = $this->Blogs_model->listing($id);
		$this->form_validation->set_rules('title', 'Title', 'required|min_length[10]|max_length[100]');
		$this->form_validation->set_rules('slug', 'Slug', 'required');
		$this->form_validation->set_rules('description', 'Description', 'required|min_length[10]');
		
		if ($this->form_validation->run() === FALSE){
			$data['title'] = "Edit Blog";
			$data['page'] = "blogs/update";
			admin($data);
		} else {
			if($_FILES['userfile']['name']){
				$image = $this->Basic_model->uploadImage();
				$old = $this->input->post('oldPicture');
				unlink(MyUploads.$old);
			}else{
				$image = $this->input->post('oldPicture');
			}
			$insert = $this->Blogs_model->update($id, $image);
			if($insert){
				redirect(MyAdmin.'blogs/edit/'.$id);
			}else{
				$data['title'] = "Edit Blog";
				$data['page'] = "blogs/update";
				admin($data);
			}
		}
	}
	
	public function remove($id){
		$data['page'] = "blogs/create";
		admin($data);
	}
	
	public function listing($offset = 0){
		$data['blogs'] = $this->Blogs_model->listing();
		$data['title'] = "Blogs Listing";
		$data['page'] = "blogs/listing";
		admin($data);
	}
}
