<?php

use Illuminate\Support\Facades\Route;

$url = "App\Http\Controllers";

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
    return view('home');
});
// Route::get('product/{slug}', $url . "\productController@showProduct"); //cara 1
Route::get('product/{product:product_slug}', $url . "\productController@showProduct"); // cara 2


// Route::get('register', $url . '\RegisterController@index');
// Route::post('proses', $url . '\RegisterController@proses');


//Latihan     Controller
Route::get('latihan', $url . '\LatihanController@index');
Route::get('addLatihan', $url . '\LatihanController@addData');
Route::post('saveLatihan', $url . '\LatihanController@saveData');
Route::get('editLatihan/{id}', $url . '\LatihanController@editData');
Route::post('updateLatihan', $url . '\LatihanController@updateData');
Route::get('deleteLatihan/{id}', $url . '\LatihanController@deleteData');



