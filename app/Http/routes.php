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
    return view('home');
});


Route::get('register', function () {
    $value = Session::get('id');
    if($value):
        return redirect('/userproducts');
    endif;
    return view('register');
});
Route::get('login', function () {
    $value = Session::get('id');
    if($value):
    return redirect('/userproducts');
    endif;
    return view('login');

});
Route::get('applogin', function () {
    $value = Session::get('id');
    if($value):
        return redirect('/userproducts');
    endif;
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
Route::post('/update-password', 'profile@updatepassword' );
Route::get('success', function () {
    return view('success');
});
Route::get('/update-password/{token}', function ($token) {
    return view('update-password' ,['token'=>$token]);
});
Route::get('activation', function () {
    return view('activation');
});

