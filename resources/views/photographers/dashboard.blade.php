<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Photographer Dashboard">
		<meta name="author" content="BradshawVentures">

		<link rel="shortcut icon" href="/images/favicon.ico">

		<title>Photographer Dashboard</title>

        <!--Morris Chart CSS -->
		<link rel="stylesheet" href="/css/plugins.css">

		<link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="/css/back.css" rel="stylesheet" type="text/css" />
        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="/js/modernizr.min.js"></script>

	</head>

	<body class="fixed-left">

		<!-- Begin page -->
		<div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="index.html" class="logo">
                            <i class="zmdi zmdi-camera icon-c-logo"></i><span>Photographers</span>
                            <!--<span><img src="/images/logo.png" alt="logo" style="height: 20px;"></span>-->
                        </a>
                    </div>
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                            <div class="pull-left">
                                <button class="button-menu-mobile open-left waves-effect waves-light">
                                    <i class="zmdi zmdi-menu"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>

                            <form role="search" class="navbar-left app-search pull-left hidden-xs">
			                     <input type="text" placeholder="Search..." class="form-control">
			                     <a href=""><i class="fa fa-search"></i></a>
			                </form>


                            <ul class="nav navbar-nav navbar-right pull-right">
                                <li>
                                    <!-- Notification -->
                                    <div class="notification-box">
                                        <ul class="list-inline m-b-0">
                                            <li>
                                                <a href="javascript:void(0);" class="right-bar-toggle">
                                                    <i class="zmdi zmdi-notifications-none"></i>
                                                </a>
                                                <div class="noti-dot">
                                                    <span class="dot"></span>
                                                    <span class="pulse"></span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- End Notification bar -->
                                </li>

                                <li class="dropdown user-box">
                                    <a href="" class="dropdown-toggle waves-effect waves-light profile " data-toggle="dropdown" aria-expanded="true">
                                        <img src="/images/users/avatar-1.jpg" alt="user-img" class="img-circle user-img">
                                        <div class="user-status away"><i class="zmdi zmdi-dot-circle"></i></div>
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0)"><i class="ti-user m-r-5"></i> Profile</a></li>
                                        <li><a href="javascript:void(0)"><i class="ti-settings m-r-5"></i> Settings</a></li>
                                        <li><a href="javascript:void(0)"><i class="ti-lock m-r-5"></i> Lock screen</a></li>
                                        <li><a href="javascript:void(0)"><i class="ti-power-off m-r-5"></i> Logout</a></li>
                                    </ul>
                                </li>
                            </ul>

                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>

                        	<li class="text-muted menu-title">Navigation</li>

                            <li class="has_sub">
                                <a href="/photographers/dashboard" class="waves-effect"><i class="zmdi zmdi-view-dashboard"></i> <span> Dashboard </span> </a>
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-calendar-note"></i><span> Schedule </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="/photographers/calendar">Full Calendar</a></li>
                                    <li><a href="chart-morris.html">Upcoming Shoots</a></li>
                                    <li><a href="chart-chartist.html">New Shoot Requests</a></li>
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-upload"></i><span> Shoots </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="/photographers/upload">Upload Photos</a></li>
                                    <li><a href="chart-morris.html">Upcoming Shoots</a></li>
                                    <li><a href="chart-other.html">All Shoots</a></li>
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="/photographers/earnings" class="waves-effect"><i class="zmdi zmdi-money-box"></i> <span> Earnings </span> </a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>

                </div>
            </div>
			<!-- Left Sidebar End -->

			<!-- ============================================================== -->
			<!-- Start right Content here -->
			<!-- ============================================================== -->
			<div class="content-page">
				<!-- Start content -->
				<div class="content">
					<div class="container">

						<!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <ul class="nav nav-pills nav-pills-custom display-xs-none pull-right">
                                    <li role="presentation"><a href="#">Today</a></li>
                                    <li role="presentation" class="active"><a href="#">Yesterday</a></li>
                                    <li role="presentation"><a href="#">Last Week</a></li>
                                </ul>

                                <h4 class="page-title">Dashboard</h4>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card-box">
                                    <div class="dropdown pull-right">
                                        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"
                                           aria-expanded="false">
                                            <i class="zmdi zmdi-more-vert"></i>
                                        </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Another action</a></li>
                                            <li><a href="#">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a></li>
                                        </ul>
                                    </div>
                                    <h4 class="header-title m-t-0">Lifetime Earnings</h4>

                                    <div class="row text-center m-t-30">
                                        <div class="col-xs-6">
                                            <h3 data-plugin="counterup">$7,653</h3>
                                            <p class="text-muted text-overflow">Avg Annual Earnings</p>
                                        </div>
                                        <div class="col-xs-6">
                                            <h3 data-plugin="counterup">$584.23</h3>
                                            <p class="text-muted text-overflow">Open Balance</p>
                                        </div>
                                    </div>

                                    <div id="morris-line-example" style="height: 280px;" class="m-t-10"></div>
                                </div>
                            </div><!-- end col -->
                            <div class="col-lg-4">
                                <div class="card-box">
                                    <h4 class="header-title m-t-0">Shoot Calendar</h4>
                                    <div class="row text-center m-t-30">
                                        <div class="col-xs-12">
                                            <div id='calendar'></div>
                                        </div>
                                    </div>                                    
                                    
                                
                                </div>
                                
                            </div><!-- end col -->

                            <div class="col-lg-4">
                                <div class="card-box">
                                    <div class="dropdown pull-right">
                                        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"
                                           aria-expanded="false">
                                            <i class="zmdi zmdi-more-vert"></i>
                                        </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Another action</a></li>
                                            <li><a href="#">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a></li>
                                        </ul>
                                    </div>
                                    <h4 class="header-title m-t-0">Shoot History</h4>

                                    <div class="row text-center m-t-30">
                                        <div class="col-xs-4">
                                            <h3 data-plugin="counterup">1,507</h3>
                                            <p class="text-muted text-overflow">Total Images</p>
                                        </div>
                                        <div class="col-xs-4">
                                            <h3 data-plugin="counterup">118</h3>
                                            <p class="text-muted text-overflow" title="Open Compaign">Shoots</p>
                                        </div>
                                        <div class="col-xs-4">
                                            <h3 data-plugin="counterup">58</h3>
                                            <p class="text-muted text-overflow">Customers</p>
                                        </div>
                                    </div>

                                    <div id="morris-bar-example" style="height: 280px;" class="m-t-10"></div>
                                </div>
                            </div><!-- end col -->

                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card-box">
                                    <div class="dropdown pull-right">
                                        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"
                                           aria-expanded="false">
                                            <i class="zmdi zmdi-more-vert"></i>
                                        </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Another action</a></li>
                                            <li><a href="#">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a></li>
                                        </ul>
                                    </div>

                                    <h4 class="header-title m-t-0 m-b-30">Messages</h4>

                                    <div class="inbox-widget nicescroll" style="height: 307px;">
                                        <a href="#">
                                            <div class="inbox-item">
                                                <div class="inbox-item-img"><img src="/images/users/avatar-1.jpg"
                                                                                 class="img-circle" alt=""></div>
                                                <p class="inbox-item-author">Chadengle</p>
                                                <p class="inbox-item-text">Hey! there I'm available...</p>
                                                <p class="inbox-item-date">13:40 PM</p>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="inbox-item">
                                                <div class="inbox-item-img"><img src="/images/users/avatar-2.jpg"
                                                                                 class="img-circle" alt=""></div>
                                                <p class="inbox-item-author">Tomaslau</p>
                                                <p class="inbox-item-text">I've finished it! See you so...</p>
                                                <p class="inbox-item-date">13:34 PM</p>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="inbox-item">
                                                <div class="inbox-item-img"><img src="/images/users/avatar-3.jpg"
                                                                                 class="img-circle" alt=""></div>
                                                <p class="inbox-item-author">Stillnotdavid</p>
                                                <p class="inbox-item-text">This theme is awesome!</p>
                                                <p class="inbox-item-date">13:17 PM</p>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="inbox-item">
                                                <div class="inbox-item-img"><img src="/images/users/avatar-4.jpg"
                                                                                 class="img-circle" alt=""></div>
                                                <p class="inbox-item-author">Kurafire</p>
                                                <p class="inbox-item-text">Nice to meet you</p>
                                                <p class="inbox-item-date">12:20 PM</p>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="inbox-item">
                                                <div class="inbox-item-img"><img src="/images/users/avatar-5.jpg"
                                                                                 class="img-circle" alt=""></div>
                                                <p class="inbox-item-author">Shahedk</p>
                                                <p class="inbox-item-text">Hey! there I'm available...</p>
                                                <p class="inbox-item-date">10:15 AM</p>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="inbox-item">
                                                <div class="inbox-item-img"><img src="/images/users/avatar-1.jpg"
                                                                                 class="img-circle" alt=""></div>
                                                <p class="inbox-item-author">Chadengle</p>
                                                <p class="inbox-item-text">Hey! there I'm available...</p>
                                                <p class="inbox-item-date">13:40 PM</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-lg-8">
                                <div class="card-box">
                                    <div class="dropdown pull-right">
                                        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"
                                           aria-expanded="false">
                                            <i class="zmdi zmdi-more-vert"></i>
                                        </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Another action</a></li>
                                            <li><a href="#">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a></li>
                                        </ul>
                                    </div>

                                    <h4 class="header-title m-t-0 m-b-30">Latest Shoots</h4>

                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Date</th>
                                                <th>Location</th>
                                                <th>Status</th>
                                                <th>Details</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($users as $u)
                                            <tr>
                                                
                                                <td>{{$u->id}}</td>
                                                <td>{{$u->name}}</td>
                                                <td>{{$faker->dateTimeBetween('-60 days','now')->format('n/j/Y')}}</td>
                                                <td>{{$faker->city . ', ' . $faker->stateAbbr}}</td>
                                                <td><span class="label {{collect(['label-danger','label-success','label-warning'])->random()}}">{{collect(['Upload','View'])->random()}}</span></td>
                                                <td><a href="#">View Details</a></td>

                                            </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div><!-- end col -->

                        </div>
                        <!-- end row -->



                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer">
                    {{\Carbon\Carbon::now()->year}} © Virtual Tour Co.
                </footer>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
            <div class="side-bar right-bar">
                <a href="javascript:void(0);" class="right-bar-toggle">
                    <i class="zmdi zmdi-close-circle-o"></i>
                </a>
                <h4 class="">Notifications</h4>
                <div class="notification-list nicescroll">
                    <ul class="list-group list-no-border user-list">
                        <li class="list-group-item">
                            <a href="#" class="user-list-item">
                                <div class="avatar">
                                    <img src="/images/users/avatar-2.jpg" alt="">
                                </div>
                                <div class="user-desc">
                                    <span class="name">Michael Zenaty</span>
                                    <span class="desc">Can you reschedule my shoot?</span>
                                    <span class="time">2 hours ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="#" class="user-list-item">
                                <div class="icon">
                                    <i class="zmdi zmdi-account"></i>
                                </div>
                                <div class="user-desc">
                                    <span class="name">New Shoot Request</span>
                                    <span class="desc">Request for 3/18/18 at 2:30pm</span>
                                    <span class="time">5 hours ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="#" class="user-list-item">
                                <div class="icon">
                                    <i class="zmdi zmdi-comment"></i>
                                </div>
                                <div class="user-desc">
                                    <span class="name">Admin Message</span>
                                    <span class="desc">Your payout for $536.23 is complete</span>
                                    <span class="time">1 day ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="#" class="user-list-item">
                                <div class="avatar">
                                    <img src="/images/users/avatar-3.jpg" alt="">
                                </div>
                                <div class="user-desc">
                                    <span class="name">James Anderson</span>
                                    <span class="desc">Thank you for the awesome photos!</span>
                                    <span class="time">2 days ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item active">
                            <a href="#" class="user-list-item">
                                <div class="icon">
                                    <i class="zmdi zmdi-settings"></i>
                                </div>
                                <div class="user-desc">
                                    <span class="name">Completed Shoot</span>
                                    <span class="desc">Editors have completed this shoot for James Anderson</span>
                                    <span class="time">1 day ago</span>
                                </div>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>

            <!-- /Right-bar -->


        </div>
        <!-- END wrapper -->

        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="/js/jquery.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/detect.js"></script>
        <script src="/js/fastclick.js"></script>
        <script src="/js/jquery.slimscroll.js"></script>
        <script src="/js/jquery.blockUI.js"></script>
        <script src="/js/waves.js"></script>
        <script src="/js/wow.min.js"></script>
        <script src="/js/jquery.nicescroll.js"></script>
        <script src="/js/jquery.scrollTo.min.js"></script>

        <!--Plugins-->
		<script src="/js/backplugins.js"></script>

        <!-- Dashboard init -->
        <script src="/js/jquery.dashboard_data.js"></script>


        <!-- App js -->
        <script src="/js/jquery.core.js"></script>
        <script src="/js/jquery.app.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {

                // page is now ready, initialize the calendar...

                $('#calendar').fullCalendar({
                    // put your options and callbacks here
                    eventSources: [

                        // your event source
                        {
                            events: [
                                {
                                    title  : 'Mackenzie',
                                    start  : '{{Carbon\Carbon::now()->format('Y-m-d')}}',
                                    allDay : true
                                },
                                {
                                    title  : 'Cliett',
                                    start  : '{{Carbon\Carbon::now()->addDays(3)->format('Y-m-d')}}',
                                    allDay : true
                                },
                                {
                                    title  : 'Bradshaw',
                                    start  : '{{Carbon\Carbon::now()->addDays(7)->format('Y-m-d')}}',
                                    allDay : true // will make the time show
                                }
                            ],
                            color: '#fe8995',     // an option!
                            textColor: '#ffffff' // an option!
                        }

                        // any other event sources...

                    ]

                })

            });            
        </script>

	</body>
</html>