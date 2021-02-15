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
                <li><img type="button" onmouseover="document.getElementById('image').src='image/product/img1.jpeg'" src="image/product/img1.jpeg" alt="product image"></li>
                <li><img type="button" onmouseover="document.getElementById('image').src='image/product/img2.jpeg'" src="image/product/img2.jpeg" src="image/product/img2.jpeg" alt="product image"></li>
                <li><img type="button" onmouseover="document.getElementById('image').src='image/product/img3.jpeg'" src="image/product/img3.jpeg" src="image/product/img3.jpeg" alt="product image"></li>
                <li><img type="button" onmouseover="document.getElementById('image').src='image/product/img4.jpeg'" src="image/product/img4.jpeg" src="image/product/img4.jpeg" alt="product image"></li>
                <li><img type="button" onmouseover="document.getElementById('image').src='image/product/img5.jpeg'" src="image/product/img5.jpeg" src="image/product/img5.jpeg" alt="product image"></li>
                <li><img type="button" onmouseover="document.getElementById('image').src='image/product/img6.jpeg'" src="image/product/img6.jpeg" src="image/product/img6.jpeg" alt="product image"></li>
                <li><img type="button" onmouseover="document.getElementById('image').src='image/product/img7.jpeg'" src="image/product/img7.jpeg" src="image/product/img7.jpeg" alt="product image"></li>
                <li><img type="button" onmouseover="document.getElementById('image').src='image/product/img8.jpeg'" src="image/product/img8.jpeg" src="image/product/img8.jpeg" alt="product image"></li>
            </ul>
            <div class="main-img">
                <img id="image" src="image/product/img1.jpeg" alt="product image">
            </div>
            <div class="button-section">
                <ul class="button-list">
                    <li><button type="submit"><i class="far fa-shopping-cart"></i>Add To Cart</button></li>
                    <li><button type="submit"><i class="fab fa-cc-mastercard"></i>Buy Now</button></li>
                </ul>
            </div>
        </div>

        <div class="col-md-6 info">
            <div class="product-title">
                <h5><span>boAt Airdopes 131 Bluetooth Headset</span></h5>
                <p class="description"><span class="badge badge-success ">4 ⭐</span> <span class="text-muted">86,300 Ratings & 8,621 Reviews</span></p>
                <p>
                    <span class="price-main">₹1299</span>
                    <span style="position: relative; top: -3px;" class="text-muted price-silent">₹2990</span>
                    <span style="position: relative; top: -3px;" class="off-percentage">56% off</span>
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
                <div class="col-sm-6 warranty">
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
                    <div style="display: flex; padding-left: 0; padding-right: 0;">
                        <span class="text-muted" style="margin-left: 0;">Description</span>
                        <p style="padding: 0 10px; font-size: 14px; text-align: justify;">Are you looking for a wireless earbud-type headset that delivers an impressive playback time? If your answer is yes, bring home the boAt Airdopes 131 that comes with a carrying case.
                            This carrying case also acts as a 650 mAh portable charger that extends the playback time of these earbuds by up to 15 hours, i.e. 4 times its normal charging capacity.
                            The normal battery capacity of each of these earbuds is 40 mAh and this delivers up to 3 hours of playback time.
                            These earbuds feature Bluetooth v5.0 technology that delivers a stable connection that lets your rock on without connectivity issues.
                            The stereo calling feature of these earbuds allows you to enjoy calls via its built-in microphone and 13-mm drivers.
                            These earbuds are powered up by the IWP Technology featured in them the moment you open the case.
                            The presence of a Type-C charging port ensures you can easily charge it with any charger that has a compatible cable.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


@endsection