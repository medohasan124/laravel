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

Route::group( ['prefix' => 'admin' , 'namespace' => 'Admin'] , function(){

	Route::get( '/' , 'Admins@dashboard')->middleware('admin:admin');

	Route::get( 'login', 'Admins@index');

	Route::get( 'forgetPassword', 'Admins@forgetPassword');
	Route::post( 'checkfogetPassword', 'Admins@checkfogetPassword');

	Route::post( 'checklogin', 'Admins@checkLogin');

	Route::get( 'logout', function(){
		Auth::guard('admin')->logout();
		return redirect('admin/login');
	});

});