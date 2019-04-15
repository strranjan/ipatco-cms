<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages_model extends CI_Model {
	
	public function insert($img){
		$slug = makeSlug($this->input->post('title'));
		$post = array(
			'posts_title' => $this->input->post('title'),
			'posts_slug' => $slug,
			'posts_type' => 'page',
			'posts_author' => get_cookie('user_id'),
			'posts_join' => 'pages, pages_post',
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
		$slug = makeSlug($this->input->post('slug'));
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
			$this->db->where('posts_type', 'pages');
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
	
}