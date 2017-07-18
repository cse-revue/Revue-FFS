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

    Route::get('/home/sponsorship-opportunities', function () {
        return view('home.sponsorship-opportunities');
    });    

    Route::get('/test', function () {
        return view('home.test');
    });

    Route::get('/test/404', function () {
        return view('error.404');
    });

    Route::get('/test/500', function () {
        return view('error.500');
    });

