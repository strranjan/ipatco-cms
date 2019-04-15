<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings_model extends CI_Model {
	
	public function general(){
		$data = array(
			'settings_value' => $this->input->post('site_title')
		);
		$this->db->where('settings_key', 'title');
		$this->db->update('settings', $data);
		
		$data = array(
			'settings_value' => $this->input->post('tagline')
		);
		$this->db->where('settings_key', 'tagline');
		$this->db->update('settings', $data);
		
		$data = array(
			'settings_value' => $this->input->post('email')
		);
		$this->db->where('settings_key', 'email');
		$this->db->update('settings', $data);
		
		$data = array(
			'settings_value' => $this->input->post('pagess')
		);
		$this->db->where('settings_key', 'show-page');
		$this->db->update('settings', $data);
		
		$data = array(
			'settings_value' => $this->input->post('userss')
		);
		$this->db->where('settings_key', 'show-user');
		$this->db->update('settings', $data);
		
		$data = array(
			'settings_value' => $this->input->post('blogss')
		);
		$this->db->where('settings_key', 'show-blog');
		$this->db->update('settings', $data);
		
		return true;
	}
	
	public function mailServer(){
		$data = array(
			'settings_value' => $this->input->post('mail_server')
		);
		$this->db->where('settings_key', 'email-server');
		$this->db->update('settings', $data);
		
		$data = array(
			'settings_value' => $this->input->post('port')
		);
		$this->db->where('settings_key', 'email-port');
		$this->db->update('settings', $data);
		
		$data = array(
			'settings_value' => $this->input->post('email')
		);
		$this->db->where('settings_key', 'email-login');
		$this->db->update('settings', $data);
		
		$data = array(
			'settings_value' => $this->input->post('password')
		);
		$this->db->where('settings_key', 'email-password');
		$this->db->update('settings', $data);
		
		return true;
	}
	
	public function reading(){
		$data = array(
			'settings_value' => $this->input->post('post_page')
		);
		$this->db->where('settings_key', 'post-per-page');
		$this->db->update('settings', $data);
		
		$data = array(
			'settings_value' => $this->input->post('auto_comment')
		);
		$this->db->where('settings_key', 'auto-approve-comment');
		$this->db->update('settings', $data);
		
		return true;
	}
	
	public function media(){
		$data = array(
			'settings_value' => $this->input->post('thumbnail_height')
		);
		$this->db->where('settings_key', 'thumbnail-height');
		$this->db->update('settings', $data);
		
		$data = array(
			'settings_value' => $this->input->post('thumbnail_width')
		);
		$this->db->where('settings_key', 'thumbnail-width');
		$this->db->update('settings', $data);
		
		$data = array(
			'settings_value' => $this->input->post('image_height')
		);
		$this->db->where('settings_key', 'image-height');
		$this->db->update('settings', $data);
		
		$data = array(
			'settings_value' => $this->input->post('image_width')
		);
		$this->db->where('settings_key', 'image-width');
		$this->db->update('settings', $data);
		
		$data = array(
			'settings_value' => $this->input->post('watermark')
		);
		$this->db->where('settings_key', 'watermark');
		$this->db->update('settings', $data);
		
		return true;
	}
}