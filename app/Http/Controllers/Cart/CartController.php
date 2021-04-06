<?php

namespace App\Http\Controllers\Cart;

use App\Cart\Cart;
use Illuminate\Http\Request;
use App\Models\ProductVariant;
use App\Http\Requests\CartRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateCartQuantity;
use App\Http\Resources\CartProductResource;

class CartController extends Controller
{
    protected $cart;

    public function __construct(Request $request)
    {
        $this->cart = new Cart();
    }

    public function store(CartRequest $request)
    {
        $this->cart->add($request);

        $this->cart->sync();
    }

    public function update(ProductVariant $productVariant, UpdateCartQuantity $request)
    {
        $this->cart->update($productVariant->id, $request);
    }

    public function destroy(ProductVariant $productVariant)
    {
        $this->cart->delete($productVariant->id);
    }

    public function index(Request $request)
    {
        $this->cart->sync();

        $user = $request->user()->load(['cart.product', 'cart.attributeValue', 'cart.attribute', 'cart.option', 'cart.optionValue', 'cart.stock', 'cart.product.variants.stock', 'cart.product']);

        return (new CartProductResource($user))->additional([
            'meta' => $this->meta($request)
        ]);
    }

    protected function meta(Request $request)
    {
        return [
            'empty' => $this->cart->isEmpty(),
            'subtotal' => $this->cart->subtotal()->formatted(),
            'total' => $this->cart->withShipping($request)->total()->formatted(),
            'stockHasChanged' => $this->cart->stockHasChanged()
        ];
    }
}
