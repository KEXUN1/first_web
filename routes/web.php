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

Route::any('test', 'TestController@Test');
Route::any('mail', 'TestController@mail');
Route::any('cache1', 'TestController@cache1');
Route::any('cache2', 'TestController@cache2');
Route::any('error', 'TestController@error');
Route::any('queue', 'TestController@queue');
