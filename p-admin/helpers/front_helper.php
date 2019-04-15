<?php
	
	// SEO Meta Tags
	if (!function_exists('seoTags')) {
		function seoTags($title, $copyright, $description, $keywords, $robots, $DCtitle, $Generator, $Author, $MobileOptimized, $HandheldFriendly) {
			return $tags = "<meta name=\"title\" content=\"".$title."\" />
		<meta name=\"copyright\" content=\"".$copyright."\" />
		<meta name=\"description\" content=\"".$description."\" />
		<meta name=\"keywords\" content=\"".$keywords."\" />
		<meta name=\"robots\" content=\"".$robots."\" />
		<meta name=\"DC.title\" content=\"".$DCtitle."\" />
		<meta name=\"Generator\" content=\"".$Generator."\" />
		<meta name=\"Author\" content=\"".$Author."\" />
		<meta name=\"MobileOptimized\" content=\"".$MobileOptimized."\" />
		<meta name=\"HandheldFriendly\" content=\"".$HandheldFriendly."\" />\n";
		}
	}
	
	// Get Dynamic CSS for header
	if (!function_exists('site_header')) {
		function site_header() {
			$prc =& get_instance();
			$head = "\n";
			$headersCss = $prc->Basic_model->getSiteHeader('css');
			foreach($headersCss as $css){
				$head.='<link rel="stylesheet" type="text/css" href="'.$css['meta_value']."'>\n";
			}
			return $head;
		}
	}
	
	// Get Dynamic JS for footer
	if (!function_exists('site_footer')) {
		function site_footer() {
			$prc =& get_instance();
			$foot = "\n";
			$headersJs = $prc->Basic_model->getSiteHeader('js');
			foreach($headersJs as $js){
				$foot.="<script type='text/javascript' src='".$js['meta_value']."'></script>\n";
			}
			return $foot;
		}
	}
	
	// Posts list view
	if (!function_exists('get_all_posts')) {
		function get_all_posts($data = array('limit'=>'10', 'offset'=>false, 'type'=>false, 'sort'=>'desc', 'join'=>array('table'=>'', 'condition'=>''))) {
			$prc =& get_instance();
			return $prc->Basic_model->getPosts($data['limit'], $data['offset'], $data['type'], $data['sort'], $data['join']);
		}
	}
	
	// Posts comments view
	if (!function_exists('posts_comments')) {
		function posts_comments($id) {
			$prc =& get_instance();
			$headersJs = $prc->Basic_model->getSiteHeader('js');
			return '';
		}
	}
	
	// Posts Read more
	if (!function_exists('similar_posts')) {
		function similar_posts($id, $type, $limit, $join = array('table'=>'', 'condition'=>'')) {
			$prc =& get_instance();
			return $prc->Basic_model->getSimilarPosts($id, $type, $limit, $join);
		}
	}
	
	// Posts Read more
	if (!function_exists('posts_read_more')) {
		function posts_read_more($slug, $join = array('table'=>'', 'condition'=>'')) {
			$prc =& get_instance();
			return $prc->Basic_model->getSinglePosts($slug, $join);
		}
	}
	
	// Contact Us Form
	if (!function_exists('contact_us_form')) {
		function contact_us_form($attributes = array('form' => array(),'name' => '','email' => '','phone' => '','textarea' => '','upload' => '','submit' => '','reset' => '','isFile'=>true)) {
			$prc =& get_instance();
			if(isset($_POST['sendContactDetail'])){
				$saveContact = $prc->Basic_model->saveContactData('');
				if($saveContact){
					$prc->session->set_flashdata('_contact_flash', 'Your detail has been successfully submitted.');
				}else{
					$prc->session->set_flashdata('_contact_flash', 'Unable to save data. Please try again.');
				}
			}
			// echo form_open_multipart('', $attributes['form']);
				// echo form_input(array('name'=>'name','placeholder'=>'Name', 'class'=>$attributes['name']));
				// echo form_input(array('name'=>'email','placeholder'=>'Email', 'class'=>$attributes['email']));
				// echo form_input(array('name'=>'phone','placeholder'=>'Phone Number', 'class'=>$attributes['phone']));
				// echo form_textarea(array('name'=>'message','placeholder'=>'Message', 'class'=>$attributes['textarea']));
				// if($attributes['isFile'] == true){
					// echo form_upload(array('name'=>'userfile','placeholder'=>'Please Select File', 'class'=>$attributes['upload']));
				// }
				// echo form_submit('sendContactDetail', 'Send', "class='".$attributes['submit']."'");
				// echo form_reset('reset', 'Reset', "class='".$attributes['reset']."'");
			// echo form_close();
		}
	}
	
	// Navigation Menu
	if (!function_exists('navigation_menus')) {
		function navigation_menus($ul = FALSE, $li = FALSE) {
			$prc =& get_instance();
			$menus = "<ul class='".$ul."'>\n";
			$headersMenu = $prc->Basic_model->getSiteMenus();
			foreach($headersMenu as $menu){
				$getMenu = $menu['meta_value'];
				$arrayMenu = explode('{}', $getMenu);
				$menus.='<li class="'.$li.' '.((current_url()==base_url($arrayMenu[1]))?"active":"").'"><a href="'.base_url($arrayMenu[1]).'">'.$arrayMenu[0].'</a></li>';
			}
			$menus.='</ul>';
			return $menus;
		}
	}
	
	
	