<?php

namespace App\Cart;

use App\Cart\Money;

class Cart
{
    protected $stockHasChanged = false;

    public function add($request)
    {
        $user = $request->user();

        $products = collect($request->products)->keyBy('id')->map(function ($product) use ($user) {
            return [
                'quantity' => $product['quantity'] + $this->getCurrentQuantity($product, $user)
            ];
        });

        $user->cart()->syncWithoutDetaching($products->toArray());
    }

    public function update($productId, $request)
    {
        $request->user()->cart()->updateExistingPivot($productId, [
            'quantity' => $request->quantity
        ]);
    }

    public function delete($productId)
    {
        auth()->user()->cart()->detach($productId);
    }

    public function empty()
    {
        auth()->user()->cart()->detach();
    }

    public function isEmpty()
    {
        return auth()->user()->cart->sum('pivot.quantity') === 0;
    }

    public function subtotal()
    {
        return new Money(
            auth()->user()->cart->sum(function ($product) {
                return ($product->price->amount() * $product->pivot->quantity);
            })
        );
    }

    public function total()
    {
        return $this->subtotal();
    }

    public function sync()
    {
        auth()->user()->cart->load('stock')->map(function ($product) {
            $pivotQuantity = $product->pivot->quantity;
            $quantity = intval($product->minStock($pivotQuantity));

            if ($quantity != $pivotQuantity) {
                $this->stockHasChanged = true;
                $product->pivot->update([
                    'quantity' => $quantity
                ]);
            }
        });
    }

    public function stockHasChanged()
    {
        return $this->stockHasChanged;
    }

    protected function getCurrentQuantity($product, $user)
    {
        if ($product = ($user->cart->where('id', $product['id'])->first())) {
            return $product->pivot->quantity;
        }

        return 0;
    }
}
