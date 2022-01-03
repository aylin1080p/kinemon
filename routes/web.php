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

Route::get('/', 'App\Http\Controllers\EventController@index')->middleware(['auth']);

Route::get('/profile', 'App\Http\Controllers\ProfileController@edit')->middleware(['auth']);
Route::post('/profile', 'App\Http\Controllers\ProfileController@update')->middleware(['auth']);
Route::get('/profile/password', 'App\Http\Controllers\ProfileController@password')->middleware(['auth']);
Route::post('/profile/password', 'App\Http\Controllers\ProfileController@updatePassword')->middleware(['auth']);

Route::get('/event/detail/{event}', 'App\Http\Controllers\EventController@detail')->middleware(['auth']);
Route::get('/event/accept/{event}', 'App\Http\Controllers\EventController@accept')->middleware(['auth']);
Route::get('/event/reject/{event}', 'App\Http\Controllers\EventController@reject')->middleware(['auth']);
Route::get('/event/create', 'App\Http\Controllers\EventController@create')->middleware(['auth']);
Route::post('/event/create', 'App\Http\Controllers\EventController@store')->middleware(['auth']);

Route::get('/friends', 'App\Http\Controllers\FriendController@friend')->middleware(['auth']);
Route::get('/friends/{user}', 'App\Http\Controllers\FriendController@detail')->middleware(['auth']);
Route::get('/friends/{user}/add', 'App\Http\Controllers\FriendController@add')->middleware(['auth']);
Route::get('/friends/{user}/remove', 'App\Http\Controllers\FriendController@remove')->middleware(['auth']);

Route::get('/settings', 'App\Http\Controllers\SettingsController@settings')->middleware(['auth']);

Route::get('/notifications', 'App\Http\Controllers\NotificationController@notifications')->middleware(['auth']);

require __DIR__.'/auth.php';
