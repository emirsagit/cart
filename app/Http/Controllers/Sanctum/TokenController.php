<?php

namespace App\Http\Controllers\Sanctum;

use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\PrivateUserResource;
use Illuminate\Validation\ValidationException;

class TokenController extends Controller
{
    public function loginAndGetToken(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $user = auth()->user();
            return response()->json([
                'token' => $user->createToken($request->device_name)->plainTextToken,
                'user' => new PrivateUserResource($user)
            ]);
        }

        throw ValidationException::withMessages([
            'email' => ['The provided credentials are incorrect.'],
        ]);
    }
}
