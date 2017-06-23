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



//$stripe = app()->make(App\Stripe::class);
//$stripe->a = 5;
//
//$stripe2 = app()->make(App\Stripe::class);
//dd($stripe2);

Route::get('/','PostController@index');

Route::get('/post/create','PostController@create');

Route::post('/post/', 'PostController@store');

Route::get('/post/{post?}','PostController@show');

Route::post('post/{post}/comment','CommentController@store');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/test-mail', 'HomeController@mail')->name('testmail');