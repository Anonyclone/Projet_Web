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

Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
Route::get('/itinéraire', 'MapController@get')->name('map');
Route::get('/profil', 'ProfilController@get')->name('profil_get');
Route::post('/post', 'ProfilController@post')->name('profil_post');
Route::get('/nouvelle-annonce', 'NewPostController@get')->name('new_post_get');
Route::get('/chercher-une-annonce', 'SearchPostController@get')->name('search_post_get');