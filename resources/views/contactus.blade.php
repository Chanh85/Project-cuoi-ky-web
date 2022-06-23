<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="/frontend/js/scripts.js"></script>
    <link rel="stylesheet" href="/frontend/css/style_contact.css">
    <link rel="stylesheet" href="/frontend/css/style.css">
    <title>Contact-Us</title>
</head>
<body>
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="/home"><img src="/frontend/images/logoASMD.png" width="60px"></a>
            </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="/home">Home</a></li>
                    <li><a href="product">Products</a></li>
                    <li><a href="about">About</a></li>
                    <li><a href="contactus">Contact</a></li>
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
            <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
        </div>
    </div>

    <div id="overlay">
        <form onsubmit="event.preventDefault(); validateForm()" id="froms-contact">
            <h1>Contact Us</h1>

            <label for="name">Name:</label>
            <input type="text" id="name" placeholder="Your name">
            <small class="error"></small>

            <label for="email">Email:</label>
            <input type="text" id="email" placeholder="Your email">
            <small class="error"></small>

            <label for="message">Message:</label>
            <textarea id="message" placeholder="Your message" rows="6"></textarea>
            <small class="error"></small>

            <div class="center">
                <input type ="submit" value="Send Message">
                <p id="success"></p>
            </div>
        </form>
    </div>

    <script src="script.js"></script>
</body>
</html>
