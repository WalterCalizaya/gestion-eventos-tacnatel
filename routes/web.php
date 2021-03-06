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

Route::get('/', function () {
    return view('welcome');
});


//Admin Views
//Route::group(['prefix'=>'admin', 'middleware'=>'is_admin', 'as'=>'admin.'], function(){
Route::group(['prefix'=>'admin', 'as'=>'admin.'], function(){
	Route::get('/', function(){
		return view('admin.dashboard.index');
	})->name('dashboard');
});
