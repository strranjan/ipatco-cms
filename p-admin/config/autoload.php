<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$autoload['packages'] = array();

$autoload['libraries'] = array('database', 'email', 'session', 'form_validation', 'upload', 'email', 'pagination', 'image_lib', 'admin');

$autoload['drivers'] = array();

$autoload['helper'] = array('url', 'file', 'p_functions', 'front', 'string', 'text', 'cookie');

$autoload['config'] = array();

$autoload['language'] = array();

$autoload['model'] = array('Basic_model', 'Admin_model', 'Auth_model');
