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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

// Provide controller methods with object instead of ID
Route::model('projects', 'Project');
Route::model('clients', 'Client');


// use slugs rather than ids in the urls
Route::bind('projects', function($value, $route) {
    return App\Project::whereSlug($value)->first();
});
Route::bind('clients', function($value, $route) {
    return App\Client::whereSlug($value)->first();
});

Route::resource('clients', 'ClientsController');
Route::resource('clients.projects', 'ProjectsController');
Route::resource('clients.projects.tasks', 'TasksController');



Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
