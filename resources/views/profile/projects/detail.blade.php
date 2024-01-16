@extends('layouts.profile')
@section('content')
    <main id="main">

        <section id="call-to-action" class="contact-custom2">
            <div class="container text-center" data-aos="zoom-out">
                <h1><b>{{ $project['name'] }}</b></h1>
            </div>
        </section>

        {{-- Project Image --}}
        <section class="">
            <div class="section-header">
                <h2>PROJECT</h2>
                <p>Aperiam dolorum et et wuia molestias qui eveniet numquam nihil porro incidunt dolores placeat sunt id
                    nobis omnis tiledo stran delop</p>
            </div>

            {{-- Carousel --}}
            <div class="row">
                <div class="col-md-12">
                    <div id="custCarousel" class="carousel slide" data-ride="carousel" align="center">
                        <!-- slides -->
                        <div class="carousel-inner">
                            @foreach ($project['image_poster'] as $img)
                                <div class="carousel-item {{ $img['carousel_active'] }}">
                                    <img class="image-project" style="width: 38%; height: auto;"
                                        src="{{ asset('image/project/' . $img['img']) }}" alt="Project Image">
                                </div>
                            @endforeach
                        </div>

                        <!-- Left right -->
                        <a class="carousel-control-prev" href="#custCarousel" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#custCarousel" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>

                        <!-- Thumbnails -->
                        <ol class="carousel-indicators list-inline">
                            @foreach ($project['image_poster'] as $index => $img)
                                <li class="list-inline-item {{ $img['carousel_active'] }}">
                                    <a id="carousel-selector-{{ $index }}"
                                        class="{{ !empty($img['carousel_active']) ? 'selected' : '' }}"
                                        data-slide-to="{{ $index }}" data-target="#custCarousel">
                                        <img src="{{ asset('image/project/' . $img['img']) }}" class="img-fluid"
                                            style="border-radius: 5px">
                                    </a>
                                </li>
                            @endforeach
                        </ol>

                    </div>
                </div>
            </div>
            {{-- End Carousel --}}
        </section>

        {{-- Facility --}}
        <section id="services" class="services sections-bg">
            <div class="section-header">
                <h2>TYPE</h2>
                <p>Aperiam dolorum et et wuia molestias qui eveniet numquam nihil porro incidunt dolores placeat sunt id
                    nobis omnis tiledo stran delop</p>
            </div>
            <div class="section-header">
                <img src="{{ asset('image/project/' . $project['image_type']) }}" class="img-fluid image-project"
                    alt="TYPE">
            </div>
        </section>



        <section id="siteplan" class="contact">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>SITEPLAN</h2>
                    <p>Aperiam dolorum et et wuia molestias qui eveniet numquam nihil porro incidunt dolores placeat sunt id
                        nobis omnis tiledo stran delop</p>
                </div>
            </div>
            <div class="section-header">
                <img src="{{ asset('image/project/' . $project['image_siteplan']) }}" class="img-fluid image-project"
                    alt="Siteplan">
            </div>
        </section><!-- End Contact Section -->




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
        </section><!-- End About Us Section -->




        {{-- Contact Me --}}
        @include('layouts/contact_me')

    </main><!-- End #main -->
@endsection
