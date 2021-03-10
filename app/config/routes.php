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
if(FRONTEND_STATUS){
	$route['default_controller'] = THEME_FRONTEND;
}else{
	$route['default_controller'] = THEME_FRONTEND."/login";
}

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['login'] = THEME_FRONTEND.'/login';
$route['signup'] = THEME_FRONTEND.'/signup';
$route['pricing'] = THEME_FRONTEND.'/pricing';
$route['privacy_policy'] = THEME_FRONTEND.'/privacy_policy';
$route['terms_and_policies'] = THEME_FRONTEND.'/terms_and_policies';
$route['forgot_password'] = THEME_FRONTEND.'/forgot_password';
$route['recovery_password/(:any)'] = THEME_FRONTEND.'/recovery_password';
$route['activation/(:any)'] = THEME_FRONTEND.'/activation';
$route['reset_password'] = THEME_FRONTEND.'/reset_password';
$route['login/(:any)'] = THEME_FRONTEND.'/social_login';
$route['timezone'] = THEME_FRONTEND.'/timezone';

$route['account_manager'] = 'account_manager';
$route['appearance'] = 'appearance';
$route['beamer'] = 'beamer';
$route['caption'] = 'caption';
$route['cronjobs'] = 'cronjobs';
$route['dashboard'] = 'dashboard';
$route['email'] = 'email';
$route['file_manager'] = 'file_manager';
$route['group_manager'] = 'group_manager';
$route['language'] = 'language';
$route['load'] = 'load';
$route['module'] = 'module';
$route['social_page'] = 'social_page';
$route['package_manager'] = 'package_manager';
$route['proxy_advance_manager'] = 'proxy_advance_manager';
$route['profile'] = 'profile';
$route['proxy_manager'] = 'proxy_manager';
$route['schedules'] = 'schedules';
$route['settings'] = 'settings';
$route['social_network_configuration'] = 'social_network_configuration';
$route['social_page'] = 'social_page';
$route['user_manager'] = 'user_manager';
$route['watermark'] = 'watermark';
$route['post'] = 'post';


$route['facebook_groups']='facebook_groups';
$route['facebook_livestream']='facebook_livestream';
$route['facebook_pages']='facebook_pages';
$route['facebook_post']='facebook_post';
$route['facebook_profiles']='facebook_profiles';
$route['google_my_business_post']='google_my_business_post';
$route['google_my_business_profiles']='google_my_business_profiles';
$route['instagram_activity']='instagram_activity';
$route['instagram_post']='instagram_post';
$route['instagram_profiles']='instagram_profiles';
$route['linkedin_pages']='linkedin_pages';
$route['linkedin_post']='linkedin_post';
$route['linkedin_profiles']='linkedin_profiles';
$route['pinterest_activity']='pinterest_activity';
$route['pinterest_boards']='pinterest_boards';
$route['pinterest_post']='pinterest_post';
$route['post']='post';
$route['twitter_post']='twitter_post';
$route['twitter_profiles']='twitter_profiles';
$route['youtube_post']='youtube_post';
$route['youtube_profiles']='youtube_profiles';
$route['lang/([a-zA-Z]+)']=THEME_FRONTEND.'/lang/$1';
$route['ajax/(:any)']['post'] =  THEME_FRONTEND.'/ajax/$1';

$route['(:any)'] =  THEME_FRONTEND.'/$1';
