<?php

namespace App;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\MeController;
use App\Http\Controllers\Cart\CartController;
use App\Http\Controllers\Cities\CityController;
use App\Http\Controllers\Products\ProductController;
use App\Http\Controllers\Addresses\AddressController;
use App\Http\Controllers\Excel\ExcelImportController;
use App\Http\Controllers\Districts\DistrictController;
use App\Http\Controllers\Shippping\ShippingController;
use App\Http\Controllers\Categories\CategoryController;
use App\Http\Controllers\Order\OrderController;

Route::middleware('auth:sanctum')->group(function () {
    Route::resource('/addresses', AddressController::class);
    Route::get('/user', [MeController::class, 'get']);
    Route::post('/order', [OrderController::class, 'store']);
    Route::resource('/cart', CartController::class, [
        'parameters' => [
            'cart' => 'productVariant'
        ]
    ]);
});


Route::get('/shippings', [ShippingController::class, 'index']);
Route::get('/cities', [CityController::class, 'index']);
Route::get('/cities/{city}/districts', [DistrictController::class, 'district']);
Route::get('/districts/{district}/neighborhoods', [DistrictController::class, 'neighborhood']);
Route::get('/products/{product}/attributes/{attribute}', [ProductController::class, 'getOptionsWithRelatedProduct']);
Route::resource('/categories', CategoryController::class);
Route::resource('/products', ProductController::class);

Route::get('/', function (Request $request) {
    return Category::parents()->order()->get();
});

//admin
Route::get('/excel/import/cities', [ExcelImportController::class, 'import']);
