<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Images_model extends CI_Model {
	
	public function listingImagesByPost($id){
		$this->db->where('images_post', $id);
		return $this->db->get('images')->result_array();
	}
	
	public function uploadMultipleImage($postId = FALSE){
		$loop = count($_FILES['userfile']['name']);
		$files = $_FILES;
		$config['upload_path'] = MyUploads;
		$config['allowed_types'] = '*';
		$config['remove_spaces'] = TRUE;
		for($i=0; $i< $loop; $i++)	{
			$ext = new SplFileInfo($files['userfile']['name'][$i]);
			$ext = $ext->getExtension();
			$_FILES['userfile']['name'] = $files['userfile']['name'][$i];
			$_FILES['userfile']['type'] = $files['userfile']['type'][$i];
			$_FILES['userfile']['tmp_name'] = $files['userfile']['tmp_name'][$i];
			$_FILES['userfile']['error'] = $files['userfile']['error'][$i];
			$_FILES['userfile']['size'] = $files['userfile']['size'][$i];

			$config['remove_spaces'] = TRUE;
			$filenameis = random_string('alnum', 25).'.'.$ext;
			$string = preg_replace('/\s+/', '', $filenameis);
			$config['file_name'] = $string;
			$this->upload->initialize($config);
			if(!$this->upload->do_upload()){
				$errors = array('error' => $this->upload->display_errors());
			} else {
				$data = array('upload_data' => $this->upload->data());
				$img[$i] = $string;
				$data = array(
					'images_post' => $postId,
					'images_image' => $img[$i],
					'images_created_on' =>  date('Y/m/d')
				);
				$this->db->insert('images', $data);
			}
		}
		return 1;
	}
}