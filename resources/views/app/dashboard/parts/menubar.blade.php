<div class="dashboard_menu_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <button class="menu-toggler d-md-none">
                    <span class="icon-menu"></span> Dashboard Menu
                </button>
                <ul class="dashboard_menu">
                    <li class="{{ setActive(['dashboard']) }}">
                        <a href="{{url('dashboard')}}"><span class="lnr icon-home"></span>Dashboard</a>
                    </li>
                    <li class="{{ setActive(['dashboard/setting']) }}">
                        <a href="{{route('dashboard.setting')}}"><span class="lnr icon-settings"></span>Setting</a>
                    </li>
                    <li class="{{ setActive(['dashboard/campaign*']) }}">
                        <a href="{{url('dashboard/campaign')}}"><span class="lnr icon-basket"></span>Campaign</a>
                    </li class="{{ setActive(['dashboard']) }}">
                </ul><!-- ends: .dashboard_menu -->
            </div><!-- ends: .col-md-12 -->
        </div><!-- ends: .row -->
    </div><!-- ends: .container -->
</div><!-- ends: .dashboard_menu_area -->
