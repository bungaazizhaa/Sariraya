<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\AdminNewsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;

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
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/news', [NewsController::class, 'index'])->name('news');
Route::get('/news/detail/{id_news}', [NewsController::class, 'detail']);

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/tempe-factory', function () {
    return view('factory-tempe');
});

Route::get('/bakso-factory', function () {
    return view('factory-bakso');
});

Route::get('/pecel-factory', function () {
    return view('factory-pecel');
});

Route::get('/halal-mart-yonezu', function () {
    return view('mart-yonezu');
});

Route::get('/halal-mart-tanuki', function () {
    return view('mart-tanuki');
});

Route::get('/halal-mart-grosser', function () {
    return view('mart-grosser');
});

Route::get('/login', function () {
    return view('admin-login');
});

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/admin-contact', function () {
    return view('admin-contact');
});
Auth::routes();

// CRUD ADMIN
Route::middleware(['auth'])->group(function () {
    Route::get('/admin-news', [AdminNewsController::class, 'index'])->name('news');
    Route::get('/admin-addnews', [AdminNewsController::class, 'add'])->name('addnews');
    Route::post('/admin-news/insertnews', [AdminNewsController::class, 'insert']);
    Route::get('/admin-news/editnews/{id_news}', [AdminNewsController::class, 'edit']);
    Route::post('/admin-news/updatenews/{id_news}', [AdminNewsController::class, 'update']);
    Route::get('/admin-news/deletenews/{id_news}', [AdminNewsController::class, 'delete']);
});
