@extends('layouts.profile')
@php
    // dd($projects)
@endphp
@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero">
        <div id="carouselExampleControls" class="carousel slide hero-carousel" data-ride="carousel" style="height: 100px">
            <div class="carousel-inner">
                @php
                    $no = 0;
                @endphp
                @foreach ( $img_hero_transparent as $transparent )    
                <div class="carousel-item @if($transparent->carousel_active == 'Y') active @endif">
                    <img class="d-block w-100" src="{{ asset('image/project/bg_transparent/' . $transparent->img_file) }}" alt="Hero Cakrawala Slide {{ $no++ }}" >
                    <div class="carousel-caption d-none d-md-block">
                    </div>
                </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="container position-relative">
            <div class="row gy-5" data-aos="fade-in">
                <div
                    class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
                    <h2>Selamat datang di, <span>{{ ucwords($contact['company_nickname']) }}</span></h2>
                    <p>Sed autem laudantium dolores. Voluptatem itaque ea consequatur eveniet. Eum quas beatae cumque eum
                        quaerat.</p>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="#about" class="btn-get-started">Get Started</a>
                        <a href="https://youtu.be/kQaOKLKyYvY"
                            class="glightbox btn-watch-video d-flex align-items-center"><i
                                class="bi bi-play-circle"></i><span>Watch Video</span></a>
                    </div>
                </div>
                {{-- <div class="col-lg-6 order-1 order-lg-2">
                    <img src="{{ asset('vendor/impact/assets/img/hero-img.svg') }}" class="img-fluid" alt=""
                        data-aos="zoom-out" data-aos-delay="100">
                </div> --}}
            </div>
        </div>

        <div class="icon-boxes position-relative">
            <div class="container position-relative">
                <div class="row gy-4 mt-5">

                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-people"></i></div>
                            <h4 class="title"><a href="#about" class="stretched-link">Tentang Kami</a></h4>
                        </div>
                    </div><!--End Icon Box -->

                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon"><i class="bi-house-add"></i></div>
                            <h4 class="title"><a href="#portfolio" class="stretched-link">Projek Cakrawala</a></h4>
                        </div>
                    </div><!--End Icon Box -->

                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="icon-box">
                            {{-- <div class="icon"><i class="bi bi-command"></i></div> --}}
                            <div class="icon"><i class="fa-regular fa-handshake"></i></div>
                            <h4 class="title"><a href="#team" class="stretched-link">Kerjasama Instansi</a></h4>
                        </div>
                    </div><!--End Icon Box -->

                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon-box">
                            <div class="icon"><i class="fa-solid fa-award"></i></div>
                            <h4 class="title"><a href="#recent-posts" class="stretched-link">Penghargaan</a></h4>
                        </div>
                    </div><!--End Icon Box -->
                </div>
            </div>
        </div>

        </div>
    </section>
    <!-- End Hero Section -->

    <main id="main">
        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container " data-aos="fade-up">

                <div class="section-header">
                    <h2>{{ $about['title'] }}</h2>
                    <p>{{ $about['sub_title'] }}</p>

                </div>

                <div class="row gy-4">
                    <div class="col-lg-6">
                        <h4><b>{{ strtoupper($about['company_name']) }}</b></h4>
                        <p>{{ $about['since'] }}</p>
                        <p>{{ $about['description2'] }}</p>
                        <p>{{ $about['description3'] }}</p>
                        {{-- <img src="{{ asset('image/img/home/' . $about['image']) }}" class="img-fluid rounded-4 mb-5"
                            alt="" width="100%"> --}}

                    </div>
                    <div class="col-lg-6">
                        <div class="content ps-0 ps-lg-5">

                            <div class="position-relative mt-4">
                                <img src="{{ asset('image/img/home/' . $about['youtube_thumbnail']) }}"
                                    class="img-fluid rounded-4" alt="" width="100%">
                                <a href="{{ $about['youtube_url'] }}" class="glightbox play-btn"></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- End About Us Section -->

        <!-- ======= Project Section ======= -->
        <section id="portfolio" class="portfolio sections-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Proyek Cakrawala</h2>
                    <p> CAKRAWALA UTAMA RESIDENCE Adalah project perumahan pertama dan sukses sampai saat ini, sudah lebih
                        dari 500+ unit rumah terjual. </p>
                </div>

                <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
                    data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

                    {{-- Website Scale --}}
                    <div class="row justify-content-center website-show">
                        @foreach ($projects as $project)
                            @if (isset($project->imgPosters[0]))
                                <div class="col-xl-4 col-md-6 portfolio-item filter-app mb-3">
                                    <div class="portfolio-wrap">
                                        <a href="{{ asset('image/project/poster/' . $project->imgPosters[0]->img_file) }}"
                                            data-gallery="portfolio-gallery-app" class="glightbox"><img
                                                src="{{ asset('image/project/poster/' . $project->imgPosters[0]->img_file) }}"
                                                class="img-fluid" alt=""></a>
                                        <div class="portfolio-info">
                                            {{-- Name --}}
                                            <h5>
                                                <a href="project/detail/{{ $project['id_project'] }}" target="__blank"
                                                    title="More Details"><b>{{ $project['project_name'] }}</b>
                                                </a>
                                            </h5>

                                            {{-- Location --}}
                                            <div style="height: 80px">
                                                <p><i class="bi bi-geo-alt text-danger"></i> {{ $project['address'] }}</p>
                                            </div>

                                            <div class="row mt-4">
                                                {{-- Type --}}
                                                <div class="col-6 text-left" style="font-size: 10px">
                                                    <span class="btn btn-danger"><b> Type :
                                                            {{ $project['type'] }}</b></span>
                                                </div>
                                                {{-- Price --}}
                                                <div class="col-6 d-flex justify-content-end align-items-center">
                                                    <h6 class="mt-2" style="color:#b85959">
                                                        <b>{{ $project['price'] }}</b>/Bulan
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    {{-- Phone Scale --}}
                    <div class="row justify-content-center phone-show">
                        @foreach ($projects as $index => $project)
                            @if (isset($project->imgPosters[0]))
                                @if ($index < 3)
                                    <div class="col-xl-4 col-md-6 portfolio-item filter-app mb-3">
                                        <div class="portfolio-wrap">
                                            <a href="{{ asset('image/project/poster/' . $project->imgPosters[0]['img_file']) }}"
                                                data-gallery="portfolio-gallery-app" class="glightbox"><img
                                                    src="{{ asset('image/project/poster/' . $project->imgPosters[0]['img_file']) }}"
                                                    class="img-fluid" alt=""></a>
                                            <div class="portfolio-info">
                                                {{-- Name --}}
                                                <h5>
                                                    <a href="project/detail/{{ $project['id_project'] }}"
                                                        target="__blank"
                                                        title="More Details"><b>{{ $project['project_name'] }}</b>
                                                    </a>
                                                </h5>

                                                {{-- Location --}}
                                                <p><i class="bi bi-geo-alt text-danger"></i> {{ $project['address'] }}</p>

                                                <div class="row mt-4">
                                                    {{-- Type --}}
                                                    <div class="col-4 text-left">
                                                        <span class="btn btn-danger"><b> {{ $project['type'] }}</b></span>
                                                    </div>
                                                    {{-- Price --}}
                                                    <div class="col-8 d-flex justify-content-end align-items-center">
                                                        <h6 class="mt-2" style="color:#b85959">
                                                            <b>{{ $project['price'] }}</b>/Bulan
                                                        </h6>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                @else
                                @break
                            @endif
                        @endif
                    @endforeach
                    <div class="row mt-5 mb-5">
                        <div class="col">
                            <a href="{{ route('project') }}" class="btn btn-primary btn-lg btn-block-custom1"><i
                                    class="bi bi-houses-fill"></i> Jelajahi koleksi proyek lain kami</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Project Section -->

    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action" class="call-to-action">
        <div class="container text-center" data-aos="zoom-out">
            <a href="https://youtu.be/kQaOKLKyYvY" class="glightbox play-btn"></a>
            <h3>Call To Action</h3>
            <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                laborum.</p>
            <a class="cta-btn" href="#">Call To Action</a>
        </div>
    </section><!-- End Call To Action Section -->

    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>{{ $collaboration['description']['title'] }}</h2>
                <p>{{ $collaboration['description']['desc'] }}</p>
            </div>

            <div class="" data-aos="zoom-out">
                <div class="clients-slider swiper mb-5">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide"><img
                                src="{{ asset('vendor/impact/assets/img/clients/client-1.png') }}" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img
                                src="{{ asset('vendor/impact/assets/img/clients/client-2') }}.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img
                                src="{{ asset('vendor/impact/assets/img/clients/client-3') }}.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img
                                src="{{ asset('vendor/impact/assets/img/clients/client-4') }}.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img
                                src="{{ asset('vendor/impact/assets/img/clients/client-5') }}.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img
                                src="{{ asset('vendor/impact/assets/img/clients/client-6') }}.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img
                                src="{{ asset('vendor/impact/assets/img/clients/client-7') }}.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img
                                src="{{ asset('vendor/impact/assets/img/clients/client-8') }}.png" class="img-fluid"
                                alt=""></div>
                    </div>
                </div>
            </div>

            {{-- Website Scale --}}
            <div class="row gy-4 website-show">
                @foreach ($dataEven as $index => $activity)
                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                        <div class="member">
                            <img src="{{ asset('image/collaboration/' . $activity['img_file']) }} " class="img-fluid"
                                alt="Image Collaboration">
                            <h4>{{ $activity['title'] }}</h4>
                            <span>{{ $activity['description'] }}</span>
                        </div>
                    </div>
                @endforeach
                <div class="row mt-5 mb-5">
                    <div class="col">
                        <a href="{{ route('collaboration') }}" class="btn btn-primary btn-lg btn-block-custom1"><i
                                class="bi bi-people-fill"></i> Jelajahi kerjasama lainnya!</a>
                    </div>
                </div>
            </div>

            {{-- Phone Scale --}}
            <div class="row gy-4 phone-show">
                @foreach ($dataEven as $index => $activity)
                    @if ($index < 3)
                        <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                            <div class="member">
                                <img src="{{ asset('image/collaboration/' . $activity['img_file']) }} "
                                    class="img-fluid" alt="Image Collaboration">
                                <h4>{{ $activity['title'] }}</h4>
                                <span>{{ $activity['description'] }}</span>
                            </div>
                        </div>
                    @else
                    @break
                @endif
            @endforeach
            <div class="row mt-5 mb-5">
                <div class="col">
                    <a href="{{ route('collaboration') }}" class="btn btn-primary btn-lg btn-block-custom1"><i
                            class="bi bi-people-fill"></i> Jelajahi kerjasama lainnya!</a>
                </div>
            </div>
        </div>

    </div>
