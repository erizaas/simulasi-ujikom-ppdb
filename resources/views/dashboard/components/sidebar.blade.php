<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('dashboard')}}">
        <div class="sidebar-brand-text mx-3">DASHBOARD</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item" id="dashboard">
        <a class="nav-link" href="{{route('dashboard')}}">
            <i class="fas fa-fw fa-cogs"></i>
            <span>Lihat Pendaftar</span></a>
    </li>

    {{-- <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Berdasarkan
    </div>

    <!-- Nav Item - My Task -->
    <li class="nav-item" id="my_task">
        <a class="nav-link" href="{{route('jenis_kelamin')}}">
            <i class="fas fa-fw fa-venus-mars"></i>
            <span>Jenis Kelamin</span></a>
    </li>

    <!-- Nav Item - Gift Card -->
    <li class="nav-item" id="my_gift_card">
        <a class="nav-link" href="{{route('minat_jurusan')}}">
            <i class="fas fa-fw fa-book-reader"></i>
            <span>Minat Jurusan</span></a>
    </li>

    <li class="nav-item" id="my_gift_card">
        <a class="nav-link" href="{{route('asal_sekolah')}}">
            <i class="fas fa-fw fa-school"></i>
            <span>Asal Sekolah</span></a>
    </li> --}}



    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->

    @yield('sidebar')

</ul>
