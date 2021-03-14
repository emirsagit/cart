<?php

use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\ValidationException;
use App\Http\Controllers\Products\ProductController;
use App\Http\Controllers\Categories\CategoryController;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/sanctum/token', function (Request $request) {
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
        'device_name' => 'required',
    ]);

    $user = User::where('email', $request->email)->first();

    if (!$user || !Hash::check($request->password, $user->password)) {
        throw ValidationException::withMessages([
            'email' => ['The provided credentials are incorrect.'],
        ]);
    }

    return response()->json([
        'token' => $user->createToken($request->device_name)->plainTextToken,
        'user' => $user
    ]);
});

Route::resource('/categories', CategoryController::class);
Route::get('/products/{product}/attributes/{attribute}', [ProductController::class, 'getOptionsWithRelatedProduct']);
Route::resource('/products', ProductController::class);

Route::get('/', function (Request $request) {
    return Category::parents()->order()->get();
});
