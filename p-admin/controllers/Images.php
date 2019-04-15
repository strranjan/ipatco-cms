<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Images extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('Images_model');
	}
	
	public function UploadImages($postId = FALSE){
		$uploads = $this->Images_model->uploadMultipleImage($postId);
	}
	
	public function UploadImage($postId = FALSE){
		$uploads = doUpload($postId);
	}
}