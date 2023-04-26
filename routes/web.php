<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/java', function () {
    return view('certificados.java');
});

Route::get('/js', function () {
    return view('certificados.js');
});

Route::get('/php', function () {
    return view('certificados.php');
});

Route::get('/bootstrap', function () {
    return view('certificados.bootstrap');
});

Route::get('/html', function () {
    return view('certificados.html');
});

Route::get('/java', function () {
    return view('certificados.java');
});

Route::get('/java', function () {
    return view('certificados.java');
});

Route::get('/java', function () {
    return view('certificados.java');
});

Route::get('/java', function () {
    return view('certificados.java');
});

Route::get('/java', function () {
    return view('certificados.java');
});
