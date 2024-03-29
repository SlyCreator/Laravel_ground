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

/*Laravel Crud app */
Route::resource('products','ProductController');

Route::get('/video', 'OnemorphismController@show_video')->name('video.show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

    /**Image upload */
Route::get('/image/create', function()
    {
        return view('image_test.insert');
    });

Route::get('test-email', 'JobController@processQueue');

Route::resource('/photos','PhotoController');