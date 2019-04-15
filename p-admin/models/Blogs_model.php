<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blogs_model extends CI_Model {
	
	public function insert($img){
		$slug = makeSlug($this->input->post('title'));
		$post = array(
			'posts_title' => $this->input->post('title'),
			'posts_slug' => $slug,
			'posts_type' => 'blog',
			'posts_author' => get_cookie('user_id'),
			'posts_status' => '1',
			'posts_created_on' => date('Y/m/d')
		);
		$this->db->insert('posts', $post);
		$insert_id = $this->db->insert_id();
		$data = array(
			'blogs_post' => $insert_id,
			'blogs_description' => $this->input->post('description'),
			'blogs_cover_pic' => $img,
			'blogs_comment' => $this->input->post('comment')
		);
		$this->db->insert('blogs', $data);
		return true;
	}
	
	public function update($id, $img){
		$bId = $this->input->post('blogId');
		$slug = makeSlug($this->input->post('slug'), $id);
		$post = array(
			'posts_title' => $this->input->post('title'),
			'posts_slug' => $slug
		);
		$this->db->where('posts_id', $id);
		$this->db->update('posts', $post);
		$data = array(
			'blogs_description' => $this->input->post('description'),
			'blogs_cover_pic' => $img,
			'blogs_comment' => $this->input->post('comment')
		);
		$this->db->where('blogs_id', $bId);
		$this->db->update('blogs', $data);
		return true;
	}
	
	public function remove($id){
		$this->db->where('posts_id', $id);
		$this->db->delete('users');
		return true;
	}
	
	public function listing($id = FALSE){
		if($id){
			$this->db->select('*');
			$this->db->from('posts');
			$this->db->where('posts_id', $id);
			$this->db->where('posts_type', 'blog');
			$this->db->join('blogs', 'posts_id = blogs_post', 'left');
			return $this->db->get()->row_array();
		}
		$this->db->select('*');
		$this->db->from('posts');
			$this->db->where('posts_type', 'blog');
		$this->db->join('blogs', 'posts_id = blogs_post', 'left');
		$this->db->join('users', 'users_id = posts_author', 'left');
		return $this->db->get()->result_array();
	}
	
}