<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\DashboardController;


Route::get('/', [WebsiteController::class, "index"])->name('home');
Route::get('/home', [WebsiteController::class, "index"])->name('home');

Route::get('/blog', [WebsiteController::class, "blog"])->name('blog');


Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'login_post'])->name('login_post');

Route::get('/registion', [LoginController::class, 'registion'])->name('registion');
Route::post('/registion', [LoginController::class, 'registion_post'])->name('registion_post');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');


Route::get('/dashboard', [DashboardController::class, 'deshboard'])->name('deshboard');