<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//////////////////// Authentication////////////////////
$route['p-login.php'] = 'auth/authLogin';
$route['p-logout.php'] = 'auth/logout_all';
$route['p-admin/login.php'] = 'auth/doLogin';
$route['p-forgot-password.php'] = 'auth/authForgot';
$route['p-login.php/auth/(:any)/ipatco/admin/login/(:any)/secure/(:any)'] = 'auth/authLogin';
$route['p-admin/forgot.php'] = 'auth/authForgot';
$route['p-admin/reset.php'] = 'auth/resetMyPassword';


//////////////////// Images ////////////////////
$route['p-admin/images/upload/(:num)'] = 'images/UploadImages/$1';
$route['p-admin/image/upload/(:num)'] = 'images/UploadImage/$1';
$route['p-admin/images/upload'] = 'images/UploadImages';
$route['p-admin/image/upload'] = 'images/UploadImage';


//////////////////// Admin Panel ////////////////////

// Dashboard
$route['p-admin/dashboard'] = 'admins/dashboard';

// File Manager
$route['p-admin/fm'] = 'admins/fileManager';

// User Section
$route['p-admin/users/add'] = 'user/create';
$route['p-admin/users/edit/(:num)'] = 'user/update/$1';
$route['p-admin/users/delete/(:num)'] = 'user/remove/$1';
$route['p-admin/users/list'] = 'user/listing';
$route['p-admin/users/list/(:num)'] = 'user/listing/$1';
$route['p-admin/users/api-token'] = 'auth/GenerateNewApiToken';
$route['p-admin/users/api-token/delete/(:num)/(:any)'] = 'auth/deleteApiToken/$1/$2';

$route['p-admin/profile'] = 'user/viewProfile';
$route['p-admin/profile/(:any)'] = 'user/viewProfile/1/$1';

// Blog Section
$route['p-admin/blogs/add'] = 'blogs/create';
$route['p-admin/blogs/edit/(:num)'] = 'blogs/update/$1';
$route['p-admin/blogs/delete/(:num)'] = 'blogs/remove/$1';
$route['p-admin/blogs/list'] = 'blogs/listing';
$route['p-admin/blogs/list/(:num)'] = 'blogs/listing/$1';

// Settings Section
$route['p-admin/settings/general'] = 'settings/general';
$route['p-admin/settings/mail'] = 'settings/mailServer';
$route['p-admin/settings/reading'] = 'settings/reading';
$route['p-admin/settings/media'] = 'settings/media';

// List All Data from Contact Data
$route['p-admin/contact-data'] = 'admins/contactForm';
$route['p-admin/contact-single'] = 'admins/contactFormData';

// Pages Section
$route['p-admin/pages/add'] = 'pages/create';
$route['p-admin/pages/edit/(:num)'] = 'pages/update/$1';
$route['p-admin/pages/delete/(:num)'] = 'pages/remove/$1';
$route['p-admin/pages/list'] = 'pages/listing';
$route['p-admin/pages/list/(:num)'] = 'pages/listing/$1';

















