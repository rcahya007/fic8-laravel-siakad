<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">SIAKAD</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">SK</a>
        </div>
        <ul class="sidebar-menu">
            <li class="nav-item dropdown ">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="{{ url('dashboard-general-dashboard') }}">General Dashboard</a>
                    </li>

            </li>
        </ul>
        </li>
        <li class="nav-item dropdown ">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-user"></i><span>Users</span></a>
            <ul class="dropdown-menu">
                <li>
                    <a class="nav-link" href="{{ route('user.index') }}">User List</a>
                </li>
            </ul>
        </li>


    </aside>
</div>
