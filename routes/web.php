<?php

/**
* Movie Related Routes
*/
Route::get('/movies', 'MovieController@index');

Route::get('/movies/{title?}', 'MovieController@view');

if(config('app.env') == 'local') {
	#Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
}
/**
*Practice
*/
Route::any('/practice/{n?}', 'PracticeController@index');

/**
*Main homepage visitors see when they visit just /
*/
Route::get('/', 'WelcomeController');

