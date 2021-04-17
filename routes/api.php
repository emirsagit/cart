<?php

namespace App;

use Iyzipay\Options;
use App\Models\Category;
use Illuminate\Http\Request;
use Iyzipay\Model\ThreedsPayment;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\MeController;
use App\Http\Controllers\Cart\CartController;
use App\Http\Controllers\Cities\CityController;
use App\Http\Controllers\Order\OrderController;
use Iyzipay\Request\CreateThreedsPaymentRequest;
use App\Http\Controllers\Products\ProductController;
use App\Http\Controllers\Addresses\AddressController;
use App\Http\Controllers\Excel\ExcelImportController;
use App\Http\Controllers\Districts\DistrictController;
use App\Http\Controllers\Shippping\ShippingController;
use App\Http\Controllers\Categories\CategoryController;

Route::middleware('auth:sanctum')->group(function () {
    Route::resource('/addresses', AddressController::class);
    Route::resource('/orders', OrderController::class)->except([
        'store'
    ]);
    Route::middleware(['cart.sync', 'cart.isempty'])->post('/orders', [OrderController::class, 'store']);
    Route::resource('/cart', CartController::class, [
        'parameters' => [
            'cart' => 'productVariant'
        ]
    ]);
    Route::get('/user', [MeController::class, 'get']);
});

//address city, district, neighborhood
Route::get('/shippings', [ShippingController::class, 'index']);
Route::get('/cities', [CityController::class, 'index']);
Route::get('/cities/{city}/districts', [DistrictController::class, 'district']);
Route::get('/districts/{district}/neighborhoods', [DistrictController::class, 'neighborhood']);
// end address

Route::post('/payment',  [OrderController::class, 'payment']);

Route::resource('/categories', CategoryController::class);

Route::get('/products/{product}/attributes/{attribute}', [ProductController::class, 'getOptionsWithRelatedProduct']);
Route::resource('/products', ProductController::class);

Route::get('/', function (Request $request) {
    return Category::parents()->order()->get();
});

//admin
Route::get('/excel/import/cities', [ExcelImportController::class, 'import']);
