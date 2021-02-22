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
                <div class="quantity" style="display: grid; margin-left: 20px; margin-right:40px;">
                    <form id="increment">
                        <input type="number" id="{{strval($product->asing)}}" name="bills" min="1" max="5" onchange="change(this)" style="margin-left:15px; margin-bottom:4px; width:40px;" value="{{$product->quantity}}">
                    </form>

                    <form action="{{ route('removeCart', ['id'=>auth()->user()->id, 'product'=>$product->asing]) }}" method="post">
                        <button class="btn btn-outline-danger text-silent"> Delete</button>
                        @method('delete')
                        @csrf
                    </form>
                </div>
                <div id="price" class="price" style="width: 80px; margin-top: 5px;">
                    <p style="font-size: 15px;">₹ <b id="amount">{{ $product->price }}</b> X <b id="quantity"> {{ $product->quantity }} </b> </p>
                </div>
            </div>

            @php
            $total = $total + intval($product->price, 10)*($product->quantity);
            @endphp
            @endforeach
        </div>
        <div class="card" style="margin: 10px; width: 604px;">
            <p class="card-header" style="display:flex; justify-content: flex-end;">Total ₹ <b id="total" style="margin-left: 10px; margin-right:20px">{{$total}}</b></p>
        </div>
    </div>

    @if(!$products->count() == 0)
    <div class="col-md-6" style="padding: 60px;">
        <div class="card" style="padding:20px; width: 450px;">
            <div class="row">
                <div class="col-sm-6">Subtotal</div>
                <div class="col-sm-6" style="text-align: center;">₹ <b id="total1">{{ $total }}</b></div>
            </div>
            <div class="row">
                <div class="col-sm-6">Total (Inc. Gst)</div>
                <div class="col-sm-6" style="text-align: center;">₹ <b id="total2">{{ intval($total+$total*0.18, 10) }}</b></div>
            </div>
        </div>
        <form action="{{ route('checkout', ['userid'=>auth()->user()->id, 'flag'=>1]) }}" method="post" class="card" style="margin-top: 10px; width: 450px;">
            <input type="hidden" name="carts-details" value="74">
            <button class="card-header" type="submit" onclick="pick()" style="border:none; outline:none; display:flex; justify-content: center; background-color: burlywood; color:black;">
                <i class="fa fa-lock" style="margin-top: 4px; margin-right:5px;"></i><b>Checkout</b>
            </button>
            @csrf
        </form>
    </div>

    @endif
</div>

@endsection

@section('extra-js')
<script>
    function change(obj) {
        var currVal = obj.parentNode.childNodes[1].value;
        obj.parentNode.parentNode.parentNode.childNodes[7].childNodes[1].childNodes[3].innerText = currVal;

        var lists = document.getElementsByClassName('price');
        var total = 0;

        for (let i = 0; i < lists.length; i++) {
            let amount = (lists[i].childNodes[1].childNodes[1].innerText) * 1;
            let quantity = (lists[i].childNodes[1].childNodes[3].innerText) * 1;
            total += amount * quantity;
        }
        document.getElementById('total').innerHTML = total;
        document.getElementById('total1').innerHTML = total;
        document.getElementById('total2').innerHTML = Math.floor(total + total * 0.18);
    }

    function pick() {
        const from = document.getElementsByName('bills');
        const to = document.getElementsByName('carts-details');

        let res = {};
        for (let i = 0; i < from.length; i++) {
            res[i] = [from[i].id, from[i].value];
        }
        to[0].value = JSON.stringify(res);
    }
</script>
@endsection