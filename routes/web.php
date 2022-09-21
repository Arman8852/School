<?php

use App\Http\Controllers\Auth\AuthController;

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
Route::get('/', 'MadrashaController@Welcomepage')->middleware('auth');

Route::get('/autocomplete-search', 'MadrashaController@autocompleteSearch')->middleware('auth');

Route::get('/viewmadrashaprofile', ['as' => 'search', 'uses' => 'MadrashaController@Viewmadrashaprofile'])->middleware('auth');

Route::get('/map/{madrasha}/{latitude}/{longitude}', 'MadrashaController@Showmadrashaonmap')->middleware('auth');

Route::get('/addprofile','MadrashaController@Addmadrashaview')->middleware('auth');

Route::get('/editprofile/madrasha/{id}','MadrashaController@Editprofileview')->middleware('auth');

Route::post('/submit_madrasha_profile', 'MadrashaController@Uploadmadrashaprofile')->middleware('auth');

Route::get('get-district/{division}','MadrashaController@getdistrict')->middleware('auth');

Route::get('get-subdistrict/{district}','MadrashaController@getsubdistrict')->middleware('auth');

Route::get('get-subtype/{type}','MadrashaController@getsubtype')->middleware('auth');

//Route::get('/profile/{region}/{name}','MadrashaController@Regionalmadrashaprofile');

//Route::get('/profile/division/{division}/{type}','MadrashaController@Divisionalmadrashaprofile');

Route::get('/profile/{title}/{region}/{name}/{type}','MadrashaController@Regionalmadrashaprofile')->middleware('auth');

Route::get('madrashaprofile/{id}','MadrashaController@Showmadrashaprofile')->middleware('auth');

Route::get('/downloadprofile/detail/{id}', 'MadrashaController@Downloadmadrashaprofile')->middleware('auth');

Route::post('/edit_madrasha_profile/{id}', 'MadrashaController@Editmadrashaprofile')->middleware('auth');

Route::get('/delete_teacher_profile/{teacher}/{madrasha}', 'MadrashaController@Deleteteacherprofile')->middleware('auth');

Route::get('/delete_madrasha_profile/{id}', 'MadrashaController@Deletemadrashaprofile')->middleware('auth');

Route::get('/add_teacher_profile_form/{id}', 'MadrashaController@Addteacherview')->middleware('auth');

Route::post('/add_teacher_profile/{madrasha}', 'MadrashaController@Addteacherprofile')->middleware('auth');

Route::get('/sortmadrashaprofile', ['as' => 'search', 'uses' => 'MadrashaController@Sortmadrashaprofile'])->middleware('auth');

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('dashboard', [AuthController::class, 'dashboard']); 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');