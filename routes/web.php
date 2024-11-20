<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\WebsiteController;


Route::get('/', [WebsiteController::class, "index"])->name('home');
Route::get('/home', [WebsiteController::class, "index"])->name('home');

Route::get('/blog', [WebsiteController::class, "blog"])->name('blog');


