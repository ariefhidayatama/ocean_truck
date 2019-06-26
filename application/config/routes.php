<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'Home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['administrator'] = 'Login';
$route['page/(:any)'] = "page/index";

$route['contact-us'] = 'Home/contact';
$route['about-us'] = 'Home/about';
$route['equipment'] = 'Home/equipment';
$route['galeri-foto'] = 'Home/galeri_foto';
$route['galeri-video'] = 'Home/galeri_video';
$route['news'] = 'Home/news';

$route['home/detail-artikel/(:any)'] = "Home/detail/$1";
$route['home/detail-info/(:any)'] = "Home/detail_info/$1";
