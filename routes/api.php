<?php

namespace App;

use App\Http\Controllers\Addresses\AddressController;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\MeController;
use App\Http\Controllers\Cart\CartController;
use App\Http\Controllers\Products\ProductController;
use App\Http\Controllers\Excel\ExcelImportController;
use App\Http\Controllers\Categories\CategoryController;


Route::middleware('auth:sanctum')->group(function () {
    Route::resource('/addresses', AddressController::class);
    Route::get('/user', [MeController::class, 'get']);
    Route::resource('/cart', CartController::class, [
        'parameters' => [
            'cart' => 'productVariant'
        ]
    ]);
});

Route::get('/products/{product}/attributes/{attribute}', [ProductController::class, 'getOptionsWithRelatedProduct']);
Route::resource('/categories', CategoryController::class);
Route::resource('/products', ProductController::class);

Route::get('/', function (Request $request) {
    return Category::parents()->order()->get();
});

//admin
Route::get('/excel/import/cities', [ExcelImportController::class, 'import']);