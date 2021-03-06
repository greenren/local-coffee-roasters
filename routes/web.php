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

Route::get('/', 'RoasterController@index');

// Route::get('/', function(){
//     return redirect('roaster');
// });

Route::resource('roaster', 'RoasterController');

Route::resource('review', 'ReviewController');

/**
 * Authentication routes
 */
Auth::routes();

/**
 * Route to home
 */
Route::get('/home', 'HomeController@index');
