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
    return view('landing');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/login', function () {
    return view('admin-login');
});

Route::get('/dashboard', function () {
    return view('admin-dashboard');
});

Route::get('/admin-news', function () {
    return view('admin-news');
});

Route::get('/admin-add-news', function () {
    return view('admin-addnews');
});

Route::get('/admin-edit-news', function () {
    return view('admin-editnews');
});
