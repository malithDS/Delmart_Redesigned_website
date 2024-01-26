<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', 'App\Http\Controllers\AuthController@welcome');
Route::get('login', 'App\Http\Controllers\AuthController@index')->name('login');
Route::get('dashboard', 'App\Http\Controllers\AuthController@dashboard')->name('dashboard');
Route::get('registration', 'App\Http\Controllers\AuthController@registration')->name('registration');
Route::post('post-registration', 'App\Http\Controllers\AuthController@postRegistration')->name('registration.post');
Route::post('post-login', 'App\Http\Controllers\AuthController@postlogin')->name('login.post');
Route::get('logout', 'App\Http\Controllers\AuthController@logout')->name('logout');

Route::get('insert_product', 'App\Http\Controllers\AuthController@create_product');
Route::post('post-insert', 'App\Http\Controllers\AuthController@postInsert')->name('insert.post');

Route::get('food_details/{id}','App\Http\Controllers\AuthController@food_detail');
Route::post('add_cart/{id}','App\Http\Controllers\AuthController@add_cart');
Route::get('show_cart', 'App\Http\Controllers\AuthController@show_cart');
Route::get('remove_cart/{id}', 'App\Http\Controllers\AuthController@remove_cart');

Route::post('add_wish_list/{id}','App\Http\Controllers\AuthController@add_wish_list');
Route::get('showWishList', 'App\Http\Controllers\AuthController@showWishList');
Route::get('remove_wish_list/{id}', 'App\Http\Controllers\AuthController@remove_wish_list');

Route::get('account','App\Http\Controllers\AuthController@account');
//Route::get('select', 'App\Http\Controllers\AuthController@select');remove_wish_list