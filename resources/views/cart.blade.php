<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>All Products - Smartphone Store</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="/frontend/js/scripts.js"></script>
    <link rel="stylesheet" href="/frontend/css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="{{ asset('frontend/js/custom.js') }}"></script>
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
        .cart{
            padding:20px;
            background:white;
            box-shadow:-2px 0 4px hsl(0 4% 15% / 10%);
            transition: 0.3s;
        }
        .cart.active{
            right:0̀;
        }
        .cart-title{
            text-align: center;
            font-size:1.5rem;
            font-weight:600;
        }
        .cart-box{
            display: grid;
            grid-template-columns: 32% 50% 18%;
            align-items: center;
            gap:1rem;
            margin-top:1rem;
        }
        .cart-img{
            width:100px;
            height:100px;
            object-fit: contain;
            padding:10px;
        }
        .detail-box{
            display:  grid;
            row-gap:0.5rem;
        }
        .cart-product-title{
            font-size:1.5rem;
            text-transform:uppercase;
        }
        .cart-price{
            font-weight:500;
        }
        .cart-quantity{
            border:1px solid var(--text-color);
            outline-color: var(--main-color);
            width:2.4rem;
            text-align: center;
            font-size:1rem;
        }
        .cart-remove{
            font-size:24px;
            color:var(--main-color);
            cursor:pointer;
        }
        .bxs-trash-alt:hover{
            color:orange;
        }
        .total{
            display: flex;
            justify-content: flex-end;
            margin-top:1.5rem;
            border-top:1px solid black;
        }
        .total-price{
            margin-left:1.5rem;
        }
        .btn-buy{
            display: flex;
            margin:1.5rem auto 0 auto;
            padding:12px 20px;
            border:none;
            background-color:orange;
            color:white;
            font-size:1rem;
            font-weight:500;
            cursor:pointer;
        }
        .btn-buy:hover{
            background-color:red;
        }
        #close-cart{
            position:absolute;
            top:1rem;
            right:0.8rem;
            font-size:2rem;
            color:black;
            cursor:pointer;
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
            @if(Auth::check())
                <a href="{{ url('cart/'.Auth::user()->id) }}"><img src="/frontend/images/shopping-cart.png" width="30px" height="30px" style="cursor:pointer;padding-left:10px;padding-right:0px;" id="cart-icon"></a>
            @endif
            <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
        </div>
    </div>

    
    
    <div class="cart">
        <h2 class="cart-title">Your Cart</h2>
        @php
            $total = 0;
        @endphp
        @foreach ($cartItems as $items)
        <div class="cart-content product_data">
            <div class="cart-box">
                <a href="{{ url('product_details/'.$items->product_id) }}"><img src="{{ asset('/frontend/images/'.$items->product->picture_1)}}" class="cart-img"></a>
                <div class="detail-box">
                    <input type="hidden" value="{{ $items->product_id }}" class="prod_id">
                    <div class="cart-product-title">{{ $items->product->name }}</div>
                    <div class="cart-price">{{ $items->product->price }} VND</div>
                    <div class="input-group text-center mb-3" style="width:130px">
                        <button class="decrement-btn changeQuantity" >-</button>
                        <input type="text" name="quanity" id="quantity" class="form-control text-center qty-input" value="{{ $items->quantity }}">
                        <button class="input-group-text increment-btn changeQuantity" >+</button>
                    </div>
                </div>
                <button class="btn deleteCartItem"><i class='bx bxs-trash-alt cart-remove'></i></button>
            </div>
        </div><br><hr>
       
        {{-- Cart close --}}
       <a href="{{ url('/') }}"><i class='bx bx-x' id="close-cart" ></i></a> 

        @php
            $total += $items->product->price * $items->quantity ;
        @endphp
       @endforeach
       {{-- Toltal --}}
       <div class="total">
            <div class="total-title">Total</div>
            <div class="total-price"> {{ $total }} VND</div>
        </div>
        {{-- Buy button --}}
        <button type="button" class="btn-buy" style="display: inline-block; margin-left: 40%;">Buy now</button>
    </div>
    
    
      
</body>
</html>
