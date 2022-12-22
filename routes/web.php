<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('MainPages.index');
// });

 Route::get('/', 'MainController@index')->name('main.home');
 Route::get('/home', 'MainController@index')->name('main.home');
 Route::get('/services/{title}', 'MainController@services')->name('main.services');
 Route::get('/subservice/{title}', 'MainController@subservice')->name('main.subservice');
 Route::get('/aboutus', 'MainController@aboutus')->name('main.aboutus');
 Route::get('/contactus', 'MainController@contactus')->name('main.contactus');
 Route::post('/contact', 'MainController@contact')->name('main.contact');
 Route::get('/careers', 'MainController@careers')->name('main.careers');


// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');












    //Super Admin



Route::group(['prefix'=>'superadmin'], function() {

// Login Routes...
Route::get('login', ['as' => 'superadmin.login', 'uses' => 'SuperAdminAuth\LoginController@showLoginForm']);

 Route::post('login', ['uses' => 'SuperAdminAuth\LoginController@login']);

 Route::post('logout', ['as' => 'superadmin.logout', 'uses' => 'SuperAdminAuth\LoginController@logout']);


// Password Reset Routes...
Route::get('password/reset', ['as' => 'superadmin.password.request', 'uses' => 'SuperAdminAuth\ForgotPasswordController@showLinkRequestForm']);


Route::post('password/email', ['as' => 'superadmin.password.email', 'uses' => 'SuperAdminAuth\ForgotPasswordController@sendResetLinkEmail']);


Route::get('password/reset/{token}', ['as' => 'superadmin.password.reset', 'uses' => 'SuperAdminAuth\ResetPasswordController@showResetForm']);


Route::post('password/reset', ['uses' => 'SuperAdminAuth\ResetPasswordController@reset']);



//Dashboard
Route::get('dashboard', ['as' => 'superadmin.dashboard', 'uses' => 'SuperAdminDashboardController@index']);

//About Us
Route::get('aboutus', ['as' => 'superadmin.aboutus', 'uses' => 'SuperAdminDashboardController@aboutus']);
Route::get('aboutus/edit/{id}', ['as' => 'superadmin.aboutus.edit', 'uses' => 'SuperAdminDashboardController@aboutusEdit']);
Route::post('aboutus/update', ['as' => 'superadmin.aboutus.update', 'uses' => 'SuperAdminDashboardController@Aboutupdate']);
//About Us


//About Us
Route::get('careers', ['as' => 'superadmin.careers', 'uses' => 'SuperAdminDashboardController@careers']);
Route::get('careers/edit/{id}', ['as' => 'superadmin.careers.edit', 'uses' => 'SuperAdminDashboardController@careersEdit']);
Route::post('careers/update', ['as' => 'superadmin.careers.update', 'uses' => 'SuperAdminDashboardController@Careersupdate']);
//About Us



Route::get('resetpassword', ['as' => 'superadmin.resetpassword', 'uses' => 'SuperAdminDashboardController@resetpassword']);
Route::post('passwordreset', ['as' => 'superadmin.passwordreset', 'uses' => 'SuperAdminDashboardController@passwordreset']);

Route::get('slide', ['as' => 'superadmin.slide', 'uses' => 'SlideController@index']);
Route::post('uploadslide', ['as' => 'superadmin.uploadslide', 'uses' => 'SlideController@upload']);
Route::post('deleteslide', ['as' => 'superadmin.deleteslide', 'uses' => 'SlideController@delete']);
Route::get('editslide/{id}', ['as' => 'superadmin.editslide', 'uses' => 'SlideController@edit']);
Route::post('updateslide', ['as' => 'superadmin.updateslide', 'uses' => 'SlideController@update']);


Route::get('testimony', ['as' => 'superadmin.testimony', 'uses' => 'TestimonyController@index']);
Route::post('uploadtestimony', ['as' => 'superadmin.uploadtestimony', 'uses' => 'TestimonyController@upload']);
Route::post('deletetestimony', ['as' => 'superadmin.deletetestimony', 'uses' => 'TestimonyController@delete']);
Route::get('edittestimony/{id}', ['as' => 'superadmin.edittestimony', 'uses' => 'TestimonyController@edit']);
Route::post('updatetestimony', ['as' => 'superadmin.updatetestimony', 'uses' => 'TestimonyController@update']);


//Header Topper
Route::get('header/topper', ['as' => 'superadmin.header.topper', 'uses' => 'HeaderController@topper']);
Route::get('header/topper/edit/{id}', ['as' => 'superadmin.header.topper.edit', 'uses' => 'HeaderController@topper_edit']);
Route::post('header/topper/update', ['as' => 'superadmin.header.topper.update', 'uses' => 'HeaderController@topper_update']);

//Header Grid
Route::get('header/grid', ['as' => 'superadmin.header.grid', 'uses' => 'HeaderController@grid']);
Route::get('header/grid/edit/{id}', ['as' => 'superadmin.header.grid.edit', 'uses' => 'HeaderController@grid_edit']);
Route::post('header/grid/update', ['as' => 'superadmin.header.grid.update', 'uses' => 'HeaderController@grid_update']);



//Header Nav
Route::get('header/nav', ['as' => 'superadmin.header.nav', 'uses' => 'HeaderController@nav']);
Route::get('header/nav/edit/{id}', ['as' => 'superadmin.header.nav.edit', 'uses' => 'HeaderController@nav_edit']);
Route::post('header/nav/update', ['as' => 'superadmin.header.nav.update', 'uses' => 'HeaderController@nav_update']);



//Body Top
Route::get('body/top', ['as' => 'superadmin.body.top', 'uses' => 'BodyController@top']);
Route::get('body/top/edit/{id}', ['as' => 'superadmin.body.top.edit', 'uses' => 'BodyController@top_edit']);
Route::post('body/top/update', ['as' => 'superadmin.body.top.update', 'uses' => 'BodyController@top_update']);

//Service

Route::get('service/index', ['as' => 'superadmin.service.index', 'uses' => 'ServiceController@index']);
Route::post('service/upload', ['as' => 'superadmin.service.upload', 'uses' => 'ServiceController@upload']);
Route::get('service/edit/{id}', ['as' => 'superadmin.service.edit', 'uses' => 'ServiceController@edit']);
Route::post('service/update', ['as' => 'superadmin.service.update', 'uses' => 'ServiceController@update']);
Route::post('service/delete', ['as' => 'superadmin.service.delete', 'uses' => 'ServiceController@delete']);

//Sub Service
Route::get('service/sub/create', ['as' => 'superadmin.service.sub.create', 'uses' => 'ServiceController@subCreate']);
Route::post('service/sub/upload', ['as' => 'superadmin.service.sub.upload', 'uses' => 'ServiceController@subUpload']);
Route::get('service/sub/view', ['as' => 'superadmin.service.sub.view', 'uses' => 'ServiceController@subView']);
Route::get('service/sub/edit/{id}', ['as' => 'superadmin.service.sub.edit', 'uses' => 'ServiceController@subEdit']);
Route::post('service/sub/update', ['as' => 'superadmin.service.sub.update', 'uses' => 'ServiceController@subUpdate']);
Route::post('service/sub/delete', ['as' => 'superadmin.service.sub.delete', 'uses' => 'ServiceController@subDelete']);


//CkeditorUpload
Route::post('ckeditor/upload', ['as' => 'superadmin.ckeditor.upload', 'uses' => 'CkeditorUploadController@upload']);

//Body Info
Route::get('body/info', ['as' => 'superadmin.body.info', 'uses' => 'BodyController@info']);
Route::get('body/info/edit/{id}', ['as' => 'superadmin.body.info.edit', 'uses' => 'BodyController@info_edit']);
Route::post('body/info/update', ['as' => 'superadmin.body.info.update', 'uses' => 'BodyController@info_update']);


//MidBody
Route::get('body/midbody', ['as' => 'superadmin.body.midbody', 'uses' => 'BodyController@midbody']);
Route::get('body/midbody/edit/{id}', ['as' => 'superadmin.body.midbody.edit', 'uses' => 'BodyController@midbody_edit']);
Route::post('body/midbody/update', ['as' => 'superadmin.body.midbody.update', 'uses' => 'BodyController@midbody_update']);



});


