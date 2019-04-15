<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admins extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Admin_model');
	}
	
	public function dashboard(){
		$this->load->model('User_model');
		$array = array();
		$cardBlockData = $this->Admin_model->GetDashboardCards();
		foreach($cardBlockData as $card){
			$explode = explode('{}', $card['meta_value']);
			array_push($array, $explode);
		}
		$data['cardBlockData'] = $array;
		$data['title'] = "Dashboard";
		$data['totalUser'] = count($this->User_model->listing());
		$data['page'] = "dashboard";
		admin($data);
	}
	
	public function contactForm(){
		// delete_cookie('user_in');
		$data['title'] = "Contact Us Data";
		$data['page'] = "contact-us";
		$data['contacts'] = $this->Admin_model->contactForm();
		admin($data);
	}
	
	public function contactFormData(){
		$id = $this->input->get('id');
		echo $this->Admin_model->contactForm($id, 'contact_message');
		$this->Admin_model->markAsRead($id);
	}
	
	public function fileManager(){
		$data['title'] = "File Manager";
		$data['page'] = "file-manager";
		$data['contacts'] = $this->Admin_model->contactForm();
		admin($data);
	}
	
}
