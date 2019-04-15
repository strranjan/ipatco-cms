<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Main Page
$route['default_controller'] = 'website';

// Listing Categories
$route['category/(:any)'] = 'website/category/$1';

// Social Login
$route['p-google.php'] = 'website/googleLogin';
$route['p-google.php/callback'] = 'website/googleLoginCallBack';

// pages with Slug
$route['(:any).php'] = 'website/openPage/$1';
$route['(:any)'] = 'website/openPage/$1';