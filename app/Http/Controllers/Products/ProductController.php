<?php

namespace App\Http\Controllers\Products;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\ProductVariant;
use App\Scoping\Scopes\SliderScope;
use App\Http\Controllers\Controller;
use App\Scoping\Scopes\CategoryScope;
use App\Http\Resources\ProductResource;
use Illuminate\Database\Eloquent\Builder;
use App\Scoping\Scopes\ShowOnHomePageScope;
use App\Http\Resources\ProductsIndexResource;
use App\Http\Resources\ProductVariantResource;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('variants.option', 'variants.attribute', 'variants.stock', 'variants.attributeValue', 'variants.optionValue', 'variants.product')->withScopes($this->scopes())->paginate(10);

        return ProductsIndexResource::collection($products);
    }

    public function show(Product $product)
    {
        $product->load(['variants.option', 'variants.attribute', 'variants.stock', 'variants.attributeValue', 'variants.optionValue', 'variants.product']);
        return new ProductResource($product);
    }

    public function getOptionsWithRelatedProduct(Request $request, Product $product)
    {
        $products = ProductVariant::where([
            ['product_id', '=', $product->id]
        ])
            ->whereHas('attributeValue', function (Builder $query) use ($request) {
                $query->where('name', '=', $request->attribute);
            })->with(['attribute', 'attributeValue', 'stock', 'option', 'optionValue', 'product'])->get();

        return ProductVariantResource::collection($products->groupBy(['option.name', 'optionValue.name']));
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
