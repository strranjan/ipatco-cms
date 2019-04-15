<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teacher_model extends CI_Model {
	
	public function insert($img){
		$slug = makeSlug($this->input->post('title'));
		$post = array(
			'posts_title' => $this->input->post('title'),
			'posts_slug' => $slug,
			'posts_type' => 'page',
			'posts_author' => get_cookie('user_id'),
			'posts_status' => '1',
			'posts_created_on' => date('Y/m/d')
		);
		$this->db->insert('posts', $post);
		$insert_id = $this->db->insert_id();
		$data = array(
			'pages_post' => $insert_id,
			'pages_description' => $this->input->post('description'),
			'pages_cover_pic' => $img
		);
		$this->db->insert('pages', $data);
		return true;
	}
	
	public function update($id, $img){
		$bId = $this->input->post('pageId');
		$slug = makeSlug($this->input->post('slug'), $id);
		$post = array(
			'posts_title' => $this->input->post('title'),
			'posts_slug' => $slug
		);
		$this->db->where('posts_id', $id);
		$this->db->update('posts', $post);
		$data = array(
			'pages_description' => $this->input->post('description'),
			'pages_cover_pic' => $img
		);
		$this->db->where('pages_id', $bId);
		$this->db->update('pages', $data);
		return true;
	}
	
	public function remove($id){
		$this->db->where('posts_id', $id);
		$this->db->delete('posts');
		return true;
	}
	
	public function listing($id = FALSE){
		if($id){
			$this->db->select('*');
			$this->db->from('posts');
			$this->db->where('posts_type', 'page');
			$this->db->where('posts_id', $id);
			$this->db->join('pages', 'posts_id = pages_post', 'left');
			return $this->db->get()->row_array();
		}
		$this->db->select('*');
		$this->db->from('posts');
		$this->db->where('posts_type', 'page');
		$this->db->join('pages', 'posts_id = pages_post', 'left');
		$this->db->join('users', 'users_id = posts_author', 'left');
		return $this->db->get()->result_array();
	}
	
	public function insertCourse($img){
		$slug = makeSlug($this->input->post('title'));
		$post = array(
			'posts_title' => $this->input->post('title'),
			'posts_slug' => $slug,
			'posts_type' => 'course',
			'posts_author' => '1',//get_cookie('user_id'),
			'posts_status' => '0',
			'posts_created_on' => date('Y/m/d')
		);
		$this->db->insert('posts', $post);
		$insert_id = $this->db->insert_id();
		$data = array(
			'courses_post' => $insert_id,
			'courses_category' => $this->input->post('category'),
			'courses_description' => $this->input->post('description'),
			'courses_pincode' => $this->input->post('pincode'),
			'courses_fee' => $this->input->post('fee'),
			'courses_duration' => $this->input->post('duration'),
			'courses_duration_meta' => $this->input->post('duration_meta'),
			'courses_num_students' => $this->input->post('num_students'),
			'courses_cover_img' => $img
		);
		$this->db->insert('courses', $data);
		return true;
	}
	
	public function updateCourse($id, $img){
		$slug = makeSlug($this->input->post('slug'), $id);
		$post = array(
			'posts_title' => $this->input->post('title'),
			'posts_slug' => $slug
		);
		$this->db->where('posts_id', $id);
		$this->db->update('posts', $post);
		$data = array(
			'courses_category' => $this->input->post('category'),
			'courses_description' => $this->input->post('description'),
			'courses_pincode' => $this->input->post('pincode'),
			'courses_fee' => $this->input->post('fee'),
			'courses_duration' => $this->input->post('duration'),
			'courses_duration_meta' => $this->input->post('duration_meta'),
			'courses_num_students' => $this->input->post('num_students'),
			'courses_cover_img' => $img
		);
		$this->db->where('courses_post', $id);
		$this->db->update('courses', $data);
		return true;
	}
	
	public function listCourse($id = FALSE){
		$user = get_cookie('user_id');
		if($id){
			$this->db->select('*');
			$this->db->from('posts');
			$this->db->where('posts_type', 'course');
			$this->db->where('posts_author', $user);
			$this->db->where('posts_id', $id);
			$this->db->join('courses', 'posts_id = courses_post', 'left');
			return $this->db->get()->row_array();
		}
		$this->db->select('*');
		$this->db->from('posts');
		$this->db->where('posts_type', 'course');
		$this->db->where('posts_author', $user);
		$this->db->join('courses', 'posts_id = courses_post', 'left');
		$this->db->join('users', 'users_id = posts_author', 'left');
		return $this->db->get()->result_array();
	}
	
	public function updateCourseStatus($status, $id){
		$post = array(
			'posts_status' => $status
		);
		$this->db->where('posts_id', $id);
		$this->db->update('posts', $post);
	}
	
	public function listMyStudents(){
		$id = get_cookie('user_id');
		$newArray = array();
		$this->db->where('posts_author', $id);
		$query = $this->db->get('posts');
		if ($query->num_rows() > 0){
			$childArray = $query->result_array();
			foreach($childArray as $arr){
				$this->db->select('*');
				$this->db->from('posts_meta');
				$this->db->where('p_meta_key', '_purchased_course_student');
				$this->db->where('p_meta_post', $arr['posts_id']);
				$this->db->join('posts', 'posts_id = p_meta_post', 'left');
				$this->db->join('courses', 'posts_id = courses_post', 'left');
				$this->db->join('users', 'users_id = p_meta_value', 'left');
				$students = $this->db->get()->result_array();
				foreach($students as $std){
					array_push($newArray, $std);
				}
			}
		}
		return $newArray;
	}
	
	public function listStudentsByCourse($id = FALSE){
		$this->db->select('*');
		$this->db->from('posts_meta');
		$this->db->where('p_meta_key', '_purchased_course_student');
		if($id){
			$this->db->where('p_meta_value', $id);
		}
		$this->db->join('posts', 'posts_id = p_meta_post', 'left');
		$this->db->join('courses', 'posts_id = courses_post', 'left');
		$this->db->join('users', 'users_id = p_meta_value', 'left');
		return $this->db->get()->result_array();
	}
	
	public function composeMail($status){
		$data = array(
			'messages_from' => get_cookie('user_id'),
			'messages_to' => $this->input->post('to'),
			'messages_subject' => $this->input->post('subject'),
			'messages_status' => $status,
			'messages_message' => $this->input->post('message'),
			'messages_created_on' => date('Y/m/d')
		);
		$id = $this->input->post('id');
		if($id == ''){
			$this->db->insert('messages', $data);
		}else{
			$this->db->where('messages_id', $id);
			$this->db->update('messages', $data);
		}
		return true;
	}
	
	public function listMyInbox(){
		$this->db->select('*');
		$this->db->from('messages');
		$this->db->order_by('messages_id', 'DESC');
		$this->db->where('messages_to', get_cookie('user_id'));
		$this->db->join('users', 'users_id = messages_from', 'left');
		return $this->db->get()->result_array();
	}
	
	public function listMySent(){
		$this->db->select('*');
		$this->db->from('messages');
		$this->db->where('messages_from', get_cookie('user_id'));
		$this->db->where('messages_status <> 2');
		$this->db->order_by('messages_id', 'DESC');
		$this->db->join('users', 'users_id = messages_to', 'left');
		return $this->db->get()->result_array();
	}
	
	public function listMyDraft(){
		$this->db->select('*');
		$this->db->from('messages');
		$this->db->order_by('messages_id', 'DESC');
		$this->db->where('messages_from', get_cookie('user_id'));
		$this->db->where('messages_status', '2');
		$this->db->join('users', 'users_id = messages_to', 'left');
		return $this->db->get()->result_array();
	}
	
	public function getMessage($id){
		$this->db->select('*');
		$this->db->from('messages');
		$this->db->where('messages_id', $id);
		$this->db->where('(messages_to = "' . get_cookie('user_id') . '" OR messages_from = "' . get_cookie('user_id') . '")');
		$this->db->join('users', 'users_id = messages_from', 'left');
		return $this->db->get()->row_array();
	}
	
	public function readMessage($id){
		$post = array(
			'messages_status' => '1'
		);
		$this->db->where('messages_id', $id);
		$this->db->update('messages', $post);
	}
	
	public function updateVisibility($status){
		$post = array(
			'user_info_active' => $status
		);
		$this->db->where('user_info_user', get_cookie('user_id'));
		$this->db->update('user_info', $post);
	}
	
	public function paymentHistory(){
		$this->db->select('*');
		$this->db->from('payments_history');
		$this->db->order_by('payments_history_id', 'DESC');
		$this->db->where('payments_history_user', get_cookie('user_id'));
		// $this->db->where('messages_status', '2');
		return $this->db->get()->result_array();
	}
	
	public function makeWithDraw(){
		$post = array(
			'payments_history_user' => get_cookie('user_id'),
			'payments_history_via' => $this->input->post('mode'),
			'payments_history_amount' => $this->input->post('amount'),
			'payments_history_note' => $this->input->post('description'),
			'payments_history_status' => '0',
			'payments_history_created_on' => date('M d, Y')
		);
		$this->db->insert('payments_history', $post);
		return true;
	}
	
	public function listVideosByCourse($id = FALSE){
		$this->db->select('*');
		$this->db->from('course_videos');
		$this->db->where('videos_course', $id);
		$this->db->join('posts', 'posts_id = videos_course', 'left');
		$this->db->join('courses', 'posts_id = courses_post', 'left');
		return $this->db->get()->result_array();
	}
	
	public function getVideo($id){
		$this->db->where('videos_id', $id);
		return $this->db->get('course_videos')->row(0)->videos_file;
	}
	
	public function addNewVideo($id, $video){
		$post = array(
			'videos_course' => $id,
			'videos_file' => $video,
			'videos_title' => $this->input->post('title'),
			'videos_description' => $this->input->post('description'),
			'videos_type' => $this->input->post('video_type'),
			'videos_price' => $this->input->post('price'),
			'videos_status' => '0'
		);
		$this->db->insert('course_videos', $post);
		return true;
	}
	
	public function teacherProfile($id){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('users_id', $id);
		$this->db->join('user_info', 'user_info_user = users_id', 'left');
		$this->db->join('address', 'address_id = users_address', 'left');
		return $this->db->get()->row_array();
	}
	
	public function updateProfile($id){
		$users = array(
			'users_name' => $this->input->post('name'),
			'users_email' => $this->input->post('email'),
			'users_phone' => $this->input->post('phone'),
			'users_pan' => $this->input->post('pan'),
			'users_adhaar' => $this->input->post('adhaar')
		);
		$this->db->where('users_id', $id);
		$this->db->update('users', $users);
		
		$data = array(
			'user_info_dob' => $this->input->post('dob'),
			'user_info_qualification' => $this->input->post('qualification'),
			'user_info_experience' => $this->input->post('experience'),
			'user_info_area_teaching' => $this->input->post('area_of_teaching'),
			'user_info_current_status' => $this->input->post('status'),
			'user_info_description' => $this->input->post('description')
		);
		$this->db->where('user_info_user', $id);
		$this->db->update('user_info', $data);
		return true;
	}
	
}