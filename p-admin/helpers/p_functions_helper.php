<?php

	// Getting Site Infoif
	if(!function_exists('siteInfo')) {
		function siteInfo($var) {
			$prc =& get_instance();
			return $prc->Basic_model->getSiteInfo($var);
		}
	}

	// Getting Categories Meta
	if(!function_exists('CategoriesMeta')) {
		function CategoriesMeta($id, $var) {
			$prc =& get_instance();
			return $prc->Basic_model->getCategoriesMeta($id, $var);
		}
	}

	// Sending Mail using MailChimp
	if(!function_exists('sendMail')) {
		function sendMail($to, $subject, $body) {
			$prc =& get_instance();
			$result = $prc->email
				->from(siteInfo('email'), siteInfo('title'))
				->to($to)
				->subject($subject)
				->message($body)
				->send();
			if($result){
				return 1;
			}else{
				return 0;
			}
		}
	}
	
	// Sending SMS
	if (!function_exists('sendSMS')) {
		function sendSMS($mobile, $message) {
			$senderId = 'GHRGDI';
			$routeId = 8;
			$AUTH_KEY = '2c19ae1dbfac5d51673f3424fbc7576';
			$getData = 'mobileNos='.$mobile.'&message='.urlencode($message).'&senderId='.$senderId.'&routeId='.$routeId;
			$url="http://sms.binastre.com/rest/services/sendSMS/sendGroupSms?AUTH_KEY=".$AUTH_KEY."&".$getData;
			$ch = curl_init();
			curl_setopt_array($ch, array(
				CURLOPT_URL => $url,
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_SSL_VERIFYHOST => 0,
				CURLOPT_SSL_VERIFYPEER => 0
			));
			$output = curl_exec($ch);
			if(curl_errno($ch)){
				echo 'error:' . curl_error($ch);
			}
			curl_close($ch);
			return $output;
		}
	}
	
	// Verify Hash Password
	if (!function_exists('verifyPassord')) {
		function verifyPassord($password, $hashPassword) {
			if (password_verify($password, $hashPassword)) {
				return TRUE;
			} else {
				return FALSE;
			}
		}
	}
	
	// Hash Password Encryption
	if (!function_exists('hashPassord')) {
		function hashPassord($password) {
			return password_hash($password, PASSWORD_BCRYPT);
		}
	}
	
	// CSS Link Function
	if (!function_exists('css')) {
		function css($type = FALSE, $location = FALSE) {
			if($type){
				if($type == '1') {
					return "<link href='".BaseURL.MyIncludes."css/".$location."' rel='stylesheet' />\n";
					exit;
				} elseif($type == '2') {
					return "<link href='".BaseURL.MyContents."plugins/".$location."' rel='stylesheet' />\n";
					exit;
				} elseif($type == '/') {
					return "</style>\n";
					exit;
				} else {
					return "<link href='".$location."' rel='stylesheet' />\n";
					exit;
				}
			}
			return "<style>\n";
			exit;
		}
	}
	
	// JS Script Function
	if (!function_exists('js')) {
		function js($type = FALSE, $location = FALSE) {
			if($type) {
				if($type == '1') {
					return "<script src='".BaseURL.MyIncludes."js/".$location."' type='text/javascript'></script>\n";
				} elseif($type == '2') {
					return "<script src='".BaseURL.MyContents."plugins/".$location."' type='text/javascript'></script>\n";
				} elseif($type == '/') {
					return "</script>\n";
				} else {
					return "<script src='".$location."' type='text/javascript'></script>\n";
				}
			}
			return "<script type='text/javascript'>\n";
		}
	}
	
	// Footer Copyright Function
	if (!function_exists('footer')) {
		function footer() {
			return '&copy; '.Date("Y").' '.siteInfo('title').'  Powered by '.anchor('http://www.ipatco.com/', 'iPatco CMS', array('target' => '_blank'))."\n";
		}
	}
	
	// Material Icon
	if (!function_exists('mIcon')) {
		function mIcon($icon) {
			return '<i class="material-icons">'.$icon.'</i>';
		}
	}
	
	// Font Awesome Icon
	if (!function_exists('fa')) {
		function fa($icon) {
			return '<i class="fa fa-'.$icon.'"></i>';
		}
	}
	
	// Browse Image From Include Folder
	if (!function_exists('siteImg')) {
		function siteImg($var) {
			header("Content-type: image/jpeg");
			$image = BaseURL.MyContents.'themes/'.siteInfo('theme').'/images/'.$var;
			return readfile($image);
		}
	}
	
	// Image URL
	if (!function_exists('imgUrl')) {
		function imgUrl($var) {
			return BaseURL.MyUploads.$var;
		}
	}
	
	// Set Site Cookie
	if (!function_exists('pCookie')) {
		function pCookie($name, $value) {
			set_cookie($name, $value,'31536000'); 
		}
	}
	
	// Loading Admin Pages
	if (!function_exists('admin')) {
		function admin($data = false, $file = 'p_admin') {
			$prc =& get_instance();
			return $prc->admin->view($file, $data);
		}
	}
	
	// Loading Front Template Pages
	if (!function_exists('template')) {
		function template($data = false, $file = FALSE) {
			if(is_array($data)){
				if($file == FALSE){
					$file = siteInfo('theme').'/index';
				}else{
					$file = siteInfo('theme').'/'.$file;
				}
			}else{
				$file = siteInfo('theme').'/'.$data;
			}
			$prc =& get_instance();
			return $prc->load->view($file, $data);
		}
	}
	
	// Writting Line with Selected Language
	if (!function_exists('l')) {
		function l($key) {
			$prc =& get_instance();
			return $prc->lang->line($key);
		}
	}
	
	// Admin Side Menu Opened and Active Class
	if (!function_exists('sideMunuOpen')) {
		function sideMunuOpen($key, $num = 2) {
			$prc =& get_instance();
			return ($prc->uri->segment($num) == $key)?'active pcoded-trigger':'';
		}
	}
	
	// Admin Side Menu Active Class
	if (!function_exists('sideMunuActive')) {
		function sideMunuActive($key) {
			// $prc =& get_instance();
			return (uri_string() == MyAdmin.$key)?'active':'';
		}
	}
	
	// Making pretty useful Slug
	if (!function_exists('makeSlug')) {
		function makeSlug($text, $postId = FALSE){
			$prc =& get_instance();
			$text = preg_replace('~[^\pL\d]+~u', '-', $text);
			$text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
			$text = preg_replace('~[^-\w]+~', '', $text);
			$text = trim($text, '-');
			$text = preg_replace('~-+~', '-', $text);
			$text = strtolower($text);
			return $prc->Basic_model->checkSlugExist($text, $postId);
		}
	}
	
	if (!function_exists('getCategoryName')) {
		function getCategoryName($catId) {
			$prc =& get_instance();
			return $prc->Basic_model->getCategoryName($catId);
		}
	}
	
	if (!function_exists('deletePostImage')) {
		function deletePostImage($Id) {
			$prc =& get_instance();
			return $prc->Basic_model->deletePostImages($Id);
		}
	}
	
	if (!function_exists('removeCategory')) {
		function removeCategory($Id) {
			$prc =& get_instance();
			return $prc->Basic_model->deleteCategory($Id);
		}
	}
	
	if (!function_exists('num_posts')) {
		function num_posts($type) {
			$prc =& get_instance();
			return $prc->Basic_model->countPosts($type);
		}
	}
	
	if (!function_exists('SaveJustMeta')) {
		function SaveJustMeta($key, $value, $type) {
			$prc =& get_instance();
			return $prc->Basic_model->SaveMetaData($key, $value, $type);
		}
	}
	
	if (!function_exists('getMeta')) {
		function getMeta($type, $key) {
			$prc =& get_instance();
			return $prc->Basic_model->getMeta($type, $key);
		}
	}
	
	if (!function_exists('SavePostMeta')) {
		function SavePostMeta($key, $value, $type) {
			$prc =& get_instance();
			return $prc->Basic_model->SavePostMetaData($key, $value, $type);
		}
	}

	if (!function_exists('auth')) {
		function auth() {
			$prc =& get_instance();
			$result = $prc->Basic_model->checkUserIsLogin();
			if($result == 0){ // Is LoggedOut
				redirect('p-login.php');
			}elseif($result == 2){ // Is InActive
				redirect('p-login.php/password?redirect='.current_url());
			}
		}
	}

	if (!function_exists('userEmail2Id')) {
		function userEmail2Id($email) {
			$prc =& get_instance();
			return $prc->Basic_model->getUserIdFromEmail($email);
		}
	}

	if (!function_exists('multiUploads')) {
		function multiUploads($postId = FALSE) {
			$prc =& get_instance();
			$prc->load->model('Images_model');
			return $prc->Images_model->uploadMultipleImage($postId);
		}
	}

	if (!function_exists('doUpload')) {
		function doUpload() {
			$prc =& get_instance();
			return $prc->Basic_model->uploadImage();
		}
	}

	if (!function_exists('validateAPI')) {
		function validateAPI($validateAPI = FALSE) {
			header('Content-Type: application/json');
			$prc =& get_instance();
			$array = $prc->Basic_model->validateAPI($validateAPI);
			if($array && is_array($array)){
				if(strtotime($array['api_valid']) < strtotime(Date('Y/m/d'))){
					header('HTTP/1.1 401 Unauthorized', true, 401);
					$data['status'] = false;
					$data['message'] = 'API token expires';
					echo json_encode($data);
					die;
				}
			}else{
				header('HTTP/1.1 401 Unauthorized', true, 401);
				$data['status'] = false;
				$data['message'] = 'Unauthorized API Access';
				echo json_encode($data);
				die;
			}
		}
	}

	if (!function_exists('postsMeta')) {
		function postsMeta($post, $key) {
			$prc =& get_instance();
			return $prc->Basic_model->GetPostsMeta($post, $key);
		}
	}

	if (!function_exists('callFunction')) {
		function callFunction($model, $function, $array = FALSE){
			$prc =& get_instance();
			$prc->load->model($model);
			return $prc->$model->$function($array);
		}
	}

	if (!function_exists('changePostStatus')) {
		function changePostStatus($post, $status){
			$prc =& get_instance();
			return $prc->Basic_model->changePostStatus($post, $status);
		}
	}

	if (!function_exists('categoriesByType')) {
		function categoriesByType($type, $parent = FALSE, $limit = FALSE) {
			$prc =& get_instance();
			return $prc->Basic_model->getCategoriesByType($type, $parent, $limit);
		}
	}

	if (!function_exists('categories')) {
		function categories($slug) {
			$prc =& get_instance();
			return $prc->Basic_model->getSingleCategories($slug);
		}
	}
	
	function pEncrypt($data){
		$key = 'CKXH2U9RPY3EFD70TLS1ZG4N8WQBOVI6AMJ5';
		$method = 'aes-128-ctr';
		$iv_bytes = openssl_cipher_iv_length($method);
		if(!$key) {
			$key = php_uname(); // default encryption key if none supplied
		}
		if(ctype_print($key)) {
			$encKey = openssl_digest($key, 'SHA256', TRUE);
		} else {
			$encKey = $key;
		}
		if($method) {
			if(!in_array(strtolower($method), openssl_get_cipher_methods())) {
				die(__METHOD__ . ": unrecognised cipher method: {$method}");
			}
		}
		
		$iv = openssl_random_pseudo_bytes($iv_bytes);
		return str_replace('=', '', bin2hex($iv) . openssl_encrypt($data, $method, $encKey, 0, $iv));
	}
	
	function pEecrypt($data){
		$key = 'CKXH2U9RPY3EFD70TLS1ZG4N8WQBOVI6AMJ5';
		$method = 'aes-128-ctr';
		$iv_bytes = openssl_cipher_iv_length($method);
		if(!$key) {
			$key = php_uname(); // default encryption key if none supplied
		}
		if(ctype_print($key)) {
			$encKey = openssl_digest($key, 'SHA256', TRUE);
		} else {
			$encKey = $key;
		}
		if($method) {
			if(!in_array(strtolower($method), openssl_get_cipher_methods())) {
				die(__METHOD__ . ": unrecognised cipher method: {$method}");
			}
		}
		$iv_strlen = 2  * $iv_bytes;
		if(preg_match("/^(.{" . $iv_strlen . "})(.+)$/", $data, $regs)) {
			list(, $iv, $crypted_string) = $regs;
			if(ctype_xdigit($iv) && strlen($iv) % 2 == 0) {
				return openssl_decrypt($crypted_string, $method, $encKey, 0, hex2bin($iv));
			}
		}
		return FALSE;
	}
	
	if (!function_exists('getAddress')) {
		function getAddress($id){
			$prc =& get_instance();
			return $prc->Basic_model->getAddress($id);
		}
	}

	function array_sort($array, $on, $order=SORT_ASC){
		$new_array = array();
		$sortable_array = array();
		if (count($array) > 0) {
			foreach ($array as $k => $v) {
				if (is_array($v)) {
					foreach ($v as $k2 => $v2) {
						if ($k2 == $on) {
							$sortable_array[$k] = $v2;
						}
					}
				} else {
					$sortable_array[$k] = $v;
				}
			}
			switch($order) {
				case SORT_ASC:
					asort($sortable_array);
					break;
				case SORT_DESC:
					arsort($sortable_array);
					break;
			}
			foreach ($sortable_array as $k => $v){
				$new_array[$k] = $array[$k];
			}
		}
		return $new_array;
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	