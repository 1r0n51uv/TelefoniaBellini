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
    return view('index');
});

Route::get('/template', function (){
    return view('template');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', function() {
    return view('auth.profile');
})->middleware('auth');

Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider')->where(['provider' => 'facebook|google']);
Route::get('login/{provider}/callback', 'Auth\LoginController@handleProviderCallback')->where(['provider' => 'facebook|google']);

Route::get('/setPass', function() {
    return view('auth.setPass');
});

Route::get('/index', function() {
    return view('index');;
});

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/shop', function(){
    return view('shop');
});

Route::get('/shop2', function(){
    return view('shop2');
});