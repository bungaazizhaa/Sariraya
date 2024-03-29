<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\AdminNewsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\AdminContactController;
use App\Http\Controllers\Admin\AdminProfilController;

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
})->name('contact');

Route::get('factory/tempe-factory', function () {
    return view('factory-tempe');
})->name('tempe.factory');

Route::get('factory/bakso-factory', function () {
    return view('factory-bakso');
})->name('bakso.factory');

Route::get('factory/pecel-factory', function () {
    return view('factory-pecel');
})->name('pecel.factory');

Route::get('halal-mart/yonezu', function () {
    return view('mart-yonezu');
})->name('mart-yonezu');

Route::get('halal-mart/tanuki', function () {
    return view('mart-tanuki');
})->name('mart-tanuki');

Route::get('halal-mart/grosser', function () {
    return view('mart-grosser');
})->name('mart-grosser');


Auth::routes();
Route::post('/contact/insertcontact', [AdminContactController::class, 'insert'])->name('addcontact');

// CRUD ADMIN
Route::middleware(['auth'])->group(function () {
    Route::get('/admin-news', [AdminNewsController::class, 'index'])->name('news');
    Route::get('/admin-addnews', [AdminNewsController::class, 'add'])->name('addnews');
    Route::post('/admin-news/insertnews', [AdminNewsController::class, 'insert']);
    Route::get('/admin-news/editnews/{id_news}', [AdminNewsController::class, 'edit']);
    Route::post('/admin-news/updatenews/{id_news}', [AdminNewsController::class, 'update']);
    Route::get('/admin-news/deletenews/{id_news}', [AdminNewsController::class, 'delete']);

    Route::get('/admin-contact', [AdminContactController::class, 'index'])->name('contact.index');
    Route::get('/admin-contact/deletecontact/{id_contact}', [AdminContactController::class, 'delete']);

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('/admin-catatan/insertcatatan', [DashboardController::class, 'insert'])->name('addcatatan');
    Route::post('/admin-catatan/updatecatatan/{id_catatan}', [DashboardController::class, 'update'])->name('editcatatan');
    Route::get('/admin-catatan/deletecatatan/{id_catatan}', [DashboardController::class, 'delete']);
    
    Route::get('/admin-profil', [AdminProfilController::class, 'index'])->name('profil');
    Route::post('/admin-profil/updateprofil/{id_profil}', [AdminProfilController::class, 'update']);
    Route::get('/admin-profil/editprofil/{id_profil}', [AdminProfilController::class, 'edit']);
    Route::get('/admin-addprofil', [AdminProfilController::class, 'add'])->name('addprofil');
    Route::post('/admin-profil/insertprofil', [AdminProfilController::class, 'insert']);
    Route::get('/admin-profil/deleteprofil/{id_profil}', [AdminProfilController::class, 'delete']);
});
