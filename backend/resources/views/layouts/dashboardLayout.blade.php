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
    @yield('custom-style')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <style>
        body {
            font-family: 'Nunito';
        }
    </style>
</head>

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
                    <a href="{{ route('dashboard') }}"><img class="logo" src="/image/logo.jpg" alt="Company logo"></a>
                </div>
                <div class="col-12 col-md-8 middle">
                    <ul class="navbar-links">
                        @if(Auth::check())
                        <li>
                            <form action="{{ route('productSearch') }}" method="post" class="form-outline" style="display: flex;">
                                <input name="search" id="search-focus" type="search" id="form1" placeholder="Search ..." class="form-control" />
                                @csrf
                            </form>
                        </li>
                        <li><a href="{{ route('checkout', ['userid'=>auth()->user()->id]) }}"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                        <li><a href="{{ route('cartShow', ['id'=>Auth::user()->id]) }}"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                        @else
                        <li>
                            <form action="{{ route('productSearch') }}" method="post" class="form-outline" style="display: flex;">
                                <input name="search" id="search-focus" type="search" id="form1" placeholder="Search ..." class="form-control" />
                                @csrf
                            </form>
                        </li>
                        <li><a href="{{ route('login') }}"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                        <li><a href="{{ route('login') }}"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                        @endif

                        @guest
                        @if (Route::has('login'))
                        <li><a href="{{ route('login') }}"><i class="fa fa-lock"></i> Login</a></li>
                        @endif

                        @if (Route::has('register'))
                        <li><a href="{{ route('register') }}"><i class="fa fa-user"></i> Account</a></li>
                        @endif

                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <i class="fa fa-user-circle"></i>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                                <a class="dropdown-item" href="{{ route('home') }}">
                                    Profile
                                </a>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
            <div class="border"></div>
        </div>
    </div>
    <!-- Main Navbar ends here -->

    @yield('content')

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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    @yield('extra-js')
</body>

</html>