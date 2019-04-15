<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Basic_model extends CI_Model {
	
	public function getSiteInfo($var){
		$this->db->where('settings_key', $var);
		return $this->db->get('settings')->row(0)->settings_value;
	}
	
	public function getCategoriesMeta($id, $var){
		$this->db->where('meta_key', $var);
		$this->db->where('meta_category', $id);
		return $this->db->get('categories_meta')->row(0)->meta_value;
	}
	
	public function getCategoryName($catId){
		$this->db->where('categories_id', $catId);
		$result = $this->db->get('categories');
		if($result->num_rows() > 0){
			return $result->row(0)->categories_name;
		}else{
			return 'N/A';
		}
	}

	public function uploadImage(){
		$ext = new SplFileInfo($_FILES['userfile']['name']);
		$ext = $ext->getExtension();
		$config['upload_path'] = MyUploads;
		$config['allowed_types'] = '*';
		$config['remove_spaces'] = TRUE;
		$filenameis = random_string('alnum', 25).'.'.$ext;
		$string = preg_replace('/\s+/', '', $filenameis);
		$config['file_name'] = $string;
		
		$this->upload->initialize($config);

		if(!$this->upload->do_upload()){
			$errors = array('error' => $this->upload->display_errors());
			return 'default.png';
		} else {
			$data = array('upload_data' => $this->upload->data());
			return $string;
		}
	}
	
	public function checkSlugExist($slug, $postId = FALSE){
		$count = 0;
		$backup = $slug;
		while(true){
			$this->db->select('posts_slug');
			if($postId){
				$this->db->where('posts_id <> '.$postId);
			}
			$this->db->where('posts_slug', $slug);
			$query = $this->db->get('posts');
			if ($query->num_rows() == 0) break;
			$slug = $backup . '-' . (++$count);
		}
		return $slug;
	}
	
	public function deletePostImages($id){
		$this->db->where('images_post', $id);
		$query = $this->db->get('images');
		if($query->num_rows() > 0){
			foreach($query->result_array() as $img){
				unlink(MyUploads . $img['images_image']);
				$this->db->where('images_id', $img['images_id']);
				$query = $this->db->delete('images');
			}
		}
	}
	
	public function getCategoryChilds($id){
		$newArray = array();
		array_push($newArray, $id);
		while(true){
			$this->db->where('categories_parent', $id);
			$query = $this->db->get('categories');
			if ($query->num_rows() == 0) break;
			$childArray = $query->result_array();
			foreach($childArray as $arr){
				array_push($newArray, $arr['categories_id']);
				$id = $arr['categories_id'];
			}
		}
		return $newArray;
	}
	
	public function deleteCategory($id){
		$newArray = $this->getCategoryChilds($id);
		foreach($newArray as $cat){
			$this->db->where('categories_id', $cat);
			$query = $this->db->get('categories');
			$array = $query->result_array();
			foreach($array as $arr){
				unlink(MyUploads.$arr['categories_icon']);
				$this->db->where('categories_id', $arr['categories_id']);
				$query = $this->db->delete('categories');
				$this->db->where('meta_category', $arr['categories_id']);
				$query = $this->db->delete('categories_meta');
			}
		}
		return $newArray;
	}
	
	public function SaveMetaData($key, $value, $type){
		$data = array(
			'meta_key' => $key,
			'meta_value' => $value,
			'meta_type' => $type,
		);
		$this->db->where('meta_key', $key);
		$this->db->where('meta_type', $type);
		$query = $this->db->get('meta');
		// echo $query->num_rows();
		if($query->num_rows() > 0){
			$id = $query->row(0)->meta_id;
			$this->db->where('meta_id', $id);
			$this->db->update('meta', $data);
		}else{
			$this->db->insert('meta', $data);
		}
	}
	
	public function countPosts($type){
		if($type){
			$this->db->select('*');
			$this->db->from('posts');
			$this->db->where('posts_type', $type);
			return $this->db->get()->num_rows();
		}
		return 'N/A';
	}
	
	public function getUserIdFromEmail($email){
		$this->db->where('users_email', $email);
		$result = $this->db->get('users');
		if($result->num_rows()>0){
			return $result->row(0)->users_id;
		}
		else{
			return 0;
		}
	}
	
	public function validateAPI($validateAPI){
		$this->db->where('api_token', $validateAPI);
		$this->db->where('api_authorized', '1');
		$result = $this->db->get('api');
		if($result->num_rows()>0){
			return $result->row_array();
		}
		else{
			return false;
		}
	}
	
	public function checkUserIsLogin(){
		if(get_cookie('user_id') == NULL){
			return 0;
		}else{
			if(get_cookie('user_in') == NULL){
				return 2;
			}else{
				return 1;
			}
		}
	}
	
	public function getSiteHeader($type){
		$this->db->where('meta_key', '_site_header');
		$this->db->where('meta_type', $type);
		$result = $this->db->get('meta');
		if($result->num_rows()>0){
			return $result->result_array();
		}else{
			return false;
		}
	}
	
	public function getMeta($type, $key){
		$this->db->where('meta_key', $key);
		$this->db->where('meta_type', $type);
		$result = $this->db->get('meta');
		if($result->num_rows()>0){
			return $result->row_array();
		}else{
			return false;
		}
	}
	
	public function getSiteMenus(){
		$this->db->where('meta_key', '_site_menu');
		$this->db->where('meta_type', 'menu');
		$result = $this->db->get('meta');
		if($result->num_rows()>0){
			return $result->result_array();
		}else{
			return false;
		}
	}
	
	public function saveContactData($file = ''){
		$data = array(
			'contact_name' => $this->input->post('name'),
			'contact_email' => $this->input->post('email'),
			'contact_phone' => $this->input->post('phone'),
			'contact_message' => $this->input->post('message'),
			'contact_status' => '0',
			'contact_file' => $file,
			'contact_created_on' => Date('Y/m/d')
		);
		$this->db->insert('contact', $data);
		return 1;
	}
	
	public function getPosts($limit = FALSE, $offset = FALSE, $type = FALSE, $sort = FALSE, $join = array('table'=>'', 'condition'=>'')){
		$this->db->select('*');
		$this->db->from('posts');
		if($limit){
			$this->db->limit($limit, $offset);
		}
		if($type){
			$this->db->where('posts_type', $type);
		}
		if($sort){
			$this->db->order_by('posts_id', $sort);
		}
		$this->db->where('posts_status', '1');
		$this->db->join($join['table'], $join['condition'], 'left');
		$result = $this->db->get();
		if($result->num_rows()>0){
			return $result->result_array();
		}
		else{
			return false;
		}
	}
	
	public function getSinglePosts($slug, $join = array('table'=>'', 'condition'=>'')){
		$this->db->select('*');
		$this->db->from('posts');
		$this->db->where('posts_slug', $slug);
		$this->db->where('posts_status', '1');
		$this->db->join($join['table'], $join['condition'].'=posts_id', 'left');
		$result = $this->db->get();
		if($result->num_rows()>0){
			return $result->row_array();
		}
		else{
			return false;
		}
	}
	
	public function getPostsData($slug){
		$this->db->where('posts_slug', $slug);
		$query = $this->db->get('posts');
		return $query->row_array();
	}
	
	public function getUserVisibility($id){
		$this->db->where('user_info_user', $id);
		$query = $this->db->get('user_info');
		return $query->row(0)->user_info_active;
	}
}






