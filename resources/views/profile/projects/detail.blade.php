@extends('layouts.profile')
@section('content')
    <main id="main">

        <section id="call-to-action" class="call-to-action">
            <div class="container text-center" data-aos="zoom-out">
                <h3>{{ $project['name'] }}</h3>
                <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                    laborum.</p>
                <a class="cta-btn" href="#">Call To Action</a>
            </div>
        </section>

        {{-- Project Image --}}
        <section class="">
            <div class="section-header">
                <h2>PROJECT</h2>
                <p>Aperiam dolorum et et wuia molestias qui eveniet numquam nihil porro incidunt dolores placeat sunt id nobis omnis tiledo stran delop</p>
            </div>
            <div class="section-header">
                <img src="{{ asset('image/project/' . $project['image_poster']) }}" class="img-fluid image-project"
                    alt="PROJECT" style="width: 68%; height: auto;">
            </div>
        </section>

        {{-- Facility --}}
        <section id="services" class="services sections-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>FASILITAS</h2>
                    <p>Aperiam dolorum et et wuia molestias qui eveniet numquam nihil porro incidunt dolores placeat sunt id nobis omnis tiledo stran delop</p>
                </div>
                <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">
                    @foreach ($project['facility'] as $facility)
                        <div class="col-lg-3 col-md-6">
                            <div class="service-item  position-relative">
                                <div class="icon">
                                    <i class="{{ $facility['icon'] }}" style="color: #b51a00;"></i>
                                </div>
                                <h3 style="color: #7c2a00;">{{ $facility['qty'] }} {{ $facility['name'] }}</h3>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- Type Image --}}

        <section class="">
            <div class="section-header">
                <h2>TYPE</h2>
                <p>Aperiam dolorum et et wuia molestias qui eveniet numquam nihil porro incidunt dolores placeat sunt id nobis omnis tiledo stran delop</p>
            </div>
            <div class="section-header">
                <img src="{{ asset('image/project/' . $project['image_type']) }}" class="img-fluid image-project"
                    alt="TYPE">
            </div>
        </section>

        {{-- Spesification --}}
        <section id="services" class="services sections-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>SPESIFIKASI</h2>
                    <p>Aperiam dolorum et et wuia molestias qui eveniet numquam nihil porro incidunt dolores placeat sunt id nobis omnis tiledo stran delop</p>
                </div>
                <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">
                    @foreach ($project['specification'] as $specification)
                        <div class="col-lg-2 col-md-6">
                            <div class="service-item  position-relative">
                                <div class="iconsm">
                                    <i class="{{ $specification['icon'] }}" style="color: #b51a00;"></i>
                                </div>
                                <h4 style="color: #7c2a00;" class="text-center"> {{ $specification['name'] }}</h4>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section id="siteplan" class="contact">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>SITEPLAN</h2>
                    <p>Aperiam dolorum et et wuia molestias qui eveniet numquam nihil porro incidunt dolores placeat sunt id nobis omnis tiledo stran delop</p>
                </div>
            </div>
            <div class="section-header">
                <img src="{{ asset('image/project/' . $project['image_siteplan']) }}" class="img-fluid image-project"
                    alt="Siteplan">
            </div>
        </section><!-- End Contact Section -->



        <!-- ======= Pricing Section ======= -->
        <section id="pricing" class="pricing sections-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>PENAWARAN MENARIK</h2>
                    <p>Aperiam dolorum et et wuia molestias qui eveniet numquam nihil porro incidunt dolores placeat sunt id
                        nobis omnis tiledo stran delop</p>
                </div>

                <div class="row g-4 py-lg-5" data-aos="zoom-out" data-aos-delay="100">

                    <div class="col-lg-4">
                        <div class="pricing-item">
                            <h3>Bonus Menarik</h3>
                            <div class="icon">
                                <i class="bi bi-box2-heart"></i>
                            </div>
                            <h4 style="font-size: 25px">{{ $project['note'] }}<span> </span></h4>
                            <div class="text-center mt-4"><a href="{{ $contact['ad'] }}" class="buy-btn">Saya Tertarik</a>
                            </div>
                        </div>
                    </div><!-- End Pricing Item -->

                    <div class="col-lg-4">
                        <div class="pricing-item featured">
                            <h3>Angsuran Hanya</h3>
                            <div class="icon">
                                <i class="bi bi-cash-coin"></i>
                            </div>
                            <h4><sup>Rp.</sup> {{ $project['price'] }} <span> / Bulan</span></h4>
                            <div class="text-center mt-3"><a href="{{ $contact['ad'] }}" class="buy-btn">Saya Tertarik</a>
                            </div>
                        </div>
                    </div><!-- End Pricing Item -->

                    <div class="col-lg-4">
                        <div class="pricing-item">
                            <h3>Rumah Type</h3>
                            <div class="icon">
                                <i class="bi bi-house-heart"></i>
                            </div>
                            <h4 style="font-size: 34px">{{ $project['type'] }}</h4>
                            <div class="text-center mt-3"><a href="{{ $contact['ad'] }}" class="buy-btn">Saya Tertarik</a>
                            </div>
                        </div>
                    </div><!-- End Pricing Item -->

                </div>

            </div>
        </section><!-- End Pricing Section -->

        <!-- ======= Location ======= -->
        <section id="location" class="about">
            <div class="container " data-aos="fade-up">

                <div class="section-header">
                    <h2>LOKASI</h2>
                    <h4>{{ $project['location'] }}</h4>
                </div>
                <iframe style="border-radius: 20px" src="{{ $project['maps_iframe'] }}" width="100%" height="450"
                    style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div class="row mt-5 mb-5">
                    <div class="col">
                        <a href="{{ $contact['brochures'] }}" class="btn btn-primary btn-lg btn-block-custom1"><i
                                class="fa fa-download"></i> Unduh Brosur</a>
                    </div>
                    <div class="col">
                        <a href="{{ $contact['contact_me'] }}" class="btn btn-secondary btn-lg btn-block-custom2"><i
                                class="fab fa-whatsapp"></i>
                            Hubungi Kami</a>
                    </div>
                    <div class="col">
                        <a href="{{ $project['maps_url'] }}" class="btn btn-primary btn-lg btn-block-custom1"><i
                                class="fa fa-compass"></i> Maps</a>
                    </div>
                </div>

            </div>
        </section>

        {{-- Contact Me --}}
        @include('layouts/contact_me')

    </main><!-- End #main -->
@endsection
