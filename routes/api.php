<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



Route::get('matchesuivant/{matchesuivant}', 'Matchesuivant@show');
Route::get('palmares', 'PalmareController@index');


Route::get('nouvelles', 'NouvelleController@index');
Route::get('nouvellesaccuiel', 'NouvelleController@indexAccuiel');
Route::get('nouvelle/{nouvelle}', 'NouvelleController@show');
Route::get('nouvellesslider', 'NouvelleController@slider');
Route::get('nouvellesslideractive', 'NouvelleController@slideractive');


Route::get('imagesaccuiel', 'ImageController@indexAccuiel');
Route::get('image/{image}', 'ImageController@show');

Route::get('produitaccuiel', 'ProduitController@indexAccuiel');
Route::get('produits', 'ProduitController@index');


Route::get('jouers/{center}', 'JouerController@index');
Route::get('equipe/{slug}', 'JouerController@show');

Route::get('histoires/{type}', 'HistoireController@index');
Route::get('histoire/{slug}', 'HistoireController@show');

Route::get('classement', 'ClassementController@index');
