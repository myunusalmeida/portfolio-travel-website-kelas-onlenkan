<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <i class="fa-solid fa-signs-post"></i>
        </div>
        <div class="sidebar-brand-text mx-2">Travel Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ url('/admin/dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Travels Data
    </div>

    <li class="nav-item">
        <a class="nav-link" href="{{ url('/admin/travel-packages') }}">
            <i class="fa-solid fa-mountain"></i>
            <span>Travel Packages</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/admin/testimonials') }}">
            <i class="fa-solid fa-face-smile"></i>
            <span>Testimonial</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/admin/users') }}">
            <i class="fa-solid fa-circle-user"></i>
            <span>Users Application</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/admin/travellers') }}">
            <i class="fa-solid fa-person-hiking"></i>
            <span>Travellers</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Heading -->
    <div class="sidebar-heading">
        Transactions Data
    </div>

    <li class="nav-item">
        <a class="nav-link" href="{{ url('/admin/transactions') }}">
            <i class="fa-solid fa-wallet"></i>
            <span>Transactions</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
