<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class=""></i>
        </div>
        <div class="sidebar-brand-text mx-3">HomeKeeper</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">
    <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Home</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{route('about.index')}}">What is HomeKeeper</a>
                        <a class="collapse-item" href="{{route('about2.index')}}">Why HomeKeeper</a>
                        <a class="collapse-item" href="{{route('features.index')}}">Features</a>
                        <a class="collapse-item" href="{{route('peopleloveus.index')}}">People Love Us</a>
                    </div>
                </div>
            </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('news.index')}}">
            <i class="fas fa-fw fa-newspaper"></i>
            <span>News</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('features.index')}}">
            <i class="fas fa-fw fa-newspaper"></i>
            <span>Features</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('screenshots.index')}}">
            <i class="fas fa-fw fa-newspaper"></i>
            <span>Screenshots</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('peopleloveus.index')}}">
            <i class="fas fa-fw fa-newspaper"></i>
            <span>People Love Us </span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('housingcounseling.index')}}">
            <i class="fas fa-fw fa-newspaper"></i>
            <span>Housing Counseling </span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('pricing.index')}}">
            <i class="fas fa-fw fa-newspaper"></i>
            <span>Pricing </span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('ourhistory.index')}}">
            <i class="fas fa-fw fa-newspaper"></i>
            <span>Our History</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('ourteam.index')}}">
            <i class="fas fa-fw fa-newspaper"></i>
            <span>Our Team</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


</ul>
