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



Route::get('/','MainController@home');
Route::get('/about','MainController@about');
Route::get('/booking','MainController@booking');

Route::get('/manage','ManageController@home');
Route::get('/managehotel','ManageController@managerooms');
Route::get('/manageuser','ManageController@manageuser');