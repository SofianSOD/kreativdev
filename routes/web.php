<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\AboutController;

Route::get('/', [HomeController::class, 'index'])->middleware('track.visits:home');
Route::get('/blog', [BlogController::class, 'index'])->middleware('track.visits:blog');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->middleware('track.visits:blog');
Route::get('/service/{id}', [ServiceController::class, 'show'])->name('services.show')->middleware('track.visits:service');
Route::get('/portfolio/{id}', [PortfolioController::class, 'show'])->name('portfolios.show');
Route::get('/paket-harga', [PricingController::class, 'index'])->name('pricing.index');
Route::get('/tentang-kami', [AboutController::class, 'index'])->name('about.index');
