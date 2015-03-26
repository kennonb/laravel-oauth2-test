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

Route::post('/oauth/access_token', function() {
    return app()['oauth2-server.authorizer']->issueAccessToken();
});

Route::get('/oauth/', function() {
    $accesToken = app()['oauth2-server.authorizer']->getClientId();
    // return app()['oauth2-server.authorizer']->getClientId();
});

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
