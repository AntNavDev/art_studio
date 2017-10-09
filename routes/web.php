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

Route::resource( 'art-project', 'ArtProjectController' );

Route::get( 'app/shell', function() {
    return view( 'app/shell' );
} )->name( 'shell' );

Route::get('/', function () {
    return view('home/index');
})->name( 'homepage' );

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
