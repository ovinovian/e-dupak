<div class="navbar-custom">
    <ul class="list-unstyled topbar-menu float-end mb-0">
        <li class="dropdown notification-list">
            <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown" href="#"
                role="button" aria-haspopup="false" aria-expanded="false">
                <span class="account-user-avatar">
                    @php
                    $foto =
                    \App\Models\Profil::where('nip',auth()->user()->nip)->first();
                    @endphp
                    <img src="{{ asset('storage/images/foto/'.$foto->foto.'') }}" alt="user-image"
                        class="rounded-circle">
                </span>
                <span>
                    @guest
                    <span class="account-user-name">Menu</span>
                    <span class="account-position">Akses</span>
                    @else
                    <span class="account-user-name">{{ auth()->user()->name }}</span>
                    <span class="account-position">Founder</span>
                    @endguest
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                <!-- item-->
                <div class=" dropdown-header noti-title">
                    <h6 class="text-overflow m-0">Welcome !</h6>
                </div>

                <!-- item-->
                <a href="{{ route('logout') }}" class="dropdown-item notify-item"
                    onclick="event.preventDefault();
                                                                                                                     document.getElementById('logout-form').submit();">
                    <i class="mdi mdi-logout me-1"></i>
                    <span>{{ __('Logout') }}</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>

    </ul>
    <button class="button-menu-mobile open-left">
        <i class="mdi mdi-menu"></i>
    </button>
</div>