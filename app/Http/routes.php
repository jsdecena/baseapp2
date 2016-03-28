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


Route::group(['middleware' => ['web']],function(){
    
    Route::auth();

    Route::group(['prefix' => 'customer', 'middleware' => ['auth']],function(){
        Route::resource('/', 'Front\CustomerController');
    });
});


Route::get('admin/login','Admin\AuthController@showLoginForm');
Route::post('admin/login','Admin\AuthController@login');
Route::get('admin/logout', 'Admin\AuthController@logout');

Route::group(['prefix' => 'admin', 'middleware' => ['admin']], function () {
    Route::resource('/', 'Admin\AdminController');

    Route::resource('employee', 'Admin\EmployeeController');
    Route::resource('customer', 'Admin\CustomerController');

});

Route::resource('/', 'Front\IndexController');