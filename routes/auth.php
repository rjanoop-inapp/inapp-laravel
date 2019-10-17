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

    /******************* Authentication Module Starts *******************/
Route::group(['middleware' => ['api']], function () {
    Route::get('/login', 'Auth\LoginController@login');
    Route::get('/testfn', 'Auth\LoginController@testfn');
});