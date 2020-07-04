<?php
/**
 * This is the routes file.
 * 
 * PHP version 7.2
 * 
 * @category Vendor/Project
 * @package  Vendor/Project
 * @author   Sehinde Raji <sehinde@outlook.com>
 * @license  www.laravel.com Laravel
 * @link     Install this on your machine 
 */
/*
*--------------------------------------------------------------------------
* Web Routes
*--------------------------------------------------------------------------
*
* Here is where you can register web routes for your application. These
* routes are loaded by the RouteServiceProvider within a group which
* contains the "web" middleware group. Now create something great!
*
*/

Route::get(
    '/', function () {
        return view('welcome'); 
    }
); 

Auth::routes();

Route::get('/', 'PostsController@index')->name('home');
Route::resource('posts', 'PostsController', ['only' => ['index', 'show']]);


// Admin Boundary
Route::group(
    ['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin'], 
    function () {
        Route::resource('posts', 'PostsController');
        Route::resource('comments', 'CommentsController', ['only' =>['store']]);

    }
);


