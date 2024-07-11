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

Route::get('/',function(){
    return Redirect::to('/login');
});

// Rutas para el registro
Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('/register', 'Auth\RegisterController@register');

// Rutas para el login
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login');

// Ruta para el logout
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

// Ruta para la página principal
Route::view('/main', 'main')->middleware('auth')->name('main');

// Rura para profile
Route::get('/profile', 'ProfileController@showProfile')->name('profile');

// Post
Route::post('/post', 'PostController@store')->name('post.store');