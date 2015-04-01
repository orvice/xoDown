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
//home and item
Route::group(['prefix' => '/', 'namespace' => 'Home'], function()
{
    Route::get('/', 'HomeController@index');
    Route::get('item', 'ItemListController@index');
});

//forum
Route::group(['prefix' => '/forum', 'namespace' => 'Forum'], function()
{
    Route::get('/', 'ForumHomeController@index');
    Route::get('/topic', 'TopicController@index');
});

Route::group(['prefix' => '/home', 'namespace' => 'Home'], function()
{
    Route::get('/', 'HomeController@index'); 
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
