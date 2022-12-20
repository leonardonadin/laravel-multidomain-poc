<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\HomeController;
use App\Models\Account;
use Illuminate\Database\QueryException;
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

Route::domain('localhost')->group(function () {
    Route::get('/', [AccountController::class, 'index']);
});

Route::domain('admin.localhost')->group(function () {
    Route::view('/', 'admin');
});

Route::domain('{subdomain}.{domain}')->group(function () {
    Route::middleware('account')->group(function () {
        Route::get('/', [HomeController::class, 'index']);
    });
});
