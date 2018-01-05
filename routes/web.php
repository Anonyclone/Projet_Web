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
Route::get('/itineraire', 'MapController@get')->name('map');
Route::get('/utilisateur/profil', 'ProfilController@get')->name('profil_get');
Route::get('/utilisateur/profil/editer', 'ProfilController@edit')->name('profil_edit');
Route::post('/utilisateur/profil/post', 'ProfilController@post')->name('profil_post');
Route::get('/nouvelle/annonce', 'NewPostController@get')->name('new_post_get');
Route::get('/chercher/annonce', 'SearchPostController@get')->name('search_post_get');
Route::get('/utilisateur/confidentialite', 'SettingsController@get')->name('settings_get');
Route::get('/utilisateur/confidentialite/edit', 'SettingsController@edit')->name('settings_edit');
Route::post('/utilisateur/confidentialite/post', 'SettingsController@post')->name('settings_post');
Route::get('/utilisateur/rechercher', 'UserController@get')->name('users_search');
Route::post('/utilisateur/rechercher/post', 'UserController@post')->name('users_search_post');
Route::get('/utilisateur/rechercher/profil/{id}', 'UserController@getUserProfil')->name('get_user_profil');