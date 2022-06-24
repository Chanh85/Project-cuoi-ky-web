<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="C:\laragon\www\Project-cuoi-ky-web\public\frontend\style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <title>Account</title>
</head>
<body>
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="index.html"><img src="../images/logoASMD.png" width="125px"></a>
            </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="product.html">Products</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="contactuss/contactus.html">Contact</a></li>
                    <li><a href="">Account</a></li>
                </ul>
            </nav>
            <a href="/frontend/cart.html"><img src="/frontend/images/shopping-cart.png" width="30px" height="30px" style="cursor:pointer;"></a>
            <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
        </div>
    </div>
    <h2 style="margin-left:300px; padding:10px">Profile Account</h2>
    <p style="margin-left:300px; padding:10px; margin-bottom:10px">Manage profile information for account security</p>
    <hr style="margin:auto; margin-bottom:20px; width:50%">
    <form method="post">
        <div class="content">
            <div class="form-group">
                <label for="name">Name Account</label>
                <input class="form-control" id="name" type="text" placeholder="Full Name">
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input class="form-control" id="email" type="email" placeholder="Email">

            </div>
            <div class="form-group">
                <label for="name">Phone Number</label>
                <input class="form-control" id="name" type="text" placeholder="Phone Number">
            </div>
            <div class="form-group">
                <label for="birthday">Address</label>
                <input class="form-control" id="birthday" type="text" placeholder="Address">
            </div>
            <div class="form-group">
                <label for="birthday">Birthday</label>
                <input class="form-control" id="birthday" type="date">
            </div>
            <div class="form-group">
                <label>Gender</label>
                <div>
                    <input id="male" type="radio" name="gender">
                    <label for="male">Male</label>
                    <input id="female" type="radio" name="gender">
                    <label for="female">Female</label>
                    <input id="female" type="radio" name="gender">
                    <label for="female">Unknown</label>
                </div>
            </div>
            <div class="form-group">
                <button type="submit">Save</button>
            </div>
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
