<?php

namespace App\Cart;

class Cart
{
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
    
    protected function getCurrentQuantity($product, $user)
    {
        if($product = ($user->cart->where('id', $product['id'])->first())) {
            return $product->pivot->quantity;
        }

        return 0;
    } 

}
