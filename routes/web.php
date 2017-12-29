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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', 'homeController@index')->name('home');
Auth::routes();

Route::get('/home', 'homeController@index')->name('home');
Route::get('/ranking', 'StandingsController@index')->name('ranking');
Route::get('/ranking-on-cf', 'StandingsController@rankingCfBased')->name('ranking_cf');
Route::get('/upcoming-contest-list', 'ContestForecastController@index')->name('contest_forecast');
Route::get('/curated-contest', 'CuratedContestController@index')->name('curated_contest');
Route::post('/set-curated-contest', 'CuratedContestController@setcontest');