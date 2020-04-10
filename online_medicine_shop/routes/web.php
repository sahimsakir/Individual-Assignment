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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/website', 'WebsiteController@index');

Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', 'LoginController@verify');
Route::get('/registration', 'RegistrationController@index');
Route::post('/registration', 'RegistrationController@register');
Route::get('/logout', 'LogoutController@index');


Route::group(['middleware'=>['sess']], function(){

	Route::get('/home', 'HomeController@admin_index')->name('home.admin_index');
	Route::get('/home', 'HomeController@customer_index')->name('home.customer_index');
	Route::get('/home/admin_profile/{id}', 'HomeController@admin_profile')->name('home.admin_profile');
	Route::get('/home/admin_medicineList', 'HomeController@admin_medicineList')->name('home.admin_medicineList');
	Route::get('/home/customer_medicineList', 'HomeController@customer_medicineList')->name('home.customer_medicineList');
	Route::get('/home/customer_orderList', 'HomeController@customer_orderList')->name('home.customer_orderList');
	Route::get('/home/admin_medicineDetails/{id}', 'HomeController@admin_medicineDetails')->name('home.admin_medicineDetails');
	Route::get('/home/customer_medicineDetails/{id}', 'HomeController@customer_medicineDetails')->name('home.customer_medicineDetails');
	Route::get('/home/customer_addTocart/{id}', 'HomeController@customer_addTocart')->name('home.customer_addTocart');
	Route::post('/home/customer_addTocart/{id}', 'HomeController@customer_addIncart');
	Route::get('/home/customer_orderNow/{id}', 'HomeController@customer_orderNow')->name('home.customer_orderNow');
	Route::get('/home/customer_payment/{id}', 'HomeController@customer_orderConfirm')->name('home.customer_payment');
	Route::post('/home/customer_payment/{id}', 'HomeController@customer_pay');
	Route::get('/home/customer_acceptedOrderList', 'HomeController@customer_acceptedOrderList')->name('home.customer_acceptedOrderList');
	Route::get('/home/customer_pendingOrderList', 'HomeController@customer_pendingOrderList')->name('home.customer_pendingOrderList');

	Route::get('/home/admin_customerList', 'HomeController@admin_customerList')->name('home.admin_customerList');

	
		Route::get('/home/admin_addMedicine', 'HomeController@add_Medicine')->name('home.admin_addMedicine');
		Route::post('/home/admin_addMedicine', 'HomeController@create_Medicine');
		Route::get('/home/admin_medicineEdit/{uname}', 'HomeController@admin_medicineEdit')->name('home.admin_medicineEdit');
		Route::post('/home/admin_medicineEdit/{id}', 'HomeController@admin_medicineUpdate');
		Route::get('/home/admin_medicineDelete/{id}', 'HomeController@admin_medicineDelete')->name('home.admin_medicineDelete');
		Route::post('/home/admin_medicineDelete/{id}', 'HomeController@admin_medicineDestroy');

		Route::get('/home/admin_customerDelete/{id}', 'HomeController@admin_customerDelete')->name('home.admin_customerDelete');
		Route::post('/home/admin_customerDelete/{id}', 'HomeController@admin_customerDestroy');
	
});

Route::resource('accounts', 'AccountController');
Route::resource('accounttype', 'AccountTypeController');