<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    public function getUserProducts($userId)
    {
        $Products = Cart::select('products.*', 'carts.quantity', 'carts.id as cartid')
            ->join('products', 'product_id', '=', 'products.asing')
            ->where('user_id', $userId)
            ->get();
        return $Products;
    }
}
