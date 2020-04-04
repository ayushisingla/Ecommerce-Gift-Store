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

Route::get('/', function () {
    return view('index');
});
Route::get('/products',function(){
    return view('products');
});
Route::get('/cart',function(){
    return view('cart');
});
Route::get('/about',function(){
    return view('about');
});
Route::get('/setting', function () {
    return view('setting');
});
Route::get('/success', function () {
    return view('success');
});
Route::post('/','ProjectController@store');
Route::get('/signup','ProjectController@create');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

