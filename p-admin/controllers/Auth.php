<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Auth_model');
		$this->load->library('google');
		$this->load->library('facebook');
	}
	
	public function authLogin(){
		if(current_url() === base_url('p-login.php')){
			$v1 = random_string('alnum', 25);
			$v2 = random_string('alnum', 25);
			$v3 = random_string('alnum', 25);
			redirect('p-login.php/auth/'.$v1.'/ipatco/admin/login/'.$v2.'/secure/'.$v3);
		}
		$data[''] = "";
		admin($data, 'inc/auth/login');
	}
	
	public function authForgot(){
		$username = $this->input->post('email');
		$isUsernameExist = $this->Auth_model->checkUsernameExist($username);
		if($isUsernameExist){
			$userStatus = $this->Auth_model->checkStatus($username);
			if($userStatus == '3') {
				echo '4'; // 5 for User removed by admin
			}elseif($userStatus == '2') {
				echo '4'; // 5 for User Blocked
			}else{
				$userData = $this->Auth_model->getUserDataEmail($username);
				// print_r($userData);
				$token = random_string('alnum', 20);
				$data['token'] = $token;
				$data['name'] = $userData['users_name'];
				SaveJustMeta($token, $userData['users_id'], '_user_token');
				$subject = "Reset Your Password";
				$body = $this->load->view(siteInfo('theme').'/email/reset-password',$data,TRUE);
				if(sendMail($username, $subject, $body)){
					echo '1';
				}else{
					echo '0';
				}
			}
		}else{
			echo '2';
		}
	}
	
	public function doLogin(){
		// Get Input Login Credential
		$username = $this->input->post('email');
		$password = $this->input->post('password');
		
		// Check Username exist or not
		$isUsernameExist = $this->Auth_model->checkUsernameExist($username);
		if($isUsernameExist){
			// Username is exist
			if(!password_verify($password, $isUsernameExist)){
				// Time to check User Status
				$userStatus = $this->Auth_model->checkStatus($username);
				if($userStatus == '1'){
					$user_id = $this->Auth_model->doLogin($username, $isUsernameExist);
					if($user_id){
						$userData = $this->Auth_model->getUserData($user_id);
						pCookie('user_id', $user_id);
						pCookie('user_in', true);
						pCookie('user_name', $userData['users_name']);
						pCookie('user_email', $userData['users_email']);
						pCookie('user_role', $userData['users_role']);
						pCookie('user_phone', $userData['users_phone']);
						pCookie('user_profile', $userData['users_profile']);
						echo '1'; // 1 for login success
					} else {
						echo '0'; // 0 for login failed
					}
				} elseif($userStatus == '0') {
					echo '3'; // 3 for User not activated
				} elseif($userStatus == '2') {
					echo '4'; // 4 for User is blocked
				} elseif($userStatus == '3') {
					echo '5'; // 5 for User removed by admin
				}
			}else{
				// Password is incorrect
				echo '6'; // 6 for Invalid Password
			}
		}else{
			// Username doesnot exist
			echo '2'; // 2 for user not found
		}
	}

	public function doRegister(){
		// Get Input Credential
		$username = $this->input->post('email');
		$phone = $this->input->post('phone');
		$password = $this->input->post('pass');
		$cpassword = $this->input->post('pass1');

		$isEmailExist = $this->Auth_model->checkUsernameExist($username);
		if($isEmailExist){
			echo '2'; die;
		}
		$isPhoneExist = $this->Auth_model->checkUsernameExist($phone, 'phone');
		if($isPhoneExist){
			echo '3'; die;
		}
		if($password != $cpassword){
			echo '4'; die;
		}
		$doReg = $this->Auth_model->newStudent();
		if($doReg){
			$token = random_string('alnum', 20);
			$data['token'] = $token;
			$data['name'] = $this->input->post('name');
			$data['role'] = "Student";
			SaveJustMeta($token, $doReg, '_user_token');
			$subject = "Student Registration Successful";
			$body = $this->load->view(siteInfo('theme').'/email/activate', $data, TRUE);
			sendMail($username, $subject, $body);
			echo '1';
		} else {
			echo '0';
		}
	}
	
	public function GenerateNewApiToken(){
		$data['title'] = "Generate Token Key";
		$data['page'] = "auth/api";
		$this->load->model('User_model');
		$data['users'] = $this->User_model->listing();
		$data['apis'] = $this->Auth_model->apiListing();

		$this->form_validation->set_rules('user', 'User', 'required');
		$this->form_validation->set_rules('api_token', 'API Token', 'required');
		$this->form_validation->set_rules('valid_for', 'ValidityDate', 'required');
		$this->form_validation->set_rules('activate', 'Status', 'required');
		
		if ($this->form_validation->run() === FALSE){
			admin($data);
		} else {
			$insert = $this->Auth_model->newApiToken();
			if($insert){
				redirect(MyAdmin.'profile');
			}else{
				admin($data);
			}
		}
	}
	
	public function resetMyPassword(){
		$token = $this->input->post('token');
		$password = $this->input->post('password');
		$cpassword = $this->input->post('cpassword');
		if($password != $cpassword){
			echo '2';die;
		}
		$user_id = getMeta('_user_token', $token);
		if(!$user_id){
			echo '3';die;
		}
		$change = $this->Auth_model->setNewPassword($user_id['meta_value'], $password);
		if($change){
			echo '1';
		}else{
			echo '0';
		}
	}
	
	public function deleteApiToken($id, $token){
		$data['users'] = $this->Auth_model->deleteApi($id, $token);
		redirect(MyAdmin.'users/api-token');
	}
	
	public function logout_all(){
		delete_cookie('user_id');
		delete_cookie('user_in');
		delete_cookie('user_name');
		delete_cookie('user_email');
		delete_cookie('user_role');
		delete_cookie('user_phone');
		delete_cookie('user_profile');
		if ($this->facebook->is_authenticated()){
			$this->facebook->destroy_session();
		}
		if($this->input->get('logout') == 'true'){
			redirect('/');
		}
		redirect('p-login.php');
	}
}