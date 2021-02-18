@extends('layouts.dashboardLayout')

@section('custom-style')
<link rel="stylesheet" href="/css/style.css">
@endsection

@section('content')
<div class="row">

    @php
    $total = 0;
    @endphp
    <div class="col-md-6" style="padding: 50px;">
        <div class="card" style="margin: 10px; width: 604px;">
            <h5 class="card-header">Your Cart ( {{ $products->count() }} )</h5>
        </div>
        <div class="card" style="margin: 10px; display: -webkit-inline-box;">
            @foreach($products as $product)
            <div class="card-body" style="display: inline-flex;">
                <a type="button" href="{{ route('product', ['product' =>strval($product->asing) ]) }}"><img src="{{ explode('|', $product->images)[0]}}" alt="product image"></a>
                <div class="detail" style="width:255px; margin-left: 40px; margin-right:20px;">
                    <h5 class="card-title">{{ $product->brand }}</h5>
                    <p class="card-text">{{ substr($product->title, 0, 50) }}</p>
                </div>
                <div class="quantity" style="display: grid; margin-left: 20px; margin-right:40px;" ">
                    <form action=" {{ route('increaseQuantity', ['cartid'=>$product->cartid]) }}" method="post">
                    <button type=" button" style="border-radius: 50%; width: 20px; border: none; background-color: darkkhaki; font-weight: bold; font-size: 16px; font-family: fantasy; position: relative; top: 28px; left: -10px; outline:none;">+</button>
                    @method('put')
                    @csrf
                    </form>

                    <input style="margin-left:15px; margin-bottom:4px; width:40px;" value="{{$product->quantity}}" readonly>

                    <form action=" {{ route('decreaseQuantity', ['cartid'=>$product->cartid]) }}" method="post">
                        <button type=" button" style="border-radius: 50%; width: 20px; border: none; background-color: darkkhaki; font-weight: bold; font-size: 17px; font-family: fantasy; position: relative; top: -30px; left: 60px; outline:none;">-</button>
                        @method('put')
                        @csrf
                    </form>

                    <form action="{{ route('removeCart', ['id'=>auth()->user()->id, 'product'=>$product->asing]) }}" method="post">
                        <button class="btn btn-alert text-silent" style="color:red;"> Delete</button>
                        @method('delete')
                        @csrf
                    </form>
                </div>
                <div class="price" style="width: 80px; margin-top: 30px;">
                    <p style="font-size: 15px;">₹ <b>{{ $product->price }} X {{ $product->quantity }} </b> </p>
                </div>
            </div>

            @php
            $total = $total + intval($product->price, 10)*($product->quantity);
            @endphp
            @endforeach
        </div>
        <div class="card" style="margin: 10px; width: 604px;">
            <p class="card-header" style="display:flex; justify-content: flex-end;">Total <b style="margin-left: 10px; margin-right:20px">₹ {{$total}}</b></p>
        </div>
    </div>

    <div class="col-md-6" style="padding: 60px;">
        <div class="card" style="padding:20px; width: 450px;">
            <div class="row">
                <div class="col-sm-6">Subtotal</div>
                <div class="col-sm-6" style="text-align: center;">₹ <b>{{ $total }}</b></div>
            </div>
            <div class="row">
                <div class="col-sm-6">Total (Inc. Gst)</div>
                <div class="col-sm-6" style="text-align: center;">₹ <b>{{ intval($total+$total*0.18, 10) }}</b></div>
            </div>
        </div>
        <div class="card" style="margin-top: 10px; width: 450px;">
            <a class="card-header" href="{{ route('checkout', ['userid'=>auth()->user()->id]) }}" style="display:flex; justify-content: center; background-color: burlywood; color:black;"><i class="fa fa-lock" style="margin-top: 4px; margin-right:5px;"></i><b>Checkout</b></a>
        </div>
    </div>
</div>

@endsection