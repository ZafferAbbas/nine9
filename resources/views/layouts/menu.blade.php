
<li class="nav-item">
    <a href="{{ route('users.index') }}" class="nav-link {{ Request::is('users*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Users</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('roles.index') }}" class="nav-link {{ Request::is('roles*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Roles</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('roleUsers.index') }}" class="nav-link {{ Request::is('roleUsers*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Role Users</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('franchisees.index') }}" class="nav-link {{ Request::is('franchisees*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Franchisees</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('shops.index') }}" class="nav-link {{ Request::is('shops*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Shops</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('sales.index') }}" class="nav-link {{ Request::is('sales*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Sales</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('expenses.index') }}" class="nav-link {{ Request::is('expenses*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Expenses</p>
    </a>
</li>
