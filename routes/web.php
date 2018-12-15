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

Route::get('/', function () {
    return view('welcome');
});

// admin routes
Route::name('admin.')
    ->prefix('admin')
    ->namespace('Admin')
    ->group(function()
    {

        Route::get('/categories/create','CategoryController@create')->name('create');

        Route::post('/categories', 'CategoryController@store')->name('store');

    });

