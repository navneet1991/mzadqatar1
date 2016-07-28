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
//use DB;

Route::get('/', function () {
    $users = DB::select('select * from users1 ');
    return view('welcome', ['tasks' => $users]);
});
Route::get('register', function () {
    return view('register');
});
Route::get('login', function () {
    return view('login');
});
Route::post('/register', 'profile@store' );
Route::post('/login', 'profile@login' );
Route::get('/userproducts', 'profile@show' );

