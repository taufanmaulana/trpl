    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="index.html">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Menu
        </div>
        @if(Auth::user()->hasAnyRole('admin'))
        <li class="nav-item">
            <a class="nav-link" href="/kota">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Destinasi</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/user/fotografer">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>User Fotografer</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/user/wisata">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>User</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/order">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Order</span></a>
        </li>
        @endif
        @if(Auth::user()->hasAnyRole('fotografer'))
        <li class="nav-item">
            <a class="nav-link" href="/foto">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Foto</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('setting/'.Auth::user()->id)}}">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Setting</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('jobs/'.Auth::user()->id)}}">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Jobs</span></a>
        </li>
        @endif
        <hr class="sidebar-divider my-0">
        <li class="nav-item">
            <a class="nav-link" href="/">
                <i class="fas fa-fw fa-sign-out-alt"></i>
                <span>Back</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->