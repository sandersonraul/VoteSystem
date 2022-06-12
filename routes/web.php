<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'CandidatesController@index');

Route::get('/new/candidate','CandidatesController@create')->name('new_candidate');
Route::post('/new/candidate','CandidatesController@store')->name('save_candidate');
Route::get('/index', 'CandidatesController@index');
Route::get('/registerVote{id}', 'RegisterVoteController@registerVote')->name('register_vote');
