<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Sanctum\TokenController;



Route::post('/sanctum/token', [TokenController::class, 'loginAndGetToken']);