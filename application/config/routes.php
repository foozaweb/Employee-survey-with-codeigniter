<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
$route['(:any)']	=	'home/index/$1';
$route['default_controller'] = 'Home/index';
$route['Home'] = 'Home/index'; 
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
