<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\EnsureTokenIsValid;

//Route::get('welcome', [CategoryController::class, 'apiWelcome']);

Route::get('category/list', 'App\Http\Controllers\CategoryController@list')->middleware(EnsureTokenIsValid::class);
Route::post('category/store', 'App\Http\Controllers\CategoryController@store')->middleware(EnsureTokenIsValid::class);
Route::put('category/update/{id}', 'App\Http\Controllers\CategoryController@update')->middleware(EnsureTokenIsValid::class);
Route::delete('category/destroy/{id}', 'App\Http\Controllers\CategoryController@destroy')->middleware(EnsureTokenIsValid::class);

Route::get('post/list', 'App\Http\Controllers\PostController@list')->middleware(EnsureTokenIsValid::class);
Route::post('post/store', 'App\Http\Controllers\PostController@store')->middleware(EnsureTokenIsValid::class);
Route::put('post/update/{id}', 'App\Http\Controllers\PostController@update')->middleware(EnsureTokenIsValid::class);
Route::delete('post/destroy/{id}', 'App\Http\Controllers\PostController@destroy')->middleware(EnsureTokenIsValid::class);

Route::get('user/list', 'App\Http\Controllers\UserController@list')->middleware(EnsureTokenIsValid::class);
Route::post('user/store', 'App\Http\Controllers\UserController@store')->middleware(EnsureTokenIsValid::class);
Route::put('user/update/{id}', 'App\Http\Controllers\UserController@update')->middleware(EnsureTokenIsValid::class);
Route::delete('user/destroy/{id}', 'App\Http\Controllers\UserController@destroy')->middleware(EnsureTokenIsValid::class);

Route::get('token/get/{user_id}', 'App\Http\Controllers\AccessTokenController@getJWT');




