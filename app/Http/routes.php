<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'QuizzesController@index');

Route::get('about','PagesController@about');
Route::get('contact','PagesController@contact');

Route::resource('cats','CategoriesController');
Route::resource('quizzes','QuizzesController');
Route::resource('questions','QuestionsController');
Route::resource('answers','AnswersController');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController'
]);