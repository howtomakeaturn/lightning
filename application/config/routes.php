<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$url_host = $_SERVER['HTTP_HOST'];
$url_segments = explode('.', $url_host);

if ( (count($url_segments)==2) || ( (count($url_segments)==3) && $url_segments[0]=='www') ){
    $route['default_controller'] = "intro";
    $route['404_override'] = '';  
}
else if (count($url_segments)==3){
    $route['default_controller'] = "common"; 
    $route['about'] = 'common/about';
    $route['blog'] = 'common/blog';
    $route['blog/(:num)'] = "common/blog/$1";
    $route['menu'] = 'common/menu';
    $route['contact'] = 'common/contact';

}
else{
    $route['default_controller'] = "intro";
    $route['404_override'] = '';
}




/* End of file routes.php */
/* Location: ./application/config/routes.php */
