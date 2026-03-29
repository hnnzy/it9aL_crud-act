<nav>
    <div class="navbar-container">
        <a href="/" class="navbar-brand">Dorm Allocation</a>
        <ul class="navbar-menu">
            <li><a href="/" class="{{ Request::is('/') ? 'active' : '' }}">Dashboard</a></li>
            <li><a href="/students" class="{{ Request::is('students') || Request::is('students/*') ? 'active' : '' }}">Students</a></li>
            <li><a href="/allocations" class="{{ Request::is('allocations') ? 'active' : '' }}">View Allocations</a></li>
            <li><a href="/allocations/create" class="{{ Request::is('allocations/create') ? 'active' : '' }}">Add Allocation</a></li>
        </ul>
    </div>
</nav>