  <style>
      /* Style for active menu item */
      .main_nav_list .active a {
          color: #ffb606;
          /* Warna teks saat menu aktif */
      }
  </style>

  <!-- Header -->
  <header class="header d-flex flex-row">
      <div class="header_content d-flex flex-row align-items-center">
          <!-- Logo -->
          <div class="logo_container">
              <div class="logo">
                  <img src="{{ asset('assets/images/logo_sisapri.png') }}" alt="">
              </div>
          </div>

          <!-- Main Navigation -->
          <nav class="main_nav_container">
              <div class="main_nav">
                  <ul class="main_nav_list">
                      <li class="main_nav_item {{ Request::is('/') ? 'active' : '' }}"><a
                              href="{{ url('/') }}">Beranda</a></li>
                      <li class="main_nav_item {{ Request::is('profil') ? 'active' : '' }}"><a
                              href="{{ url('/profil') }}">Profil</a></li>
                      <li
                          class="main_nav_item dropdown {{ Request::is('daftarsarpras', 'sarana', 'prasarana') ? 'active' : '' }}">
                          <a class="nav-link dropdown-toggle" href="{{ url('/daftarsarpras') }}" id="navbardrop"
                              data-toggle="dropdown">Daftar SARPRAS</a>
                          <div class="dropdown-menu">
                              <a class="dropdown-item" href="{{ url('/sarana') }}">Sarana</a>
                              <a class="dropdown-item" href="{{ url('/prasarana') }}">Prasarana</a>
                          </div>
                      </li>
                      <li class="main_nav_item {{ Request::is('peminjaman') ? 'active' : '' }}"><a
                              href="{{ url('/peminjaman') }}">Peminjaman</a></li>
                      <li class="main_nav_item {{ Request::is('aduan') ? 'active' : '' }}"><a
                              href="{{ url('/aduan') }}">Aduan</a></li>
                      <li class="main_nav_item {{ Request::is('kepuasan') ? 'active' : '' }}"><a
                              href="{{ url('/kepuasan') }}">Kepuasan</a></li>
                  </ul>
              </div>
          </nav>
      </div>
      <div class="header_side d-flex flex-row justify-content-center align-items-center">
          <li class="main_nav_item {{ Request::is('login') ? 'active' : '' }}"><a href="{{ url('/login') }}">Login</a>
          </li>
      </div>

      <!-- Hamburger -->
      <div class="hamburger_container">
          <i class="fas fa-bars trans_200"></i>
      </div>
  </header>

  <!-- Menu -->
  <div class="menu_container menu_mm">
      <!-- Menu Close Button -->
      <div class="menu_close_container">
          <div class="menu_close"></div>
      </div>

      <!-- Menu Items -->
      <div class="menu_inner menu_mm">
          <div class="menu menu_mm">
              <ul class="menu_list menu_mm">
                  <li class="menu_list {{ Request::is('/') ? 'active' : '' }}"><a
                          href="{{ url('/') }}">Beranda</a>
                  </li>
                  <li class="menu_list {{ Request::is('profil') ? 'active' : '' }}"><a
                          href="{{ url('/profil') }}">Profil</a></li>
                  <li
                      class="menu_list dropdown {{ Request::is('daftarsarpras', 'sarana', 'prasarana') ? 'active' : '' }}">
                      <a class="nav-link dropdown-toggle" href="{{ url('/daftarsarpras') }}" id="navbardrop"
                          data-toggle="dropdown">Daftar SARPRAS</a>
                      <div class="dropdown-menu">
                          <a class="dropdown-item" href="{{ url('/sarana') }}">Sarana</a>
                          <a class="dropdown-item" href="{{ url('/prasarana') }}">Prasarana</a>
                      </div>
                  </li>
                  <li class="menu_list {{ Request::is('peminjaman') ? 'active' : '' }}"><a
                          href="{{ url('/peminjaman') }}">Peminjaman</a></li>
                  <li class="menu_list {{ Request::is('aduan') ? 'active' : '' }}"><a
                          href="{{ url('/aduan') }}">Aduan</a></li>
                  <li class="menu_list {{ Request::is('kepuasan') ? 'active' : '' }}"><a
                          href="{{ url('/kepuasan') }}">Kepuasan</a></li>
              </ul>

              <!-- Menu Social -->
              <div class="menu_social_container menu_mm">
                  <ul class="menu_social menu_mm">
                      <li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                      <li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                      <li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-instagram"></i></a></li>
                      <li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                      <li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-twitter"></i></a></li>
                  </ul>
              </div>

              <div class="menu_copyright menu_mm">SISAPRI</div>
          </div>
      </div>
  </div>

  {{-- <!-- Header -->

<header class="header d-flex flex-row">
    <div class="header_content d-flex flex-row align-items-center">
        <!-- Logo -->
        <div class="logo_container">
            <div class="logo">
                <img src="{{ asset('assets/images/logo_sisapri.png') }}" alt="">
            </div>
        </div>

        <!-- Main Navigation -->
        <nav class="main_nav_container">
            <div class="main_nav">
                <ul class="main_nav_list">
                    <li class="main_nav_item"><a href="{{ url('/') }}">Beranda</a></li>
                    <li class="main_nav_item"><a href="{{ url('/profil') }}">Profil</a></li>
                    <li class="main_nav_item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{ url('/daftarsarpras') }}" id="navbardrop"
                            data-toggle="dropdown">
                            Daftar SARPRAS
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ url('/sarana') }}">Sarana</a>
                            <a class="dropdown-item" href="{{ url('/prasarana') }}">Prasarana</a>
                        </div>
                    </li>
                    <iconify-icon icon="ion:checkmark-circle-outline"></iconify-icon>
                    <li class="main_nav_item"><a href="{{ url('/peminjaman') }}">Peminjaman</a></li>
                    <li class="main_nav_item"><a href="{{ url('/aduan') }}">Aduan</a></li>
                    <li class="main_nav_item"><a href="{{ url('/kepuasan') }}">Kepuasan</a></li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="header_side d-flex flex-row justify-content-center align-items-center">
        <li class="main_nav_item"><a href="{{ url('/login') }}">Login</a></li>
    </div>

    <!-- Hamburger -->
    <div class="hamburger_container">
        <i class="fas fa-bars trans_200"></i>
    </div>

