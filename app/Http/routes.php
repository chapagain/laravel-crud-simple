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


Route::get('news', array('as' => 'news.index', 'uses' => 'NewsController@index'));
Route::get('news/add', array('as' => 'news.create', 'uses' => 'NewsController@create'));
Route::post('news/store', array('as' => 'news.store', 'uses' => 'NewsController@store'));
Route::get('news/edit/{id}', array('as' => 'news.edit', 'uses' => 'NewsController@edit'));
Route::patch('news/update/{id}', array('as' => 'news.update', 'uses' => 'NewsController@update'));
Route::delete('news/delete/{id}', array('as' => 'news.destroy', 'uses' => 'NewsController@destroy'));
Route::get('news/{slug}', array('as' => 'news.show', 'uses' => 'NewsController@show'));
