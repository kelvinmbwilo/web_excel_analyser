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
    return view('welcome');
});

Route::get('home', function () {
    return view('welcome');
});

/**
 * Metadata routes
 *
 */
//get all metadatas
Route::get('metadata', 'MetadataController@index');

//get one metadata with using id
Route::get('metadata/{id}', 'MetadataController@show');

//create new metadata
Route::post('metadata', 'MetadataController@store');

//update one metadata with id $id
Route::post('metadata/{id}', 'MetadataController@update');

//delete metadata with id $id
Route::post('metadata/delete/{id}', 'MetadataController@destroy');

/**
 * Categories routes
 *
 */
//get all categories
Route::get('categories', 'CategoriesController@index');

//get one category with using id
Route::get('categories/{id}', 'CategoriesController@show');

//create new category
Route::post('categories', 'CategoriesController@store');

//update one category with id $id
Route::post('categories/{id}', 'CategoriesController@update');

//delete category with id $id
Route::post('categories/delete/{id}', 'CategoriesController@destroy');


/**
 * MetadataCategory routes
 *
 */
//get all metadata_categories
Route::get('metadata_category', 'MetadataCategoryController@index');

//get one metadata_category with using id
Route::get('metadata_category/{id}', 'MetadataCategoryController@show');

//create new metadata_category
Route::post('metadata_category', 'MetadataCategoryController@store');

//update one metadata_category with id $id
Route::post('metadata_category/{id}', 'MetadataCategoryController@update');

//delete metadata_category with id $id
Route::post('metadata_category/delete/{id}', 'MetadataCategoryController@destroy');

/**
 * District routes
 *
 */
//get all districts
Route::get('categories', 'DistrictController@index');

//get one district with using id
Route::get('district/{id}', 'DistrictController@show');

//create new district
Route::post('district', 'DistrictController@store');

//update one district with id $id
Route::post('district/{id}', 'CategoriesController@update');

//delete district with id $id
Route::post('district/delete/{id}', 'CategoriesController@destroy');

/**
 * Region routes
 *
 */
//get all regions
Route::get('region', 'RegionController@index');

//get one region with using id
Route::get('region/{id}', 'RegionController@show');

//create new region
Route::post('region', 'RegionController@store');

//update one region with id $id
Route::post('region/{id}', 'RegionController@update');

//delete region with id $id
Route::post('region/delete/{id}', 'RegionController@destroy');

/**
 * DataValues routes
 *
 */
//get all datavalues
Route::get('datavalue', 'DataValuesController@index');

//get one datavalue with using id
Route::get('datavalue/{id}', 'DataValuesController@show');

//create new datavalue
Route::post('datavalue', 'DataValuesController@store');

//update one datavalue with id $id
Route::post('datavalue/{id}', 'DataValuesController@update');

//delete datavalue with id $id
Route::post('datavalue/delete/{id}', 'DataValuesController@destroy');
