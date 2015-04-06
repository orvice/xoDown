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
    Route::resource('/topic', 'TopicController');
});

//item
Route::group(['prefix' => '/item', 'namespace' => 'Item'], function()
{
    Route::get('/', 'ItemController@index');
    Route::get('/search', 'ItemController@search');
    Route::get('/show/{id}', 'ItemController@show');
    Route::get('/cate/{id}', 'ItemController@cate');
    Route::resource('/comment', 'CommentController');
});

//news
Route::group(['prefix' => '/news', 'namespace' => 'News'], function()
{
    Route::get('/', 'NewsController@index');
    Route::get('/show/{id}', 'NewsController@show');
});

//usercenter
Route::group(['prefix' => '/user', 'middleware' => 'auth','namespace' => 'User'], function()
{
    Route::get('/', 'HomeController@index');
    Route::get('/profile/{id}', 'UserController@profile');
});

//teacher
Route::group(['prefix' => '/teacher', 'middleware' => 'auth','namespace' => 'Item'], function()
{
    Route::get('/new', 'ItemController@create');
    Route::get('/edit/{id}', 'ItemController@edit');
});

//admin
Route::group(['prefix' => '/admin', 'middleware' => 'auth','namespace' => 'Admin'], function()
{
    Route::get('/', 'HomeController@index');
    Route::resource('news', 'NewsController');
    Route::resource('/item/cate', 'CateController');
    Route::resource('/forum/node', 'NodeController');
});

Route::group(['prefix' => '/home', 'namespace' => 'Home'], function()
{
    Route::get('/', 'HomeController@index');
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
