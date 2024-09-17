<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartDetail;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function index() {
        if(auth()->check() && auth()->user()->role_user == 'user') {
            $cart_id = Cart::where('user_id', auth()->user()->id)->first()->id;
            $carts = CartDetail::where('cart_id', $cart_id)->get();
        } else {
            $carts = null;
        }
        return view('homepage', compact('carts'));
    }

    public function store(Product $product, Request $request) {

        if(auth()->user()->role_user == 'user') {
            $user_id = auth()->user()->id;
            $cart_id = Cart::where('user_id', $user_id)->first()->id;
            $product_id = $product->id;

            $existing_cart = CartDetail::where('product_id', $product->id)
            ->where('cart_id', $cart_id)
            ->first();

            if($existing_cart == null) {
                $request->validate([
                    'quantity' => 'required|gte:1|lte:'. $product->stock
                ]);


                CartDetail::create([
                    'cart_id' => $cart_id,
                    'product_id' => $product_id,
                    'quantity' => $request->quantity,
                ]);
            }else{
                $request->validate([
                    'quantity' => 'required|gte:1|lte:' . ($product->stock - $existing_cart->quantity)
                ]);

                $existing_cart->update([
                    'quantity' => $existing_cart->quantity + $request->quantity
                ]);
            }

            return redirect()->back();
        }

    }

    public function update(CartDetail $cartDetail, Request $request) {
        $request->validate([
            'quantity' => 'required|gte:1|lte:'. $cartDetail->product->stock,
        ]);

        $cartDetail->update([
            'quantity' => $request->quantity
        ]);
        return redirect()->back();
    }

    public function destroy(CartDetail $cartDetail) {
        $cartDetail->delete();
        return redirect()->back();
    }
}
