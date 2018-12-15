<!-- Sidebar -->
<ul class="sidebar navbar-nav">
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.dashboard.users') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Users</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.dashboard.properties') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Properties</span>
        </a>
    </li>
</ul>