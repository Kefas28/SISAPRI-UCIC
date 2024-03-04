<!-- Footer -->

<footer class="footer">
    <div class="container">

        <!-- Footer Content -->

        <div class="footer_content">
            <div class="row">

                <!-- Footer Column - About -->
                <div class="col-lg-3 footer_col">

                    <!-- Logo -->
                    <div class="logo_container">
                        <div class="logo">
                            {{-- <img src="{{url('assets/images/logo1.png')}}" alt=""> --}}
                        </div>
                    </div>

                    <p class="footer_about_text">Selamat Datang di Sistem Informasi Sarana dan Prasarana Terintegrasi
                        Universitas Catur
                        Insan Cendekia.
                    </p>

                </div>

                <!-- Footer Column - Menu -->

                <div class="col-lg-3 footer_col">
                    <div class="footer_column_title">Menu </div>
                    <div class="footer_column_content">
                        <ul>
                            <li class="footer_list_item"><a href="{{ url('/') }}">Beranda</a></li>
                            <li class="footer_list_item"><a href="{{ url('/profil') }}">Profil</a></li>
                            <li class="footer_list_item"><a href="{{ url('/sarana') }}">Sarana</a></li>
                            <li class="footer_list_item"><a href="{{ url('/prasarana') }}">Prasarana</a></li>
                            <li class="footer_list_item"><a href="{{ url('/peminjaman') }}">Peminjaman</a></li>
                            <li class="footer_list_item"><a href="{{ url('/aduan') }}">Aduan</a></li>
                            <li class="footer_list_item"><a href="{{ url('/kepuasan') }}">Kepuasan</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Footer Column - Usefull Links -->

                <div class="col-lg-3 footer_col">
                    {{-- <div class="footer_column_title">Link</div>
                    <div class="footer_column_content">
                        <ul>
                            <li class="footer_list_item"><a href="#">Testimoni</a></li>
                            <li class="footer_list_item"><a href="#">FAQ</a></li>
                            <li class="footer_list_item"><a href="#">Peminjaman</a></li>
                            <li class="footer_list_item"><a href="#">Pengadaan</a></li>
                            <li class="footer_list_item"><a href="#">Kepuasan</a></li>
                        </ul>
                    </div> --}}
                </div>

                <!-- Footer Column - Contact -->

                <div class="col-lg-3 footer_col">
                    <div class="footer_column_title">Kontak</div>
                    <div class="footer_column_content">
                        <ul>
                            <li class="footer_contact_item">
                                <div class="footer_contact_icon">
                                    <img src="{{ url('assets/images/placeholder.svg') }}"
                                        alt="https://www.flaticon.com/authors/lucy-g">
                                </div>
                                Jl. Kesambi No. 202
                            </li>
                            <li class="footer_contact_item">
                                <div class="footer_contact_icon">
                                    <img src="{{ url('assets/images/smartphone.svg') }}"
                                        alt="https://www.flaticon.com/authors/lucy-g">
                                </div>
                                0812 3726 1921
                            </li>
                            <li class="footer_contact_item">
                                <div class="footer_contact_icon">
                                    <img src="{{ url('assets/images/envelope.svg') }}"
                                        alt="https://www.flaticon.com/authors/lucy-g">
                                </div>ucic@gmail.com
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

        <!-- Footer Copyright -->

        <div class="footer_bar d-flex flex-column flex-sm-row align-items-center">
            <div class="footer_copyright">
                <span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script> SISAPRI <i class="fa fa-heart" aria-hidden="true"></i>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </span>
            </div>
            <div class="footer_social ml-sm-auto">
                <ul class="menu_social">
                    <li class="menu_social_item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                    <li class="menu_social_item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    <li class="menu_social_item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li class="menu_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="menu_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                </ul>
            </div>
        </div>


    </div>
</footer>
