<?php

use App\Picture;
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

Route::post('/pictures', 'PictureController@search');
Route::get('/pictures/{id}', 'PictureController@show')->middleware('App\Http\Middleware\React');
Route::post('/pictures/store', 'PictureController@store')->middleware('App\Http\Middleware\React');
Route::get('/pictures/{id}/checkLike', 'PictureController@checkLike')->middleware('App\Http\Middleware\React');
Route::get('/pictures/{id}/handleLike', 'PictureController@handleLike')->middleware('App\Http\Middleware\React');

Route::post('/register', 'AuthenticationController@register');
Route::post('/login', 'AuthenticationController@login');