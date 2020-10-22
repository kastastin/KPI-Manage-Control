<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::group([
    'namespace' => 'App\Http\Controllers\Api',
], function () {
    Route::get('faculty', "FacultyApiController@getAll");
    Route::get('faculty/{id}', "FacultyApiController@getById");
    Route::post('faculty', "FacultyApiController@save");
    Route::put('faculty/{id}', "FacultyApiController@update");
    Route::delete('faculty/{id}', "FacultyApiController@delete");

    Route::get('department', "DepartmentApiController@getAll");
    Route::get('department/{id}', "DepartmentApiController@getById");
});


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
