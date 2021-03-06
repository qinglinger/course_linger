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

Route::get('/layout', function () {
    return view('layout.layouts');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/backstage/user', "BackstageController@showUser");
Route::get('/backstage/course', "BackstageController@showCourse");

Route::get('/register', function () {
    return view('register');
});

Route::post('/registerHandle', "LogController@registerHandle");
