<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smartphone Store</title>

    <link rel="stylesheet" href="/frontend/Tanvuong/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="/frontend/js/scripts.js"></script>
    <link rel="stylesheet" href="/frontend/css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <style>
        #MenuItems span{
            padding:10px;
        }
        .add-cart{
            position:absolute;
            bottom: 0;
            right: 0;
            background:black;
            color: white;
            padding:5px;
            cursor: pointer;
        }
        .add-cart:hover{
            background-color:hsl(249,32%,17);
        }
        .col-4:hover{
            border:1px solid black;
        }
    </style>
</head>
<body>

    <div class="header">
        <div class="background-image">
            <div class="container">
                <div class="navbar">
                    <div class="logo">
                        <img src="/frontend/images/logoASMD.png" width="125px">
                    </div>
                    <nav>
                        <div id="MenuItems">
                            <span><a href="/home">Home</a></span>
                            <span><a href="/product">Products</a></span>
                            <span><a href="/about">About</a></span>
                            <span><a href="/contactus">Contact</a></span>
                            <span><a href="">Account</a></span>
                            @guest
                            @if (Route::has('login'))
                                <span class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </span>
                            @endif

                            @if (Route::has('register'))
                                <span class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </span>
                            @endif
                        @else
                            <span class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </span>
                        @endguest
                        </div>
                    </nav>
                    <a href="/cart"><img src="/frontend/images/shopping-cart.png" width="30px" height="30px" style="cursor:pointer;padding-left:10px;padding-right:0px;" id="cart-icon"></a>
                    <img src="/frontend/images/menu.png" class="menu-icon"  onclick="menutoggle()">
                </div>
                <div class="row">
                    <div class="col-2">
                        <h1>Where is the smartphone<br> you want to choose ?</h1>
                        <p>Give yourself the coolest smartphone<br>you've ever known.</p>
                    </div>
                    <a href="" class="btn">Explore Now &#8594;</a>
                </div>
            </div>
        </div>
    </div>
<!----- featured categories ----->
    <div style="background-color: #eeeeee">
        <div class="categories">
            <div class="small-container">
                <div class="row_part2">
                    <div class="col-3">
                        <img src="/frontend/Tanvuong/images/category-phone-1.png">
                    </div>
                    <div class="col-3">
                        <img src="/frontend/Tanvuong/images/category-phone-2.png">
                    </div>
                    <div class="col-3">
                        <img src="/frontend/Tanvuong/images/category-phone-3.png">
                    </div>
                </div>
            </div>
        </div>
    </div>
<!---- featured products ---->
    <div class="small-container">
        <h2 class="title">Featured Products</h2>
        <div class="row_part2">
            @foreach($products as $product)
            <div class="col-4">
                <p><a href='{{ 'product_details/'.$product->id }}'><img src="{{ asset('/frontend/images/'.$product->picture_1)}}"></a></p>
                <h4>{{ $product->name }}</h4>
                <p>{{ $product->price }}VND</p>
            </div>
            @endforeach
        </div>
    </div>
<!------ offer ------>
    <div class="offer">
        <div class="small-container">
            <div class="row_part2">
                <div class="col-2">
                    <img src="/frontend/Tanvuong/images/AppleWatchSeries7.png" class="offer-img">
                </div>
                <div class="col-2">
                    <p>Exclusively Available on IphoneStore</p>
                    <h1>Apple Watch Series 7</h1>
                    <small>
                        The aluminum case is lightweight and made from 100 percent recycled aerospace-grade alloy.
                        <br>The Sport Loop is made from a soft and breathable double-layer nylon weave,
                        with a hook-and-loop fastener for quick and easy adjustment.
                    </small>
                    <br><a href="" class="btn">Buy Now &#8594;</a>
                </div>
            </div>
        </div>
    </div>
<!--- Testimonial ---->
    <div class="testimonial">
        <div class="small-container">
            <div class="row_part2">
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>Measure your blood oxygen level with a revolutionary sensor and app.
                        Take an ECG anytime, anywhere.
                        Check your heart rate. Along with other innovations like mindfulness and
                        sleep tracking to keep you healthy from head to toe.
                        Series 7 puts more health insights in sight.
                    </p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <img src="/frontend/Tanvuong/images/user-1.png">
                    <h3>May Parker</h3>
                </div>
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>Measure your blood oxygen level with a revolutionary sensor and app.
                        Take an ECG anytime, anywhere.
                        Check your heart rate. Along with other innovations like mindfulness and
                        sleep tracking to keep you healthy from head to toe.
                        Series 7 puts more health insights in sight.
                    </p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <img src="/frontend/Tanvuong/images/user-2.png">
                    <h3>Doctor Strange</h3>
                </div>
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>Big screen. Huge impact.
                        The challenge was to create a bigger display while barely expanding the dimensions of the watch itself.
                        To do so, the display was completely re‑engineered reducing the borders by 40%,
                        allowing for more screen area than both Series 6 and Series 3.
                        Now that’s something to smile about.
                    </p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <img src="/frontend/Tanvuong/images/user-3.png">
                    <h3>Tony Stark</h3>
                </div>
            </div>
        </div>
    </div>

<!---- brands ---->
    <div class="brands">
        <div class="small-container">
            <div class="row_part2">
                <div class="col-5">
                    <img src="/frontend/Tanvuong/images/logo-iphone.png">
                </div>
                <div class="col-5">
                    <img src="/frontend/Tanvuong/images/xiaomi-logo.png">
                </div>
                <div class="col-5">
                    <img src="/frontend/Tanvuong/images/logo-samsung.png">
                </div>
                <div class="col-5">
                    <img src="/frontend/Tanvuong/images/logo-oppo.png">
                </div>
                <div class="col-5">
                    <img src="/frontend/Tanvuong/images/logo-paypal.png">
                </div>
            </div>
        </div>
    </div>
<!---- footer ---->
    <div class="footer">
        <div class="container">
            <div class="row_part2">
                <div class="footer-col-1">
                    <h3>Download Our App</h3>
                    <p>Download App for Android and IOS mobile phone.</p>
                    <div class="app-logo">
                        <img src="/frontend/Tanvuong/images/play-store.png">
                        <img src="/frontend/Tanvuong/images/app-store.png">
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="/frontend/images/logoASM.png">
                    <p>Our Purpose Is To Sustainably Make the Pleasure and Benefits of Smartphone Accessible to the Many.</p>
                </div>
                <div class="footer-col-3">
                    <h3>Useful Links</h3>
                    <ul>
                        <li>Coupons</li>
                        <li>Blog Post</li>
                        <li>Return Policy</li>
                        <li>Join Affiliate</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Follow us</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>Instagram</li>
                        <li>Youtube</li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright">Copyright (©) 2022 Smartphone</p>
        </div>
    </div>
</body>
</html>
gi
