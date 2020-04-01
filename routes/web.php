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

Route::group(['prefix' => 'user' ], function() {
 
  Route::get('/register', 'User\AuthController@add');
  Route::post('/register', 'User\AuthController@postadd');
  Route::get('/login', 'User\AuthController@getSignin');
  Route::post('/login', 'User\AuthController@postSignin');
  Route::get('/edit', 'User\AuthController@edit');
  Route::post('/edit', 'User\AuthController@update');
});



Route::group(['prefix' => 'user' ,'middleware' =>'auth' ], function() {

  Route::post('logout' , 'User\AuthController@getLogout' );
});

Route::group(['prefix' => 'mypage' , 'middleware' =>'auth'], function() {
  Route::get('/index', 'User\AuthController@getProfile');
  Route::post('logout','User\AuthController@getLogout' );
  
});
 
  Route::group(['prefix' => 'threads' ,'middleware' =>'auth' ], function() {

  Route::get('/create' , 'ThreadsController@add' );
  Route::post('/create' , 'ThreadsController@create' );
  Route::get('/index' , 'ThreadsController@index' );
  Route::post('logout' , 'User\AuthController@getLogout' );
  Route::get('/edit', 'ThreadsController@edit');
  Route::post('/edit', 'ThreadsController@update');
  Route::get('/delete', 'ThreadsController@delete');
  
   
});

Route::group(['prefix' => 'comment' ,'middleware' =>'auth' ], function() {
  
  Route::get('index' , 'ThreadsController@show' )->name('showthread');
  Route::post('index' ,'CommentsController@store');
  Route::post('logout' , 'User\AuthController@getLogout' );
  Route::get('/delete', 'CommentsController@delete');

});


Route::get('/', function () {
    return view('home');
});

Route::group(['prefix' => '/' ], function() {

  Route::post('logout' , 'User\AuthController@getLogout' );
  
});

