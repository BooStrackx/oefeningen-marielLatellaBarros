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
//$route['default_controller'] = 'welcome';
//$route['404_override'] = '';
//$route['translate_uri_dashes'] = FALSE;


//Using custom routing rules, you have the power to map any URI to any controller and method,
// and break free from the normal convention:
// http://example.com/[controller-class]/[controller-method]/[arguments]

//CodeIgniter reads its routing rules from top to bottom and routes the request to the first matching rule.
// Each rule is a regular expression (left-side) mapped to a controller and method name separated by slashes (right-side).
// When a request comes in, CodeIgniter looks for the first match, and calls the appropriate controller and method,
// possibly with arguments.
//$route['default_controller'] = 'pages/view';

//Here, the second rule in the $routes array matches any request using the wildcard string (:any).,
// and passes the parameter to the view() method of the Pages class.
//Now visit index.php/about. Did it get routed correctly to the view() method in the pages controller? Awesome!
//$route['(:any)'] = 'pages/view/$1';

//Update after creatin the News site:

$route['news/(:any)'] = 'news/view/$1';
$route['news'] = 'news';
$route['(:any)'] = 'pages/view/$1';
$route['default_controller'] = 'pages/view';
