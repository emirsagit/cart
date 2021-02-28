<?php

namespace App\Http\Controllers\Products;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Scoping\Scopes\SliderScope;
use App\Http\Controllers\Controller;
use App\Scoping\Scopes\CategoryScope;
use App\Http\Resources\ProductResource;
use App\Scoping\Scopes\ShowOnHomePageScope;
use App\Http\Resources\ProductsIndexResource;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::withScopes($this->scopes())->paginate(10);

        return ProductsIndexResource::collection($products);
    } 

    public function show(Product $product)
    {
        return new ProductResource($product);
    } 

    public function scopes()
    {
        return [
            'category' => new CategoryScope(),  
            'homepage' => new ShowOnHomePageScope(),  
            'slider' => new SliderScope(),
        ];
    } 
}
