<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::get('/', 'PagesController@home');
Route::get('about', 'PagesController@about');
Route::get('cards' , 'CardsController@index');
Route::get('cards/{card}' , 'CardsController@show');

Route::get('/notes/{note}/edit' , 'NotesController@edit');
Route::post('cards/{card}/notes', 'NotesController@store');
Route::patch('notes/{note}' , 'NotesController@update');


//Route::get('cards/create' , 'CardsController@create'); //create
//Route::post('cards','cardController@store');  // store the created cards
//Route::post('cards/1','CardsController@show'); show card specific
//Route::post('cards/1/edit','CardsController@edit'); edit a specific cards
//Route::put('cards/1','CardsController@update');
//Route::delete('cards/1','CardsController@destroy');
