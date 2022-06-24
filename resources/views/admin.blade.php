<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Admin</title>
    <!-- Material Icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap');
        /*  ----- Root Variables ---- */
        :root{
            --color-primary: #7380ec;
            --color-danger: #ff7782;
            --color-success: #41f1b6;
            --color-warning: #ffbb55;
            --color-white: #fff;
            --color-info-dark: #7d8da1;
            --color-info-light: #dce1eb;
            --color-dark: #363949;
            --color-light: rgba(132, 139, 200, 0.18);
            --color-primary-variant: #677483;
            --color-dark-variant: #677483;
            --color-background: #f6f6f9;

            --card-border-radius: 2rem;
            --border-radius-1: 0.4rem;
            --border-radius-2: 0.8rem;
            --border-radius-3: 1.2rem;

            --card-padding: 1.8rem;
            --padding-1: 1.2rem;

            --box-shadow: 0 2rem 3rem var(--color-light);
        }

        /* ----- Dark Theme Variables ------ */

        .dark-theme-variables{
            --color-background: #181a1e;
            --color-white: #202528;
            --color-dark: #edeffd;
            --color-dark-variant: #a3bdcc;
            --color-light: rgba(0, 0, 0, 0.4);
            --box-shadow: 0 2rem 3rem var(--color-light);
        }

        *{
            margin: 0;
            padding: 0;
            outline: 0;
            appearance: none;
            border: 0;
            text-decoration: none;
            list-style: none;
            box-sizing: border-box;
        }


        html{
            font-size: 14px;
        }

        body{
            width: 100vw;
            font-family: poppins, sans-serif;
            font-size: 0.88rem;
            background: var(--color-background);
            user-select: none;
            color: var(--color-dark)
        }

        .container{
            display: grid;
            width: 96%;
            margin: 0 auto;
            gap: 1.8rem;
            grid-template-columns: 14rem auto 23rem;
        }

        a{
            color: var(--color-dark);
        }

        img{
            display: block;
            width: 100%
        }

        h1{
            font-weight: 800;
            font-size: 1.8rem;
        }

        h2{
            font-size: 1.4rem;
        }

        h3{
            font-size:0.87rem;
        }

        h4{
            font-size: 8.77rem;
        }

        h5{
            font-size: 0.77rem;
        }

        small{
            font-size: 0.75rem;
        }

        .profile-photo{
            width: 2.8rem;
            height: 2.8rem;
            border-radius: 50%;
            overflow: Hidden;
        }

        .text-muted{
            color: var(--color-info-dark)
        }
        p{
            color: var(--color-dark-variant);
        }

        b{
            color: var(--color-dark);
        }

        .primary{
            color: var(--color-primary);
        }

        .danger{
            color: var(--color-danger);
        }

        .success{
            color: var(--color-success);
        }
        .warning{
            color: var(--color-warning);
        }


        aside{
            height: 100vh;
        }

        aside .top{
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: 1.4rem;
        }

        aside .logo{
            display: flex;
            gap: 0.8rem;
        }

        aside .logo img{
            width: 2rem;
            height: 2rem;
        }

        aside .close{
            display: none;
        }

        /* ==== SIDEBAR ==== */

        aside .sidebar{
            background: white;
            display: flex;
            flex-direction: column;
            height: 86vh;
            position: relative;
            top: 3rem;
        }

        aside h3 {
            font-weight: 500;
        }

        aside .sidebar a{
            display: flex;
            color: var(--color-info-dark);
            margin-left:2rem;
            gap: 1rem;
            align-items: center;
            position: relative;
            height: 3.7rem;
            transition: all 300ms ease;
        }

        aside .sidebar a span{
            font-size: 1.6rem;
            transition: all 300ms ease;
        }

        aside .sidebar a:last-child{
            position: absolute;
            bottom: 2rem;
            width: 100%
        }

        aside .sidebar a.active{
            background: var(--color-light);
            color: var(--color-primary);
            margin-left: 0;
        }

        aside .sidebar a.active:before{
            content: "";
            width: 6px;
            height: 100%;
            background: var(--color-primary);
        }

        aside .sidebar a.active span{
            color: var(--color-primary);
            margin-left: calc(1rem - 3px);
        }

        aside .sidebar a:hover {
            color: var(--color-primary);
        }

        aside .sidebar a:hover span{
            margin-left: 1rem;
        }

        aside .sidebar .message-count{
            background: var(--color-danger);
            color: var(--color-white);
            padding: 2px 10px;
            font-size: 11px;
            border-radius: var(--border-radius-1);
        }


        /*  ======= MAIN ====== */
        main{
            margin-top: 1.4rem;

        }

        main .date{
            display: inline-block;
            background: var(--color-light);
            border-radius: var(--border-radius-1);
            margin-top: 1rem;
            padding: 0.5rem 1.6rem;
        }

        main .date input[type="date"]{
            background: transparent;
            color: var(--color-dark);
        }

        main .insights{
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.6rem;
        }

        main .insights > div {
            background: var(--color-white);
            padding: var(--card-padding);
            border-radius: var(--card-border-radius);
            margin-top: 1rem;
            box-shadow: var(--box-shadow);
            transition: all 300ms ease;
        }

        main .insights > div:hover{
            box-shadow: none;
        }

        main .insights > div span{
            background: var(--color-primary);
            padding: 0.5rem;
            border-radius: 50%;
            color: var(--color-white);
            font-size: 2rem;
        }

        main .insights > div.expenses span{
            background: var(--color-danger);
        }

        main .insights > div.income span{
            background: var(--color-success);
        }

        main .insights > div .middle{
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        main .insights h3{
            margin: 1rem 0 0.6rem;
            font-size: 1rem;
        }

        main .insights .progress{
            position: relative;
            width: 92px;
            height: 92px;
            border-radius: 50%;
        }

        main .insights svg{
            width: 7rem;
            height: 7rem;
        }

        main .insights svg circle{
            fill: none;
            stroke: var(--color-primary);
            stroke-width: 14;
            stroke-linecap: round;
            transform: translate(5px, 5px);
            stroke-dasharray: 110;
            stroke-dashoffset: 92;
        }

        main .insights .sales svg circle{
            stroke-dashoffset: -30;
            stroke-dasharray: 200;
        }

        main .insights .expenses svg circle{
            stroke-dashoffset: 20;
            stroke-dasharray: 80;
        }

        main .insights .income svg circle{
            stroke-dashoffset: 35;
            stroke-dasharray: 110;
        }

        main .insights .progress .number{
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        main .insights small{
            margin-top: 1.6rem;
            display: block;
        }

        /* =========== Recent Orders ========*/

        main .recent-orders {
            margin-top: 2rem;
        }

        main .recent-orders h2{
            margin-bottom: 0.8rem;
        }

        main .recent-orders table{
            background: var(--color-white);
            width: 100%;
            border-radius: var(--card-border-radius);
            padding: var(--card-padding);
            text-align: center;
            box-shadow: var(--box-shadow);
            transition: all 300ms ease;
        }

        main .recent-orders table:hover{
            box-shadow: none;
        }

        main table tbody td{
            height: 2.8rem;
            border-bottom: 1px solid var(--color-light);
            color: var(--color-dark-variant)
        }

        main table tbody tr:last-child td{
            border: none;
        }

        main .recent-orders a{
            text-align: center;
            display: block;
            margin: 1rem auto;
            color: var(--color-primary);
        }

        /* ============= Right ============== */

        .right{
            margin-top: 1.4rem;
        }

        .right .top{
            display: flex;
            justify-content: end;
            gap: 2rem;
        }

        .right .top button{
            display: none;
        }

        .right .theme-toggler{
            background: var(--color-light);
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 1.6rem;
            width: 4.2rem;
            cursor: pointer;
            border-radius: var(--border-radius-1);
        }

        .right .theme-toggler span{
            font-size: 1.2rem;
            width: 50%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .right .theme-toggler span.active{
            background: var(--color-primary);
            color: white;
            border-radius: var(--border-radius-1);
        }

        .right .top .profile{
            display: flex;
            gap: 2rem;
            text-align: right;
        }

        /* ===== Recent Updates ===== */
        .right .recent-updates{
            margin-top: 1rem;
        }

        .right .recent-updates h2{
            margin-bottom: 0.8rem;
        }

        .right .recent-updates .updates{
            background: var(--color-white);
            padding: var(--card-padding);
            border-radius: var(--card-border-radius);
            box-shadow: var(--box-shadow);
            transition: all 300ms ease;
        }

        .right .recent-updates .updates:hover{
            box-shadow: none;
        }

        .right .recent-updates .updates .update{
            display: grid;
            grid-template-columns: 2.6rem auto;
            gap: 1rem;
            margin-bottom: 1rem;
        }

        /* ========== Sale Analytics ============ */

        .right .sales-analytics{
            margin-top: 2rem;
        }

        .right .sales-analytics h2{
            margin-bottom: 0.8rem;
        }

        .right .sales-analytics .item{
            background: var(--color-white);
            display:flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 0.7rem;
            padding: 1.4rem var(--card-padding);
            border-radius: var(--border-radius-3);
            box-shadow: var(--box-shadow);
            transition: all 300ms ease;
        }

        .right .sales-analytics .item:hover{
            box-shadow: none;
        }

        .right .sales-analytics .item .right {
            display: flex;
            justify-content: space-between;
            align-items: start;
            margin: 0;
            width: 100%;
        }

        .right .sales-analytics .item .icon{
            padding: 0.6rem;
            color: var(--color-white);
            border-radius: 50%;
            background: var(--color-primary);
            display: flex;
        }

        .right .sales-analytics .item.offline .icon{
            background: var(--color-danger);
        }

        .right .sales-analytics .item.customers .icon{
            background: var(--color-success);
        }

        .right .sales-analytics .add-product{
            background: transparent;
            border: 2px dashed var(--color-primary);
            color: var(--color-primary);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .right .sales-analytics .add-product div{
            display: flex;
            align-items: center;
            gap: 0.6rem;
        }

        .right .sales-analytics .add-product div h3{
            font-weight: 600;
        }

        /* ====== Media Queries ====== 1200px */

        @media screen and (max-width: 1200px){
            .container{
                width: 94%;
                grid-template-columns: 7rem auto 23rem;
            }

            aside.logo h2{
                display: none
            }

            aside .sidebar h3{
                display: none;
            }

            aside .sidebar a{
                width: 5.6rem;
            }

            aside .sidebar a:last-child{
                position: relative;
                margin-top: 1.8rem;
            }

            main .insights{
                grid-template-columns: 1fr;
                gap: 0
            }

            main .recent-orders{
                width: 94%;
                position: absolute;
                left: 50%;
                transform: translateX(-50%);
                margin: 2rem 0 0 8.8rem;
            }

            main.recent-orders table{
                width: 83vw;
            }

            main table thead tr th:last-child,
            main table thead tr th:first-child{
                display: none;
            }

            main table tbody tr th:last-child,
            main table tbody tr th:first-child{
                display: none;
            }
        }

        /* ====== Media Queries ====== 768px*/

        @media screen and (max-width: 768px) {
            .container {
                width: 100%;
                grid-template-columns: 1fr;
            }

            aside{
                position: fixed;
                left: -100%;
                background: var(--color-white);
                width: 18rem;
                z-index: 3;
                box-shadow: 1rem 3rem 4rem var(--color-light);
                height: 100vh;
                padding-right: var(--card-padding);
                display: none;
                animation: showMenu 400ms ease forwards;
            }

            @keyframes showMenu {
                to{
                    left: 0;
                }
            }

            aside .logo{
                margin-left: 1rem;
            }

            aside.logo h2{
                display: inline
            }

            aside .sidebar h3{
                display: inline;
            }

            aside .sidebar a{
                width: 100%;
                height: 3.4rem;
            }

            aside .sidebar a:last-child{
                position: absolute;
                bottom: 5rem;
            }

            aside .close{
                display: inline-block;
                cursor: pointer;
            }
            main {
                margin-top: 8rem;
                padding: 0 1rem;
            }

            main .recent-orders{
                position: relative;
                margin: 3rem 0 0 0;
                width: 100%;
            }

            main .recent-orders table {
                width: 100%;
                margin: 0;
            }

            .right{
                width: 94%;
                margin: 0 auto 4rem;
            }

            .right .top{
                position: fixed;
                top: 0;
                left: 0;
                align-items: center;
                padding: 0 0.8rem;
                height: 4.6rem;
                background: var(--color-white);
                width: 100%;
                margin: 0;
                z-index: 2;
                box-shadow: 0 1rem 1rem var(--color-light);
            }

            .right .top .theme-toggler{
                width: 4.4rem;
                position: absolute;
                left: 66%;
            }

            .right .profile .info{
                display: none;
            }

            .right .top button{
                display: inline-block;
                background: transparent;
                cursor: pointer;
                color: var(--color-dark);
                position: absolute;
                left: 1rem;
            }

            .right .top button span{
                font-size: 2rem;
            }
        }x
    </style>
</head>
<body>
    <div class="container">
        <aside>
            <div class="top">
                <div class="logo">
                    <h2>AD<span class="danger">MIN</span></h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-symbols-outlined">close</span>
                </div>
            </div>

            <div class="sidebar">
                <a href="#">
                    <span class="material-symbols-outlined">grid_view</span>
                    <h3>Dashboard</h3>
                </a>
                <a href="#" class="active">
                    <span class="material-symbols-outlined">person</span>
                    <h3>Customers</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-outlined">receipt_long</span>
                    <h3>Orders</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-outlined">insights</span>
                    <h3>Analytics</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-outlined">inventory</span>
                    <h3>Products</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-outlined">report</span>
                    <h3>Reports</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-outlined">settings</span>
                    <h3>Settings</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-outlined">add</span>
                    <h3>Add Product</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-outlined">logout</span>
                    <h3>Logout</h3>
                </a>
            </div>
        </aside>

        <!---- End Of Aside ---->

        <main>
            <h1>Dashboard</h1>

            <div class="date">
                <input type="date">
            </div>

            <div class="insights">
                <div class="sales">
                    <span class="material-symbols-outlined">analytics</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Total Sales</h3>
                            <h1>$25,024</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx='38' cy='38' r='36'></circle>
                            </svg>
                            <div class="number">
                                <p>81%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">Last 24 Hours</small>
                </div>
                <!---- End of Sales ---->
                <div class="expenses">
                    <span class="material-symbols-outlined">bar_chart</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Total Expenses</h3>
                            <h1>$14,024</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx='38' cy='38' r='36'></circle>
                            </svg>
                            <div class="number">
                                <p>62%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">Last 24 Hours</small>
                </div>
                <!---- End of Expenses ---->
                <div class="income">
                    <span class="material-symbols-outlined">stacked_line_chart</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Total Income</h3>
                            <h1>$10,864</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx='38' cy='38' r='36'></circle>
                            </svg>
                            <div class="number">
                                <p>81%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">Last 24 Hours</small>
                </div>
                <!---- End of Income ---->
            </div>
            <!---- End of Insights ---->

            <div class="recent-orders">
                <h2>Recent Orders</h2>
                <table>
                    <thread>
                        <tr>
                            <th>Product Name</th>
                            <th>Product Number</th>
                            <th>Customer ID</th>
                        </tr>
                    </thread>
                    <tbody>
                        <tr>
                            <td>Iphone 11</td>
                            <td>85631</td>
                            <td>Due</td>

                        </tr>

                        <tr>
                            <td>Iphone 11</td>
                            <td>85631</td>
                            <td>Due</td>
                        </tr>

                        <tr>
                            <td>Iphone 11</td>
                            <td>85631</td>
                            <td>Due</td>
                        </tr>

                        <tr>
                            <td>Iphone 11</td>
                            <td>85631</td>
                            <td>Due</td>
                        </tr>

                        <tr>
                            <td>Iphone 11</td>
                            <td>85631</td>
                            <td>123</td>
                        </tr>
                    </tbody>
                </table>
                <a href="#">Show All</a>
            </div>

            <div class="recent-orders">
                <h2>Recent Products</h2>
                <table>
                    <thread>
                        <tr>
                            <th>Product Name</th>
                            <th>Product Number</th>
                            <th>Quantity</th>
                            <th>Price</th>
                        </tr>
                    </thread>
                    <tbody>
                    <tr>
                        <td>Iphone 11</td>
                        <td>85631</td>
                        <td>Due</td>
                        <td>85631</td>
                    </tr>

                    <tr>
                        <td>Iphone 11</td>
                        <td>85631</td>
                        <td>Due</td>
                        <td>85631</td>
                    </tr>

                    <tr>
                        <td>Iphone 11</td>
                        <td>85631</td>
                        <td>Due</td>
                        <td>85631</td>
                    </tr>

                    <tr>
                        <td>Iphone 11</td>
                        <td>85631</td>
                        <td>Due</td>
                        <td>85631</td>
                    </tr>

                    <tr>
                        <td>Iphone 11</td>
                        <td>85631</td>
                        <td>Due</td>
                        <td>85631</td>
                    </tr>
                    </tbody>
                </table>
                <a href="#">Show All</a>
            </div>
        </main>
        <!------- End of Main -------->
        <div class="right">
            <div class="top">
                <button id="menu-btn">
                    <span class="material-symbols-outlined">menu</span>
                </button>
                <div class="theme-toggler">
                    <span class="material-symbols-outlined active">light_mode</span>
                    <span class="material-symbols-outlined"> dark_mode </span>
                </div>
                <div class="profile">
                    <div class="info">
                        <p>He, <b>TanVuong</b></p>
                        <small class="text-muted">Admin</small>
                    </div>
                    <div class="profile-photo">
                        <img src="../images/profile-1.jpg" alt="">
                    </div>
                </div>
        </div>
            <!-- End of Top -->
            <div class="recent-updates">
                <h2>Recent Updates</h2>
                <div class="updates">
                    <div class="update">
                        <div class="profile-photo">
                            <img src="../images/profile-2.jpg" alt="">
                        </div>

                        <div class="message">
                            <p><b>Mike Tyson</b> Received his order of Iphone</p>
                            <small class="text-muted">2 Minutes Ago</small>
                        </div>
                    </div>
                    <div class="update">
                        <div class="profile-photo">
                            <img src="../images/profile-3.jpg" alt="">
                        </div>

                        <div class="message">
                            <p><b>Mike Tyson</b> Received his order of Iphone</p>
                            <small class="text-muted">2 Minutes Ago</small>
                        </div>
                    </div>
                    <div class="update">
                        <div class="profile-photo">
                            <img src="../images/profile-4.jpg" alt="">
                        </div>

                        <div class="message">
                            <p><b>Mike Tyson</b> Received his order of Iphone</p>
                            <small class="text-muted">2 Minutes Ago</small>
                        </div>
                    </div>
                </div>
            </div>
            <!---- End of recent update ---->
            <div class="sales-analytics">
                <h2>Sales Analytics</h2>
                <div class="item online">
                    <div class="icon">
                        <span class="material-symbols-outlined">shopping_cart</span>
                    </div>
                    <div class="right">
                        <div class="info">
                            <h3>ONLINE ORDERS</h3>
                            <small class="text-muted">Last 24 Hours</small>
                        </div>
                        <h5 class="success">+39%</h5>
                        <h3>3849</h3>
                    </div>
                </div>
                <div class="item offline">
                    <div class="icon">
                        <span class="material-symbols-outlined"> local_mall </span>
                    </div>
                    <div class="right">
                        <div class="info">
                            <h3>OFFLINE ORDERS</h3>
                            <small class="text-muted">Last 24 Hours</small>
                        </div>
                        <h5 class="danger">-17%%</h5>
                        <h3>1100</h3>
                    </div>
                </div>
                <div class="item customers">
                    <div class="icon">
                        <span class="material-symbols-outlined"> person </span>
                    </div>
                    <div class="right">
                        <div class="info">
                            <h3>NEW CUSTOMERS</h3>
                            <small class="text-muted">Last 24 Hours</small>
                        </div>
                        <h5 class="success">+25%</h5>
                        <h3>849</h3>
                    </div>
                </div>
                <div class="item add-product">
                    <div>
                        <span class="material-symbols-outlined"> add </span>
                        <h3>Add Product</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const sideMenu = document.querySelector("aside");
        const menuBtn   = document.querySelector("#menu-btn");
        const closeBtn = document.querySelector("#close-btn");
        const themeToggler = document.querySelector(".theme-toggler");

        ///Show sidebar
        if(menuBtn){
            menuBtn.addEventListener('click', () =>{
                sideMenu.style.display = 'block';
            })
        }

        ///Close sidebar
        if(closeBtn){
            closeBtn.addEventListener('click', () => {
                sideMenu.style.display = 'none';
            })
        }

        // change theme
        if(themeToggler){
            themeToggler.addEventListener('click', () =>{
                document.body.classList.toggle('dark-theme-variables');

                themeToggler.querySelector('span:nth-child(1)').classList.toggle('active');
                themeToggler.querySelector('span:nth-child(2)').classList.toggle('active');
            })
        }

    </script>
</body>
</html>
