<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//The / route is the root of the domain.
// Route::get('/', function () {
//     $people = ['Taylor', 'Matt', 'Jeffrey'];
//     return view('pages.welcome', compact('people'));
// });


Route::get('/', 'PagesController@home');

Route::get('about', 'PagesController@about');

Route::get('libraries', 'LibrariesController@index');

Route::get('books', 'BooksController@index');

//['people' => $people]); //or compact('people'), or =>with('people', $people)
//    return view('welcome');
//        return view('pages.welcome'); //resources/views/pages/welcome.blade.php



// Route::get('about', function () {
//     return view('pages.about'); //resources/views/pages/welcome.blade.php
// });

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
