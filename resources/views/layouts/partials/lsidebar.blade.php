<div class="leftside-menu">

    <!-- LOGO -->
    <a href="index.html" class="logo text-center logo-light">
        <span class="logo-lg">
            <img src="{{ asset('assets/images/logo-light.png') }}" alt="" height="16">
        </span>
        <span class="logo-sm">
            <img src="{{ asset('assets/images/logo-light.png') }}" alt="" height="16">
        </span>
    </a>

    <!-- LOGO -->
    <a href="index.html" class="logo text-center logo-dark">
        <span class="logo-lg">
            <img src="{{ asset('assets/images/logo-light.png') }}" alt="" height="16">
        </span>
        <span class="logo-sm">
            <img src="{{ asset('assets/images/logo-light.png') }}" alt="" height="16">
        </span>
    </a>

    <div class="h-100" id="leftside-menu-container" data-simplebar="">

        <!--- Sidemenu -->
        <ul class="side-nav">

            <li class="side-nav-title side-nav-item">Navigation</li>

            @guest
            <li class="side-nav-item">
                <a href="{{ url("/") }}" data-bs-toggle="collapse" aria-expanded="false"
                    aria-controls="sidebarDashboards" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span class="badge bg-success float-end">4</span>
                    <span> Dashboards </span>
                </a>
            </li>
            @else
            <li class="side-nav-item">
                <a href="{{ route('dashboard') }}" aria-expanded="false" aria-controls="sidebarDashboards"
                    class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span> Dashboards </span>
                </a>
            </li>

            @can('profil-list')
            <li class="side-nav-item">
                <a href="{{ route('profil.index') }}" class="side-nav-link">
                    <i class="uil-user-square"></i>
                    <span> Profil Peserta </span>
                </a>
            </li>
            @endcan
            @can('user-list')
            <li class="side-nav-item">
                <a href="{{ route('users.index') }}" class="side-nav-link">
                    <i class="uil-user-circle"></i>
                    <span> User </span>
                </a>
            </li>
            @endcan
            @can('prakom-list')
            <li class="side-nav-item">
                <a href="{{ route('prakoms.index') }}" class="side-nav-link">
                    <i class="uil-calender"></i>
                    <span> Pranata Komputer </span>
                </a>
            </li>
            @endcan
            @can('role-list')
            <li class="side-nav-item">
                <a href="{{ route('roles.index') }}" class="side-nav-link">
                    <i class="uil-comments-alt"></i>
                    <span> Role </span>
                </a>
            </li>
            @endcan
            @can('perm-list')
            <li class="side-nav-item">
                <a href="{{ route('perms.index') }}" class="side-nav-link">
                    <i class="uil-padlock"></i>
                    <span> Permission </span>
                </a>
            </li>
            @endcan
            @can('jadwal-list')
            <li class="side-nav-item">
                <a href="{{ route('jadwals.index') }}" class="side-nav-link">
                    <i class="mdi mdi-text-box-plus-outline"></i>
                    <span> Jadwal </span>
                </a>
            </li>
            @endcan
            @can('daftar-list')
            <li class="side-nav-item">
                <a href="{{ route('daftars.index') }}" class="side-nav-link">
                    <i class="uil-edit"></i>
                    <span> Daftar </span>
                </a>
            </li>
            @endcan
            @can('tim-list')
            <li class="side-nav-item">
                <a href="{{ route('tims.index') }}" class="side-nav-link">
                    <i class="mdi mdi-account-supervisor"></i>
                    <span> Tim Penilai </span>
                </a>
            </li>
            @endcan
            @endguest
        </ul>

        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>