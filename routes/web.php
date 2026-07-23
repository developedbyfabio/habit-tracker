<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

// SITE
Route::get('/', [\App\Http\Controllers\SiteController::class, 'index']);


// LOGIN
Route::get('/login', [LoginController::class, 'index']);