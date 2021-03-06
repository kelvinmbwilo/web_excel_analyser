<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('home', function () {
    return view('welcome');
});

Route::resource('metadata', 'MetadataController', ['only' => ['store']]);
Route::post('metadata/{id}', 'MetadataController@store');

/**
 * Metadata routes
 *
 */
//get all
Route::get('metadata', 'MetadataController@index');

//get one metadata with using id
Route::get('metadata/{id}', 'MetadataController@show');

//create new metadata
Route::post('metadata', 'MetadataController@store');

//update one metadata with id $id
Route::post('metadata/{id}', 'MetadataController@update');

//delete metadata
Route::post('metadata/delete/{id}', 'MetadataController@destroy');

Route::resource('categories', 'CategoriesController', ['only' => ['store']]);
Route::post('categories/{id}', 'CategoriesController@store');

Route::resource('metadata_category', 'Metadata_CategoryController', ['only' => ['store']]);
Route::post('metadata_category/{id}', 'Metadata_CategoryController@store');

Route::get('district', 'DistrictController@index');
Route::get('district/{id}', 'DistrictController@show');
Route::post('district/{id}', 'DistrictController@store');

Route::resource('region', 'RegionController', ['only' => ['store']]);
Route::post('region/{id}', 'RegionController@store');

Route::resource('data_value', 'Data_ValuesController', ['except' => ['index', 'create', 'edit']]);
Route::post('data_value/{id}', 'Data_ValuesController@store');
Route::put('data_value/{id}', 'Data_ValuesController@update');
Route::get('data_value/{id}', 'Data_ValuesController@show');
