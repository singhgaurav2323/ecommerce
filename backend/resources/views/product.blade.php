@extends('layouts.dashboardLayout')

@section('custom-style')
<link rel="stylesheet" href="./css/single.css">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
@endsection

@section('content')
<div class="container-fluid main">
    <div class="row">
        <div class="col-md-5 fix" style="margin-left:17px;">
            <ul class="slider scrollbar" id="style-8">
                @foreach($images as $image)
                <li><img type="button" onmouseover="document.getElementById('image').src='{{ $image }}'" src="{{ $image }}" alt="product image"></li>
                @endforeach
            </ul>
            <div class="main-img">
                <img id="image" src="{{ explode('|', $product->images)[0] }}" alt="product image">
            </div>
            <div class="button-section">
                <ul class="button-list">
                    <form action="{{ route('cartAdd', ['product'=>$product->asing]) }}" method="POST">
                        @csrf
                        <li><button type="submit"><i class="far fa-shopping-cart"></i>Add To Cart</button></li>
                    </form>
                    <li><button type="submit"><i class="fab fa-cc-mastercard"></i>Buy Now</button></li>
                </ul>
            </div>
        </div>

        <div class="col-md-6 info">
            <div class="product-title">
                <h5><span>{{ $product->title }}</span></h5>
                <p class="description"><span class="badge badge-success ">4 ⭐</span> <span class="text-muted">86,300 Ratings & 8,621 Reviews</span></p>
                <p>
                    <span class="price-main">₹ {{ $product->price }}</span>
                    <span style="position: relative; top: -3px;" class="text-muted price-silent">₹ {{ $product->mrp }}</span>
                    <span style="position: relative; top: -3px;" class="off-percentage">{{ floor(($product->mrp-$product->price)/$product->mrp*100) }}% off</span>
                </p>
            </div>

            <div class="bank-offer">
                <h5 class="bank-offer-head">Offers</h5>
                <ul class="offer">
                    <li><i class="fas fa-tags"></i><span class="heading">Bank Offer</span><span class="description">10% off on first two purchase using Bank of Baroda Master Debit Card. On orders of ₹750/- and above</span><a class="terms" href="">T&C</a></li>
                    <li><i class="fas fa-tags"></i><span class="heading">Bank Offer</span><span class="description">5% Unlimited Cashback on Flipkart Axis Bank Credit Card</span><a class="terms" href="">T&C</a></li>
                    <li><i class="fas fa-tags"></i><span class="heading">Bank Offer</span><span class="description">Buy now and Get 6 months Free Spotify Premium Trial</span><a class="terms" href="">T&C</a></li>
                    <li><i class="fas fa-tags"></i><span class="heading">Bank Offer</span><span class="description">GST Invoice Available! Save up to 28% for business purchases.</span><a class="terms" href="">T&C</a></li>
                </ul>
            </div>

            <div class="row special">
                <div class="col-sm-6 description_" style="padding-left: 0px;">
                    <span class="text-muted" style="margin-left: 0px;">Highlights</span>

                    <ul class="highlights">
                        <li class="highlight">With Mic:Yes</li>
                        <li class="highlight">Bluetooth version: 5</li>
                        <li class="highlight">Wireless range: 10 m</li>
                        <li class="highlight">Charging time: 2 Hours</li>
                        <li class="highlight">Instant Voice Assistant</li>
                        <li class="highlight">Type-C Charging Port | Upto 15 hours of total playtime</li>
                        <li class="highlight">IWP Technology</li>
                    </ul>
                </div>
                <div class="col-sm-6 warranty" style="padding-right: 0;">
                    <span class="text-muted">Specials</span>
                    <ul class="special-warranty">
                        <li><i class="far fa-badge-check"></i><span>1 Year Warranty</span></li>
                        <li><i class="fas fa-repeat-alt"></i><span>7 Days Replacement Policy</span></li>
                        <li><i class="far fa-usd-circle"></i><span>Cash on delivery available</span></li>
                        <li><i class="far fa-calendar-check"></i><span>No Cost EMI</span></li>

                    </ul>
                </div>
            </div>

            <div class="row details">
                <div class="modal-header" style="display: flex; justify-content: space-between;">
                    <h5 class="modal-title"> Description </h5>
                    <i class="fa fa-plus-circle" type="button" data-toggle="collapse" data-target="#collapseDescription" aria-hidden="true" style="padding: 10px;"></i>
                </div>
                <div class="modal-body collapse" id="collapseDescription">
                    <ul style="padding-left: 0; padding-right: 0;">

                        <span class="text-muted" style="margin-left: 0;">Description</span>
                        <p style="padding: 0 10px; font-size: 14px; text-align: justify;">{{ $product->category }}</p>
                        <div class="text-muted" style="margin-left: 0;">Description</div>
                        <p style="padding: 0 10px; font-size: 14px; text-align: justify;">{{ $product->category }}</p>
                        <div class="text-muted" style="margin-left: 0;">Quantity</div>
                        <p style="padding: 0 10px; font-size: 14px; text-align: justify;">{{ $product->quantity }}</p>
                        <div class="text-muted" style="margin-left: 0;">Brand</div>
                        <p style="padding: 0 10px; font-size: 14px; text-align: justify;">{{ $product->brand }}</p>
                        <div class="text-muted" style="margin-left: 0;">Stock</div>
                        <p style="padding: 0 10px; font-size: 14px; text-align: justify;">{{ $product->stock }}</p>
                        <div class="text-muted" style="margin-left: 0;">Description</div>
                        <p style="padding: 0 10px; font-size: 14px; text-align: justify;">{{ $product->description }}</p>

                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>


@endsection