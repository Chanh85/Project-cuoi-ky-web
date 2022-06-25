{{-- <form action="{{ route("product.store") }}" method="POST" >
    @csrf
    <div>
        <label for="name">Ten san pham:</label>
        <input type="text", name="name" id="name"> 
        @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div>
        <label for="picture1">Anh cua san pham 1:</label>
        <input type="file", name="picture1" id="picture1"> 
    </div>
    <div>
        <label for="picture2">Anh cua san pham 2:</label>
        <input type="file", name="picture2" id="picture2"> 
    </div>
    <div>
        <label for="picture3">Anh cua san pham 3:</label>
        <input type="file", name="picture3" id="picture3"> 
    </div>
    <div>
        <label for="picture4">Anh cua san pham 4:</label>
        <input type="file", name="picture4" id="picture4">  
    </div>
    <div>
        <label for="quantity">So luong san pham: </label>
        <input type="text", name="quantity" id="quantity"> 
    </div>
    <div>
        <label for="description">Mo ta san pham: </label>
        <textarea cols="25", rows="8", name="description" id="description"></textarea>
        @error('description')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div>
        <label for="price">Gia tien san pham: </label>
        <input type="text", name="price" id="price"> 
    </div>
    <div>
        <button type="submit">Them san pham</button>
    </div>
</form> --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/frontend/css/style.css">
    <title>Document</title>
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
                    @if(Auth::check())
                        <li><a href="{{ url('account') }}">Account</a></li>
                        <li><a href="{{ url('my-orders') }}">My Orders</a></li>
                        @if(Auth::user()->role_id==1)
                        <li><a href="{{ url('/') }}">Admin Page</a></li>
                        @endif
                    @endif
                    
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

    <h1 class="title" >ADD NEW PRODUCT</h1>

    <form style="line-height: 1.8;" action="{{ route('product.store') }}" method="POST" class="formcreate">
        @csrf
        <div class="input-cre">
            <h3 style="margin-bottom: 10px; "  class="title" >Information</h3>
            <label style="margin-bottom:10px" for="name">Product's Name:</label>
            <input style="width: 100%;margin-bottom:10px" type="text", name="name" id="name"> 
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div>
            <label for="picture1">Pictures 1 of the product:</label>
            <div class="containercre">
                <div class="button-wrap">
                  <input class="customfile" id="upload" type="file" name="picture1" id="picture1" >
                </div>
            </div>
        </div>
        <div>
            <label for="picture1">Pictures 2 of the product:</label>
                
                <input class="customfile" id="upload" type="file" name="picture1" id="picture1" >
        </div>
        <div>
            <label for="picture3">Pictures 3 of the product:</label>
            <div class="containercre">
                <div class="button-wrap">
                  <input class="customfile" id="upload" type="file" name="picture1" id="picture1" >
                </div>
            </div>
        </div>
        <div>
            <label for="picture4">Pictures 4 of the product:</label>
            <div class="containercre">
                <div class="button-wrap"> 
                  <input class="customfile" id="upload" type="file" name="picture1" id="picture1" >
                </div>
            </div> 
        </div>
        <div class="input-cre">
            <label for="quantity">The number of products: </label>
            <input style="width: 10%" type="number", name="quantity" id="quantity"> 
        </div>
        <div class="input-cre">
            <label for="description">Product Description: </label>
            <textarea style="width: 100%" cols="25", rows="8", name="description" id="description"></textarea>
            @error('description')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="input-cre">
            <label for="price">Price: </label>
            <input  style="width: 20%" type="text", name="price" id="price"> 
        </div>
        <br>
        <div>
            <button type="submit">Add</button>
        </div>
    </form> 
    <div class="footer">
        <div class="container">
            <div class="row_part2">
                <div class="footer-col-1">
                    <h3>Download Our App</h3>
                    <p>Download App for Android and IOS mobile phone.</p>
                    <div class="app-logo">
                        <img src="images/play-store.png">
                        <img src="images/app-store.png">
                    </div>
                </div>
                <div class="footer-col-2">
                    <a href="index.html"><img src="images/logoASM.png" width="125px"></a>
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