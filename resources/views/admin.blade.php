<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <!-- Material Icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="pageadmin.css">
</head>
<body>
    <div class="container">
        <aside>
            <div class="top">
                <div class="logo">
                    <img src='../images/logo_admin.png'>
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
                    <span class="material-symbols-outlined">mail</span>
                    <h3>Messages</h3>
                    <span class="message-count">26</span>
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
                    <span class="material-symbols-outlined">bar_chart</span>                    <div class="middle">
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
                    <span class="material-symbols-outlined">stacked_line_chart</span>                    <div class="middle">
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
                            <th>Payment</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thread>
                    <tbody>
                        <tr>
                            <td>Iphone 11/td>
                            <td>85631</td>
                            <td>Due</td>
                            <td class="warning">Pending</td>
                            <td class="primary">Details</td>
                        </tr>

                        <tr>
                            <td>Iphone 11/td>
                            <td>85631</td>
                            <td>Due</td>
                            <td class="warning">Pending</td>
                            <td class="primary">Details</td>
                        </tr>

                        <tr>
                            <td>Iphone 11/td>
                            <td>85631</td>
                            <td>Due</td>
                            <td class="warning">Pending</td>
                            <td class="primary">Details</td>
                        </tr>

                        <tr>
                            <td>Iphone 11/td>
                            <td>85631</td>
                            <td>Due</td>
                            <td class="warning">Pending</td>
                            <td class="primary">Details</td>
                        </tr>

                        <tr>
                            <td>Iphone 11/td>
                            <td>85631</td>
                            <td>Due</td>
                            <td class="warning">Pending</td>
                            <td class="primary">Details</td>
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
                        <span class="material-symbols-outlined"> local_mall </span>                    </div>
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
    <script src="./pageadmin.js"></script>
</body>
</html>
