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
    return view('home');
});

Route::get('/users', 'UserController@index');
Route::post('/users', 'UserController@store');
Route::patch('/users/{id}', 'UserController@Update');
Route::get('/users/create', 'UserController@create');
Route::get('/users/edit/{id}', 'UserController@edit');

Route::get('/learners', 'LearnerController@index');
Route::post('/learners', 'LearnerController@store');
Route::patch('/learners/{id}', 'LearnerController@update');
Route::get('/learners/create', 'LearnerController@create');
Route::get('/learners/edit/{id}', 'LearnerController@edit');

Route::get('/instructors', 'InstructorController@index');
Route::post('/instructors', 'InstructorController@store');
Route::patch('/instructors/{id}', 'InstructorController@update');
Route::get('/instructors/create', 'InstructorController@create');
Route::get('/instructors/edit/{id}', 'InstructorController@edit');

Route::get('/courses', 'CourseController@index');
