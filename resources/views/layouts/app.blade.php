<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"
    rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <div class="container">
        <aside>
            <div class="top">
                <div class="logo">
                    <img src="images/Logo.png">
                    <h2 class="text-muted">ANZ <span class="danger">AHA</span></h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">close</span>
                </div>
            </div>
            <!-- ---------sidebar------------- -->
            <div class="sidebar">
                    <a href="#" class="active">
                        <span class="material-icons-sharp">grid_view</span>
                        <h3>Dashboard</h3>
                    </a>
                    <a href="#">
                    <span class="material-icons-sharp">inventory</span>
                        <h3>Catigroy</h3>
                    </a>
                    <a href="#">
                    <span class="material-icons-sharp">category</span>
                        <h3>Products</h3>
                    </a>
                    <a href="#" >
                        <span class="material-icons-sharp">people</span>
                        <h3>Users</h3>
                    </a>
                    <a href="#">
                        <span class="material-icons-sharp">chat</span>
                        <h3>Messages</h3>
                        <span class="message-count nms">47</span>
                    </a>
                    <a href="#">
                        <span class="material-icons-sharp">insights</span>
                        <h3>Analytics</h3>
                    </a>
                    <a href="#">
                        <span class="material-icons-sharp">report_gmailerrorred</span>
                        <h3>Reports</h3>
                    </a>
                    <a href="#">
                        <span class="material-icons-sharp">settings</span>
                        <h3>Settings</h3>
                    </a>
                    <a href="#">
                        <span class="material-icons-sharp">logout</span>
                        <h3>Logout</h3>
                    </a>
            </div>
        </aside>

        <main class="py-4">
            @yield('content')
        </main>
                <!-- ---------Right side------------- -->
                <div class="right">
            <div class="top">
                <button id="menu-btn">
                    <span class="material-icons-sharp">menu</span>
                </button>
                <div class="theme-toggler">
                    <span class="material-icons-sharp active">brightness_high</span>
                    <span class="material-icons-sharp">nightlight_round</span>
                </div>
                <div class="profile">
                    <div class="info">
                        <p>Hey, <b>ABDO</b></p>
                        <small class="test-muted">Admin</small>
                    </div>
                </div>
                <div class="profile-photo">
                    <img src="images/profile.png">
                </div>
            </div>
            <!-- /* ---------Right side updates------------- */ -->
            <div class="recent-updates">
                <h2>Recent Update</h2>
                <div class="updates">
                    <div class="update">
                        <div class="profile-photo">
                            <img src="images/profile2.jpg">
                        </div>
                        <div class="message">
                            <p><b>Mike Tyson</b>received his order of night lion tech GPS drone</p>
                            <small class="text-muted">2 Minutes Ago</small>
                        </div>
                    </div>
                    <div class="update">
                        <div class="profile-photo">
                            <img src="images/profile3.jpg">
                        </div>
                        <div class="message">
                            <p><b>Mike Tyson</b>received his order of night lion tech GPS drone</p>
                            <small class="text-muted">2 Minutes Ago</small>
                        </div>
                    </div>
                    <div class="update">
                        <div class="profile-photo">
                            <img src="images/profile4.jpg">
                        </div>
                        <div class="message">
                            <p><b>Mike Tyson</b>received his order of night lion tech GPS drone</p>
                            <small class="text-muted">2 Minutes Ago</small>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ---------Right side sales------------- -->
            <div class="sales-analytics">
                <h2>Sales Analytics</h2>
                <div class="item online">
                    <div class="icon">
                        <span class="material-icons-sharp">shopping_cart</span>
                    </div>
                    <div class="right">
                        <div class="info">
                            <h3>Online Orders</h3>
                            <small class="text-muted">Last 24 Hours</small>
                        </div>
                        <h5 class="success rightfont">+39%</h5>
                        <h3 class="rightfont">3849</h3>
                    </div>
                </div>
                <div class="item offline">
                    <div class="icon">
                        <span class="material-icons-sharp">local_mall</span>
                    </div>
                    <div class="right">
                        <div class="info">
                            <h3>Offline Orders</h3>
                            <small class="text-muted">Last 24 Hours</small>
                        </div>
                        <h5 class="danger rightfont">-17%</h5>
                        <h3 class="rightfont">1100</h3>
                    </div>
                </div>
                <div class="item customers">
                    <div class="icon">
                        <span class="material-icons-sharp">person</span>
                    </div>
                    <div class="right">
                        <div class="info">
                            <h3>New Customers</h3>
                            <small class="text-muted">Last 24 Hours</small>
                        </div>
                        <h5 class="success rightfont">+25%</h5>
                        <h3 class="rightfont">849</h3>
                    </div>
                </div>
                <div class="item add-product">
                    <div>
                        <span class="material-icons-sharp">add</span>
                        <h3>Add Product</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>