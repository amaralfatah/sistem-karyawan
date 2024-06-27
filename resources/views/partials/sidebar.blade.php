<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
        <a href="index.html" class="navbar-brand mx-4 mb-3">
            <h5 class="text-primary"><i class="fa fa-user-edit me-2"></i>Sistem Karyawan</h5>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="img/{{ session('user')->imgProfile }}" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">{{ session('user')->name }}</h6>
                <span>Admin</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="{{ route('index') }}" class="nav-item nav-link @yield('navDashboard') "><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <a href="{{ route('karyawans.index') }}" class="nav-item nav-link @yield('navKaryawan')"><i class="fa fa-users me-2"></i>Karyawan</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Absensi</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{ route('absensi.read') }}" class="dropdown-item">Absensi</a>
                    <a href="{{ route('absensi.absensiHadir') }}" class="dropdown-item">Daftar Hadir</a>
                    <a href="{{ route('absensi.absensiAlpha') }}" class="dropdown-item">Daftar Alpha</a>
                </div>
            </div>
            <a href="{{ route('jabatan.read') }}" class="nav-item nav-link @yield('navJabatan')"><i class="fa fa-th me-2"></i>Jabatan</a>
            <a href="{{ route('cuti.read') }}" class="nav-item nav-link @yield('navCuti')"><i class="fa fa-keyboard me-2"></i>Cuti</a>
            <a href="{{ route('cuti.read') }}" class="nav-item nav-link @yield('navAbsensi')"><i class="fa fa-table me-2"></i>Tables</a>
            <a href="{{ route('gaji.index') }}" class="nav-item nav-link @yield('navGaji')"><i class="fa fa-chart-bar me-2"></i>Gaji</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Pages</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="signin.html" class="dropdown-item">Sign In</a>
                    <a href="signup.html" class="dropdown-item">Sign Up</a>
                    <a href="404.html" class="dropdown-item">404 Error</a>
                    <a href="blank.html" class="dropdown-item">Blank Page</a>
                </div>
            </div>
        </div>
    </nav>
</div>
