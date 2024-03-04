<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light">
        <a href="index.html" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"></i>SISAPRI</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="{{ asset('assets_admin/img/user.jpg') }}" alt=""
                    style="width: 40px; height: 40px;">
                <div
                    class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                </div>
            </div>
            <div class="ms-3">
                {{-- <h6 class="mb-0">{{ $data['name'] }}</h6>
                <span>{{ $data['role'] }}</span> --}}
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="/admin/dashboard" class="nav-item nav-link {{ Request::is('admin/dashboard') ? 'active' : '' }}"><i
                    class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <div class="nav-item dropdown">
                <a href="#"
                    class="nav-link dropdown-toggle {{ Request::is('baak/kampus', 'baak/gedung', 'baak/ruang') ? 'active' : '' }}"
                    data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Prasarana</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="/baak/kampus"
                        class="dropdown-item {{ Request::is('baak/kampus') ? 'active' : '' }}">Kampus</a>
                    <a href="/baak/gedung"
                        class="dropdown-item {{ Request::is('baak/gedung') ? 'active' : '' }}">Gedung</a>
                    <a href="/baak/ruang"
                        class="dropdown-item {{ Request::is('baak/ruang') ? 'active' : '' }}">Ruang</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#"
                    class="nav-link dropdown-toggle {{ Request::is('baak/konten/prasarana') ? 'active' : '' }}"
                    data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Konten Prasarana</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="/baak/konten/prasarana"
                        class="dropdown-item {{ Request::is('baak/konten/prasarana') ? 'active' : '' }}">Konten
                        Prasarana</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#"
                    class="nav-link dropdown-toggle {{ Request::is('baak/konten/sarana') ? 'active' : '' }}"
                    data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Konten Sarana</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="/baak/konten/sarana"
                        class="dropdown-item {{ Request::is('baak/konten/sarana') ? 'active' : '' }}">Konten Sarana</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#"
                    class="nav-link dropdown-toggle {{ Request::is('baak/peminjaman/ruangan') ? 'active' : '' }}"
                    data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Peminjaman</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="/baak/peminjaman/ruangan"
                        class="dropdown-item {{ Request::is('baak/peminjaman/ruangan') ? 'active' : '' }}">Peminjaman
                        Ruang</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#"
                    class="nav-link dropdown-toggle {{ Request::is('baak/aduan', 'baak/kepuasan') ? 'active' : '' }}"
                    data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Feedback</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="/baak/aduan"
                        class="dropdown-item {{ Request::is('baak/aduan') ? 'active' : '' }}">Aduan</a>
                    <a href="/baak/kepuasan"
                        class="dropdown-item {{ Request::is('baak/kepuasan') ? 'active' : '' }}">Kepuasan</a>
                </div>
            </div>
        </div>
    </nav>
</div>
