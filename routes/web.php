<?php


Route::get('/movies', 'MovieController@index');

Route::get('/movies/{title?}', 'MovieController@view');


Route::get('/', 'WelcomeController');
