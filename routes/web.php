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
Route::get('/', 'MadrashaController@Welcomepage');

Route::get('/autocomplete-search', 'MadrashaController@autocompleteSearch');

Route::get('/viewmadrashaprofile', ['as' => 'search', 'uses' => 'MadrashaController@Viewmadrashaprofile']);

Route::get('/map/{madrasha}/{latitude}/{longitude}', 'MadrashaController@Showmadrashaonmap');

Route::get('/addprofile','MadrashaController@Addmadrashaview');

Route::get('/editprofile/madrasha/{id}','MadrashaController@Editprofileview');

Route::post('/submit_madrasha_profile', 'MadrashaController@Uploadmadrashaprofile');

Route::get('get-district/{division}','MadrashaController@getdistrict');

Route::get('get-subdistrict/{district}','MadrashaController@getsubdistrict');

Route::get('get-subtype/{type}','MadrashaController@getsubtype');

//Route::get('/profile/{region}/{name}','MadrashaController@Regionalmadrashaprofile');

//Route::get('/profile/division/{division}/{type}','MadrashaController@Divisionalmadrashaprofile');

Route::get('/profile/{title}/{region}/{name}/{type}','MadrashaController@Regionalmadrashaprofile');

Route::get('madrashaprofile/{id}','MadrashaController@Showmadrashaprofile');

Route::get('/downloadprofile/detail/{id}', 'MadrashaController@Downloadmadrashaprofile');

Route::post('/edit_madrasha_profile/{id}', 'MadrashaController@Editmadrashaprofile');

Route::get('/delete_teacher_profile/{teacher}/{madrasha}', 'MadrashaController@Deleteteacherprofile');

Route::get('/delete_madrasha_profile/{id}', 'MadrashaController@Deletemadrashaprofile');

Route::get('/add_teacher_profile_form/{id}', 'MadrashaController@Addteacherview');

Route::post('/add_teacher_profile/{madrasha}', 'MadrashaController@Addteacherprofile');

Route::get('/sortmadrashaprofile', ['as' => 'search', 'uses' => 'MadrashaController@Sortmadrashaprofile']);