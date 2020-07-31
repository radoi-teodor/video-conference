<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'VideoRoomsController@index')->middleware('auth');

Route::prefix('/room')->middleware('auth')->group(function(){
  Route::get('/join/{roomName}', 'VideoRoomsController@joinRoom');
  Route::post('/create', 'VideoRoomsController@createRoom');
});

Route::get('/login', 'ClientController@login')->middleware('guest')->name('login');
Route::get('/register', 'ClientController@register')->middleware('guest')->name('register');

Route::post('/login-post', 'ClientController@login_post')->middleware('guest');
Route::post('/register-post', 'ClientController@register_post')->middleware('guest');

Route::get('/logout', 'ClientController@logout');
