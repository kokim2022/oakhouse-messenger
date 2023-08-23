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

Route::group(['middleware' => 'auth'], function(){
    Route::get('video_chat', 'VideoChatController@index');
    Route::post('auth/video_chat', 'VideoChatController@auth');
});
  
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('test/{id}', function ($id) {
    return 'Testing '.$id;
});


Route::get('/chats', 'ChatController@index');

Route::get('/messages', 'ChatController@fetchAllMessages');

Route::post('/messages', 'ChatController@sendMessage')->name('messages.store');
