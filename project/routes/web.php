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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/carslist', 'CarsController@carslist');
Route::get('/carsnew', 'CarsController@carsnew');
Route::get('/carsnewsave', 'CarsController@carsnewsave');
Route::get('/carsedit', 'CarsController@carsedit');
Route::get('/carsdelete', 'CarsController@carsdelete');
Route::get('/getbyid/{id}', function ($id) {
    $rec = DB::table('cars')->where('id',$id)->first();
    return json_encode($rec);
})->where('lang','lv|en|ru');