@extends('layouts.dashboardLayout')

@section('custom-style')
<link rel="stylesheet" href="/css/style.css">
<link rel="stylesheet" href="/css/payments.css">
<link rel="stylesheet" href="/css/checkout.css">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
@endsection

@section('content')
<div class="row">

    <div class="col-md-6" style="padding: 50px;">
        <div class="card" style="margin: 10px; width: 585px;">
            <h5 class="card-header">Your Cart ( {{$payments->count()}} )</h5>
        </div>
        @if ($payments->lastPage() > 1)
        <div class="card" style="margin: 10px; display: -webkit-inline-box;">
            @foreach($payments as $payment)
            <div id="{{ $payment->id}}" class="card-body" onmouseover="main({mode:'<?php echo ($payment->mode); ?>', amount:'<?php echo ($payment->amount); ?>', quantity:'<?php echo ($payment->quantity); ?>', placed:'<?php echo ($payment->created_at); ?>', title:'<?php echo ($payment->title); ?>', brand:'<?php echo ($payment->brand); ?>'})" style="display: inline-flex;">
                <a type="button" href=""><img src="{{ explode('|', $payment->images)[0]}}" alt="product image"></a>
                <div class="detail" style="width:255px; margin-left: 40px; margin-right:20px;">
                    <h5 class="card-title">{{ $payment->brand}}</h5>
                    <p class="card-text">{{ substr($payment->title, 0, 50) }}</p>
                    <p class="card-text text-muted">Placed on: {{ explode(" ",$payment->created_at)[0] }}</p>
                </div>
                <div class="quantity" style="display: grid; margin-left: 10px; margin-right:20px;" ">
                <p class=" card-text" style=" display: inline-flex; margin-top:10px;">
                    Quantity <span style="margin-left: 4px;"><b> {{ $payment->quantity }} </b></span>
                    </p>
                </div>
                <div class="price" style="width: 80px; margin-top: 10px; margin-left:10px;">
                    <p style="font-size: 15px;">₹ <b>{{ $payment->amount*$payment->quantity}} </b> </p>
                </div>
            </div>
            @endforeach
        </div>
        <ul class="pagination" style="display: flex; justify-content: center; margin: 20px;">
            <li style="transform: scale(1.9);" class="{{ ($payments->currentPage() == 1) ? 'disabled' : '' }}">
                <a class="scale-font" href="{{ $payments->url($payments->currentPage()-1) }}">&laquo;...</a>
            </li>
            @for($i = 1; $i <= $payments->lastPage(); $i++)
                <li class="{{ ($payments->currentPage() == $i) ? 'active-bar' : '' }}">
                    <a href="{{ $payments->url($i) }}">{{ $i }}</a>
                </li>
                @endfor
                <li style="transform: scale(1.9);" class="{{ ($payments->currentPage() == $payments->lastPage()) ? ' disabled' : '' }}">
                    <a href="{{ $payments->url($payments->currentPage()+1) }}">...&raquo;</a>
                </li>
        </ul>
        @endif
    </div>


    <div class="col-md-4 offset-md-1 payment-main" style="padding: 25px; margin-top: 30px; height: 562px;">
        <div class="d-flex justify-content-center">
            <h4><i class="fa fa-shopping-cart"></i> Checkout</h4>
        </div>
        @php
        $total = intval($payments[0]->quantity, 10)*intval($payments[0]->amount, 10);
        @endphp
        <form action="" method="" class="payment-form">
            <div class="address">
                <h4>Address</h4>
                <div class="card">
                    <address>
                        {{ auth()->user()->name }}<br />
                        House No. 121, Gali No. 21<br />
                        Saket, New Delhi, Delhi, 110041,<br />
                        India<br />
                    </address>
                </div>
            </div>

            <fieldset>
                <legend>
                    <h4>Payment Method</h4>
                </legend>

                <div class="payment-options">
                    <div class="form-check">
                        <label class="form-check-label" style="display: flex; justify-content: space-between;" for="visa"> <span id="mode">{{$payments[0]->mode}}</span>
                            <span class="text-muted">Placed on <b id="placed">{{explode(" ", $payments[0]->created_at)[0]}}</b></span>
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
                            <td align="right">₹ <b id="total">{{$total}}</b></td>
                        </tr>
                        <tr>
                            <td>Discount 10%</td>
                            <td align="right">- ₹ <b id="total1">{{$total*0.1}}</b></td>
                        </tr>
                        <tr>
                            <td>Price Total</td>
                            <td align="right">₹ <b id="total2">{{$total-$total*0.1}}</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td>Total</td>
                            <td align="right">₹ <b id="total-round">{{ intval($total-$total*0.1) }}</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </form>
    </div>
</div>
@endsection

@section('extra-js')
<script>
    function main(obj) {
        const res = obj;
        const mode = document.getElementById('mode');
        const placed = document.getElementById('placed');
        const total = document.getElementById('total');
        const total1 = document.getElementById('total1');
        const total2 = document.getElementById('total2');
        const round = document.getElementById('total-round');

        const amount = (res.amount * 1) * (res.quantity * 1);

        mode.innerHTML = res.mode;
        placed.innerHTML = res.placed.split(" ")[0];
        total.innerHTML = amount;
        total1.innerHTML = (amount * 0.1).toFixed(2);
        total2.innerHTML = (amount - amount * 0.1).toFixed(2);
        round.innerHTML = Math.floor(amount - amount * 0.1);
    }
</script>
@endsection