<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">SALINGBANTU</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">SB</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Pages</li>
            <li><a class="nav-link" href="{{url('dashboard')}}"><i class="fas fa-pencil-ruler"></i> <span>Dashboard</span></a>
            <li><a class="nav-link" href="{{url('dashboard/campaign')}}"><i class="fas fa-pencil-ruler"></i> <span>Post Campaign</span></a>
            <li class="nav-item dropdown">
                    <a href="#" class="nav-link has-dropdown"><i class="fas fa-ellipsis-h"></i> <span>Pengaturan</span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('dashboard.setting')}}">Pengaturan Akun</a></li>
                        <li><a class="nav-link" href="utilities-invoice.html">Verifikasi Akun</a></li>
                    </ul>
                </li>

            </li>
        </ul>
    </aside>
</div>

