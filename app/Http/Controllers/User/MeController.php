<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Resources\PrivateUserResource;
use Illuminate\Http\Request;

class MeController extends Controller
{
    public function get(Request $request)
    {
        return new PrivateUserResource($request->user());
    } 
}
