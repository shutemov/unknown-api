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

Route::get('users', 'UserController@index');
Route::get('users/{user}', 'UserController@show');
Route::post('users/check', 'UserController@checkExistUser');
Route::post('users', 'UserController@store');


Route::get('routes','RouteWayController@index');
Route::POST('routes/{routeWay}','RouteWayController@postGetRouteById');
Route::GET('routes/{routeWay}','RouteWayController@getRouteById');
Route::get('users/{user}/routes','RouteWayController@show');
Route::post('users/{user}/routes','RouteWayController@store');
Route::post('routes/{routeWay}/remove', 'RouteWayController@destroy');
Route::post('routes/{routeWay}/update', 'RouteWayController@update');


Route::get('points','PointController@index');
Route::get('routes/{routeWay}/points','PointController@show');
Route::post('routes/{routeWay}/points','PointController@store');
Route::post('points/{point}/remove', 'PointController@destroy');


