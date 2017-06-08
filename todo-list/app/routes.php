<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/*-----------Formulaire-----------*/
Route::get('/', function()
{
	echo Form::open();
	echo Form::label('Ajouter une tache :'), '<br>';
	echo Form::label('titre', 'Titre :');
	echo Form::text('titre'), '<br>';
	echo Form::label('tache', 'Tache :');
	echo Form::text('tache'), '<br>';
	echo Form::submit('Valider');
	echo Form::close();

	return View::make('Page.acceuil');
});

Route::post('/', function()
{
	$inputs = Input::only('titre', 'tache');
	$tache = new Tache;
	foreach ($inputs as $k => $v) {
		$tache->$k = $v;
	}
	$tache->save();

	return Redirect::to('/');
});

Route::get('modif', function()
{
	echo Form::open();
	echo Form::label('Modifier une tache :'), '<br>';
	echo Form::label('id', 'Numero de tache :');
	echo Form::text('id'), '<br>';
	echo Form::label('titre', 'Titre :');
	echo Form::text('titre'), '<br>';
	echo Form::label('tache', 'Tache :');
	echo Form::text('tache'), '<br>';
	echo Form::submit('Valider');
	echo Form::close();
});

Route::post('modif', function()
{
	DB::table('task')
		->where('id', '=', Input::only('id'))
		->update(
			array(
				'titre' => Input::only('titre'),
				'table' => Input::only('tache')
			)
		);

	return Redirect::to('/');
});

Route::get('suppr', function()
{
	echo Form::open();
	echo Form::label('Modifier une tache :'), '<br>';
	echo Form::label('id', 'Numero de tache :');
	echo Form::text('id'), '<br>';
	echo Form::submit('Valider');
	echo Form::close();
});

Route::post('suppr', function()
{
	DB::table('task')
		->where('id', '=', Input::only('id'))
		->delete();

	return Redirect::to('/');
});

/********** 404 *************/ 
App::missing(function($exception){
    return Response::make('Page Introuvable', 404);
});