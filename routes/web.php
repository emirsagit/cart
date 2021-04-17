<?php

use App\Http\Controllers\Order\OrderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Sanctum\TokenController;



Route::post('/sanctum/token', [TokenController::class, 'loginAndGetToken']);
Route::post('/orders', [OrderController::class, 'store']);