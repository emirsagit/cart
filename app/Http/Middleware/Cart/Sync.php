<?php

namespace App\Http\Middleware\Cart;

use Closure;
use App\Cart\Cart;
use Illuminate\Http\Request;

class Sync
{
    protected $cart;

    public function __construct(Cart $cart)
    {
        $this->cart = $cart;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $this->cart->sync();

        if ($this->cart->stockHasChanged()) {
            return response()->json(['message' => 'Ürün stok miktarı değişti. Lütfen sepetinizi kontrol ederek yeniden deneyiniz'], 409);
        }

        return $next($request);
    }
}
