<?php

class Auth_model extends CI_Model{
	
	public function checkUsernameExist($username, $column = FALSE){
		if($column){
			$this->db->where('users_'.$column, $username);
		}else{
			$this->db->where('users_email', $username);
		}
		$result = $this->db->get('users');
		$num_rows = $result->num_rows();
		if($num_rows > 0){
			return $result->row(0)->users_password;
		} else {
			return false;
		}
	}
	
	public function checkStatus($username){
		$this->db->where('users_email', $username);
		$result = $this->db->get('users');
		$num_rows = $result->num_rows();
		if($num_rows > 0){
			return $result->row(0)->users_status;
		} else {
			return false;
		}
	}
	
	public function doLogin($username, $password){
		$this->db->where('users_email', $username);
		$this->db->where('users_password', $password);
		$result = $this->db->get('users');
		$num_rows = $result->num_rows();
		if($num_rows > 0){
			return $result->row(0)->users_id;
		} else {
			return '0';
		}
	}
	
	public function getUserData($user_id){
		$this->db->where('users_id', $user_id);
		$result = $this->db->get('users');
		return $result->row_array();
	}
	
	public function getUserDataEmail($email){
		$this->db->where('users_email', $email);
		$result = $this->db->get('users');
		return $result->row_array();
	}
	
	public function newApiToken(){
		$data = array(
			'api_user' => $this->input->post('user'),
			'api_token' => $this->input->post('api_token'),
			'api_authorized' => $this->input->post('activate'),
			'api_valid' => $this->input->post('valid_for'),
			'api_created_on' => date('Y/m/d')
		);
		$this->db->insert('api', $data);
		return 1;
	}
	
	public function newTeacher($resume){
		$address = array(
			'address_line1' => $this->input->post('country'),
			'address_line2' => $this->input->post('state'),
			'address_line3' => $this->input->post('city'),
			'address_line4' => $this->input->post('pincode'),
			'address_line5' => $this->input->post('address1'),
			'address_line6' => $this->input->post('address'),
			'address_created_on' => date('Y/m/d')
		);
		$this->db->insert('address', $address);
		$address_id = $this->db->insert_id();
		
		$data = array(
			'users_name' => $this->input->post('fname').' '.$this->input->post('mname').' '.$this->input->post('lname'),
			'users_email' => $this->input->post('email'),
			'users_phone' => $this->input->post('phone'),
			'users_password' => hashPassord($this->input->post('password')),
			'users_pan' => $this->input->post('pan'),
			'users_adhaar' => $this->input->post('adhaar'),
			'users_address' => $address_id,
			'users_role' => '2',
			'users_status' => '0',
			'users_created_on' => date('Y/m/d')
		);
		$this->db->insert('users', $data);
		$user_id = $this->db->insert_id();
		
		$info = array(
			'user_info_user' => $user_id,
			'user_info_dob' => $this->input->post('dob'),
			'user_info_qualification' => $this->input->post('qualification'),
			'user_info_experience' => $this->input->post('experience'),
			'user_info_area_teaching' => $this->input->post('area_teaching'),
			'user_info_internet' => $this->input->post('internet'),
			'user_info_current_status' => $this->input->post('status'),
			'user_info_net' => $this->input->post('net'),
			'user_info_speed' => $this->input->post('speed'),
			'user_info_resume' => $resume,
			'user_info_description' => $this->input->post('description')
		);
		$this->db->insert('user_info', $info);
		return $user_id;
	}
	
	public function newStudent(){
		$data = array(
			'users_name' => $this->input->post('name'),
			'users_email' => $this->input->post('email'),
			'users_phone' => $this->input->post('phone'),
			'users_password' => hashPassord($this->input->post('pass')),
			'users_role' => '1',
			'users_status' => '0',
			'users_created_on' => date('Y/m/d')
		);
		$this->db->insert('users', $data);
		return $this->db->insert_id();
	}
	
	public function apiListing(){
		$this->db->select('*');
		$this->db->from('api');
		$this->db->join('users', 'users_id = api_user', 'left');
		return $this->db->get()->result_array();
	}
	
	public function deleteApi($id, $token){
		$this->db->where('api_id', $id);
		$this->db->where('api_token', $token);
		$result = $this->db->delete('api');
	}
	
	public function updateStatus($id, $status){
		$data = array('users_status' => $status);
		$this->db->where('users_id', $id);
		$result = $this->db->update('users', $data);
	}
	
	public function setNewPassword($id, $password){
		$data = array('users_password' => hashPassord($password));
		$this->db->where('users_id', $id);
		$result = $this->db->update('users', $data);
		return 1;
	}
	
}