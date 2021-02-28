<?php

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Products\ProductController;
use App\Http\Controllers\Categories\CategoryController;


Route::resource('/categories', CategoryController::class);
Route::resource('/products', ProductController::class);

Route::get('/', function (Request $request) {
    return Category::parents()->order()->get();
});


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
