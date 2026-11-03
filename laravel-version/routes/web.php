<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes - Slim ADVANCE
|--------------------------------------------------------------------------
*/

Route::get('/', [ProductController::class, 'index'])->name('home');
