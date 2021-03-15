<?php

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\MeController;
use App\Http\Controllers\Cart\CartController;
use App\Http\Controllers\Products\ProductController;
use App\Http\Controllers\Categories\CategoryController;

Route::middleware('auth:sanctum')->get('/user', [MeController::class, 'get']);
Route::middleware('auth:sanctum')->resource('/cart', CartController::class, [
    'parameters' => [
        'cart' => 'productVariant'
    ]
]);


Route::get('/products/{product}/attributes/{attribute}', [ProductController::class, 'getOptionsWithRelatedProduct']);
Route::resource('/categories', CategoryController::class);
Route::resource('/products', ProductController::class);

Route::get('/', function (Request $request) {
    return Category::parents()->order()->get();
});
