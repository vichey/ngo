<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/admin',"HomeController@index");
Route::get('/admin/dashboard',"HomeController@index");
Route::get('/',"FrontController@index");
// staff admin
Route::get('/admin/staff', "StaffController@index");
Route::get('/admin/staff/create', "StaffController@create");
Route::get('/admin/staff/edit/{id}', "StaffController@edit");
Route::get('/admin/staff/delete/{id}', "StaffController@delete");
Route::post('/admin/staff/save', "StaffController@save");
Route::post('/admin/staff/update', "StaffController@update");

Auth::routes();
// Logo
Route::get('/logo', "LogoController@index");
Route::get('/logo/create', "LogoController@create");
Route::post('/logo/save', "LogoController@save");
Route::get('/logo/edit/{id}', "LogoController@edit");
Route::post('/logo/update', "LogoController@update");
// Slide 
Route::get('/slide', "SlideController@index");
Route::get('/slide/create', "SlideController@create");
Route::post('/slide/save', "SlideController@save");
Route::get('/slide/edit/{id}', "SlideController@edit");
Route::post('/slide/update', "SlideController@update");
Route::get('/slide/delete/{id}', "SlideController@delete");
// donor
Route::get('/donor', "PartnerController@index");
Route::get('/donor/create', "PartnerController@create");
Route::get('/donor/edit/{id}', "PartnerController@edit");
Route::get('/donor/delete/{id}', "PartnerController@delete");
Route::post('/donor/save', "PartnerController@save");
Route::post('/donor/update', "PartnerController@update");

Route::get('/home', 'HomeController@index')->name('home');
// detail page
Route::get('/news-and-education/detail/{id}', 'FrontController@detail');
Route::get('/new-and-education', 'FrontController@page_by_category');
// user route
Route::get('/user', "UserController@index");
Route::get('/user/profile', "UserController@load_profile");
Route::get('/user/reset-password', "UserController@reset_password");
Route::post('/user/change-password', "UserController@change_password");
Route::get('/user/finish', "UserController@finish_page");
Route::post('/user/update-profile', "UserController@update_profile");
Route::get('/user/delete/{id}', "UserController@delete");
Route::get('/user/create', "UserController@create");
Route::post('/user/save', "UserController@save");
Route::get('/user/edit/{id}', "UserController@edit");
Route::post('/user/update', "UserController@update");
Route::get('/user/update-password/{id}', "UserController@load_password");
Route::post('/user/save-password', "UserController@update_password");
Route::get('/user/branch/{id}', "UserController@branch");
Route::post('/user/branch/save', "UserController@add_branch");
Route::get('/user/branch/delete/{id}', "UserController@delete_branch");

// role
Route::get('/role', "RoleController@index");
Route::get('/role/create', "RoleController@create");
Route::post('/role/save', "RoleController@save");
Route::get('/role/delete/{id}', "RoleController@delete");
Route::get('/role/edit/{id}', "RoleController@edit");
Route::post('/role/update', "RoleController@update");
Route::get('/role/permission/{id}', "PermissionController@index");
Route::post('/rolepermission/save', "PermissionController@save");

// catogory
Route::get('/category', "CategoryController@index");
Route::get('/category/create', "CategoryController@create");
Route::get('/category/edit/{id}', "CategoryController@edit");
Route::get('/category/delete/{id}', "CategoryController@delete");
Route::post('/category/save', "CategoryController@save");
Route::post('/category/update', "CategoryController@update");

// Page
Route::get('/page', "PageController@index");
Route::get('/page/create', "PageController@create");
Route::post('/page/save', "PageController@save");
Route::get('/page/delete/{id}', "PageController@delete");
Route::get('/page/edit/{id}', "PageController@edit");
Route::post('/page/update', "PageController@update");
Route::get('/page/view/{id}', "PageController@view");

// Page
Route::get('/announcement', "AnnouncementController@index");
Route::get('/announcement/create', "AnnouncementController@create");
Route::post('/announcement/save', "AnnouncementController@save");
Route::get('/announcement/delete/{id}', "AnnouncementController@delete");
Route::get('/announcement/edit/{id}', "AnnouncementController@edit");
Route::post('/announcement/update', "AnnouncementController@update");
Route::get('/announcement/view/{id}', "AnnouncementController@view");
// load front page
Route::get('/page/{id}', "FrontPageController@index");

// front page
// Route::get('/page/about', "FrontPageController@about");
// Route::get('/page/contact', "FrontPageController@contact");
// Route::get('/page/staff', "FrontPageController@staff");
// // test
// Route::get('/test', "TestController@index");

// // Post
// Route::get('/post', "PostController@index");
// Route::get('/post/create', "PostController@create");
// Route::get('/post/create/new', "PostController@create");
// Route::post('/post/save', "PostController@save");
// Route::get('/post/delete/{id}', "PostController@delete");
// Route::get('/post/edit/{id}', "PostController@edit");
// Route::post('/post/update', "PostController@update");
// Route::get('/post/view/{id}', "PostController@view");