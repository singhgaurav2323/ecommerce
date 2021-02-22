<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductController extends Controller
{
    public function index()
    {
        $products = Products::inRandomOrder()->limit(6)->get();

        $brands = Products::select('brand', Products::raw('count(*) as total'))
            ->groupBy('brand')
            ->orderBy('total', 'DESC')
            ->limit(10)
            ->get();

        $paginatePage = Products::paginate(3)->withQueryString();

        return view('dashboard', ['products' => $products, 'brands' => $brands, 'paginator' => $paginatePage]);
    }

    public function search()
    {
        $inp = request()['search'];
        $results = Products::where('title', 'LIKE', '%' . $inp . '%')
            ->orWhere('category', 'LIKE', '%' . $inp . '%')
            ->orWhere('brand', 'LIKE', '%' . $inp . '%')
            ->paginate(10);

        return view('productSearch', ['results' => $results, 'keyword' => $inp]);
    }

    public function show($product)
    {
        $productDetail = Products::where('asing', $product)->firstOrFail();
        $images = explode('|', $productDetail->images);
        return view('product', ['product' => $productDetail, 'images' => $images]);
    }
}
