<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['administrator'] = 'Login';
$route['page/(:any)'] ="page/index";

$route['contact-us'] = 'Home/contact';
$route['about-us'] = 'Home/about';
$route['equipment'] = 'Home/equipment';
