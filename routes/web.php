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
    return view('home');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/mypage', function () {
    return view('mypage');
});

Route::get('/mypageedit', function () {
    return view('mypageedit');
});

Route::get('/create', function () {
    return view('create');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/comment', function () {
    return view('comment');
});

Route::get('/commentedit', function () {
    return view('commentedit');
});