</header>

<!-- Menu -->
<div class="menu_container menu_mm">

    <!-- Menu Close Button -->
    <div class="menu_close_container">
        <div class="menu_close"></div>
    </div>

    <!-- Menu Items -->
    <div class="menu_inner menu_mm">
        <div class="menu menu_mm">
            <ul class="menu_list menu_mm">
                <li class="menu_list menu_mm"><a href="{{ url('/') }}">Beranda</a></li>
                <li class="menu_list menu_mm"><a href="{{ url('/profil') }}">Profil</a></li>
                <li class="menu_list menu_mm dropdown">
                    <a class="nav-link dropdown-toggle" href="{{ url('/daftarsarpras') }}" id="navbardrop"
                        data-toggle="dropdown">
                        Daftar SARPRAS
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ url('/sarana') }}">Sarana</a>
                        <a class="dropdown-item" href="{{ url('/prasarana') }}">Prasarana</a>
                    </div>
                </li>
                <li class="menu_list menu_mm"><a href="{{ url('/peminjaman') }}">Peminjaman</a></li>
                <li class="menu_list menu_mm"><a href="{{ url('/aduan') }}">Aduan</a></li>
                <li class="menu_list menu_mm"><a href="{{ url('/kepuasan') }}">Kepuasan</a></li>
            </ul>

            <!-- Menu Social -->

            <div class="menu_social_container menu_mm">
                <ul class="menu_social menu_mm">
                    <li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                    <li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    <li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-twitter"></i></a></li>
                </ul>
            </div>

            <div class="menu_copyright menu_mm">SISAPRI</div>
        </div>

    </div>

</div> --}}
