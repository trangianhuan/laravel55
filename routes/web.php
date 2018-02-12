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

Route::get('/elasticsearch','ElasticSearchController@elastic');


Route::get('/test', function () {
    $user = \App\User::first();
    return 'hhoo';

});

//Route::Resource('student');
Route::group(['namespace' => 'Vue', 'prefix' => 'vue'], function () {
    Route::resource('student', 'StudentController');
});
