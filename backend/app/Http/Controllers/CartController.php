<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Cart;

class CartController extends Controller
{
    public function index()
    {
    }

    public function create()
    {
        $productAsing = request('product');
        $product = Products::select('id', 'asing')->where('asing', $productAsing)->get();
        $asing = $product[0]["asing"];
        $user = auth()->user()->id;

        $cart = new Cart();
        $cart->user_id = $user;
        $cart->product_id = $asing;

        $cart->save();

        return redirect('/')->with('cart', 'added to cart successfully');
    }
}
