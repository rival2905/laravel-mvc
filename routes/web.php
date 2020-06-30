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

// Route::get('/', function () {
//     return view('home');
// });


Route::get('tes/{angka}', function($angka){
    return view('tes', ["angka" => $angka]);
});

Route::get('halo/{nama}', function($nama){
    return "halo $nama";
});

Route::get('/form', 'RegisterController@form');
Route::get('home', 'HomeController@index');
Route::get('/sapa', 'RegisterController@sapa');
Route::Post('/sapa', 'RegisterController@sapa_post');
Route::get('/', 'HomeController@index');


Route::get('/register', 'AuthController@index');
Route::Post('/welcome', 'AuthController@store');



