<?php

namespace App\Http\Controllers\Districts;

use App\Models\City;
use App\Models\District;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\DistrictResource;
use App\Http\Resources\NeighborhoodResource;

class DistrictController extends Controller
{
    public function district(City $city)
    {
        return DistrictResource::collection($city->districts()->orderBy('name')->get());
    }

    public function neighborhood(District $district)
    {
        return NeighborhoodResource::collection($district->neighborhoods()->orderBy('name')->get());
    }
}
