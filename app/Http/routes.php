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

Route::get('/',['as' => 'accueil','uses'=>'top10@get' ]
          );


Route::post('traitement','top10@truck');
Route::post('pouce','connexion@like');


Route::post('traitementtrack','topTrack@truck');
Route::post('traitementinfos','inscription@getinfos');

Route::post('traitementconnexion','connexion@getinfos');




Route::get('welcome/{id}',['as' => 'welcome', 'uses'=>'top10pays@get']);

Route::get('top10genre/{style}',['as' => 'top10genre', 'uses'=>'topTrack@get']);




Route::auth();

Route::post('compte','connexion@affichage');

Route::get('compte',['as' => 'compte','uses'=>'connexion@affichage' ]
          );



Route::post('/home', 'HomeController@index');
