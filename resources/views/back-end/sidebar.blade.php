<div class="sidebar">
    <div class="brand">AMIT.DEV</div>
    <ul class="nav-links">
    <li>
        <a href="/dashboard" class="{{ Request::is('dashboard') ? 'active' : '' }}">
            <i class="fas fa-chart-line"></i> <span>Dashboard</span>
        </a>
    </li>

    <li>
        <a href="addContent" class="{{ Request::is('addContent') ? 'active' : '' }}">
            <i class="fas fa-plus-square"></i> <span>Add Content</span>
        </a>
    </li>

    <li>
        <a href="/viewClient" class="{{ Request::is('viewClient') ? 'active' : '' }}">
            <i class="fa-regular fa-user"></i> <span>View Client</span>
        </a>
    </li>

    <li>
        <a href="#" class="{{ Request::is('service') ? 'active' : '' }}">
            <i class="fas fa-user-cog"></i> <span>Service</span>
        </a>
    </li>

    <li>
        <a href="#" class="{{ Request::is('projects') ? 'active' : '' }}">
            <i class="fas fa-images"></i> <span>Projects</span>
        </a>
    </li>
</ul>
</div>