<nav id="topbar" class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ route('dashboard.page') }}"><h4>
        <img src="{{ url('./img/logo.png') }}" width="100px" alt="">    
    </h4></a>
    <div class="ml-auto dropdown">
        <img src="https://png.pngtree.com/png-vector/20191101/ourmid/pngtree-cartoon-color-simple-male-avatar-png-image_1934459.jpg" class="avatar dropdown-toggle" id="avatarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" alt="Admin Avatar">
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="avatarDropdown">
            <a class="dropdown-item" href="prodile.html">Profile</a>
            <a class="dropdown-item" href="setting.html">Settings</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ route('logout.page') }}">Log out</a>
        </div>
    </div>
</nav>