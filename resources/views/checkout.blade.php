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
        #logout-form{
            position:absolute;
            top:-50px;
        }
        .form-control{
    width: 100%;
    height: 32px;
    border: 1px solid lightgrey;
    border-radius: 6px;
    padding: 4px 8px;
    outline: none;
}

.form-control:hover{
    background-color: rgba(243, 116, 74, 0.518);
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
<<<<<<< HEAD
                    <li><a href="/account">Account</a></li>
=======
                    @if(Auth::check())
                        <li><a href="{{ url('account') }}">Account</a></li>
                        <li><a href="{{ url('my-orders') }}">My Orders</a></li>
                        @if(Auth::user()->role_id==1)
                        <li><a href="{{ url('/') }}">Admin Page</a></li>
                        @endif
                    @endif
                    
>>>>>>> 8099727ebd97bad930c05ac970c5fb102d3dfb99
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
    <div class="container mt-5">
        <form action="{{ url('place-order') }}" method="POST">
            @csrf
            <div class="row">
                <div style="margin-left: 20%; display:inline">
                    <h3 style="text-align:center;":>Basic details</h3>
                    <hr>
                    <div>
                        <label for="">Họ</label>
                        <input type="text" name="lname" value="{{ Auth::user()->fname }}" placeholder="Họ" required class="form-control">
                    </div>
                    <div>
                        <label for="">Tên</label>
                        <input type="text" name="fname" value="{{ Auth::user()->lname }}" placeholder="Tên" required class="form-control">
                    </div>
                    <div>
                        <label for="">Ngày sinh: </label>
                        <input type="date" name="DOB" value="{{ Auth::user()->DOB }}" placeholder="Ngày sinh" required class="form-control">
                    </div>
                    <div>
                        <label for="">Số điện thoại </label>
                        <input type="text" name="phonenum" value="{{ Auth::user()->phonenum }}" placeholder="Số điện thoại" required class="form-control">
                    </div>
                    <div>
                        <label for="">Email</label>
                        <input type="text" name="email" value="{{ Auth::user()->email }}" placeholder="Email" required class="form-control">
                    </div>
                    <div>
                        <label for="">Địa chỉ</label>
                        <input type="text" name="address" value="{{ Auth::user()->address }}" placeholder="Địa chỉ" required class="form-control">
                    </div>
                    <div>
                        <label for="">Quận</label>
                        <input type="text" name="district"  value="{{ Auth::user()->district }}" placeholder="Quận" required class="form-control">
                    </div>
                    <div>
                        <label for="">Thành phố</label>
                        <input type="text" name="city" value="{{ Auth::user()->city }}" placeholder="Thành phố" required class="form-control">
                    </div>
                </div>
                <div style="margin-left: 40%; display:inline;">
                    Order details
                    <hr>
                    <table>
                        <thead>
                            <tr>
                                <th>Tên sản phẩm</th>
                                <th>Số lượng sản phẩm</th>
                                <th>Giá</th>
                            </tr>
                        </thead>
                        <tbody>
                        @php
                            $total = 0
                        @endphp
                        @foreach ($cartItems as $item )
                        <tr>
                            <td>{{ $item->product->name }}</td>
                            <td>{{ $item->quantity }}</td>
                            <td>{{ $item->product->price }}</td>
                        </tr>
                        @php
                            $total += $item->quantity * $item->product->price
                        @endphp
                        @endforeach
                        </tbody>
                    </table>
                    <hr>
                    <div class="total">
                        <div class="total-title">Total</div>
                        <div class="total-price"> {{ $total }} VND</div>
                        <input type="hidden" name="total_price" value="{{ $total }}">
                    </div>
                    <button class="btn" type="submit">
                        Mua
                    </button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
