<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {
	
	public function contactForm($id = FALSE, $column = FALSE){
		if($column){
			$this->db->where('contact_id', $id);
			return $this->db->get('contact')->row(0)->$column;
		}
		if($id){
			$this->db->where('contact_id', $id);
			return $this->db->get('contact')->row_array();
		}
		return $this->db->get('contact')->result_array();
	}
	
	public function countContactForm($type = FALSE){
		if($type){
			if($type == 'x'){ $type="0"; }
			$this->db->where('contact_status', $type);
			return $this->db->get('contact')->num_rows();
		}
		return $this->db->get('contact')->num_rows();
	}
	
	public function markAsRead($id){
		$data = array('contact_status' => '1');
		$this->db->where('contact_id', $id);
		return $this->db->update('contact', $data);
	}

	public function GetDashboardCards(){
		$this->db->where('meta_key', '_dashboard_card');
		return $this->db->get('meta')->result_array();
	}
	
}