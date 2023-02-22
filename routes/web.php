<?php

use Illuminate\Support\Facades\Route;
use Nwidart\Modules\Commands\CommandMakeCommand;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});




        // Books:create
        Route::get('/books/create', 'App\Http\Controllers\BookController@create')->name('books.create');

        Route::post('/books/store', 'App\Http\Controllers\BookController@store')->name('books.store');

        // Books:update
        Route::get('/books/edit/{id}', 'App\Http\Controllers\BookController@edit')->name('books.edit');

        Route::post('/books/update/{id}', 'App\Http\Controllers\BookController@update')->name('books.update');


        // Categories:create
        Route::get('/categories/create', 'App\Http\Controllers\CategoryController@create')->name('categories.create');

        Route::post('/categories/store', 'App\Http\Controllers\CategoryController@store')->name('categories.store');

        // Categories:update
        Route::get('/categories/edit/{id}', 'App\Http\Controllers\CategoryController@edit')->name('categories.edit');

        Route::post('/categories/update/{id}', 'App\Http\Controllers\CategoryController@update')->name('categories.update');

        // logout
        Route::get('/logout', 'App\Http\Controllers\AuthController@logout')->name('auth.logout');

        Route::get('/notes/create', 'App\Http\Controllers\NoteController@create')->name('notes.create');
        Route::post('/notes/store', 'App\Http\Controllers\NoteController@store')->name('notes.store');




        // Books:delete
        Route::get('/books/delete/{id}', 'App\Http\Controllers\BookController@delete')->name('books.delete');

        // Categories:delete
        Route::get('/categories/delete/{id}', 'App\Http\Controllers\CategoryController@delete')->name('categories.delete');




        // Authentication

        // register
        Route::get('/register', 'App\Http\Controllers\AuthController@register')->name('auth.register');
        Route::post('/handle-register', 'App\Http\Controllers\AuthController@handleRegister')->name('auth.handleRegister');

        // login
        Route::get('/login', 'App\Http\Controllers\AuthController@login')->name('auth.login');
        Route::post('/handle-login', 'App\Http\Controllers\AuthController@handleLogin')->name('auth.handleLogin');




    // Books:read
    Route::get('/books', 'App\Http\Controllers\BookController@index')->name('books.index');
    Route::get('/books/search', 'App\Http\Controllers\BookController@search')->name('books.search');

    Route::get('/books/show/{id}', 'App\Http\Controllers\BookController@show')->name('books.show');


    // Categories:read
    Route::get('/categories', 'App\Http\Controllers\CategoryController@index')->name('categories.index');

    Route::get('/categories/show/{id}', 'App\Http\Controllers\CategoryController@show')->name('categories.show');


    Route::get('login/github', 'App\Http\Controllers\AuthController@redirectToProvider')->name('auth.github.redirect');
    Route::get('login/github/callback', 'App\Http\Controllers\AuthController@handleProviderCallback')->name('auth.github.callback');

    Route::get('/lang/ar', 'App\Http\Controllers\LangController@ar')->name('lang.ar');
    Route::get('/lang/en', 'App\Http\Controllers\LangController@en')->name('lang.en');

