<nav class="main-navbar">
    <div class="container">
        <ul>
            @guest
            <li class="menu-item  ">
                <a href="{{ url("/") }}" class='menu-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            @else
            <li class="menu-item  ">
                <a href="{{ route('dashboard') }}" class='menu-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            @if(Auth::user()->id_role == 1)
            <li class="menu-item  ">
                <a href="{{ route('users.index') }}" class='menu-link'>
                    <i class="bi bi-pentagon-fill"></i>
                    <span>User</span>
                </a>
            </li>
            <li class="menu-item  ">
                <a href="{{ route('roles.index') }}" class='menu-link'>
                    <i class="bi bi-egg-fill"></i>
                    <span>Role</span>
                </a>
            </li>
            <li class="menu-item  ">
                <a href="{{ route('poktans.index') }}" class='menu-link'>
                    <i class="bi bi-hexagon-fill"></i>
                    <span>Poktan</span>
                </a>
            </li>
            <li class="menu-item  ">
                <a href="{{ route('penyuluhs.index') }}" class='menu-link'>
                    <i class="bi bi-grid-1x2-fill"></i>
                    <span>Penyuluh</span>
                </a>
            </li>
            <li class="menu-item  ">
                <a href="{{ route('adminkunjungs.index') }}" class='menu-link'>
                    <i class="bi bi-file-earmark-medical-fill"></i>
                    <span>Kunjungan</span>
                </a>
            </li>
            <li class="menu-item  ">
                <a href="{{ route('listcetak') }}" class='menu-link'>
                    <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                    <span>Report</span>
                </a>
            </li>
            @elseif(Auth::user()->id_role == 3)
            <li class="menu-item  ">
                <a href="{{ route('jadwals.index') }}" class='menu-link'>
                    <i class="bi bi-pentagon-fill"></i>
                    <span>Jadwal</span>
                </a>
            </li>
            <li class="menu-item  ">
                <a href="{{ route('listcetak') }}" class='menu-link'>
                    <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                    <span>Report</span>
                </a>
            </li>
            @else
            <li class="menu-item  ">
                <a href="{{ route('kunjungs.index') }}" class='menu-link'>
                    <i class="bi bi-file-earmark-medical-fill"></i>
                    <span>Kunjungan</span>
                </a>
            </li>
            <li class="menu-item  ">
                <a href="{{ route('reportkunjung') }}" class='menu-link'>
                    <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                    <span>Report</span>
                </a>
            </li>
            @endif
            @endguest
        </ul>
    </div>
</nav>