<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Payment;
use App\Models\Cart;

class PaymentController extends Controller
{
    // To show the Payment checkout for cart 
    public function show($userid)
    {
        $currentUser = auth()->user()->id;
        if ($currentUser == $userid) {

            $products = Cart::select('products.*', 'carts.quantity', 'carts.id as cartid')
                ->join('products', 'product_id', '=', 'products.asing')
                ->where('user_id', $userid)
                ->get();

            return view('checkout', ['products' => $products]);
        } else {
            abort(403);
        }
    }

    // To show the Payment checkout for buy now 
    public function index($productid)
    {
        $products = Products::select()->where('asing', $productid)->get();

        return view('checkout', ['products' => $products]);
    }

    // To create a new payment
    public function create($userid)
    {
        $currentUser = auth()->user()->id;
        if ($currentUser == $userid) {
            $data = json_decode(request()['productId']);

            foreach ($data as $instances) {
                $pay = new Payment();
                $pay->user_id = $userid;
                $pay->product_id = $instances[0];
                $pay->mode = request()['mode'];
                $pay->amount = $instances[1];
                $pay->quantity = $instances[2];
                $pay->save();
            }

            return redirect('/')->with('payment', 'Successfully added to purchase');
        } else {
            abort(403);
        }
    }
}
