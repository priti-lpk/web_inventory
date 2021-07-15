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
//Login
Route::get('/admin', 'admin\LoginController@index');
Route::post('/checklogin', 'admin\LoginController@checklogin');
Route::get('admin/dashboard', 'admin\LoginController@dashboard');

//Change Pass
Route::resource('admin/change_password', 'admin\ChangePassword');
Route::post('/admin/change', 'admin\ChangePassword@change');
Route::post('/admin/update_pass', 'admin\ChangePassword@change_pass');

////Logout
Route::get('/admin/logout', function () {
    $username = Session()->get('username');
    session()->forget($username);
    session()->flush();
    return redirect('/admin');
});

