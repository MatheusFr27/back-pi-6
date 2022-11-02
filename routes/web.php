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


Route::group(['prefix' => 'admin', 'middleware' => ['guest']], function () {
    Route::get('login', 'AdminController@loginView')->name('login');
    Route::post('login', 'AdminController@login')->name('loginAdmin');
});

Route::group(['middleware' => ['auth.admin']], function () {
    Route::prefix('admin')->group(function () {
        Route::get('dashboard', 'AdminController@dashboardView')->name('dashboard');
    });

    Route::get('logout', 'AdminController@logout')->name('logout');
});

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
