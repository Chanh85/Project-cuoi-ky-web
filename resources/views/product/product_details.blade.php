<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products - Smartphone Store</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="/frontend/scripts.js"></script>
    <link rel="stylesheet" href="/frontend/style.css">

</head>
<body>
            <div class="container">
                <div class="navbar">
                    <div class="logo">
                        <a href="home"><img src="/frontend/images/logoASMD.png" width="125px"></a>
                    </div>
                    <nav>
                        <ul id="MenuItems">
                            <li><a href="{{ url('/home') }}">Home</a></li>
                            <li><a href="/product">Products</a></li>
                            <li><a href="">About</a></li>
                            <li><a href="/contactus">Contact</a></li>
                            <li><a href="">Account</a></li>
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
                        </ul>
                    </nav>
                    <a href="cart"><img src="/frontend/images/shopping-cart.png" width="30px" height="30px" style="cursor:pointer;"></a>
                    <img src="/frontend/images/menu.png" class="menu-icon" onclick="menutoggle()">
                </div>
            </div>
<!--------single product details--------->
    <div class="small-container single-product">
        <div class="row_part2">
             <div class="col-2">
                 <img src="{{ asset('/frontend/images/'.$details->picture_1)}}" width="90%" id="ProductImg">

                 <div class="small-img-row">
                     <div class="small-img-col">
                        <img src="{{ asset('/frontend/images/'.$details->picture_1) }}" width="90%" class="small-img">
                     </div>
                     <div class="small-img-col">
                        <img src="{{ asset('/frontend/images/'.$details->picture_2) }}" width="90%" class="small-img">
                     </div>
                     <div class="small-img-col">
                        <img src="{{ asset('/frontend/images/'.$details->picture_3) }}" width="90%" class="small-img">
                     </div>
                     <div class="small-img-col">
                        <img src="{{ asset('/frontend/images/'.$details->picture_4) }}" width="90%" class="small-img">
                     </div>
                 </div>
             </div>
             <div class="col-2">
                 <h1>{{ $details->name }}</h1>
                 <h4>{{ $details->price }}VND</h4>
                 <input type="number" value="1">
                 <a href="/cart" class="btn">Add To Cart</a>
                 <h3>Product Details <i class="fa fa-indent"></i></h3>
                 <br>
                 <p>{{ $details->description }}</p>
             </div>
        </div>
    </div>

<!----------title---------->
    <div class="small-container">
        <div class="row_part2 row2">
            <h2>Related Products</h2>
            <p>View more</p>
        </div>
    </div>




<!----------product------------->
    <div class="small-container">
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
                    <img src="/frontend/images/logo-white.png">
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
