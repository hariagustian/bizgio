<?php
use App\Exceptions\Handler;
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
/*
Route::get('/', function () {
    return view('welcome');
});*/
//task 1
Route::get('scrambled ', 'viewController@acakKata');
//task 2
Route::get('dropme ', 'viewController@dropme');


Route::get('coba', 'viewController@test');
Route::get('/', 'viewController@homepage');
Route::get('/pricing', 'viewController@pricing');
Route::get('/help', 'viewController@help');
Route::get('/study-case/{name}', 'viewController@studyCase');
Route::get('/login', 'viewController@login');
Route::get('/contact', 'viewController@contact');
Route::get('/signup', 'viewController@signup');
Route::get('/reset', 'viewController@reset');
Route::get('/json', 'json@json');

Route::post('/auth', 'postController@auth');
Route::post('/actions', 'postController@userAction');

