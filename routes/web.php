<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
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

Route::get('/', [PostController::class, 'index']);
Route::match(['get', 'post'], 'register', [AuthController::class, 'register']);
Route::match(['get', 'post'], 'login', [AuthController::class, 'login'])->name('login');
Route::match(['get'], 'logout', [AuthController::class, 'logout']);

Route::group(['middleware' => 'auth'], function () {
    Route::get('protected-route', [AuthController::class, 'protectedRouteExample']);
});
