@extends('layouts.dashboardLayout')

@section('custom-style')
<link rel="stylesheet" href="/css/checkout.css">
<link rel="stylesheet" href="/css/style.css">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
@endsection

@section('content')
<div class="row">

    @php
    $total = 0;
    $productSeq = [];
    @endphp
    <div class="col-md-6" style="padding: 50px;">
        <div class="card" style="margin: 10px; width: 604px;">
            <h5 class="card-header">Checkout Items ( {{ $products->count() }} )</h5>
        </div>
        <div class="card" style="margin: 10px; width:604px; display: -webkit-inline-box;">
            @foreach($products as $product)
            <div class="card-body" style="display: inline-flex;">
                <a type="button" href="{{ route('product', ['product' =>strval($product->asing) ]) }}"><img src="{{ explode('|', $product->images)[0]}}" alt="product image"></a>
                <div class="detail" style="width:255px; margin-left: 40px; margin-right:20px;">
                    <h5 class="card-title">{{ $product->brand }}</h5>
                    <p class="card-text">{{ substr($product->title, 0, 50) }}</p>
                </div>

                <div class="quantity" style="display: grid; margin-left: 20px; margin-right:40px;" ">
                    <input style=" margin-left:15px; margin-bottom:4px; width:40px; padding: 10px; border:none;" value="{{$product->quantity === "NA" ? 1 : $product->quantity}}" readonly>
                </div>

                <div class="price" style="width: 80px; margin-top: 20px;">
                    <p style="font-size: 15px;">₹ <b>{{ $product->price }} X {{ $product->quantity === "NA" ? 1 : $product->quantity }} </b> </p>
                </div>
            </div>

            @php
            $quantity = $product->quantity === "NA" ? 1 : $product->quantity;
            array_push($productSeq, array($product->asing, intval($product->price+$product->price*0.18, 10), $quantity));
            $total = $total + intval($product->price, 10)*($product->quantity === "NA" ? 1 : $product->quantity);
            @endphp
            @endforeach
        </div>

        <div class="card" style="margin: 10px; width: 604px;">
            <div class="card-header">
                <div class="row">
                    <div class="col-sm-6">Subtotal</div>
                    <div class="col-sm-6" style="text-align: center;">₹ <b>{{ $total }}</b></div>
                </div>
                <div class="row">
                    <div class="col-sm-6">Total (Inc. Gst)</div>
                    <div class="col-sm-6" style="text-align: center;">₹ <b>{{ intval($total+$total*0.18, 10) }}</b></div>
                </div>
            </div>
        </div>
    </div>

    @php
    $total = intval($total+$total*0.18, 10)
    @endphp

    <div class="col-md-4 offset-md-1 payment-main" style="padding: 25px; margin-top: 30px;">
        <div class="d-flex justify-content-center">
            <h4><i class="fa fa-shopping-cart"></i> Checkout</h4>
        </div>
        <form action="{{ route('createPayment', ['userid'=>auth()->user()->id]) }}" method="post" class="payment-form">
            <div class="address">
                <h4>Address</h4>
                <div class="card">
                    <address>
                        {{ auth()->user()->name }}<br />
                        House No. 121, Gali No. 21<br />
                        Saket, New Delhi, Delhi, 110041,<br />
                        India
                    </address>
                </div>
            </div>

            <fieldset>
                <legend>
                    <h4>Payment Method</h4>
                </legend>

                <div class="payment-options">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="mode" id="visa" value="visa">
                        <label class="form-check-label" for="visa">
                            <i class="fa fa-cc-visa"></i> Visa Card
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="mode" id="master" value="master" checked>
                        <label class="form-check-label" for="master">
                            <i class="fa fa-cc-mastercard"></i> Master Card
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="mode" id="paypal" value="paypal">
                        <label class="form-check-label" for="paypal">
                            <i class="fa fa-paypal"></i> Pay Pal
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="mode" id="COD" value="COD">
                        <label class="form-check-label" for="COD">
                            <i class="fas fa-wallet"></i> Cash on Delivery
                        </label>
                    </div>
                </div>

            </fieldset>

            <div style="margin-top: 30px;">
                <h4>Shopping Bill</h4>
                <table>
                    <tbody>
                        <tr>
                            <td>Shipping fee</td>
                            <td align="right">₹ <b>{{ $total }}</b></td>
                        </tr>
                        <tr>
                            <td>Discount 10%</td>
                            <td align="right">- ₹ <b>{{ $total*0.1 }}</b></td>
                        </tr>
                        <tr>
                            <td>Price Total</td>
                            <td align="right">₹ <b>{{ $total-$total*0.1 }}</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td>Total</td>
                            <td align="right">₹ <b>{{ intval($total-$total*0.1) }}</td>
                        </tr>
                    </tfoot>
                </table>
            </div>

            <div class="d-flex justify-content-center" style="padding: 20px;">
                <button class="btn btn-primary button " type="submit"> <i class="fas fa-handshake"></i>
                    Buy Now
                </button>
            </div>

            <input type="hidden" name="productId" value="{{ json_encode($productSeq) }}">
            @csrf
        </form>
    </div>
</div>
@endsection