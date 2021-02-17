<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Cart;

class CartController extends Controller
{
    public function show($id)
    {
        $products = Cart::select('products.*', 'carts.quantity', 'carts.id as cartid')
            ->join('products', 'product_id', '=', 'products.asing')
            ->where('user_id', $id)
            ->get();

        return view('showCart', ['products' => $products]);
    }

    public function create()
    {
        $productAsing = request('product');
        $product = Products::select('id', 'asing')->where('asing', $productAsing)->get();
        $asing = $product[0]["asing"];
        $user = auth()->user()->id;

        $find = Cart::select()->where('product_id', $asing)->count();
        if ($find) {
            return redirect(route('cartShow', ['id' => auth()->user()->id]));
        } else {

            $cart = new Cart();
            $cart->user_id = $user;
            $cart->product_id = $asing;

            $cart->save();

            return redirect('/')->with('cart', 'added to cart successfully');
        }
    }

    public function decrease($cartid)
    {
        $count = Cart::select('quantity')->where('id', $cartid)->get();
        $productId = Cart::select('product_id')->where('id', $cartid)->get();

        if ($count[0]->quantity < 2) {
            $deletedProduct = Cart::where('user_id', auth()->user()->id)->where('product_id', $productId[0]->product_id)->delete();
            return redirect(route('cartShow', ['id' => auth()->user()->id]));
        } else {
            $affected = Cart::where('id', $cartid)->decrement('quantity');
            return redirect(route('cartShow', ['id' => auth()->user()->id]));
        }
    }

    public function increase($cartid)
    {
        $affected = Cart::where('id', $cartid)->increment('quantity');
        return redirect(route('cartShow', ['id' => auth()->user()->id]));
    }


    public function destroy($id, $product)
    {
        $deletedProduct = Cart::where('user_id', $id)->where('product_id', $product)->delete();
        return redirect(route('cartShow', ['id' => auth()->user()->id]));
    }
}
