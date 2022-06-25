<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
    <style>
        .formcreate{
    border:1px solid rgb(192, 187, 187);
    border-radius: 12px;
    width: 40%;
    margin: auto;
    margin-bottom: 20px;
    padding: 24px;
    background-color: white;

}

.input-cre input{
    border: none;
    outline: none;
    font-size: 16px;
    border-bottom: 2px solid #ccc;
    border-top: 2px solid transparent;
}
.input-cre input:is(:focus, :valid){
    border-bottom-color: #ff523b;
}

.formcreate label{
    font-size: 20px;
}

.h1 .title::before{
    width: 30px;
    background-color: #ff523b;
    border-radius: 25px;
}
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
.body{
    font-family: 'Poppins', sans-serif;
}
.navbar{
    display: flex;
    align-items:center;
    padding: 20px;
}
nav{
    flex: 1;
    text-align: right;
}
nav ul{
    display: inline-block;
    list-style-type: none;
}
nav ul li{
    display:inline-block;
    margin-right: 20px;
}
a{
    text-decoration: none;
    color: #555;
}
p{
    color: #555;
}
.container{
    max-width: 1300px;
    margin: auto;
    padding-left: 25px;
    padding-right: 25px;
}
.row{
    align-items: center;
    flex-wrap: wrap;
    justify-content:space-around;
}
.col-2{
    flex-basis:50%;
    min-width: 300px;
}
.col-2 img{
    max-width: 100%;
    padding: 50px 0;
}
.col-2 h1{
    font-size: 40px;
    line-height: 60px;
    margin: 25px 0;
}
.background-image{
    background-image: url('./images/image_test.png');
    background-size: contain;
    background-repeat: no-repeat;
    height: 100vh;
}
.btn{
    display: inline-block;
    background: #ff523b;
    color: #fff;
    padding: 8px 30px;
    margin: 30px 0;
    border-radius:30px;
    transition: background 0.5s;
}
.header{
    background: radial-gradient(#fff, #eeeeee);
}
.header .row{
    margin-top: 100px;
}
.btn:hover{
    background: darkred;
}
.categories{
    margin: 70px 0;
}
.row_part2{
    align-items: center;
    flex-wrap: wrap;
    justify-content:space-around;
    display: flex;
}
.col-3{
    flex-basis: 30%;
    min-width: 250px;
    margin-bottom: 30px;
}
.col-3 img{
    width: 100%;
    margin-top: 30px;
}
.small-container{
    max-width: 2080px;
    margin: auto;
    padding-left: 25px;
    padding-right: 25px;
}
.col-4{
    flex-basis:25%;
    padding: 10px;
    min-width: 200px;
    margin-bottom: 50px;
    transition: transform 0.5s;
}
.col-4 img{
    width: 100%;
}
.title{
    text-align: center;
    margin: 0 auto 80px;
    position: relative;
    line-height: 60px;
    color: #555
}
.title:after{
    content: '';
    background: #ff523b;
    width: 80px;
    height: 5px;
    border-radius: 5px;
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
}
h4{
    color: #555;
    font-weight: normal;
}
.col-4 p{
    font-size: 14px;
}
.rating .fa{
    color: #ff523b;
}
.col-4:hover{
    transform: translateY(-5px);
}
/*----- offer ------*/

.offer{
    background: radial-gradient(#fff, #ffd6d6);
    margin-top: 80px;
    padding: 30px 0;
}
.col-2 .offer-img{
    padding: 50px;
}
small{
    color: #555;
}
/*----- offer -----*/

.testimonial{
    padding-top: 100px;
}
.testimonial .col-3{
    text-align: center;
    padding: 40px 20px;
    box-shadow: 0 0 20px 0 rgba(0,0,0,0.1);
    cursor: pointer;
    transition: transform 0.5s;
}
.testimonial .col-3 img{
    width: 50px;
    margin-top: 20px;
    border-radius: 50%;
}
.testimonial .col-3:hover{
    transform: translateY(-10px);
}
.fa.fa-quote-left{
    font-size: 34px;
    color: #ff523b;
}
.col-3 p{
    font-size: 12px;
    margin: 12px 0;
    color: #777;
}

.testimonial .col-3 h3{
    font-weight: 600;
    color: #555;
    font-size: 16px;
}
/*------------brands------------*/
.brands{
    margin: 100px auto;
}
.col-5{
    width: 160px;
}
.col-5 img{
    width: 100%;
    cursor: pointer;
    filter: grayscale(100%);
}
.col-5 img:hover{
    filter: grayscale(0);
}
/*--------- footer ---------*/
.footer{
    background: #000;
    color: #8a8a8a;
    font-size: 14px;
    padding: 60px 0 20px;
}
.footer p{
    color: #8a8a8a;
}
.footer h3{
    color: #fff;
    margin-bottom: 20px;
}
.footer-col-1, .footer-col-2, .footer-col-3, .footer-col-4{
    min-width: 250px;
    margin-bottom: 20px;
}
.footer-col-1{
    flex-basis: 30%;
}
.footer-col-2{
    flex: 1;
    text-align: center;
}
.footer-col-2 img{
    width: 180px;
    margin-bottom: 20px;
}
.footer-col-3, .footer-col-4{
    flex-basis: 12%;
    text-align: center;
}
ul{
    list-style-type: none;

}
.app-logo{
    margin-top: 20px;
}
.app-logo img{
    width: 140px;
}
.footer hr{
    border: none;
    background: #b5b5b5;
    height: 1px;
    margin: 20px 0;
}
.copyright{
    text-align:center;
}
.menu-icon{
    width: 28px;
    margin-left: 20px;
    display: none;
}
/*------ media query for menu -------------*/

@media only screen and (max-width: 800px){
    nav ul{
        position: absolute;
        top: 70px;
        left: 0;
        background: #333;
        width: 100%;
        overflow: hidden;
        transition: max-height 0.5s;
    }
    nav ul li{
        display: block;
        margin-right: 50px;
        margin-top: 10px;
        margin-bottom: 10px;
    }
    nav ul li a{
        color: #fff;
    }
    .menu-icon{
        display: block;
        cursor: pointer;
    }
}
/*------ media query for less than 600 screen size -------------*/
@media only screen and (max-width: 600px){
    .row{
        text-align: center;
    }
    .col2, .col-3, .col-4{
        flex-basis: 100%;
    }
}
.customfile{
    border: 2px solid #ff523b;
    border-radius: 50px;
    padding: 2px;
    font-size: 10px;
}

.customfile::-webkit-file-upload-button{
    background: #ff523b;
    color: #fff;
    padding: 8px 16px;
    border: none;
    border-radius: 50px;
    cursor: pointer;
}
button{
    border: none;
    outline: none;
    padding: 8px 16px;
    border-radius: 4px;
    color: white;
    position: relative;
    left:250px;
}

button:hover{
    cursor: pointer;
}

button[type="submit"]{
    background-color: #dd382c;
}
button[type="submit"]:hover{
    background-color: #a71414;
}

    </style>

</head>
<body>
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="index.html"><img src="images/logoASMD.png" width="125px"></a>
            </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="/home">Home</a></li>
                    <li><a href="/product">Products</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="contactus">Contact</a></li>
                    <li><a href="/account">Account</a></li>
                </ul>
            </nav>
            <a href="/frontend/cart.html"><img src="/frontend/images/shopping-cart.png" width="30px" height="30px" style="cursor:pointer;"></a>
            <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
        </div>
    </div>

    <h1 class="title" >ADD NEW PRODUCT</h1>

    <form style="line-height: 1.8;" action="{{ route("product.store") }}" method="POST" class="formcreate">
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
            <label for="picture1">Pictures 2 of the product:</label><br>

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
