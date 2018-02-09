<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['middleware' => ['api']], function () {
    Route::get('students', function () {
        return [
              [
                'name' => 'Toan',
                'age' => '22',
                'email' => 'toan@gmail.com'
              ],
              [
                'name' => 'Nguyên',
                'age' => '23',
                'email' => 'nguyen@gmail.com'
              ],
              [
                'name' => 'Trần Tân',
                'age' => '21',
                'email' => 'van@gmail.com'
              ],
              [
                'name' => 'Lê Quân',
                'age' => '23',
                'email' => 'nguyen@gmail.com'
              ],
              [
                'name' => 'Trần Quang',
                'age' => '21',
                'email' => 'van@gmail.com'
              ],
            ];
    });
});

Route::group(['middleware' => ['api','cors']], function () {
    Route::post('auth/login', 'ApiController@login');
    Route::group(['middleware' => 'jwt.auth'], function () {
        Route::get('user', 'ApiController@getAuthUser');
    });
});
