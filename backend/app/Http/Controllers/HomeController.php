<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Products;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function showPayments()
    {
        $userId = auth()->user()->id;
        $payments = Payment::select('payments.*', 'products.images', 'products.title', 'products.brand')
            ->join('products', 'product_id', '=', 'products.asing')
            ->where('user_id', $userId)->paginate(3);
        // dd($payments);
        return view('payments', ['payments' => $payments]);
    }
}
