<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TransactionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route untuk user login dengan Sanctum
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Public routes
Route::get('/', [HomeController::class, 'index']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:api');

// Hanya bisa akses index dan show book secara publik
Route::apiResource('/books', BookController::class)->only(['index', 'show']);

Route::apiResource('/transaction', TransactionController::class)->only(['index', 'show']);

// Route yang butuh autentikasi
Route::middleware(['auth:api'])->group(function () {

    // hanya bisa dilihat oleh user yang login
    Route::get('/genres', [GenreController::class, 'index']);
    Route::apiResource('/transaction', TransactionController::class)->only(['index', 'store', 'show']);

    // Role admin
    Route::middleware(['role:admin'])->group(function () {
        Route::apiResource('/books', BookController::class)->only(['store', 'update', 'destroy']);
        Route::apiResource('/genres', GenreController::class)->only(['store', 'show', 'destroy']);
        Route::apiResource('/authors', AuthorController::class);

        Route::apiResource('/transaction', TransactionController::class)->only(['update', 'destroy']);
    });
});
