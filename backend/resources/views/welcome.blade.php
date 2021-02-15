<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home | Safeshoping</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Css headers -->
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- Styles -->
    <style>
        body {
            font-family: 'Nunito';
        }
    </style>
</head>

<!-- @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
            <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
            @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
            @endif
            @endauth
        </div>
        @endif -->

<body>
    <!-- Main header started -->
    <div class="top-head">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <ul class="nav-head1">
                        <li><a href=""><i class="fa fa-envelope"></i> customer@support.com</a></li>
                    </ul>
                </div>
                <div class="col-sm-6">
                    <ul class="nav-head2">
                        <li><a href=""><i class="fa fa-facebook"></i></a></li>
                        <li><a href=""><i class="fa fa-twitter"></i></a></li>
                        <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                        <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Main header ends here -->

    <!-- Main Navbar started -->
    <div class="navbar-head">
        <div class="container">
            <div class="row">
                <div class="col-md-4 clearfix">
                    <a href="{{ url('/') }}"><img class="logo" src="./image/logo.jpg" alt="Company logo"></a>
                </div>
                <div class="col-12 col-md-8 middle">
                    <ul class="navbar-links">
                        <li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>
                        <li><a href="#"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                        <li><a href="#"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                        <li><a href="{{ route('login') }}"><i class="fa fa-lock"></i> Login</a></li>
                        <li><a href="{{ route('register') }}"><i class="fa fa-user"></i> Account</a></li>
                    </ul>
                </div>
            </div>
            <div class="border"></div>
        </div>
    </div>
    <!-- Main Navbar ends here -->

    <!-- Slider images starts here -->
    <section id="slider">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="col-md-4 offset-1">
                                    <h1><span>Safe</span>shoping</h1>
                                    <h2>As responsible as you</h2>
                                    <p>Feel like <b>Local</b> and <b>friends</b> network near you.<br> <b>All</b> products are served.<br><b>Flexible</b> price range.</b></p>
                                </div>
                                <div class="col-md-6">
                                    <img class="girl " src="./image/shop-img-2-white.jpg" alt="First slide">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-md-4 offset-1">
                                    <h1><span>Safe</span>shoping</h1>
                                    <h2>Health lie here</h2>
                                    <p><b>Hygiene</b> and <b>healthy</b> sets os products is case here.<br> <b>24*7</b> available set of products.<br><b>Assured</b> band and product range.</b></p>
                                </div>
                                <div class="col-md-6">
                                    <img class="girl" src="./image/shop-img-3-white.jpg" alt="Third slide">
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev icon" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <i class="fa fa-angle-left fa-lg"></i>
                        </a>
                        <a class="carousel-control-next icon" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <i class="fa fa-angle-right fa-lg"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Slider images ends here -->

    <!-- Main Feature product listing -->
    <section id="products">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <!-- Category of products -->
                    <h3 class="title text-center lines">Category</h3>
                    <div class="category">
                        <div class="row">
                            <div class="category-head">
                                <p>Electronics</p>
                                <i class="fa fa-plus" type="button" data-toggle="collapse" data-target="#collapseElectronic" aria-hidden="true"></i>
                            </div>
                            <div class="collapse" id="collapseElectronic">
                                <div class="panel-body">
                                    <li><a href="#">Desktop</a></li>
                                    <li><a href="#">Mobile Phone</a></li>
                                    <li><a href="#">Tablets</a></li>
                                    <li><a href="#">IT accessories</a></li>
                                    <li><a href="#">Speakers</a></li>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="category-head">
                                <p>Home</p>
                                <i class="fa fa-plus" type="button" data-toggle="collapse" data-target="#collapseHome" aria-hidden="true"></i>
                            </div>
                            <div class="collapse" id="collapseHome">
                                <div class="panel-body">
                                    <li><a href="#">Living Room</a></li>
                                    <li><a href="#">Home Decor</a></li>
                                    <li><a href="#">Kitchen</a></li>
                                    <li><a href="#">Bedroom</a></li>
                                    <li><a href="#">Kid Furniture</a></li>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="category-head">
                                <p>Fashion</p>
                                <i class="fa fa-plus" type="button" data-toggle="collapse" data-target="#collapseFashion" aria-hidden="true"></i>
                            </div>
                            <div class="collapse" id="collapseFashion">
                                <div class="panel-body">
                                    <li><a href="#">Winter Collection</a></li>
                                    <li><a href="#">Summer Collection</a></li>
                                    <li><a href="#">Men wears</a></li>
                                    <li><a href="#">Women wears</a></li>
                                    <li><a href="#">Kids special</a></li>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="category-head">
                                <p>Beauty & Toys</p>
                                <i class="fa fa-plus" type="button" data-toggle="collapse" data-target="#collapseToys" aria-hidden="true"></i>
                            </div>
                            <div class="collapse" id="collapseToys">
                                <div class="panel-body">
                                    <li><a href="#">Bath Care</a></li>
                                    <li><a href="#">Oral Care</a></li>
                                    <li><a href="#">Hair Care</a></li>
                                    <li><a href="#">Skin & Body Care</a></li>
                                    <li><a href="#">Luxury</a></li>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="category-head">
                                <p>Indoor Accessories</p>
                                <i class="fa fa-plus" type="button" data-toggle="collapse" data-target="#collapseToys1" aria-hidden="true"></i>
                            </div>
                            <div class="collapse" id="collapseToys1">
                                <div class="panel-body">
                                    <li><a href="#">Bath Care</a></li>
                                    <li><a href="#">Oral Care</a></li>
                                    <li><a href="#">Hair Care</a></li>
                                    <li><a href="#">Skin & Body Care</a></li>
                                    <li><a href="#">Luxury</a></li>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="category-head">
                                <p>Custome Decors</p>
                                <i class="fa fa-plus" type="button" data-toggle="collapse" data-target="#collapseToys2" aria-hidden="true"></i>
                            </div>
                            <div class="collapse" id="collapseToys2">
                                <div class="panel-body">
                                    <li><a href="#">Bath Care</a></li>
                                    <li><a href="#">Oral Care</a></li>
                                    <li><a href="#">Hair Care</a></li>
                                    <li><a href="#">Skin & Body Care</a></li>
                                    <li><a href="#">Luxury</a></li>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="category-head">
                                <p>Prime Services</p>
                                <i class="fa fa-plus" type="button" data-toggle="collapse" data-target="#collapseToys3" aria-hidden="true"></i>
                            </div>
                            <div class="collapse" id="collapseToys3">
                                <div class="panel-body">
                                    <li><a href="#">Bath Care</a></li>
                                    <li><a href="#">Oral Care</a></li>
                                    <li><a href="#">Hair Care</a></li>
                                    <li><a href="#">Skin & Body Care</a></li>
                                    <li><a href="#">Luxury</a></li>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="category-head">
                                <p>Accessories</p>
                                <i class="fa fa-plus" type="button" data-toggle="collapse" data-target="#collapseToys5" aria-hidden="true"></i>
                            </div>
                            <div class="collapse" id="collapseToys5">
                                <div class="panel-body">
                                    <li><a href="#">Bath Care</a></li>
                                    <li><a href="#">Oral Care</a></li>
                                    <li><a href="#">Hair Care</a></li>
                                    <li><a href="#">Skin & Body Care</a></li>
                                    <li><a href="#">Luxury</a></li>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Category of products end here-->

                    <!-- Brand of products -->
                    <h3 class="title text-center lines brand-head">Brand</h3>
                    <div class="brand">
                        <li><a href="#"> <span class="pull-right">(50)</span>Brand1</a></li>
                        <li><a href="#"> <span class="pull-right">(40)</span>Brand2</a></li>
                        <li><a href="#"> <span class="pull-right">(100)</span>Brand3</a></li>
                        <li><a href="#"> <span class="pull-right">(20)</span>Brand4</a></li>
                        <li><a href="#"> <span class="pull-right">(70)</span>Brand5</a></li>
                        <li><a href="#"> <span class="pull-right">(90)</span>Brand6</a></li>
                        <li><a href="#"> <span class="pull-right">(10)</span>Brand7</a></li>
                    </div>
                    <!-- Brand of products end here-->

                </div>
                <div class="col-md-9">
                    <h3 class="title text-center lines">Features Items</h3>
                    <div class="row">
                        <div class="col-md-4 product-card">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img class="product-img" src="image/products/product1.jpg" alt="product1" />
                                    <img class="label" src="image/labels/new.png" alt="new label">
                                </div>
                                <div class="product-overlay">
                                    <div class="overlay-content">
                                        <h3 class="text-center">₹2999</h3>
                                        <p class="text-center">Fantastic product for you</p>
                                        <a href="#" class="btn btn-default add-to-cart "><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                    <ul class="nav nav-pills nav-justified">
                                        <li><a href="#"><i class="fa fa-plus-square"></i>Wishlist</a></li>
                                        <li><a href="#"><i class="fa fa-plus-square"></i>Compare</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 product-card">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img class="product-img" src="image/products/product2.jpg" alt="product1" />
                                    <img class="label" src="image/labels/new.png" alt="new label">
                                </div>
                                <div class="product-overlay">
                                    <div class="overlay-content">
                                        <h3 class="text-center">₹1499</h3>
                                        <p class="text-center">Fantastic product for you</p>
                                        <a href="#" class="btn btn-default add-to-cart "><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                    <ul class="nav nav-pills nav-justified">
                                        <li><a href="#"><i class="fa fa-plus-square"></i>Wishlist</a></li>
                                        <li><a href="#"><i class="fa fa-plus-square"></i>Compare</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 product-card">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img class="product-img" src="image/products/product3.jpg" alt="product1" />
                                    <img class="label" src="image/labels/new.png" alt="new label">
                                </div>
                                <div class="product-overlay">
                                    <div class="overlay-content">
                                        <h3 class="text-center">₹2499</h3>
                                        <p class="text-center">Fantastic product for you</p>
                                        <a href="#" class="btn btn-default add-to-cart "><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                    <ul class="nav nav-pills nav-justified">
                                        <li><a href="#"><i class="fa fa-plus-square"></i>Wishlist</a></li>
                                        <li><a href="#"><i class="fa fa-plus-square"></i>Compare</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 product-card">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img class="product-img" src="image/products/product4.jpg" alt="product1" />
                                    <img class="label" src="image/labels/sale.png" alt="new label">
                                </div>
                                <div class="product-overlay">
                                    <div class="overlay-content">
                                        <h3 class="text-center">₹99</h3>
                                        <p class="text-center">Fantastic product for you</p>
                                        <a href="#" class="btn btn-default add-to-cart "><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                    <ul class="nav nav-pills nav-justified">
                                        <li><a href="#"><i class="fa fa-plus-square"></i>Wishlist</a></li>
                                        <li><a href="#"><i class="fa fa-plus-square"></i>Compare</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 product-card">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img class="product-img" src="image/products/product5.jpg" alt="product1" />
                                    <img class="label" src="image/labels/new.png" alt="new label">
                                </div>
                                <div class="product-overlay">
                                    <div class="overlay-content">
                                        <h3 class="text-center">₹7999</h3>
                                        <p class="text-center">Fantastic product for you</p>
                                        <a href="#" class="btn btn-default add-to-cart "><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                    <ul class="nav nav-pills nav-justified">
                                        <li><a href="#"><i class="fa fa-plus-square"></i>Wishlist</a></li>
                                        <li><a href="#"><i class="fa fa-plus-square"></i>Compare</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 product-card">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img class="product-img" src="image/products/product6.jpg" alt="product1" />
                                    <img class="label" src="image/labels/sale.png" alt="new label">
                                </div>
                                <div class="product-overlay">
                                    <div class="overlay-content">
                                        <h3 class="text-center">₹9</h3>
                                        <p class="text-center">Fantastic product for you</p>
                                        <a href="#" class="btn btn-default add-to-cart "><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                    <ul class="nav nav-pills nav-justified">
                                        <li><a href="#"><i class="fa fa-plus-square"></i>Wishlist</a></li>
                                        <li><a href="#"><i class="fa fa-plus-square"></i>Compare</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pagination and Scroll of product -->
        <div class="container">
            <h3 class="title text-center lines recommend">Recommended Items</h3>

            <div id="carouselExampleInterval" class="carousel slide recommend-box" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-interval="10000">
                        <div class="row">
                            <div class="col-md-3 offset-lg-2 offset-md-2">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img class="product-img" src="image/products/product7.jpg" alt="product1" />
                                    </div>
                                    <div class="product-overlay">
                                        <div class="overlay-content">
                                            <h3 class="text-center">₹2999</h3>
                                            <p class="text-center">Fantastic product for you</p>
                                            <a href="#" class="btn btn-default add-to-cart "><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img class="product-img" src="image/products/product1.jpg" alt="product1" />
                                    </div>
                                    <div class="product-overlay">
                                        <div class="overlay-content">
                                            <h3 class="text-center">₹2999</h3>
                                            <p class="text-center">Fantastic product for you</p>
                                            <a href="#" class="btn btn-default add-to-cart "><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img class="product-img" src="image/products/product10.jpg" alt="product1" />
                                    </div>
                                    <div class="product-overlay">
                                        <div class="overlay-content">
                                            <h3 class="text-center">₹2999</h3>
                                            <p class="text-center">Fantastic product for you</p>
                                            <a href="#" class="btn btn-default add-to-cart "><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item" data-interval="2000">
                        <div class="row">
                            <div class="col-md-3 offset-lg-2 offset-md-2">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img class="product-img" src="image/products/product4.jpg" alt="product1" />
                                    </div>
                                    <div class="product-overlay">
                                        <div class="overlay-content">
                                            <h3 class="text-center">₹2999</h3>
                                            <p class="text-center">Fantastic product for you</p>
                                            <a href="#" class="btn btn-default add-to-cart "><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img class="product-img" src="image/products/product5.jpg" alt="product1" />
                                    </div>
                                    <div class="product-overlay">
                                        <div class="overlay-content">
                                            <h3 class="text-center">₹2999</h3>
                                            <p class="text-center">Fantastic product for you</p>
                                            <a href="#" class="btn btn-default add-to-cart "><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img class="product-img" src="image/products/product6.jpg" alt="product1" />
                                    </div>
                                    <div class="product-overlay">
                                        <div class="overlay-content">
                                            <h3 class="text-center">₹2999</h3>
                                            <p class="text-center">Fantastic product for you</p>
                                            <a href="#" class="btn btn-default add-to-cart "><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-3 offset-lg-2 offset-md-2">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img class="product-img" src="image/products/product8.jpg" alt="product1" />
                                    </div>
                                    <div class="product-overlay">
                                        <div class="overlay-content">
                                            <h3 class="text-center">₹2999</h3>
                                            <p class="text-center">Fantastic product for you</p>
                                            <a href="#" class="btn btn-default add-to-cart "><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img class="product-img" src="image/products/product9.jpg" alt="product1" />
                                    </div>
                                    <div class="product-overlay">
                                        <div class="overlay-content">
                                            <h3 class="text-center">₹2999</h3>
                                            <p class="text-center">Fantastic product for you</p>
                                            <a href="#" class="btn btn-default add-to-cart "><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img class="product-img" src="image/products/product10.jpg" alt="product1" />
                                    </div>
                                    <div class="product-overlay">
                                        <div class="overlay-content">
                                            <h3 class="text-center">₹2999</h3>
                                            <p class="text-center">Fantastic product for you</p>
                                            <a href="#" class="btn btn-default add-to-cart "><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                    <i class="fa fa-angle-left fa-lg"></i>
                </a>
                <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                    <i class="fa fa-angle-right fa-lg"></i>
                </a>
            </div>


        </div>
        <!-- Pagination and Scroll of product ends here-->

    </section>
    <!-- Main product listing ends here -->

    <!-- Footer section -->
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>Service</h2>
                        <ul class="nav nav-pills ">
                            <li><a href="#">Online Help</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Order Status</a></li>
                            <li><a href="#">Change Location</a></li>
                            <li><a href="#">FAQ’s</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>Quick Shop</h2>
                        <ul class="nav nav-pills ">
                            <li><a href="#">T-Shirt</a></li>
                            <li><a href="#">Mens</a></li>
                            <li><a href="#">Womens</a></li>
                            <li><a href="#">Gift Cards</a></li>
                            <li><a href="#">Shoes</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>Policies</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Terms of Use</a></li>
                            <li><a href="#">Privecy Policy</a></li>
                            <li><a href="#">Refund Policy</a></li>
                            <li><a href="#">Billing System</a></li>
                            <li><a href="#">Ticket System</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>About Shopper</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Company Information</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Store Location</a></li>
                            <li><a href="#">Affillate Program</a></li>
                            <li><a href="#">Copyright</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3 offset-sm-1">
                    <div class="single-widget">
                        <h2>About Shopper</h2>
                        <form action="#" class="searchform">
                            <input type="text" placeholder="Your email address" />
                            <button type="submit" class="btn btn-outline-primary"><i class="fa fa-arrow-circle-o-right"></i></button>
                            <p>Get nearest shop details</p>
                        </form>
                    </div>
                </div>
            </div>
            <div class="container copyright">
                <p class="pull-left">Copyright © 2021 <strong>Gaurav Singh</strong>. <strong>All rights reserved.</strong></p>
                <p class="pull-right">Source Code <span><a target="_blank" href="https://github.com/singhgaurav2323/ecommerce"><i class="fa fa-github"></i></a></span></p>
            </div>
        </div>
    </footer>
    <!-- Footer section ends here -->

    <!-- Javascript region -->
    <script src="https://use.fontawesome.com/79fb997bba.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>