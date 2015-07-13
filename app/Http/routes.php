<?php


Route::get('/',[
  'as'    => 'tickets.latest',
  'uses'  => 'TicketsController@latest'
]);

Route::get('/populare', 'TicketsController@popular');
/*Route::get('/populares',[
    'as'    => 'tickets.popular',
    'uses'  => 'TicketsController@popular'
]);*/

Route::get('/pendientes',[
    'as'    => 'tickets.open',
    'uses'  => 'TicketsController@open'
]);

Route::get('/tutoriales',[
    'as'    => 'tickets.closed',
    'uses'  => 'TicketsController@closed'
]);

Route::get('/solicitud/{id}',[
    'as'    => 'tickets.details',
    'uses'  => 'TicketsController@details'
]);


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
