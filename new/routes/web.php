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

Route::view('/', 'login')->middleware('login');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth')->group(function () {
	Route::view('/dashboard','dashboard/dashboard');
	Route::resource('/forms/interested-students','interestedStudentsController');
	Route::resource('/forms/register-students','registerStudentController');
	Route::resource('/forms/course', 'courseController');
	Route::get('/tables/courses','manageCourseController@course');
	Route::get('/tables/interested-students','manageInterestedStudentController@student');
	Route::get('/tables/register-students','manageStudentController@student');
	Route::get('/forms/add-student/{id}','addInterestedStudent@create');
});