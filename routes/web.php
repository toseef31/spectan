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
Route::get('/','frontend\HomeController@index');
// Route::get('/', function () {
//     return view('frontend.index');
// });
Route::group(['prefix' => 'spectan'], function () {
Route::get('/blog','frontend\HomeController@blogs');
Route::get('/blog-details/{id}','frontend\HomeController@blogDetails');
Route::post('/contactUs','frontend\HomeController@contactUs');

Route::get('/personal-returns', function () {
    return view('frontend.personal-returns');
});
Route::get('/business-returns', function () {
  return view('frontend.business-returns');
});
Route::get('/business-return-quote', function () {
  return view('frontend.business-return-quote');
});
Route::get('/individual', function () {
    return view('frontend.individual');
});
Route::get('/faq', function () {
  return view('frontend.faq');
});
Route::get('/contact-us', function () {
    return view('frontend.contact-us');
});
Route::get('/get-a-quote', function () {
    return view('frontend.get-a-quote');
});

Route::get('/about-us', function () {
    return view('frontend.about-us');
});
Route::get('/make-payment', function () {
    return view('frontend.make-payment');
});
});

/////////////////////////////// Admin //////////////////////////////
Route::match(['get','post'],'/admin/login', 'Admin\AdminController@admin_login');
Route::group(['middleware' => ['auth'=>'admin']], function () {
Route::group(['prefix' => 'dashboard'], function () {
	Route::get('/', function(){
		return view('/admin.index');
	 });
Route::match(['get','post'],'/logout', 'Admin\AdminController@logout');
Route::match(['get','post'],'/view_admins','Admin\AdminController@all_admin');
Route::match(['get','post'],'admin/add','Admin\AdminController@addEditAdmin');
Route::match(['get','post'],'admin/edit/{id}','Admin\AdminController@addEditAdmin');
Route::delete('admin/delete','Admin\AdminController@deleteAdmin');
///////////////////// Clients ////////////////////////
Route::match(['get','post'],'/view_customers','Admin\AdminController@all_customers');
Route::match(['get','post'],'customer/add','Admin\AdminController@addEditCustomer');
Route::match(['get','post'],'customer/edit/{id}','Admin\AdminController@addEditCustomer');
Route::delete('customer/delete','Admin\AdminController@deleteCustomer');

Route::match(['get','post'],'/FAQ','Admin\AdminController@addEditFAQ');
Route::get('/get_all_tutors/{id}','Admin\AdminController@getTutorList');
Route::post('AssignTutor','Admin\AdminController@AssignTutor');
Route::get('/DeleteAssignTutor/{id}/{tutor_id}','Admin\AdminController@DeleteAssignTutor');
//////////////////// Blogs ////////////////////////
Route::get('/blogs', 'Admin\AdminController@blogs');
Route::get('/blog/create', 'frontend\BlogController@create');
Route::get('/blog/edit/{id}', 'frontend\BlogController@edit');
Route::delete('/blog/delete', 'frontend\BlogController@destroy');
Route::post('/blog/store', 'frontend\BlogController@store');
 });
});
