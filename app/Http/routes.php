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

Route::get('/','top10@get');

Route::post('traitement','top10@truck');

Route::post('traitementtrack','topTrack@truck');
Route::post('traitementinfos','inscription@getinfos');


Route::get('welcome/{id}',['as' => 'welcome', 'uses'=>'top10pays@get']);

Route::get('top10genre/{style}',['as' => 'top10genre', 'uses'=>'topTrack@get']);

Route::get('inscription',function()
           {
    return view ('inscription');
});