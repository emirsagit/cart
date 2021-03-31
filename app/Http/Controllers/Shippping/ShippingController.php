<?php

namespace App\Http\Controllers\Shippping;

use App\Models\Shipping;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ShippingResource;

class ShippingController extends Controller
{
    public function index()
    {
        return ShippingResource::collection(Shipping::where('is_active', true)->get());
    } 
}
