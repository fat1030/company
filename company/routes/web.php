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
Route::group(['prefix'=>'admin'], function(){
    Route::get('/', 'AdminController@get_index');
    Route::get('/CompanyName', 'AdminController@get_CompanyName');
    Route::get('/Person', 'AdminController@get_Person');
    Route::post('/CompanyName', 'AdminController@post_CompanyName');
    Route::post('/Person', 'AdminController@post_Person');

});



