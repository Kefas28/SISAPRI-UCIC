@extends('layouts.frontend.master')

@section('title', 'Collegetivity — Aplikasi yang Membantu Dunia Perkuliahanmu!')
@section('content')

    <!-- Home -->

    <div class="home">

        <!-- Hero Slider -->
        <div class="hero_slider_container">
            <div class="hero_slider owl-carousel">

                <!-- Hero Slide -->
                <div class="hero_slide">
                    <div class="hero_slide_background"
                        style="background-image:url({{ url('assets/images/slider_background1.png') }})">
                    </div>
                    <div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
                        <div class="hero_slide_content text-center">
                            <h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Sistem Informasi
                                <span>Sarana dan Prasarana</span> Terintegrasi
                            </h1>
                        </div>
                    </div>
                </div>

                <!-- Hero Slide -->
                <div class="hero_slide">
                    <div class="hero_slide_background"
                        style="background-image:url({{ url('assets/images/slider_background2.png') }})">
                    </div>
                    <div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
                        <div class="hero_slide_content text-center">
                            <h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Sistem Informasi
                                <span>Sarana dan Prasarana</span> Terintegrasi
                            </h1>
                        </div>
                    </div>
                </div>

                <!-- Hero Slide -->
                <div class="hero_slide">
                    <div class="hero_slide_background"
                        style="background-image:url({{ url('assets/images/slider_background3.png') }})">
                    </div>
                    <div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
                        <div class="hero_slide_content text-center">
                            <h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Sistem Informasi
                                <span>Sarana dan Prasarana</span> Terintegrasi
                            </h1>
                        </div>
                    </div>
                </div>

            </div>

            <div class="hero_slider_left hero_slider_nav trans_200"><span class="trans_200">prev</span></div>
            <div class="hero_slider_right hero_slider_nav trans_200"><span class="trans_200">next</span></div>
        </div>

    </div>

    <div class="hero_boxes">
        <div class="hero_boxes_inner">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 hero_box_col">
                        <div class="hero_box d-flex flex-row align-items-center justify-content-starzzt">
                            <img src="assets/images/earth-globe.svg" class="svg" alt="">
                            <div class="hero_box_content">
                                <h2 class="hero_box_title">38</h2>
                                <a href="courses.html" class="hero_box_link">sarana</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 hero_box_col">
                        <div class="hero_box d-flex flex-row align-items-center justify-content-start">
                            <img src="assets/images/books.svg" class="svg" alt="">
                            <div class="hero_box_content">
                                <h2 class="hero_box_title">120</h2>
                                <a href="courses.html" class="hero_box_link">prasarana</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 hero_box_col">
                        <div class="hero_box d-flex flex-row align-items-center justify-content-start">
                            <img src="assets/images/professor.svg" class="svg" alt="">
                            <div class="hero_box_content">
                                <h2 class="hero_box_title">1300</h2>
                                <a href="teachers.html" class="hero_box_link">pemakai</a>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

    {{-- <!-- Popular -->

    <div class="popular page_section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title text-center">
                        <h1>Rilis Berita</h1>
                    </div>
                </div>
            </div>

            <div class="row course_boxes">

                <!-- Popular Course Item -->
                <div class="col-lg-4 course_box">
                    <div class="card">
                        <img class="card-img-top" src="{{ url('assets/images/course_1.jpg') }}"
                            alt="https://unsplash.com/@kellybrito">
                        <div class="card-body text-center">
                            <div class="card-title"><a href="courses.html">A complete guide to design</a></div>
                            <div class="card-text">Adobe Guide, Layes, Smart Objects etc...</div>
                        </div>
                        <div class="price_box d-flex flex-row align-items-center">
                            <div class="course_author_image">
                                <img src="{{ url('assets/images/author.jpg') }}" alt="https://unsplash.com/@mehdizadeh">
                            </div>
                            <div class="course_author_name">Michael Smith, <span>Author</span></div>
                            <div class="course_price d-flex flex-column align-items-center justify-content-center">
                                <span>$29</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Popular Course Item -->
                <div class="col-lg-4 course_box">
                    <div class="card">
                        <img class="card-img-top" src="{{ url('assets/images/course_2.jpg') }}"
                            alt="https://unsplash.com/@cikstefan">
                        <div class="card-body text-center">
                            <div class="card-title"><a href="courses.html">Beginners guide to HTML</a></div>
                            <div class="card-text">Adobe Guide, Layes, Smart Objects etc...</div>
                        </div>
                        <div class="price_box d-flex flex-row align-items-center">
                            <div class="course_author_image">
                                <img src="{{ url('assets/images/author.jpg') }}" alt="https://unsplash.com/@mehdizadeh">
                            </div>
                            <div class="course_author_name">Michael Smith, <span>Author</span></div>
                            <div class="course_price d-flex flex-column align-items-center justify-content-center">
                                <span>$29</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Popular Course Item -->
                <div class="col-lg-4 course_box">
                    <div class="card">
                        <img class="card-img-top" src="{{ url('assets/images/course_3.jpg') }}"
                            alt="https://unsplash.com/@dsmacinnes">
                        <div class="card-body text-center">
                            <div class="card-title"><a href="courses.html">Advanced Photoshop</a></div>
                            <div class="card-text">Adobe Guide, Layes, Smart Objects etc...</div>
                        </div>
                        <div class="price_box d-flex flex-row align-items-center">
                            <div class="course_author_image">
                                <img src="{{ url('assets/images/author.jpg ') }}" alt="https://unsplash.com/@mehdizadeh">
                            </div>
                            <div class="course_author_name">Michael Smith, <span>Author</span></div>
                            <div class="course_price d-flex flex-column align-items-center justify-content-center">
                                <span>$29</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Register -->

    <div class="register">

        <div class="container-fluid">

            <div class="row row-eq-height">
                <div class="col-lg-6 nopadding">

                    <!-- Register -->

                    <div class="register_section d-flex flex-column align-items-center justify-content-center">
                        <div class="register_content text-center">
                            <h1 class="register_title">Ayo Sukseskan
                                <span>Tracer Study 2023</span>
                                Universitas Catur Insan Cendekia
                            </h1>

                            <p class="register_text">
                                Tracer Study UCIC merupakan survei yang dilakukan untuk mengevaluasi dan menyempurnakan
                                proses
                                penyelenggaraan dan sistem pendidikan di UCIC. Hasil Tracer Study UCIC akan menjadi data
                                yang
                                berharga bagi UCIC dan diperlukan untuk berbagai kebutuhan pengembangan dan kemajuan UCIC.
                            </p>
                            <div class="button button_1 register_button mx-auto trans_200"><a href="#">Isi
                                    Survei</a></div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6 nopadding">

                    <!-- Search -->

                    <div class="search_section d-flex flex-column align-items-center justify-content-center">
                        <!-- <div class="search_background" style="background-image:url({{ url('assets/images/search_background.jpg') }});"></div> -->
                        <div class="search_content">
                            <h1 class="search_title">Tujuan Tracer Study</h1>
                            <ul class='ul_item'>
                                <li>
                                    <p class="register_text">Perbaikan kurikulum untuk menghasilkan lulusan yang
                                        berkarakter.</p>
                                </li>
                                <li>
                                    <p class="register_text">Menggali informasi dari alumni mengenai perkembangan
                                        kompetensi yang dibutuhkan pasar kerja untuk bahan perbaikan sistem pembelajaran.
                                    </p>
                                </li>
                                <li>
                                    <p class="register_text">Melakukan penelusuran tempat kerja, bidang kerja, waktu tunggu
                                        memperoleh pekerjaan dari alumni untuk membangun jejaring.</p>
                                </li>
                                <li>
                                    <p class="register_text">Memperoleh informasi mengenai kesiapan kerja lulusan sesuai
                                        target Indikator Kinerja Utama (IKU) 1.</p>
                                </li>
                            </ul>
                            <!-- <form id="search_form" class="search_form" action="post">
                        <input id="search_form_name" class="input_field search_form_name" type="text" placeholder="Course Name" required="required" data-error="Course name is required.">
                        <input id="search_form_category" class="input_field search_form_category" type="text" placeholder="Category">
                        <input id="search_form_degree" class="input_field search_form_degree" type="text" placeholder="Degree">
                        <button id="search_submit_button" type="submit" class="search_submit_button trans_200" value="Submit">search course</button>
                       </form> -->
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Services -->

    <div class="services page_section">

        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title text-center">
                        <h1>Alumni Dalam Angka</h1>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <iframe width="100%" height="600"
                        src="https://datastudio.google.com/embed/reporting/fdb77e41-85f6-406c-a63a-6cd2ba7e42be/page/p_viscq9xcxc"
                        frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>

            <!-- <div class="row services_row"> -->


            <!-- <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
                     <div class="icon_container d-flex flex-column justify-content-end">
                      <img src="{{ url('assets/images/earth-globe.svg') }}" alt="">
                     </div>
                     <h3>Online Courses</h3>
                     <p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
                    </div>

                    <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
                     <div class="icon_container d-flex flex-column justify-content-end">
                      <img src="{{ url('assets/images/exam.svg') }}" alt="">
                     </div>
                     <h3>Indoor Courses</h3>
                     <p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
                    </div>

                    <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
                     <div class="icon_container d-flex flex-column justify-content-end">
                      <img src="{{ url('assets/images/books.svg') }}" alt="">
                     </div>
                     <h3>Amazing Library</h3>
                     <p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
                    </div>

                    <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
                     <div class="icon_container d-flex flex-column justify-content-end">
                      <img src="{{ url('assets/images/professor.svg') }}" alt="">
                     </div>
                     <h3>Exceptional Professors</h3>
                     <p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
                    </div>

                    <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
                     <div class="icon_container d-flex flex-column justify-content-end">
                      <img src="{{ url('assets/images/blackbord.svg') }}" alt="">
                     </div>
                     <h3>Top Programs</h3>
                     <p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
                    </div>

                    <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
                     <div class="icon_container d-flex flex-column justify-content-end">
                      <img src="{{ url('assets/images/mortarboard.svg') }}" alt="">
                     </div>
                     <h3>Graduate Diploma</h3>
                     <p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
                    </div> -->

            <!-- </div> -->
            <!-- <div class="row services_row"> -->
            <div class="col-lg-6">
                <iframe width="100%" height="600"
                    src="https://datastudio.google.com/embed/reporting/764228c8-4280-4e9c-8488-6c9ca4fe219a/page/p_viscq9xcxc"
                    frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <!-- </div> -->
        </div>
    </div>

    <!-- Testimonials -->

    <div class="testimonials page_section">
        <!-- <div class="testimonials_background" style="background-image:url(images/testimonials_background.jpg)"></div> -->
        <div class="testimonials_background_container prlx_parent">
            <div class="testimonials_background prlx"
                style="background-image:url({{ url('assets/images/testimonials_background.jpg') }})"></div>
        </div>
        <div class="container">

            <div class="row">
                <div class="col">
                    <div class="section_title text-center">
                        <h1>What our students say</h1>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-10 offset-lg-1">

                    <div class="testimonials_slider_container">

                        <!-- Testimonials Slider -->
                        <div class="owl-carousel owl-theme testimonials_slider">

                            <!-- Testimonials Item -->
                            <div class="owl-item">
                                <div class="testimonials_item text-center">
                                    <div class="quote">“</div>
                                    <p class="testimonials_text">In aliquam, augue a gravida rutrum, ante nisl fermentum
                                        nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor
                                        fermentum.In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae
                                        tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
                                    <div class="testimonial_user">
                                        <div class="testimonial_image mx-auto">
                                            <img src="{{ url('assets/images/testimonials_user.jpg') }}" alt="">
                                        </div>
                                        <div class="testimonial_name">james cooper</div>
                                        <div class="testimonial_title">Graduate Student</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Testimonials Item -->
                            <div class="owl-item">
                                <div class="testimonials_item text-center">
                                    <div class="quote">“</div>
                                    <p class="testimonials_text">In aliquam, augue a gravida rutrum, ante nisl fermentum
                                        nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor
                                        fermentum.In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae
                                        tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
                                    <div class="testimonial_user">
                                        <div class="testimonial_image mx-auto">
                                            <img src="{{ url('assets/images/testimonials_user.jpg ') }}" alt="">
                                        </div>
                                        <div class="testimonial_name">james cooper</div>
                                        <div class="testimonial_title">Graduate Student</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Testimonials Item -->
                            <div class="owl-item">
                                <div class="testimonials_item text-center">
                                    <div class="quote">“</div>
                                    <p class="testimonials_text">In aliquam, augue a gravida rutrum, ante nisl fermentum
                                        nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor
                                        fermentum.In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae
                                        tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
                                    <div class="testimonial_user">
                                        <div class="testimonial_image mx-auto">
                                            <img src="{{ url('assets/images/testimonials_user.jpg') }}" alt="">
                                        </div>
                                        <div class="testimonial_name">james cooper</div>
                                        <div class="testimonial_title">Graduate Student</div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Events -->

    <div class="events page_section">
        <div class="container">

            <div class="row">
                <div class="col">
                    <div class="section_title text-center">
                        <h1>Event Yang Akan Datang</h1>
                    </div>
                </div>
            </div>

            <div class="event_items">

                <!-- Event Item -->
                <div class="row event_item">
                    <div class="col">
                        <div class="row d-flex flex-row align-items-end">

                            <div class="col-lg-2 order-lg-1 order-2">
                                <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                    <div class="event_day">07</div>
                                    <div class="event_month">January</div>
                                </div>
                            </div>

                            <div class="col-lg-6 order-lg-2 order-3">
                                <div class="event_content">
                                    <div class="event_name"><a class="trans_200" href="#">Student Festival</a>
                                    </div>
                                    <div class="event_location">Grand Central Park</div>
                                    <p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl
                                        ligula vel nunc. Proin quis mi malesuada, finibus tortor.</p>
                                </div>
                            </div>

                            <div class="col-lg-4 order-lg-3 order-1">
                                <div class="event_image">
                                    <img src="{{ url('assets/images/event_1.jpg') }}"
                                        alt="https://unsplash.com/@theunsteady5">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Event Item -->
                <div class="row event_item">
                    <div class="col">
                        <div class="row d-flex flex-row align-items-end">

                            <div class="col-lg-2 order-lg-1 order-2">
                                <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                    <div class="event_day">07</div>
                                    <div class="event_month">January</div>
                                </div>
                            </div>

                            <div class="col-lg-6 order-lg-2 order-3">
                                <div class="event_content">
                                    <div class="event_name"><a class="trans_200" href="#">Open day in the
                                            Univesrsity campus</a></div>
                                    <div class="event_location">Grand Central Park</div>
                                    <p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl
                                        ligula vel nunc. Proin quis mi malesuada, finibus tortor.</p>
                                </div>
                            </div>

                            <div class="col-lg-4 order-lg-3 order-1">
                                <div class="event_image">
                                    <img src="{{ url('assets/images/event_2.jpg') }}"
                                        alt="https://unsplash.com/@claybanks1989">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Event Item -->
                <div class="row event_item">
                    <div class="col">
                        <div class="row d-flex flex-row align-items-end">

                            <div class="col-lg-2 order-lg-1 order-2">
                                <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                    <div class="event_day">07</div>
                                    <div class="event_month">January</div>
                                </div>
                            </div>

                            <div class="col-lg-6 order-lg-2 order-3">
                                <div class="event_content">
                                    <div class="event_name"><a class="trans_200" href="#">Student Graduation
                                            Ceremony</a></div>
                                    <div class="event_location">Grand Central Park</div>
                                    <p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl
                                        ligula vel nunc. Proin quis mi malesuada, finibus tortor.</p>
                                </div>
                            </div>

                            <div class="col-lg-4 order-lg-3 order-1">
                                <div class="event_image">
                                    <img src="{{ url('assets/images/event_3.jpg ') }}"
                                        alt="https://unsplash.com/@juanmramosjr">
                                </div>
                            </div> --}}

    </div>
    </div>
    </div>

    </div>

    </div>
    </div>

@endsection
