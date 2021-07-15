<ul class="sidebar navbar-nav">
    <li class="nav-item active">
        <a class="nav-link" href="{{ url('admin/dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="{{ url('admin/role') }}">
            <i class="fa fa-tasks"></i>
            <span>Roles</span>
        </a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="{{ url('admin/users') }}">
            <i class="fa fa-user"></i>
            <span>Users</span>
        </a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="{{ url('candidate') }}">
            <i class="fa fa-list-alt "></i>
            <span>Candidate</span>
        </a>
    </li>
        
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-list-alt"></i>
            <span>Report</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="{{ url('view_result') }}">View Roles</a>
            <a class="dropdown-item" href="{{ url('view_user') }}">View Users</a>

        </div>
    </li>
<!--    <li class="nav-item active">
        <a class="nav-link" href="{{ URL::to('/setting') }}">
            <i class="fa fa-list-alt "></i>
            <span>Setting</span>
        </a>
    </li>-->
</ul>