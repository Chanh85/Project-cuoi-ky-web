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
    <style>
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
    background-image: url(../images/image_test.png);
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

/*-------------all products page--------------*/
.row2{
    justify-content: space-between;
    margin: 50px auto 50px;
}
select{
    border: 1px solid #ff523b;
    padding: 5px;
}
select:focus{
    outline: none;
}
.page-btn{
    margin: 0 auto 80px;
}
.page-btn span{
    display: inline-block;
    border: 1px solid #ff523b;
    margin-left: 10px;
    width: 40px;
    height: 40px;
    text-align: center;
    line-height: 40px;
    cursor: pointer;
}
.page-btn span:hover{
    background: #ff523b;
    color: #fff;
}

.single-product{
    margin-top: 80px;
}
.single-product .col-2 img{
    border: 1px solid;
    border-radius: 5px;
    padding: 20px;
}
.single-product .col-2{
    padding: 20px;
}
.single-product h4{
    font-size: 22px;
    font-weight: bold;
}
.single-product select{
    display: block;
    padding: 10px;
    margin-top: 20px;
}
.single-product input
{
    width: 50px;
    height: 40px;
    padding-left: 10px;
    font-size: 20px;
    margin-right: 10px;
    border: 1px solid #ff523b;
}
input:focus{
    outline: none;
}
.single-product .fa{
    color: #ff523b;
    margin-left: 10px;
}
.small-img-row{
    display: flex;

}
.small-img-col{
    flex-basis: 23%;
    cursor: pointer;
}
/*------ media query for menu -------------*/

@media only screen and (max-width: 800px){
    nav ul{
        display:none;
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
    /*#MenuItems{

    }*/
    nav ul.active{
        display: inline-block!important;
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
    .single-product .row_part2{
        text-align: left;
    }
    .single-product .col-2{
        padding: 20px 0;
    }
    .single-product h1{
        font-size: 26px;
        line-height: 32px;
    }

    .cart-info p{
        display: none;
    }
}
@media only screen and (max-width: 767px){
    .row{
        text-align: center;
    }
    .col2, .col-3, .col-4{
        flex-basis: 100%;
    }
}
/*--- cart items---- */
.cart-page{
    margin: 80px auto;
}
table{
    width: 100%;
    border-collapse: collapse;
}
.cart-info{
    display: flex;
    flex-wrap: wrap;
}
th{
    text-align: left;
    padding: 5px;
    color: #fff;
    background: #ff523b;
    font-weight: normal;
}

td{
    padding: 10px 5px;
}
td input{
    width: 40px;
    height: 30px;
    padding: 5px;
}
td a{
    color: #ff523b;
    font-size: 12px;
}
td img{
    width: 80px;
    height: 80px;
    margin-right: 10px;
}

.total-price{
    display: flex;
    justify-content: flex-end;
}
.total-price table{
    border-top: 3px solid #ff523b;
    width: 100%;
    max-width: 350px;
}
td:last-child{
    text-align: right;
}
th:last-child{
    text-align: right;
}

/* --------Account----------  */
*{
    box-sizing: border-box;
}

body{
    background-color: #eeeeee;
}

form{
    border:1px solid rgb(192, 187, 187);
    border-radius: 12px;
    width: 60%;
    margin: auto;
    margin-bottom: 20px;
    padding: 24px;
    background-color: white;

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

.form-group{
    margin-bottom: 20px;
}

label{
    margin-bottom: 5px;
    display: block;
}

.form-group div label{
    display: inline;
}

button{
    border: none;
    outline: none;
    padding: 8px 16px;
    border-radius: 4px;
    color: white;
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

    </style>
</head>
<body>
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="index.html"><img src="../images/logoASMD.png" width="125px"></a>
            </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="/home">Home</a></li>
                    <li><a href="/product">Products</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/contactus">Contact</a></li>
                    <li><a href="/account">Account</a></li>
                </ul>
            </nav>
            <a href="/frontend/cart.html"><img src="/frontend/images/shopping-cart.png" width="30px" height="30px" style="cursor:pointer;"></a>
            <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
        </div>
    </div>
    <h1 class="title" style=" padding:10px">Profile Account</h1>
    <p style="text-align:center">Manage profile information for account security</p>
    <hr style="margin:auto; margin-bottom:20px; width:50%">
    <form method="post">
        <div class="content">
            <div class="form-group input-cre">
                <label for="name">Name Account</label>
                <input class="form-control" id="name" type="text" placeholder="Full Name">
            </div>
            <div class="form-group input-cre">
                <label for="email">Email address</label>
                <input class="form-control" id="email" type="email" placeholder="Email">

            </div>
            <div class="form-group input-cre">
                <label for="phone">Phone Number</label>
                <input class="form-control" id="phone" type="text" placeholder="Phone Number">
            </div>
            <div class="form-group input-cre">
                <label for="address">Address</label>
                <input class="form-control" id="address" type="text" placeholder="Address">
            </div>
            <div class="form-group input-cre">
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
