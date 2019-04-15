<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
	
	public function insert(){
		$address = array(
			'address_created_on' => date('Y/m/d')
		);
		$this->db->insert('address', $address);
		$insert_id = $this->db->insert_id();
		$data = array(
			'users_name' => $this->input->post('full_name'),
			'users_email' => $this->input->post('email'),
			'users_role' => $this->input->post('user_role'),
			'users_phone' => $this->input->post('phone_number'),
			'users_address' => $insert_id,
			'users_status' => '1',
			'users_created_on' => date('Y/m/d')
		);
		$this->db->insert('users', $data);
		return true;
	}
	
	public function update($id){
		$data = array(
			'users_name' => $this->input->post('full_name'),
			'users_email' => $this->input->post('email'),
			'users_role' => $this->input->post('user_role'),
			'users_phone' => $this->input->post('phone_number')
		);
		$this->db->where('users_id', $id);
		$this->db->update('users', $data);
		return true;
	}
	
	public function remove($id){
		$this->db->where('users_id', $id);
		$this->db->delete('users');
		return true;
	}
	
	public function listing($id = FALSE){
		if($id){
			$this->db->where('users_id', $id);
			return $this->db->get('users')->row_array();
		}
		return $this->db->get('users')->result_array();
	}
	
}