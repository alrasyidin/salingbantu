    <!-- start menu-area -->
    <div class="menu-area">
        <div class="top-menu-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="menu-fullwidth">
                            <div class="logo-wrapper">
                                <div class="logo logo-top">
                                    <a href="{{url('/')}}"><img src="{{asset('img/salingbantu.png')}}" alt="logo image"
                                            class="img-fluid"></a>
                                </div>
                            </div>
                            <div class="menu-container">
                                <div class="d_menu">
                                    <nav class="navbar navbar-expand-lg mainmenu__menu">
                                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                            data-target="#bs-example-navbar-collapse-1"
                                            aria-controls="bs-example-navbar-collapse-1" aria-expanded="false"
                                            aria-label="Toggle navigation">
                                            <span class="navbar-toggler-icon icon-menu"></span>
                                        </button>
                                        <!-- Collect the nav links, forms, and other content for toggling -->
                                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                            <ul class="navbar-nav">
                                                <li class="has_dropdown">
                                                    <a href="{{url('/')}}">Home</a>
                                                    <div class="dropdown dropdown--menu">
                                                        <ul>
                                                            <li>
                                                                <a href="#">Simple Dropdown</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a href="#">Menu 1</a>
                                                </li>
                                                <li>
                                                    <a href="#">Menu 2</a>
                                                </li>
                                                <li>
                                                    <a href="#">Menu 3</a>
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
                                        <li><a href="{{url('/login')}}" class="btn btn-outline-primary">Masuk</a></li>
                                        <li><a href="{{url('/register')}}" class="btn btn-outline-primary">Daftar</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            @endguest

                            @auth
                            <div class="author-menu">
                                <div class="author-area">
                                    <div class="author__notification_area">
                                        <ul>
                                            @include('layouts.parts.notif.notification')
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
                                                                    <img src="{{asset('sb/img/notification_head4.png')}}" alt="">
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
                                                        <a href="message.html"
                                                            class="btn btn-primary btn-md btn-block">View
                                                            All</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <!--start .author-author__info-->
                                    <div class="author-author__info has_dropdown">
                                        <div class="author__avatar online">
                                            <img src="{{asset("storage/user_photo/60/".Auth::user()->avatar)}}" alt="user avatar"
                                                class="rounded-circle">
                                        </div>
                                        <div class="dropdown dropdown--author">
                                            <div class="author-credits d-flex">
                                                <div class="author__avatar">
                                                    <img src="{{asset("storage/user_photo/60/".Auth::user()->avatar)}}" alt="user avatar"
                                                        class="rounded-circle">
                                                </div>
                                                <div class="autor__info">
                                                    <p class="name">
                                                        {{Auth::user()->fullname()}}
                                                    </p>
                                                    <p class="amount">$20.45</p>
                                                </div>
                                            </div>
                                            <ul>
                                                <li>
                                                    <a href="{{('/'.Auth::user()->username)}}">
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
                                </div>

                                <!--end /.author-author__info-->
                                <!-- end .author-area -->
                                <!-- author area restructured for mobile -->
                                <div class="mobile_content ">
                                    <span class="icon-user menu_icon"></span>
                                    <!-- offcanvas menu -->
                                    <div class="offcanvas-menu closed">
                                        <span class="icon-close close_menu"></span>
                                        <div class="author-author__info">
                                            <div class="author__avatar v_middle">
                                                <img src="{{asset('sb/img/user-avater.png')}}" alt="user avatar">
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
                            </div>
                            @endauth
                            <!-- end /.mobile_content -->
                        </div>
                    </div>
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
