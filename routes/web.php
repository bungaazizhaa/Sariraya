<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/about', function () {
    return view('about');
});

Route::get('/news', [NewsController::class, 'news'])->name('news');
Route::get('/news/detail/{id_news}', [NewsController::class, 'detail']);

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/login', function () {
    return view('admin-login');
});

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/admin-news', [NewsController::class, 'index'])->name('news');

Route::get('/admin-add-news', function () {
    return view('admin.news.admin-addnews');
});

Route::get('/admin-edit-news', function () {
    return view('admin.news.admin-editnews');
});

Route::get('/admin-contact', function () {
    return view('admin-contact');
});

Auth::routes();
