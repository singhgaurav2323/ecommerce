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
                        <button type=" " onclick="increment(this)" style="border-radius: 50%; width: 20px; border: none; background-color: darkkhaki; font-weight: bold; font-size: 16px; font-family: fantasy; position: relative; left: 10px; outline:none;">+</button>
                        <!-- @method('put') -->
                        <!-- @csrf -->
                        <input style="margin-left:15px; margin-bottom:4px; width:40px;" value="{{$product->quantity}}" readonly>
                        <button type=" " onclick="decrement(this)" style="border-radius: 50%; width: 20px; border: none; background-color: darkkhaki; font-weight: bold; font-size: 17px; font-family: fantasy; position: relative; top: -30px; left: 85px; outline:none;">-</button>
                    </form>


                    <form action="{{ route('removeCart', ['id'=>auth()->user()->id, 'product'=>$product->asing]) }}" method="post">
                        <button class="btn btn-alert text-silent" style="color:red;"> Delete</button>
                        @method('delete')
                        @csrf
                    </form>
                </div>
                <div id="price" class="price" style="width: 80px; margin-top: 30px;">
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
        <div class="card" style="margin-top: 10px; width: 450px;">
            <a class="card-header" href="{{ route('checkout', ['userid'=>auth()->user()->id]) }}" style="display:flex; justify-content: center; background-color: burlywood; color:black;"><i class="fa fa-lock" style="margin-top: 4px; margin-right:5px;"></i><b>Checkout</b></a>
        </div>
    </div>

    @endif
</div>

@endsection

@section('extra-js')
<script>
    function increment(obj) {
        var currVal = obj.parentNode.childNodes[7];
        currVal.value = currVal.value * 1 + 1;
        obj.parentNode.parentNode.parentNode.childNodes[7].childNodes[1].childNodes[3].innerText = currVal.value;
        var increment = obj.parentNode.parentNode.parentNode.childNodes[7].childNodes[1].childNodes[1].innerText;
        var total = document.getElementById('total').innerText * 1 + increment * 1;
        document.getElementById('total').innerHTML = total;
        document.getElementById('total1').innerHTML = total;
        document.getElementById('total2').innerHTML = Math.floor(total + total * 0.18);
    }

    function decrement(obj) {
        var currVal = obj.parentNode.childNodes[7];
        if (currVal.value * 1 > 1) {
            currVal.value = currVal.value * 1 - 1;
            obj.parentNode.parentNode.parentNode.childNodes[7].childNodes[1].childNodes[3].innerText = currVal.value;
            var decrement = obj.parentNode.parentNode.parentNode.childNodes[7].childNodes[1].childNodes[1].innerText;
            var total = document.getElementById('total').innerText * 1 - decrement * 1;
            document.getElementById('total').innerHTML = total;
            document.getElementById('total1').innerHTML = total;
            document.getElementById('total2').innerHTML = Math.floor(total + total * 0.18);
        }
    }
</script>
@endsection