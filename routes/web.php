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

Route::get('/', function () {
    return view('index.front');
});

\Illuminate\Support\Facades\Auth::routes();
    Route::get('jobs', 'JobsController@index')->name('jobs.index');
    Route::get('jobs/search', 'JobsController@search')->name('jobs.search');
    Route::resource('jobsgallary', 'jobsgallaryController');
    Route::resource('company', 'companyController');
    Route::resource('course', 'courseController');
    Route::resource('jobsgallary', 'jobsgallaryController');

Route::get('about', 'HomeController@about')->name('about');
Route::get('services', 'HomeController@services')->name('services');
Route::resource('contact', 'ContactController')->only(['index' ,'store']);
Route::get('/home', 'HomeController@index')->name('home');
Route::get('users', 'HomeController@users')->name('users');
Route::get('admin/contacts', 'ContactController@displayAllContacts')->name('dashbaord.contacts');
Route::delete('/destroy/contact/{id}', 'ContactController@destroy')->name('delete.contact');

Route::get('dashboard', 'HomeController@dashboard')->name('dashboard');
Route::delete('/destroy/user/{id}', 'HomeController@deleteUser',function ($id) {
    return $id;
})->name('user.delete');

Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider')->name('social-login');
Route::get('login/{provider}/callback', 'Auth\LoginController@handleProviderCallback');
