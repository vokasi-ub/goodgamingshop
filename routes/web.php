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

/*Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('admin', function () {
    return view('Admin.loby');
});

Route::get('kategori', function () {
    return view('Dashboard.kategoriadmin');
});

Route::get('user', function () {
    return view('User.homeuser');
});

Route::get('Dashboard.kontenadmin','Admin_controller@index');
Route::resource('admin', 'Admin_Controller');
Route::resource('/brand', 'adminbrand_controller');
Route::resource('/kategori', 'adminkategori_controller');
Auth::routes();

Route::group(['middleware'=>'auth'],function(){
//KATEGORI---------------------------------------------------------------------------------------
	Route::post('/tambahkategori','adminkategori_controller@store');
	Route::post('/kategori/update','adminkategori_controller@update');
	Route::get('kategori/destroy/{id}','adminkategori_controller@destroy');
	Route::get('/kategoritambah', 'adminkategori_controller@create')->name('Dashboard.kategoritambah');
	Route::get('/kategori/edit/{id}','Adminkategori_controller@edit');
	//-----------------------------------------------------------------------------------------------
	//BRAND-----------------------------------------------------------------------------------------
	Route::get('/brandtambah', 'adminbrand_controller@create')->name('Dashboard.brandtambah');
	Route::post('/tambahbrand','adminbrand_controller@store');
	Route::get('/brand/edit/{id}','adminbrand_controller@edit');
	Route::post('/brand/update','adminbrand_controller@update');
	Route::get('brand/destroy/{id}','adminbrand_controller@destroy');
	//----------------------------------------------------------------------------------------------
	//produk----------------------------------------------------------------------------------------
	Route::get('/kontentambah', 'Admin_Controller@create')->name('Dashboard.kontentambah');
	Route::post('/tambahkonten','Admin_Controller@store');
	Route::get('/admin/edit/{id}','Admin_Controller@edit');
	Route::post('/admin/update','Admin_Controller@update');
	Route::get('admin/destroy/{id}','Admin_Controller@destroy');

});
//----------------------------------------------------------------------------------------------
Route::get('/konten', 'admin_Controller@index')->name('Dashboard.kontenadmin');
Route::get('/kategori', 'adminkategori_controller@index')->name('Dashboard.kategoriadmin');
Route::get('/brand', 'adminbrand_controller@index')->name('Dashboard.brandadmin');
Route::get('/loby', 'admin_Controller@index')->name('Dashboard.loby');
