<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">EPOS SYSTEM</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">EPOS</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li class='{{ Request::is('dashboard') ? 'active' : '' }}'>
                        <a class="nav-link" href="{{ url('dashboard') }}">General Dashboard</a>
                    </li>

                </ul>
            </li>

            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Users</span></a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="{{ route('user.index') }}">All Users</a>
                    </li>

                </ul>
            </li>

            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Products</span></a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="{{ route('product.index') }}">All Products</a>
                    </li>

                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Orders</span></a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="{{ route('order.index') }}">All Orders</a>
                    </li>

                </ul>
            </li>

            <ul class="sidebar-menu">
                <li class="menu-header">Integration</li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Integration</span></a>
                    <ul class="dropdown-menu">
                        <li class='{{ Request::is('integrasi.index') ? 'active' : '' }}'>
                            <a class="nav-link" href="{{ route('integrasi.index') }}">Documentation API</a>
                        </li>

                    </ul>
                </li>

    </aside>
</div>
