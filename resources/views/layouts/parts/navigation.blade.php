    <!-- start menu-area -->
    <div class="menu-area">
            <div class="top-menu-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="menu-fullwidth">
                                <div class="logo-wrapper">
                                    <div class="logo logo-top">
                                        <a href="{{url('/')}}"><img src="{{asset('apps/img/logo.png')}}" alt="logo image" class="img-fluid"></a>
                                    </div>
                                </div>
                                <div class="menu-container">
                                    <div class="d_menu">
                                        <nav class="navbar navbar-expand-lg mainmenu__menu">
                                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
                                                <span class="navbar-toggler-icon icon-menu"></span>
                                            </button>
                                            <!-- Collect the nav links, forms, and other content for toggling -->
                                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                                <ul class="navbar-nav">
                                                    <li class="has_dropdown">
                                                        <a href="index.html">Home</a>
                                                        <div class="dropdown dropdown--menu">
                                                            <ul>
                                                                <li>
                                                                    <a href="index.html">Home Multi Vendor</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <a href="contact.html">contact</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /.navbar-collapse -->
                                        </nav>
                                    </div>
                                </div>

                                
                                @guest
                                <div class="author-menu">
                                    <div class="author__notification_area">
                                        <ul>
                                            <li><a href="" class="btn btn-outline-primary">Masuk</a></li>
                                            <li><a href="" class="btn btn-outline-primary">Daftar</a></li>
                                        </ul>
                                    </div>
                                </div>
                                @endguest

                                @auth
                                <div class="author-menu">
                                            <div class="author__notification_area">
                                                <ul>
                                                    <li class="has_dropdown">
                                                        <div class="icon_wrap">
                                                            <span class="icon-bell"></span>
                                                            <span class="notification_status noti"></span>
                                                        </div>
                                                        <div class="dropdown notification--dropdown">
                                                            <div class="dropdown_module_header">
                                                                <h6>My Notifications</h6>
                                                            </div>
                                                            <div class="notifications_module">
                                                                <div class="notification">
                                                                    <div class="notification__info">
                                                                        <div class="info_avatar">
                                                                            <img src="{{asset('apps/img/notification_head.png')}}" alt="">
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>
                                                                                <span>Anderson</span> added to Favourite
                                                                                <a href="#">Mccarther Coffee Shop</a>
                                                                            </p>
                                                                            <p class="time">Just now</p>
                                                                        </div>
                                                                    </div>
                                                                    <!-- end /.notifications -->
                                                                    <div class="notification__icons ">
                                                                        <span class="icon-heart loved noti_icon"></span>
                                                                    </div>
                                                                    <!-- end /.notifications -->
                                                                </div>
                                                                <!-- end /.notifications -->
                                                                <div class="notification">
                                                                    <div class="notification__info">
                                                                        <div class="info_avatar">
                                                                            <img src="{{asset('img/notification_head2.png')}}" alt="">
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>
                                                                                <span>Michael</span> commented on
                                                                                <a href="#">DigiPro Extension Bundle</a>
                                                                            </p>
                                                                            <p class="time">Just now</p>
                                                                        </div>
                                                                    </div>
                                                                    <!-- end /.notifications -->
                                                                    <div class="notification__icons ">
                                                                        <span class="icon-bubble commented noti_icon"></span>
                                                                    </div>
                                                                    <!-- end /.notifications -->
                                                                </div>
                                                                <!-- end /.notifications -->
                                                                <div class="text-center m-top-30 p-left-20 p-right-20"><a href="notification.html" class="btn btn-primary btn-md btn-block">View
                                                                        All</a></div>
                                                                <!-- end /.notifications -->
                                                            </div>
                                                            <!-- end /.dropdown -->
                                                        </div>
                                                    </li>
                                                    <li class="has_dropdown">
                                                        <div class="icon_wrap">
                                                            <span class="icon-envelope-open"></span>
                                                            <span class="notification_status msg"></span>
                                                        </div>
                                                        <div class="dropdown messaging--dropdown">
                                                            <div class="dropdown_module_header">
                                                                <h6>My Messages</h6>
                                                            </div>
                                                            <div class="messages">
                                                                <a href="message.html" class="message recent">
                                                                    <div class="message__actions_avatar">
                                                                        <div class="avatar">
                                                                            <img src="img/notification_head4.png" alt="">
                                                                        </div>
                                                                    </div>
                                                                    <!-- end /.actions -->
                                                                    <div class="message_data">
                                                                        <div class="name_time">
                                                                            <div class="name">
                                                                                <p>NukeThemes</p>
                                                                                <span class="icon-envelope"></span>
                                                                            </div>
                                                                            <span class="time">Just now</span>
                                                                            <p>Hello John Smith! Nunc placerat mi ...</p>
                                                                        </div>
                                                                    </div>
                                                                    <!-- end /.message_data -->
                                                                </a>
                                                                <!-- end /.message -->
                                                                <a href="message.html" class="message recent">
                                                                    <div class="message__actions_avatar">
                                                                        <div class="avatar">
                                                                            <img src="img/notification_head5.png" alt="">
                                                                        </div>
                                                                    </div>
                                                                    <!-- end /.actions -->
                                                                    <div class="message_data">
                                                                        <div class="name_time">
                                                                            <div class="name">
                                                                                <p>Crazy Coder</p>
                                                                                <span class="icon-envelope"></span>
                                                                            </div>
                                                                            <span class="time">Just now</span>
                                                                            <p>Hi! Nunc placerat mi id nisi interum ...</p>
                                                                        </div>
                                                                    </div>
                                                                    <!-- end /.message_data -->
                                                                </a>
                                                                <!-- end /.message -->
                                                                <!-- end /.message -->
                                                                <a href="message.html" class="message">
                                                                    <div class="message__actions_avatar">
                                                                        <div class="avatar">
                                                                            <img src="img/notification_head4.png" alt="">
                                                                        </div>
                                                                    </div>
                                                                    <!-- end /.actions -->
                                                                    <div class="message_data">
                                                                        <div class="name_time">
                                                                            <div class="name">
                                                                                <p>NukeThemes</p>
                                                                                <span class="icon-envelope"></span>
                                                                            </div>
                                                                            <span class="time">Just now</span>
                                                                            <p>Hello John Smith! Nunc placerat mi ...</p>
                                                                        </div>
                                                                    </div>
                                                                    <!-- end /.message_data -->
                                                                </a>
                                                                <!-- end /.message -->
                                                            </div>
                                                            <div class="text-center m-top-30 m-bottom-30 p-left-20 p-right-20">
                                                                <a href="message.html" class="btn btn-primary btn-md btn-block">View All</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!--start .author-author__info-->
                                            <div class="author-author__info has_dropdown">
                                                <div class="author__avatar online">
                                                    <img src="{{asset('apps/img/user-avater.png')}}" alt="user avatar" class="rounded-circle">
                                                </div>
                                                <div class="dropdown dropdown--author">
                                                    <div class="author-credits d-flex">
                                                        <div class="author__avatar">
                                                            <img src="{{asset('apps/img/user-avater.png')}}" alt="user avatar" class="rounded-circle">
                                                        </div>
                                                        <div class="autor__info">
                                                            <p class="name">
                                                                Chris Bent
                                                            </p>
                                                            <p class="amount">$20.45</p>
                                                        </div>
                                                    </div>
                                                    <ul>
                                                        <li>
                                                            <a href="{{('/')}}">
                                                                <span class="icon-user"></span>Profile</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{url('/dashboard')}}">
                                                                <span class="icon-home"></span> Dashboard</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{url('/dashboard/setting')}}">
                                                                <span class="icon-settings"></span> Setting</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!--end /.author-author__info-->
                                        </div>
                                        <!-- end .author-area -->
                                        <!-- author area restructured for mobile -->
                                        <div class="mobile_content ">
                                            <span class="icon-user menu_icon"></span>
                                            <!-- offcanvas menu -->
                                            <div class="offcanvas-menu closed">
                                                <span class="icon-close close_menu"></span>
                                                <div class="author-author__info">
                                                    <div class="author__avatar v_middle">
                                                        <img src="img/user-avater.png" alt="user avatar">
                                                    </div>
                                                </div>
                                                <!--end /.author-author__info-->
                                                <div class="author__notification_area">
                                                    <ul>
                                                        <li>
                                                            <a href="notification.html">
                                                                <div class="icon_wrap">
                                                                    <span class="icon-bell"></span>
                                                                    <span class="notification_count noti">25</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="message.html">
                                                                <div class="icon_wrap">
                                                                    <span class="icon-envelope"></span>
                                                                    <span class="notification_count msg">6</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="cart.html">
                                                                <div class="icon_wrap">
                                                                    <span class="icon-basket"></span>
                                                                    <span class="notification_count purch">2</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!--start .author__notification_area -->
                                                <div class="dropdown dropdown--author">
                                                    <ul>
                                                        <li>
                                                            <a href="author.html">
                                                                <span class="icon-user"></span>Profile</a>
                                                        </li>
                                                        <li>
                                                            <a href="dashboard.html">
                                                                <span class="icon-home"></span> Dashboard</a>
                                                        </li>
                                                        <li>
                                                            <a href="dashboard-setting.html">
                                                                <span class="icon-settings"></span> Setting</a>
                                                        </li>
                                                        <li>
                                                            <a href="cart.html">
                                                                <span class="icon-basket"></span>Purchases</a>
                                                        </li>
                                                        <li>
                                                            <a href="favourites.html">
                                                                <span class="icon-heart"></span> Favourite</a>
                                                        </li>
                                                        <li>
                                                            <a href="dashboard-add-credit.html">
                                                                <span class="icon-credit-card"></span>Add Credits</a>
                                                        </li>
                                                        <li>
                                                            <a href="dashboard-statement.html">
                                                                <span class="icon-chart"></span>Sale Statement</a>
                                                        </li>
                                                        <li>
                                                            <a href="dashboard-upload.html">
                                                                <span class="icon-cloud-upload"></span>Upload Item</a>
                                                        </li>
                                                        <li>
                                                            <a href="dashboard-manage-item.html">
                                                                <span class="icon-notebook"></span>Manage Item</a>
                                                        </li>
                                                        <li>
                                                            <a href="dashboard-withdrawal.html">
                                                                <span class="icon-briefcase"></span>Withdrawals</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <span class="icon-logout"></span>Logout</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="text-center">
                                                    <a href="signup.html" class="author-area__seller-btn inline">Become a
                                                        Seller</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end /.mobile_content -->
                                    </div>
                                @endauth
                            </div>
                        </div>
                    </div>
                    <!-- end /.row -->
                </div>
                <!-- end /.container -->
            </div>
            <!-- end  -->
        </div>
        <!-- end /.menu-area -->