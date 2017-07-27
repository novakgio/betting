<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('pages.index');
});



Route::auth();
Route::get('/registered_user','HomeController@afterRegister')->name('registered_user');

Route::get('register/verify/{confirmationCode}', [
    'as' => 'confirmation_path',
    'uses' => 'HomeController@confirmAfterRegister'
]);

Route::post('/sendmessage','HomeController@sendMessage');
Route::get('/logout','HomeController@logout');

Route::get('/contact-us','HomeController@contactUs')->name('contact');
Route::get('/about-us','HomeController@aboutUs');

Route::get('/home', 'HomeController@index');
Route::get('/today_pick','HomeController@today_pick');


Route::get('/admin_side','AdminController@index');
Route::get('/admin_side/changeAuthority/{authority_now}/{user_id}','AdminController@addAuthority');

Route::get('/getAllBets','BetController@yajraDatatable')->name('getAllBets');
Route::get('/admin_side/users','AdminController@getAllUsersView')->name('userview');
Route::get('admin_side/getusersajax','AdminController@getAllUsers')->name('getallusers');

Route::resource('/admin_side/pick','BetController');