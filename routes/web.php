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




Route::group(['namespace' => 'App\Http\Controllers'], function () {

    Route::get('/', function () {
        return view('index');
    })->name('index');

    Route::get('/price', 'ServicesController@price')->name('price');

    Route::get('/articles', 'ArticlesController@index')->name('articles');

    Route::get('/search', 'SearchController@SearchText')->name('SearchText');
});
