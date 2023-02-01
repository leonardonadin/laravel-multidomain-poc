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

Route::get('/', function() {
    return '<h1>Thats all folks!</h1>';
})->name('home');

Route::middleware('domain')->group(function () {
    Route::get('/', [HomeController::class, 'index']);
});
