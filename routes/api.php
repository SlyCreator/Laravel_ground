<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/*Realationship and polymorhism*/
Route::get('one-to-one','PhoneController@index');
Route::post('post-one','PhoneController@phone_create');

/*Bcontroller*/
Route::get('bget','BpostController@index');
Route::post('bcreate','BpostController@create');

/*One_Morphism*/
Route::post('create_comment','OnemorphismController@create_comment');
Route::get('get_comment','OnemorphismController@index');

/**Many_Morphism */
Route::post('cmv','ManymorphismController@create_video_tags');

/**Laravel_Crud_API */
Route::get('articles', 'ArticleController@index');
Route::get('articles/{article}', 'ArticleController@show');
Route::post('articles', 'ArticleController@store');
Route::put('articles/{article}', 'ArticleController@update');
Route::delete('articles/{article}', 'ArticleController@delete');

Route::get('/event','EventController@testEvent');