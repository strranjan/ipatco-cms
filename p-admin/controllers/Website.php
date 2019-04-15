<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Website extends CI_Controller {

	
	public function __construct(){
		parent::__construct();
		$this->load->library('google');
		$this->load->library('facebook');
	}
	
	public function aaa(){
		$data['token'] = random_string('alnum', 14);
		$subject = "Teacher Registration Successful";
		$body = $this->load->view(siteInfo('theme').'/email/activate',$data,TRUE);
	}
	
	public function index(){
		$data['title'] = 'Welcome to '.siteInfo('title');
		$data['page'] = 'home';
		template($data);
	}
	
	public function openPage($slug, $offset=FALSE){
		if(file_exists(MyTheme.siteInfo('theme').'/'.$slug.'.php')){
			$data['title'] = ucwords($slug);
			$data['page'] = $slug;
			$data['offset'] = $offset;
		}else{
			$post = $this->Basic_model->getPostsData($slug);
			if(!$post){
				show_404();
			}
			$page = $post['posts_type'];
			$tableArray = explode(', ', $post['posts_join']);
			$data['title'] = ucwords($post['posts_title']);
			$data['page'] = 'single/'.$page;
			$data['get'] = posts_read_more($slug, $join = array('table'=>$tableArray[0], 'condition'=>$tableArray[1]));
			$data['similars'] = similar_posts($data['get']['posts_id'], $data['get']['posts_type'], '6', $join = array('table'=>$tableArray[0], 'condition'=>$tableArray[1]));
			// echo $data['get']['posts_title'];
		}
		template($data);
	}
	
	public function googleLogin() {
		redirect($this->google->get_login_url());
	}
	
	public function googleLoginCallBack() {
		$google_data = $this->google->validate();
		$email = $google_data['email'];
		
		$isEmailExist = $this->Auth_model->checkUsernameExist($email);
		if($isEmailExist){
			$userData = $this->Auth_model->getUserDataEmail($email);
			pCookie('user_id', $userData['users_id']);
			pCookie('user_in', true);
			pCookie('user_name', $userData['users_name']);
			pCookie('user_email', $userData['users_email']);
			pCookie('user_role', $userData['users_role']);
			pCookie('user_phone', $userData['users_phone']);
			pCookie('user_profile', $userData['users_profile']);
			redirect('/');
		} else {
			// $google_data = $this->google->validate();
			$name = $google_data['name'];
			$array = explode(' ', $name);
			$session_data = array(
				'name' => $array[0],
				'email' => $google_data['email']
			);
			$this->session->set_userdata($session_data);
			redirect('teacher-signup');
		}
		
		$source = 'google';
		$profile_pic = $google_data['profile_pic'];
		$link = $google_data['link'];
		$sess_logged_in = 1;
	}

}
