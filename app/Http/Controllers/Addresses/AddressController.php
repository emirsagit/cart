<?php

namespace App\Http\Controllers\Addresses;

use App\Models\Address;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddressStoreRequest;
use App\Http\Resources\AddressResource;

class AddressController extends Controller
{
    public function index(Request $request)
    {
        return AddressResource::collection($request->user()->addresses);
    }

    public function store(AddressStoreRequest $request)
    {
        $address = Address::make($request->only(
            ['name', 'description', 'phone', 'address', 'city_id', 'neighborhood', 'district', 'postal_code', 'is_delivery', 'is_billing', 'is_default']
        ));

        $request->user()->addresses()->save($address);

        return new AddressResource($address);
    }
}
