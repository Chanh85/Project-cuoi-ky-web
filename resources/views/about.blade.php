<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" >
    <title>About us</title>
    <script src="/frontend/scripts.js"></script>
    <link rel="stylesheet" href="/frontend/style.css">
    <link rel="stylesheet" href="/frontend/Tanvuong/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="scripts.js"></script>

    <script type="text/javascript" src="https://your-site-or-cdn.com/fontawesome/v6.1.1/js/conflict-detection.js"></script>
    <script src="/frontend/scripts.js"></script>
    <link rel="stylesheet" href="/frontend/style.css">
    <style>
        .img-wrap{
            width: 50%;
            padding-top:50px;
        }
        .img-wrap img{
            width: 50%;
            padding:10px;
            border-radius: 50%;
            box-shadow: 0 0 10px #999999;
        }
        #about-us{
            height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
        }
        #about-us h2{
            margin-bottom: 25px;
        }
        .row{
            margin-left:423px;
            margin-right: 0px;
        }
        body{
            background-image: url(frontend/TanVuong/images/background-aboutus.jpg);
            background-size: 1533px 760px;
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
                        <li><a href="/home">Home</a></li>
                        <li><a href="product">Products</a></li>
                        <li><a href="">About</a></li>
                        <li><a href="contactus">Contact</a></li>
                        <li><a href="about">Account</a></li>
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
                <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
            </div>
        </div>
    <section id="about-us">
        {{-- <h1 style="text-align: center;">Among Us</h1> --}}
        <div class="container-2">
            <div class="row">
                <div class="col-sm-7">
                    <h2 class="Vuong" style="text-align:center;">Lục Tấn Vương</h2>
                    <ul><h3>Information</h3>
                        <li>Experient:</li>
                        <li>Favourite language:</li>
                        <li>Age:</li>
                        <li>Status:</li>
                        <li>School:</li>
                    </ul>
                </div>
                <div class="col-sm-5">
                    <div class="img-wrap">
                        <img src="frontend/TanVuong/images/vuong.jpg">
                    </div>
                </div>
                <div class="col-sm-7">
                    <h2 class="Vuong" style="text-align:center;">Phạm Hoàng Sơn</h2>
                    <ul><h3>Information</h3>
                        <li>Experient:</li>
                        <li>Favourite language:</li>
                        <li>Age:</li>
                        <li>Status:</li>
                        <li>School:</li>
                    </ul>
                </div>
                <div class="col-sm-5">
                    <div class="img-wrap">
                        <img src="frontend/TanVuong/images/avt.jpg">
                    </div>
                </div>
                <div class="col-sm-7">
                    <h2 class="Vuong" style="text-align:center;">Nguyễn Chí Anh</h2>
                    <ul><h3>Information</h3>
                        <li>Experient:</li>
                        <li>Favourite language:</li>
                        <li>Age:</li>
                        <li>Status:</li>
                        <li>School:</li>
                    </ul>
                </div>
                <div class="col-sm-5">
                    <div class="img-wrap">
                        <img src="frontend/TanVuong/images/avt.jpg">
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>

