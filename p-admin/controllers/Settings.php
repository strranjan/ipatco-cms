<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Settings_model');
	}
	
	public function general(){
		$data['title'] = "General Settings";
		$data['page'] = "settings/general";
		
		$this->form_validation->set_rules('site_title', 'Site Title', 'required|min_length[2]|max_length[100]');
		$this->form_validation->set_rules('tagline', 'Tagline', 'required|min_length[5]|max_length[100]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		
		if ($this->form_validation->run() === FALSE){
			admin($data);
		} else {
			$insert = $this->Settings_model->general();
			if($insert){
				redirect(MyAdmin.'settings/general');
			}else{
				admin($data);
			}
		}
	}

	public function mailServer(){
		$data['title'] = "Mail Settings";
		$data['page'] = "settings/mail";
		
		$this->form_validation->set_rules('mail_server', 'Mail Server', 'required|min_length[5]|max_length[100]');
		$this->form_validation->set_rules('port', 'Port', 'required|min_length[3]|is_numeric|max_length[4]');
		$this->form_validation->set_rules('email', 'Login Name', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required');
		
		if ($this->form_validation->run() === FALSE){
			admin($data);
		} else {
			$insert = $this->Settings_model->mailServer();
			if($insert){
				redirect(MyAdmin.'settings/mail');
			}else{
				admin($data);
			}
		}
	}

	public function reading(){
		$data['title'] = "Reading Settings";
		$data['page'] = "settings/reading";
		
		$this->form_validation->set_rules('post_page', 'Post Per Page', 'required|min_length[1]|is_numeric|max_length[3]');
		
		if ($this->form_validation->run() === FALSE){
			admin($data);
		} else {
			$insert = $this->Settings_model->reading();
			if($insert){
				redirect(MyAdmin.'settings/reading');
			}else{
				admin($data);
			}
		}
	}

	public function media(){
		$data['title'] = "Media Settings";
		$data['page'] = "settings/media";
		
		$this->form_validation->set_rules('thumbnail_height', 'Thumbnail Height', 'required|min_length[2]|is_numeric|max_length[3]');
		$this->form_validation->set_rules('thumbnail_width', 'Thumbnail Width', 'required|min_length[2]|is_numeric|max_length[3]');
		$this->form_validation->set_rules('image_height', 'Image Height', 'required|min_length[3]|is_numeric|max_length[4]');
		$this->form_validation->set_rules('image_width', 'Image Width', 'required|min_length[3]|is_numeric|max_length[4]');
		
		if ($this->form_validation->run() === FALSE){
			admin($data);
		} else {
			$insert = $this->Settings_model->media();
			if($insert){
				redirect(MyAdmin.'settings/media');
			}else{
				admin($data);
			}
		}
	}
}
