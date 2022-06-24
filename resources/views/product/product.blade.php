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
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <style>
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

            <div class="container">
                <div class="navbar">
                    <div class="logo">
                        <a href="/home"><img src="/frontend/images/logoASMD.png" width="125px"></a>
                    </div>
                    <nav>
                        <ul id="MenuItems">
                            <li><a href="{{ url('/home') }}">Home</a></li>
                            <li><a href="{{ url('product') }}">Products</a></li>
                            <li><a href="{{ url('about') }}">About</a></li>
                            <li><a href="{{ url('contactus') }}">Contact</a></li>
                            <li><a href="/account">Account</a></li>
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
                    @if(Auth::check())
                        <a href="{{ url('cart/'.Auth::user()->id) }}"><img src="/frontend/images/shopping-cart.png" width="30px" height="30px" style="cursor:pointer;padding-left:10px;padding-right:0px;" id="cart-icon"></a>
                    @endif
                    <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
                </div>
            </div>

    <div class="small-container" style="padding-left: 180px; padding-right: 180px;" >

        <div class="row_part2 row2">
            <h1>All Products</h1>
        </div>
        <div class="row_part2" >
            @foreach($products as $product)
            <div class="col-4">
                <p><a href='{{ 'product_details/'.$product->id }}'><img src="{{ asset('/frontend/images/'.$product->picture_1)}}"></a></p>
                <h4>{{ $product->name }}</h4>
                <p>{{ $product->price }} VND</p>
                <p>Kho: {{ $product->quantity }}</p>
            </div>
            @endforeach
        </div>
        <div class="page-btn">
            <span>1</span>
            <span>2</span>
            <span>3</span>
            <span>4</span>
            <span>&#8594;</span>
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
