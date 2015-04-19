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
Route::post('mail', ['middleware' => 'guest', 'uses' => 'MailController@requestInfo']);

Route::get('/mailinfo', function()
{
	$data = [
		'name' => 'Carlos',
		'lastName' => 'Garcell',
		'email' => 'c.garcell91@gmail.com',
		'phone' => '04143638392',
		'message' => 'This is my description test'
	];

	return view('emails.info', compact("data"));
});