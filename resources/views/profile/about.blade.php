@extends('layouts.profile')
@section('content')
    {{-- Hero --}}
    <section id="call-to-action" class="call-to-action">
        <div class="container text-center" data-aos="zoom-out">
            <h3>{{ $about['title'] }}</h3>
            <p>{{ $about['description'] }}</p>
        </div>
    </section>

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
                    <img src="{{ asset('image/img/home/' . $about['image']) }}" class="img-fluid rounded-4 mb-5"
                        alt="" width="100%">
                    <p>{{ $about['description2'] }}</p>
                </div>
                <div class="col-lg-6">
                    <div class="content ps-0 ps-lg-5">
                        <p>{{ $about['description3'] }}</p>
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

    {{-- Me location --}}
    <section id="location" class="about">
        <div class="container " data-aos="fade-up">

            <div class="section-header">
                <h2>LOKASI KAMI</h2>
                <h4>{{ $about['address'] }}</h4>
            </div>
            <iframe style="border-radius: 20px" src="{{ $about['maps_iframe'] }}" width="100%" height="450"
                style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
            <div class="row mt-5 mb-5">
                <div class="col">
                    <a href="{{ $about['maps_url'] }}" class="btn btn-primary btn-lg btn-block-custom1"><i
                            class="bi bi-geo-alt"></i> Ke Lokasi Sekarang</a>
                </div>
            </div>
        </div>
    </section>
    {{-- Contact Me --}}
    @include('layouts/contact_me')
@endsection
