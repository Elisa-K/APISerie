<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/series', 'SerieController@index')->name('SerieAll');

Route::group(array(
    'prefix' => 'v1',
    'middleware' => 'api'
),function ()
{
    Route::apiResources([
        'series' => 'SerieController',
        'seasons' => 'SeasonController',
        'episodes' => 'EpisodeController'
    ]);
});