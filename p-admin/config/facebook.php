<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config['facebook_app_id']              = '362971560961759';
$config['facebook_app_secret']          = '1c9c01967f6741b450450bc301992221';
$config['facebook_login_type']          = 'web';
$config['facebook_login_redirect_url']  = 'login';
$config['facebook_logout_redirect_url'] = 'p-logout.php?logout=true';
$config['facebook_permissions']         = array('public_profile', 'email');
$config['facebook_graph_version']       = 'v2.6';
$config['facebook_auth_on_load']        = TRUE;