</section><!-- End Our Team Section -->

<!-- ======= Recent Blog Posts Section ======= -->
<section id="recent-posts" class="recent-posts sections-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2>Penghargaan</h2>
            <p>Pt. Cakrawala Pratama Manunggal Telah Mendapatkan Certificate Rating Silver Dan Gold Dari Bank Btn
                Yang Sebagaimana Penghargaan Tersebut Diberikan Kapada Pt. Cakrawala Pratama Manunggal Sebagai
                Perusahaan Yang Berkontribusi Atas Penyediaan Perumahan Yang Layak Bagi Masyarakat Indonesia.</p>
        </div>

        <div class="row gy-4 justify-content-center">

            @foreach ($award as $item)
                <div class="col-xl-4 col-md-6">
                    <article>
                        <div class="post-img p-3">
                            <img src="{{ asset('image/award/' . $item['img_file']) }} " alt="Img Award"
                                class="img-fluid mb-3">
                        </div>
                    </article>
                </div>
            @endforeach

        </div><!-- End recent posts list -->

    </div>
</section><!-- End Recent Blog Posts Section -->

<!-- ======= Frequently Asked Questions Section ======= -->
<section id="faq" class="faq">
    <div class="container" data-aos="fade-up">

        <div class="row gy-4">

            <div class="col-lg-4">
                <div class="content px-xl-5">
                    <h3>Frequently Asked <strong>Questions</strong></h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                    </p>
                </div>
            </div>

            <div class="col-lg-8">

                <div class="accordion accordion-flush" id="faqlist" data-aos="fade-up" data-aos-delay="100">

                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq-content-1">
                                <span class="num">1.</span>
                                Apa Yang Harus Ditanyakan Ketika Akan Membeli Rumah?
                            </button>
                        </h3>
                        <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                            <div class="accordion-body">
                                <ul>
                                    <li>
                                        Fasat dan Denah Rumah
                                    </li>
                                    <li>
                                        Lokasi Perumahan
                                    </li>
                                    <li>
                                        Syarat Pengambilan Rumah
                                    </li>
                                    <li>
                                        Metode Pengambilan Rumah
                                    </li>
                                    <li>
                                        Proses Pengambilan Rumag Sampai Serah Terima Kunci
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- # Faq item-->

                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq-content-2">
                                <span class="num">2.</span>
                                Dimana Saja Proyek Perumahan Cakrawala?
                            </button>
                        </h3>
                        <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                            <div class="accordion-body">
                                <p><a href="https://cakrawalaproperty.com/project/detail/1"> 1. Cakrawala Utama
                                        Residence 1 – Mandan, Sukoharjo, Jawa Tengah</a></p>
                                <p><a href="https://cakrawalaproperty.com/project/detail/1"> 2. Cakrawala Utama
                                        Residence 2 – Mandan, Sukoharjo, Jawa Tengah</a></p>
                                <p><a href="https://cakrawalaproperty.com/project/detail/1"> 3. Cakrawala Utama
                                        Residence 3 – Jetis, Baki, Sukoharjo, Jawa Tengah</a></p>
                                <p><a href="https://cakrawalaproperty.com/project/detail/1"> 4. Cakrawala Utama
                                        Residence 4 – Karangturi, Gondangrejo, Karanganyar, Jawa Tengah</a></p>
                                <p><a href="https://cakrawalaproperty.com/project/detail/1"> 5. Cakrawala Utama
                                        Residence 5 – Jetis, Baki, Sukoharjo, Jawa Tengah</a></p>
                                <p><a href="https://cakrawalaproperty.com/project/detail/1"> 6. Cakrawala Utama
                                        Residence 6 – Kwangen, Gemolong, Sragen, Jawa Tengah</a></p>
                                <p><a href="https://cakrawalaproperty.com/project/detail/1"> 7. Cakrawala Utama
                                        Residence 7 – Jetis, Baki, Sukoharjo, Jawa Tengah</a></p>

                            </div>
                        </div>
                    </div><!-- # Faq item-->

                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq-content-3">
                                <span class="num">3.</span>
                                Apa Saja Syarat Pengajuan KPR?
                            </button>
                        </h3>
                        <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                            <div class="accordion-body">
                                <ul>
                                    <li>
                                        KTP
                                    </li>
                                    <li>
                                        KK
                                    </li>
                                    <li>
                                        Buku Nikah
                                    </li>
                                    <li>
                                        NPWP
                                    </li>
                                    <li>
                                        Surat Keterangan Kerja
                                    </li>
                                    <li>
                                        Slip Gaji 3 Bulan Terakhir
                                    </li>
                                    <li>
                                        Rekening Koran 3 Bulan Terakhir
                                    </li>
                                    <li>
                                        Bpjs
                                    </li>
                                    <li>
                                        Pas Photo 3x4
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- # Faq item-->

                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq-content-4">
                                <span class="num">4.</span>
                                Bagaimana tentang angsuran pembelian rumah KPR di Cakrawala?
                            </button>
                        </h3>
                        <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                            <div class="accordion-body">
                                Perumahan Subsidi Cakrawala memiliki bunga angsuran flat sampai lunas
                            </div>
                        </div>
                    </div><!-- # Faq item-->

                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq-content-5">
                                <span class="num">5.</span>
                                Kenapa harus memilih Cakrawala?
                            </button>
                        </h3>
                        <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                            <div class="accordion-body">
                                <p>1. Legalitas Aman</p>
                                <p>2. Proses Cepat</p>
                                <p>3. Bahan Material Berkualitas</p>
                                <p>4. Lokasi Strategis</p>
                                <p>5. Dibantu Sampai Rumah Ditempati</p>
                            </div>
                        </div>
                    </div><!-- # Faq item-->

                </div>

            </div>
        </div>

    </div>
