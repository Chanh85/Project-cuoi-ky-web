<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smartphone Store</title>
    <link rel="stylesheet" href="/frontend/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="https://your-site-or-cdn.com/fontawesome/v6.1.1/js/conflict-detection.js"></script>
    <script src="/frontend/scripts.js"></script>

</head>
<body >
    <div class="header">
        <div class="background-image">
            <div class="container">
                <div class="navbar">
                    <div class="logo">
                        <a href="/index.html"><img src="/frontend/images/logoASMD.png" width="125px"></a>
                    </div>
                    <nav>
                        <ul id="MenuItems">
                            <li><a href="/frontend/index.html">Home</a></li>
                            <li><a href="/frontend/product.html">Products</a></li>
                            <li><a href="">About</a></li>
                            <li><a href="/frontend/contactuss/contactus.html">Contact</a></li>
                            <li><a href="">Account</a></li>
                            
                        </ul>
                    </nav>
                    <a href="/frontend/cart.html"><img src="/frontend/images/shopping-cart.png" width="30px" height="30px" style="cursor:pointer;"></a>
                    <img src="/frontend/images/menu.png" class="menu-icon" onclick="menutoggle()">
                </div>
                
                @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
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
                </li>
            @endguest

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
                        <img src="/frontend/images/category-phone-1.png">
                    </div>
                    <div class="col-3">
                        <img src="/frontend/images/category-phone-2.png">
                    </div>
                    <div class="col-3">
                        <img src="/frontend/images/category-phone-3.png">
                    </div>
                </div>
            </div>
        </div>
    </div>
<!---- featured products ---->
    <div class="small-container" style="padding-left: 180px; padding-right: 180px;" >
        <h2 class="title">Featured Products</h2>
        <div class="row_part2">
            <div class="col-4">
                <img src="/frontend/images/11-pro-plus-black-1.png">
                <h4>Xiaomi Redmi Note 11 Pro Plus 5G</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <img src="/frontend/images/yellow_final_2.png">
                <h4>Samsung Galaxy Note 20 Ultra 5G</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <img src="/frontend/images/iphone_13-_pro-4_2.png">
                <h4>Iphone 13 Pro Max</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <img src="/frontend/images/800x800_flip_3_cream.png">
                <h4>Z-Flip 3x</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$50.00</p>
            </div>
        </div>
        <h2 class="title">Latest Products</h2>
        <div class="row_part2">
            <div class="col-4">
                <img src="/frontend/images/vong-deo-tay-thong-minh-xiaomi-mi-band-6-11.png">
                <h4>Mi-Band-6-11</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <img src="/frontend/images/watch-4-classic.png">
                <h4>Watch 4 Classic</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$20.00</p>
            </div>
            <div class="col-4">
                <img src="/frontend/images/apple-watch-se-40mm-4g-1.png">
                <h4>Apple Watch Se</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <p>$30.00</p>
            </div>
        </div>
        <div class="row_part2">
            <div class="col-4">
                <img src="/frontend/images/tab_s8_ultra.png">
                <h4>Tab S8</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <img src="/frontend/images/xiaomi-pad-5-white-2600x600.png">
                <h4>Xiaomi Pad 5</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$20.00</p>
            </div>
            <div class="col-4">
                <img src="/frontend/images/apple-ipad-pro-12-9-2020-wifi-128-gb-1.png">
                <h4>Ipad pro 12 2020</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <p>$30.00</p>
            </div>
        </div>
    </div>
<!------ offer ------>
    <div class="offer">
        <div class="small-container">
            <div class="row_part2">
                <div class="col-2">
                    <img src="/frontend/images/AppleWatchSeries7.png" class="offer-img">
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
                    <img src="/frontend/images/user-1.png">
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
                    <img src="/frontend/images/user-2.png">
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
                    <img src="/frontend/images/user-3.png">
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
                    <img src="/frontend/images/logo-iphone.png">
                </div>
                <div class="col-5">
                    <img src="/frontend/images/xiaomi-logo.png">
                </div>
                <div class="col-5">
                    <img src="/frontend/images/logo-samsung.png">
                </div>
                <div class="col-5">
                    <img src="/frontend/images/logo-oppo.png">
                </div>
                <div class="col-5">
                    <img src="/frontend/images/logo-paypal.png">
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
                    <img src="/frontend/images/play-store.png">
                    <img src="/frontend/images/app-store.png">
                </div>
            </div>
            <div class="footer-col-2">
                <a href="index.html"><img src="/frontend/images/logoASM.png" width="125px"></a>
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
