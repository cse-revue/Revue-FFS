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
    return view('home.index');
});

  Route::get('/home', function () {
      return view('home.index');
  });

    Route::get('/home/index', function () {
        return view('home.index');
    });

    Route::get('/home/exec', function () {
        return view('home.exec');
    });

    Route::get('/home/teams', function () {
        return view('home.teams');
    });

    Route::get('/home/history', function () {
        return view('home.history');
    });

    Route::get('/home/sponsors', function () {
        return view('home.sponsors');
    });

    Route::get('/home/faqs', function () {
        return view('home.faqs');
    });

    Route::get('/home/test', function () {
        return view('home.testEnv');
    });

    Route::get('/nav', function () {
        return view('includes.navbar');
    });
