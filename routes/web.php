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
    return "<h2>Jobs</h2>";
});


Route::get('/job', function () {

    $job = [];
    $job['title'] = 'software engineer';
    $job['post_date'] = "04/10/19";

    return $job;

    //return "<h2>A specific Job</h2>";
});

Route::get('/home', function () {

    $data = [];
    $data['version'] = '0.1.1';
    $data['service'] = 'Job Service';

    return view('welcome', $data);
});
