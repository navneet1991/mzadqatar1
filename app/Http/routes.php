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

Route::get('/',  'profile@index' );
    //$users = DB::select('select * from users1 ');
   //return view('welcome', ['tasks' => $users]);


Route::get('register', function () {
    return view('register');
});
Route::get('login', function () {
    return view('login');
});
Route::get('applogin', function () {
    return view('app-login');
});

Route::post('/register', 'profile@store' );
Route::post('/applogin', 'profile@applogin' );
Route::post('/login', 'profile@login' );
Route::get('/userproducts', 'profile@show' );
Route::get('/logout', 'profile@logout' );
Route::get('reset-password', function () {
    return view('reset');
});
Route::post('/reset-password-email', 'profile@resetemail' );
Route::post('/reset-password-mobile', 'profile@resetmobile' );
Route::post('/update-password/{token}', 'profile@updatepassword' );
Route::get('success', function () {
    return view('success');
});
Route::get('/update-password/{token}', function ($token) {
    return view('update-password');
});
Route::get('activation', function () {
    return view('activation');
});

