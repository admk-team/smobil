<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\FrontController;

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

// Front Routes
Route::name('front.')->group(function() {
    Route::get('/', [FrontController::class, 'mobile'])->name('mobile');
    Route::prefix('/front')->group(function() {
        Route::get('/dth', [FrontController::class, 'mobile'])->name('dth');
        Route::get('/broadband', [FrontController::class, 'mobile'])->name('broadband');
        Route::get('/cable', [FrontController::class, 'mobile'])->name('cable');
        Route::get('/electricity', [FrontController::class, 'mobile'])->name('electricity');
        Route::get('/water', [FrontController::class, 'mobile'])->name('water');
    });
});