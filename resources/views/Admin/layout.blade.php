<!DOCTYPE html>

<head>
    <title>@yield('page_title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- bootstrap-css -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
    <link href="{{asset('css/style.css')}}" rel='stylesheet' type='text/css' />
    <link href="{{asset('css/style-responsive.css')}}" rel="stylesheet" />
    <!-- font CSS -->
    <link href="{{asset('//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic')}}" rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="{{asset('css/font.css')}}" type="text/css" />
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/morris.css')}}" type="text/css" />
    <!-- calendar -->
    <link rel="stylesheet" href="{{asset('css/monthly.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <!-- //calendar -->
    <!-- //font-awesome icons -->
    <script src="{{asset('js/jquery2.0.3.min.js')}}"></script>
    <script src="{{asset('js/raphael-min.js')}}"></script>
    <script src="{{asset('js/morris.js')}}"></script>

    <link rel="stylesheet" href="{{asset('Styling table.css')}}">
</head>

<body style="font-family: Georgia, serif;font-size: 90%; font-weight: bold;font-style: italic;color:black;">
    <section id="container">
        <!--header start-->
        <header class="header fixed-top clearfix">
            <!--logo start-->
            <div class="brand">
                <a href="{{asset('index.html')}}" class="logo">
                    ADMIN
                </a>
                <div class="sidebar-toggle-box">
                    <div class="fa fa-bars"></div>
                </div>

            </div>
            <!--logo end-->



            <div class="top-nav clearfix">
                <!--search & user info start-->
                <ul class="nav pull-right top-menu">
                    <!-- <li>
            <input type="text" class="form-control search" placeholder=" Search">
        </li> -->
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <img alt="" src="images/2.png">
                            <span class="username">Welcome Admin</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                            <li><a href="{{url('Admin/logout')}}"><i class="fa fa-key"></i> Log Out</a>

                            </li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->

                </ul>
                <!--search & user info end-->
            </div>

        </header>
        <!--header end-->
        <!--sidebar start-->
        <aside>
            <div id="sidebar" class="nav-collapse">
                <!-- sidebar menu start-->
                <div class="leftside-navigation" style="font-size: 50%;">
                    <ul class="sidebar-menu" id="nav-accordion">
                        <li>
                            <a class="active" href="/Admin/dashboard">
                                <i class="fa fa-dashboard"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{route('Admin.category.index')}}">
                                <i class="fa fa-bullhorn"></i>
                                <span>Manage Category</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{route('Admin.subcategory.index')}}">
                                <i class="fa fa-list"></i>
                                <span>Manage SubCategory</span>
                            </a>
                        </li>
                        <!-- <li class="sub-menu">
                            <a href="{{route('Admin.product.index')}}">
                                <i class="fa fa-tasks"></i>
                                <span>Manage Product</span>
                            </a>
                        </li> -->

                        <li>
                            <a href="{{route('Admin.offer.index')}}">
                                <i class="fa fa-list"></i>
                                <span>Manage Offer</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{asset('fontawesome.html')}}">
                                <i class="fa fa-tag"></i>
                                <span>Manage Order</span>
                            </a>
                        </li>


                        <!-- <li>
                            <a href="{{route('Admin.addcustomer.index')}}">
                                <i class="fa fa-bullhorn"></i>
                                <span>Manage Customer</span>
                            </a>
                        </li> -->

                        <li class="sub-menu">
                            <a href="{{route('Admin.size.index')}}">
                                <i class="fa fa-tasks"></i>
                                <span>Manage Size</span>
                            </a>
                        </li>


                        <li class="sub-menu">
                            <a href="{{route('Admin.color.index')}}">
                                <i class="fa fa-tasks"></i>
                                <span>Manage color </span>
                            </a>
                        </li>


                        <li class="sub-menu">
                            <a href="{{route('Admin.product.index')}}">
                                <i class="fa fa-tasks"></i>
                                <span>Manage Product</span>
                            </a>
                        </li>

                        <!-- <li class="sub-menu">
                            <a href="{{asset('javascript:;')}}">
                                <i class="fa fa-envelope"></i>
                                <span>Mail </span>
                            </a>
                            <ul class="sub">
                                <li><a href="{{asset('mail.html')}}">Inbox</a></li>
                                <li><a href="mail_compose.html">Compose Mail</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="{{asset('javascript:;')}}">
                                <i class=" fa fa-bar-chart-o"></i>
                                <span>Charts</span>
                            </a>
                            <ul class="sub">
                                <li><a href="{{asset('chartjs.html')}}">Chart js</a></li>
                                <li><a href="{{asset('flot_chart.html')}}">Flot Charts</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="{{asset('javascript:;')}}">
                                <i class=" fa fa-bar-chart-o"></i>
                                <span>Maps</span>
                            </a>
                            <ul class="sub">
                                <li><a href="{{asset('google_map.html')}}">Google Map</a></li>
                                <li><a href="{{asset('vector_map.html')}}">Vector Map</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="{{asset('javascript:;')}}">
                                <i class="fa fa-glass"></i>
                                <span>Extra</span>
                            </a>
                            <ul class="sub">
                                <li><a href="{{asset('gallery.html')}}">Gallery</a></li>
                                <li><a href="{{asset('404.html')}}">404 Error</a></li>
                                <li><a href="{{asset('registration.html')}}">Registration</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{route('Admin.login')}}">
                                <i class="fa fa-user"></i>
                                <span>Login Page</span>
                            </a>
                        </li> -->
                    </ul>
                </div>
                <!-- sidebar menu end-->
            </div>
        </aside>
        <!--sidebar end-->
        <!--main content start-->
        <section id="main-content">
            <section class="wrapper">

                <div class="row">
                    <div class="panel-body">
                        <div class="col-md-12 w3ls-graph">


                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="market-updates">
                    <div class="col-md-3 market-update-gd">
                        <div class="market-update-block clr-block-2">
                            <div class="col-md-4 market-update-right">
                                <i class="fa fa-eye"> </i>
                            </div>
                            <div class="col-md-8 market-update-left">
                                <h4>Visitors</h4>
                                <h3>13,500</h3>
                                <p>Other hand, we denounce</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <div class="col-md-3 market-update-gd">
                        <div class="market-update-block clr-block-1">
                            <div class="col-md-4 market-update-right">
                                <i class="fa fa-users"></i>
                            </div>
                            <div class="col-md-8 market-update-left">
                                <h4>Users</h4>
                                <h3>1,250</h3>
                                <p>Other hand, we denounce</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <div class="col-md-3 market-update-gd">
                        <div class="market-update-block clr-block-3">
                            <div class="col-md-4 market-update-right">
                                <i class="fa fa-usd"></i>
                            </div>
                            <div class="col-md-8 market-update-left">
                                <h4>Sales</h4>
                                <h3>1,500</h3>
                                <p>Other hand, we denounce</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <div class="col-md-3 market-update-gd">
                        <div class="market-update-block clr-block-4">
                            <div class="col-md-4 market-update-right">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            </div>
                            <div class="col-md-8 market-update-left">
                                <h4>Orders</h4>
                                <h3>1,500</h3>
                                <p>Other hand, we denounce</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"> </div>
                </div>
                <div class="row">
                    <div class="panel-body">
                        <div class="col-md-12 w3ls-graph">

                            <div class="agileinfo-grap">
                                <!--<div class="agileits-box">
                                    <header class="agileits-box-header clearfix">
                                        <div class="toolbar">


                                        </div>
                                    </header>
                                    <div class="agileits-box-body clearfix"> -->
                                @section('container')
                                @show
                                <!-- <div id="hero-area"></div>  -->
                                <!-- </div>
                                </div>
                            </div>
                            //agileinfo-grap

                        </div>-->
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                </div>




            </section>
            <!-- footer -->
            <div class="footer">
                <div class="wthree-copyright">
                    <p>© 2017 Visitors. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
                </div>
            </div>
            <!-- / footer -->
        </section>
        <!--main content end-->
    </section>
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="{{asset('js/jquery.dcjqaccordion.2.7.js')}}"></script>
    <script src="{{asset('js/scripts.js')}}"></script>
    <script src="{{asset('js/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('js/jquery.nicescroll.js')}}"></script>
    <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
    <script src="{{asset('js/jquery.scrollTo.js')}}"></script>
    <!-- morris JavaScript -->
    <script>
        $(document).ready(function() {
            //BOX BUTTON SHOW AND CLOSE
            jQuery('.small-graph-box').hover(function() {
                jQuery(this).find('.box-button').fadeIn('fast');
            }, function() {
                jQuery(this).find('.box-button').fadeOut('fast');
            });
            jQuery('.small-graph-box .box-close').click(function() {
                jQuery(this).closest('.small-graph-box').fadeOut(200);
                return false;
            });

            //CHARTS
            function gd(year, day, month) {
                return new Date(year, month - 1, day).getTime();
            }

            graphArea2 = Morris.Area({
                element: 'hero-area',
                padding: 10,
                behaveLikeLine: true,
                gridEnabled: false,
                gridLineColor: '#dddddd',
                axes: true,
                resize: true,
                smooth: true,
                pointSize: 0,
                lineWidth: 0,
                fillOpacity: 0.85,
                data: [{
                        period: '2015 Q1',
                        iphone: 2668,
                        ipad: null,
                        itouch: 2649
                    },
                    {
                        period: '2015 Q2',
                        iphone: 15780,
                        ipad: 13799,
                        itouch: 12051
                    },
                    {
                        period: '2015 Q3',
                        iphone: 12920,
                        ipad: 10975,
                        itouch: 9910
                    },
                    {
                        period: '2015 Q4',
                        iphone: 8770,
                        ipad: 6600,
                        itouch: 6695
                    },
                    {
                        period: '2016 Q1',
                        iphone: 10820,
                        ipad: 10924,
                        itouch: 12300
                    },
                    {
                        period: '2016 Q2',
                        iphone: 9680,
                        ipad: 9010,
                        itouch: 7891
                    },
                    {
                        period: '2016 Q3',
                        iphone: 4830,
                        ipad: 3805,
                        itouch: 1598
                    },
                    {
                        period: '2016 Q4',
                        iphone: 15083,
                        ipad: 8977,
                        itouch: 5185
                    },
                    {
                        period: '2017 Q1',
                        iphone: 10697,
                        ipad: 4470,
                        itouch: 2038
                    },

                ],
                lineColors: ['#eb6f6f', '#926383', '#eb6f6f'],
                xkey: 'period',
                redraw: true,
                ykeys: ['iphone', 'ipad', 'itouch'],
                labels: ['All Visitors', 'Returning Visitors', 'Unique Visitors'],
                pointSize: 2,
                hideHover: 'auto',
                resize: true
            });


        });
    </script>
</body>

</html>