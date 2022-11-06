<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::group(['prefix' => 'auth'], function () {
    Route::post('login', 'UserController@login');
    Route::post('register', 'UserController@register');
});

Route::group(['middleware' => ['auth:api', 'throttle:60,1']], function () {
    Route::group(['prefix' => 'bicos-category'], function () {
        Route::get('initialize', 'BicosCategoryController@initialize');
    });
    Route::resource('bicos-category', 'BicosCategoryController');

    Route::group(['prefix' => 'bico'], function () {
        Route::get('initialize', 'BicoController@initialize');
    });
    Route::resource('bico', 'BicoController');

    Route::group(['prefix' => 'offer-bicos'], function () {
        Route::get('initialize', 'OfferBicosController@initialize');
    });
    Route::resource('offer-bicos', 'OfferBicosController');
});

Route::group(['prefix' => 'ext'], function () {
    Route::get('bicos-category/initialize', 'BicosCategoryController@initialize');
});
