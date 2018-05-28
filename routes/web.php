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

Route::get('/'
, function () {
    return view('index');
});

Route::get('/template', function (){
    return view('template');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'ProfileController@getProfile')->middleware('auth');

Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider')->where(['provider' => 'facebook|google']);
Route::get('login/{provider}/callback', 'Auth\LoginController@handleProviderCallback')->where(['provider' => 'facebook|google']);

Route::get('/setPass', function() {
    return view('auth.setPass');
});

Route::get('/index', function() {
    return view('index');
})->name('index');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/shop', function(){
    return view('shop');
});

Route::get('/search', function() {
    return view('search');
  });


Route::get('/phone/{id}', 'PhoneController@singlephone');

Route::get('searcher','DemoController@liveSearch');        

Route::get('/shopping', 'PhoneController@index');

Route::get('/addToCart/{id}', 'CartController@addToCart');

Route::get('/cartDestroy', 'CartController@destroyCart');
Route::get('/cart', 'CartController@showCart');
Route::get('/cart/{id}', 'CartController@deleteCartItem');

Route::get('/shipmentDetails', 'ShipmentDetailsController@createShipmentDetailsView')->middleware('auth');

Route::get('/checkout', 'CheckoutController@goToCheckout')->middleware('auth', 'emptyCart', 'shipmentDetails');

Route::get('/showDevice/{id}', 'PhoneController@showSingle');

Route::post('/insertShipmentDetails', 'ShipmentDetailsController@storeDetails')->name('insertShipmentDetails')->middleware('auth');

Route::get('/afterPay', 'CartController@makeOrder');


Route::get('/device', function (){
    return view('device');
});

Route::get('/admin', 'AdminController@adminHome');

Route::get('/adminTemp', function (){
    return view('admin.templateadmin');
});