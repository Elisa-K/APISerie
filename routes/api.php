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