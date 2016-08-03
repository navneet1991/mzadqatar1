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

Route::post('/register', 'Profile@store' );
Route::post('/applogin', 'Profile@applogin' );
Route::post('/login', 'Profile@login' );
Route::get('/userproducts', 'Profile@show' );
Route::get('/logout', 'Profile@logout' );
Route::get('reset-password', function () {
    return view('reset');
});
Route::post('/reset-password-email', 'Profile@resetemail' );
Route::post('/reset-password-mobile', 'Profile@resetmobile' );
Route::post('/update-password', 'Profile@updatepassword' );
Route::post('/update-password-mobile', 'Profile@updatepasswordmobile' );
Route::get('success', function () {
    return view('success');
});
Route::get('update-password-mobile', function () {
    return view('update-password-mobile');
});
Route::get('/update-password/{token}', function ($token) {
    return view('update-password' ,['token'=>$token]);
});

Route::get('activation', function () {
    return view('activation');
});
Route::post('activate', 'Profile@activate' );


