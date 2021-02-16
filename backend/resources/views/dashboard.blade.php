@extends('layouts.dashboardLayout')

@section('custom-style')
<link rel="stylesheet" href="./css/style.css">
@endsection

@section('content')
<!-- Slider images starts here -->
<section id="slider">

    @if(Session::has('cart'))
    <div class="alert alert-warning lert-warning alert-dismissible fade show" style="position: relative;" role="alert">
        <h5 style="position: relative; left: 20%;">Added to Cart successfully!</h5>
        <button type="button" class="btn btn-primary close" data-dismiss="alert" style="position: absolute; right: 25%; top: 10px; border-radius: 50%;">&times;</button>
    </div>
    @endif

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
                    @foreach($brands as $brand)
                    <li><a href="#"> <span class="pull-right">({{ $brand->total }})</span>{{ $brand->brand }}</a></li>
                    @endforeach
                </div>
                <!-- Brand of products end here-->

            </div>
            <div class="col-md-9">
                <h3 class="title text-center lines">Features Items</h3>
                <div class="row">
                    @foreach ($products as $product)
                    @csrf
                    <div class="col-md-4 product-card">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <a type="button" href="{{ route('product', ['product' =>strval($product->asing) ]) }}"><img class="product-img" src="{{ explode("|",$product->images)[0] }}" alt="product1" /></a>
                                <img class="label" src="image/labels/new.png" alt="new label">
                            </div>
                            <div class=" product-overlay">
                                <div class="overlay-content">
                                    <h3 class="text-center">₹{{$product->price}}</h3>
                                    <p class="text-center">{{ substr($product->title, 0, 50) }}</p>
                                    <form action="{{ route('cartAdd', ['product'=>$product->asing]) }}" method="POST">
                                        @csrf
                                        @if($product->stock==="YES")
                                        <button class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                        @else
                                        <button class="btn btn-default add-to-cart disabled"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                        @endif
                                    </form>
                                </div>
                                <ul class="nav nav-pills nav-justified">
                                    <li><a href="#"><i class="fa fa-plus-square"></i>Wishlist</a></li>
                                    <li><a href="{{ route('product', ['product' =>strval($product->asing) ]) }}"><i class="fa fa-plus-square"></i>Detail</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    @endforeach
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

@endsection