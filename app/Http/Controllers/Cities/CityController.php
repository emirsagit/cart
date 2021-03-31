<?php

namespace App\Http\Controllers\Cities;

use App\Models\City;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\CityResource;

class CityController extends Controller
{
    public function index()
    {
        return CityResource::collection(City::get());
    } 
}
