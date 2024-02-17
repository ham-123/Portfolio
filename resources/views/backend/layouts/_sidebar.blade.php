<nav class="main-header navbar navbar-expand navbar-white navbar-light">

    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('dashboard') }}" class="nav-link">Home</a>
        </li>
    </ul>
</nav>

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="index3.html" class="brand-link">
        <img src="{{ url('backend/dist') }}/img/AdminLTELogo.png" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">TCHEMOKO A</span>
    </a>
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ url('backend/dist/img/avatar5.png') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Hamid</a>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">

                <li class="nav-item">
                    <a href="{{ url('admin/dashboard') }}"
                        class="nav-link @if (Request::segment(2) == 'dashboard') active @endif">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('admin/home') }}" class="nav-link @if (Request::segment(2) == 'home') active @endif">
                        <i class="nav-icon fas fa-home"></i>
                        <p>Home</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('admin/about') }}" class="nav-link @if (Request::segment(2) == 'about') active @endif">
                        <i class="nav-icon far fa-address-card"></i>
                        <p>About</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('portfolio_index') }}"
                        class="nav-link @if (Request::segment(2) == 'portfolio') active @endif">
                        <i class="nav-icon far fa-folder"></i>
                        <p>Portfolio</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('admin/contact') }}"
                        class="nav-link @if (Request::segment(2) == 'contact') active @endif">
                        <i class="nav-icon far fa-envelope"></i>
                        <p>Contact</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('admin/blog') }}" class="nav-link @if (Request::segment(2) == 'blog') active @endif">
                        <i class="nav-icon far fa-newspaper"></i>
                        <p>Blog</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link @if (Request::segment(2) == 'logout') active @endif">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>Déconnexion</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
