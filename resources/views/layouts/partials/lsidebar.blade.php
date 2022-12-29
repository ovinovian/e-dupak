<div class="leftside-menu">

    <!-- LOGO -->
    <a href="index.html" class="logo text-center logo-light">
        <span class="logo-lg">
            <img src="{{ asset('assets/images/logo.png') }}" alt="" height="16">
        </span>
        <span class="logo-sm">
            <img src="{{ asset('assets/images/logo_sm.png') }}" alt="" height="16">
        </span>
    </a>

    <!-- LOGO -->
    <a href="index.html" class="logo text-center logo-dark">
        <span class="logo-lg">
            <img src="{{ asset('assets/images/logo-dark.png') }}" alt="" height="16">
        </span>
        <span class="logo-sm">
            <img src="{{ asset('assets/images/logo_sm_dark.png') }}" alt="" height="16">
        </span>
    </a>

    <div class="h-100" id="leftside-menu-container" data-simplebar="">

        <!--- Sidemenu -->
        <ul class="side-nav">

            <li class="side-nav-title side-nav-item">Navigation</li>

            @guest
            <li class="side-nav-item">
                <a href="{{ url("/") }}" data-bs-toggle="collapse" href="#sidebarDashboards" aria-expanded="false"
                    aria-controls="sidebarDashboards" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span class="badge bg-success float-end">4</span>
                    <span> Dashboards </span>
                </a>
            </li>
            @else
            <li class="side-nav-item">
                <a href="{{ route('dashboard') }}" data-bs-toggle="collapse" href="#sidebarDashboards"
                    aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span> Dashboards </span>
                </a>
            </li>

            @if(Auth::user()->id_user == 0)
            <li class="side-nav-item">
                <a href="{{ route('users.index') }}" class="side-nav-link">
                    <i class="uil-calender"></i>
                    <span> User </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{ route('roles.index') }}" class="side-nav-link">
                    <i class="uil-comments-alt"></i>
                    <span> Role </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{ route('perms.index') }}" class="side-nav-link">
                    <i class="uil-comments-alt"></i>
                    <span> Permission </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{ route('jadwals.index') }}" class="side-nav-link">
                    <i class="uil-store"></i>
                    <span> Jadwal </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarEcommerce" aria-expanded="false"
                    aria-controls="sidebarEcommerce" class="side-nav-link">
                    <i class="uil-store"></i>
                    <span> Ecommerce </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarEcommerce">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="apps-ecommerce-products.html">Products</a>
                        </li>
                        <li>
                            <a href="apps-ecommerce-products-details.html">Products Details</a>
                        </li>
                        <li>
                            <a href="apps-ecommerce-orders.html">Orders</a>
                        </li>
                        <li>
                            <a href="apps-ecommerce-orders-details.html">Order Details</a>
                        </li>
                        <li>
                            <a href="apps-ecommerce-customers.html">Customers</a>
                        </li>
                        <li>
                            <a href="apps-ecommerce-shopping-cart.html">Shopping Cart</a>
                        </li>
                        <li>
                            <a href="apps-ecommerce-checkout.html">Checkout</a>
                        </li>
                        <li>
                            <a href="apps-ecommerce-sellers.html">Sellers</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarEmail" aria-expanded="false" aria-controls="sidebarEmail"
                    class="side-nav-link">
                    <i class="uil-envelope"></i>
                    <span> Email </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarEmail">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="apps-email-inbox.html">Inbox</a>
                        </li>
                        <li>
                            <a href="apps-email-read.html">Read Email</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarProjects" aria-expanded="false"
                    aria-controls="sidebarProjects" class="side-nav-link">
                    <i class="uil-briefcase"></i>
                    <span> Projects </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarProjects">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="apps-projects-list.html">List</a>
                        </li>
                        <li>
                            <a href="apps-projects-details.html">Details</a>
                        </li>
                        <li>
                            <a href="apps-projects-gantt.html">Gantt <span
                                    class="badge rounded-pill badge-light-lighten font-10 float-end">New</span></a>
                        </li>
                        <li>
                            <a href="apps-projects-add.html">Create Project <span
                                    class="badge rounded-pill badge-success-lighten font-10 float-end">New</span></a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a href="apps-file-manager.html" class="side-nav-link">
                    <i class="uil-folder-plus"></i>
                    <span> File Manager </span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="{{ route('profil.peserta') }}" class="side-nav-link">
                    <i class="uil-store"></i>
                    <span> Profil Peserta </span>
                </a>
            </li>
            @endif
            @endguest
        </ul>

        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>