<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Backend';
$route['404_override'] = '';
//$route['translate_uri_dashes'] = FALSE;
//$route['validation'] = 'Frontend/registrasi';
//Frontend
//$route['about'] = 'frontend/about';

//Backend
/*$route['backend/adminweb/login'] = 'backend/adminweb/Backend';
$route['backend/adminweb/loginprocess'] = 'backend/adminweb/Backend/loginprocess';
$route['backend/adminweb/home'] = 'backend/adminweb/Backend/home';
$route['backend/adminweb/loginpage'] = 'backend/adminweb/Backend/loginpage';
$route['backend/adminweb/logout'] = 'backend/adminweb/Backend/logout';
$route['backend/adminweb/addartikel'] = 'backend/adminweb/Backend/addartikel';
$route['backend/adminweb/addartikelprocess'] = 'backend/adminweb/Backend/addartikelprocess';
$route['backend/adminweb/addadminprocess'] = 'backend/adminweb/Backend/addadminprocess';
$route['backend/adminweb/addlowonganprocess'] = 'backend/adminweb/Backend/addlowonganprocess';
$route['backend/adminweb/addadmin'] = 'backend/adminweb/Backend/addadmin';
$route['backend/adminweb/addlowongan'] = 'backend/adminweb/Backend/addlowongan';
$route['backend/adminweb/lihatartikel'] = 'backend/adminweb/Backend/lihatartikel';
$route['backend/adminweb/lihatartikel'] = 'backend/adminweb/Backend/lihatartikel';
$route['backend/adminweb/lihatadmin'] = 'backend/adminweb/Backend/lihatadmin';
$route['backend/adminweb/lihatlowongan'] = 'backend/adminweb/Backend/lihatlowongan';*/

//Backend
/*$route['backend/adminweb/loginprocess'] = 'backend/Backend/loginprocess';
$route['backend/adminweb/home'] = 'backend/Backend/home';
$route['backend/adminweb/loginpage'] = 'backend/Backend/loginpage';
$route['backend/adminweb/logout'] = 'backend/Backend/logout';
$route['backend/adminweb/addartikel'] = 'backend/Backend/addartikel';
$route['backend/adminweb/addartikelprocess'] = 'backend/Backend/addartikelprocess';
$route['backend/adminweb/addadminprocess'] = 'backend/Backend/addadminprocess';
$route['backend/adminweb/addlowonganprocess'] = 'backend/Backend/addlowonganprocess';
$route['backend/adminweb/addadmin'] = 'backend/Backend/addadmin';
$route['backend/adminweb/addlowongan'] = 'backend/Backend/addlowongan';
$route['backend/adminweb/lihatartikel'] = 'backend/Backend/lihatartikel';
$route['backend/adminweb/lihatartikel'] = 'backend/Backend/lihatartikel';
$route['backend/adminweb/lihatadmin'] = 'backend/Backend/lihatadmin';
$route['backend/adminweb/lihatlowongan'] = 'backend/Backend/lihatlowongan';*/
