<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('User_model');
	}
		
	public function create(){
		$this->form_validation->set_rules('full_name', 'Full Name', 'required');
		$this->form_validation->set_rules('email', 'Email Address', 'required|is_unique[users.users_email]|valid_email|min_length[5]');
		$this->form_validation->set_rules('phone_number', 'Phone Number', 'required|is_numeric|min_length[9]|max_length[10]');
		$this->form_validation->set_rules('user_role', 'User Role', 'required|is_numeric');
		
		if ($this->form_validation->run() === FALSE){
			$data['title'] = "Add User";
			$data['page'] = "users/create";
			admin($data);
		} else {
			$insert = $this->User_model->insert();
			if($insert){
				redirect(MyAdmin.'users/list');
			}else{
				$data['title'] = "Add User";
				$data['page'] = "users/create";
				admin($data);
			}
		}
	}
	
	public function update($id){
		$data['user'] = $this->User_model->listing($id);
		$this->form_validation->set_rules('full_name', 'Full Name', 'required');
		$this->form_validation->set_rules('email', 'Email Address', 'required|valid_email|min_length[5]');
		$this->form_validation->set_rules('phone_number', 'Phone Number', 'required|is_numeric|min_length[9]|max_length[10]');
		$this->form_validation->set_rules('user_role', 'User Role', 'required|is_numeric');
		
		if ($this->form_validation->run() === FALSE){
			$data['title'] = "Edit User";
			$data['page'] = "users/update";
			admin($data);
		} else {
			$insert = $this->User_model->update($id);
			if($insert){
				redirect(MyAdmin.'users/edit/'.$id);
			}else{
				$data['title'] = "Add User";
				$data['page'] = "users/update";
				admin($data);
			}
		}
	}
	
	public function remove($id){
		$data['page'] = "users/create";
		admin($data);
	}
	
	public function listing($offset = 0){
		$data['users'] = $this->User_model->listing();
		$data['title'] = "Users Listing";
		$data['page'] = "users/listing";
		admin($data);
	}
	
	public function viewProfile($readOnly = FALSE, $profile = FALSE){
		if($readOnly){
			if($profile){
				$id = userEmail2Id($profile);
				$data['readOnly'] = 'readonly';
				$data['users'] = $this->User_model->listing($id);
			}
		}else{
			$id = get_cookie('user_id');
			$data['readOnly'] = '';
			$data['users'] = $this->User_model->listing($id);
			
		}
		$data['title'] = "User Profile";
		$data['page'] = "users/profile";
		admin($data);
	}
}
