<?php

use App\Http\Controllers\AppController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AppController::class, 'view']);
Route::post('/', [AppController::class, 'handleSubmission']);
Route::get('/products', [AppController::class, 'viewProducts']);
Route::get('/orders', [AppController::class, 'viewOrders']);
