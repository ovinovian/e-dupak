<!-- Topbar Start -->
<div class="navbar-custom topnav-navbar">
    <div class="container-fluid">

        <!-- LOGO -->
        <a href="" class="topnav-logo">
            <span class="topnav-logo-lg">
                <img src="assets/images/logo-light.png" alt="" height="16">
            </span>
            <span class="topnav-logo-sm">
                <img src="assets/images/logo_sm_dark.png" alt="" height="16">
            </span>
        </a>

        <ul class="list-unstyled topbar-menu float-end mb-0">

            <li class="dropdown notification-list">
                <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown"
                    id="topbar-userdrop" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <span class="account-user-avatar">
                        <img src="assets/images/users/avatar-1.jpg" alt="user-image" class="rounded-circle">
                    </span>
                    <span>
                        <span class="account-user-name">Username</span>
                        <span class="account-position">user</span>
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown"
                    aria-labelledby="topbar-userdrop">
                    <!-- item-->
                    <div class=" dropdown-header noti-title">
                        <h6 class="text-overflow m-0">Selamat datang !</h6>
                    </div>

                    <!-- item-->

                    <a class="dropdown-item notify-item" href="{{ route('register') }}"
                        class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline"> <i
                            class="mdi mdi-login me-1"></i>Register</a>
                    <a href="{{ route('login') }}" class="dropdown-item notify-item">
                        <i class="mdi mdi-login me-1"></i>
                        <span>Login</span>
                    </a>
                </div>
            </li>

        </ul>
        <a class="navbar-toggle" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
            <div class="lines">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </a>
    </div>
</div>
<!-- end Topbar -->

<div class="topnav">
    <div class="container-fluid">
        <nav class="navbar navbar-dark navbar-expand-lg topnav-menu">

            <div class="collapse navbar-collapse" id="topnav-menu-content">
                <ul class="navbar-nav">
                    <li class="nav-item ">
                        <a class="nav-link" href="#" id="topnav-dashboards" role="button" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="uil-dashboard me-1"></i>Dashboards
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>