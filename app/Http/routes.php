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

Route::controller('entidades', 'EntidadesController');
Route::controller('disciplinas', 'DisciplinasController');
Route::controller('disciplinas_traduc', 'Disciplinas_traducController');
Route::controller('niveles', 'NivelesController');
Route::controller('niveles_traduc', 'Niveles_traducController');
Route::controller('categorias', 'CategoriasController');
Route::controller('categorias_traduc', 'CategoriasController');
Route::controller('eventos', 'EventosController');
Route::controller('nivel_participantes', 'Nivel_participantesController');
Route::controller('inscripciones', 'InscripcionesController');
Route::controller('user_event', 'User_eventController');
Route::controller('evaluaciones', 'EvaluacionesController');
Route::controller('preguntas_evaluacion', 'Preguntas_evaluacionController');



Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