</section><!-- End Frequently Asked Questions Section -->

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2>Kontak Kami</h2>
            <p>Nulla dolorum nulla nesciunt rerum facere sed ut inventore quam porro nihil id ratione ea sunt quis
                dolorem dolore earum</p>
        </div>

        <div class="row gx-lg-0 gy-4">

            <div class="col-lg-4">

                <div class="info-container d-flex flex-column align-items-center justify-content-center">
                    <div class="info-item d-flex">
                        <i class="bi bi-geo-alt flex-shrink-0"></i>
                        <div>
                            <h4>Lokasi:</h4>
                            <p>A108 Adam Street, New York, NY 535022</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex">
                        <i class="bi bi-envelope flex-shrink-0"></i>
                        <div>
                            <h4>Email:</h4>
                            <p>cakrawalapratamamanunggalresmi@gmail.com</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex">
                        <i class="bi bi-phone flex-shrink-0"></i>
                        <div>
                            <h4>Handphone:</h4>
                            <p>+1 5589 55488 55</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex">
                        <i class="bi bi-clock flex-shrink-0"></i>
                        <div>
                            <h4>Jam buka :</h4>
                            <p>Mon-Sat: 11AM - 23PM</p>
                        </div>
                    </div><!-- End Info Item -->
                </div>
            </div>

            <div class="col-lg-8">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name"
                                placeholder="Nama Lengkap" required>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="Email" required>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="subject" id="subject"
                            placeholder="Subject" required>
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="7" placeholder="Pesan" required></textarea>
                    </div>
                    <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Pesan anda sudah dikirim. Terima kasih!</div>
                    </div>
                    <div class="text-center"><button type="submit">Kirim pesan</button></div>
                </form>
            </div><!-- End Contact Form -->

        </div>

    </div>
</section><!-- End Contact Section -->

{{-- Contact Me --}}
@include('layouts/contact_me')

</main><!-- End #main -->
@endsection
