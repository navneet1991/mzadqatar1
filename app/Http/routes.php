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


Route::get('profile/register', function () {
    $value = Session::get('id');
    if($value):
        return redirect('profile/products');
    endif;
    return view('profile.register');
});
Route::get('profile/login', function () {
    $value = Session::get('id');
    if($value):
        return redirect('profile/products');
    endif;
       return view('profile.login');

});
Route::get('profile/applogin', function () {
    $value = Session::get('id');
    if($value):
        return redirect('profile/products');
    endif;
    return view('profile.app-login');
});

Route::post('profile/register', 'Profile@store' );
Route::post('profile/profile', 'Profile@update' );
Route::post('profile/applog', 'Profile@applogin' );
Route::post('profile/login', 'Profile@login' );
Route::get('profile/products', 'Profile@show' );
Route::get('profile/logout', 'Profile@logout' );
Route::get('profile/forget', function () {
    return view('profile.forget');
});
Route::post('profile/reset-password-email', 'Profile@resetemail' );
Route::post('profile/reset-password-mobile', 'Profile@resetmobile' );
Route::post('profile/update-password', 'Profile@updatepassword' );
Route::post('profile/update-password-mobile', 'Profile@updatepasswordmobile' );
Route::get('profile/success', function () {
    return view('profile.success');
});
Route::get('profile/update-password-mobile', function () {
    return view('profile.update-password-mobile');
});
Route::get('profile/update-password/{token}', function ($token) {
    return view('profile.update-password' ,['token'=>$token]);
});

Route::get('profile/activation', function () {
    return view('profile.activation');
});
Route::get('profile/profile', 'Profile@profile');
Route::post('profile/activate', 'Profile@activate' );
Route::post('profile/add', 'Profile@add' );

Route::get('profile/add', function () {
        return view('profile.add');
});
