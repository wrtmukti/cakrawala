@extends('layouts.profile')
@section('content')
    <main id="main">
        <section id="call-to-action" class="contact-custom2">
            <div class="container text-center" data-aos="zoom-out">
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <h1><b>{{ $project['project_name'] }}</b></h1>
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
                            @foreach ($project->imgPosters as $img)
                                <div class="carousel-item {{ $img['carousel_active'] == 'Y' ? 'active' : '' }}">
                                    <a href="{{ asset('image/project/poster/' . $img['img_file']) }}"
                                        data-gallery="portfolio-gallery-app" class="glightbox">
                                        <img class="image-project" style="width: 38%; height: auto;"
                                            src="{{ asset('image/project/poster/' . $img['img_file']) }}" alt="Project Image">
                                    </a>
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
                            @foreach ($project->imgPosters as $index => $img)
                                <li class="list-inline-item active">
                                    <a id="carousel-selector-{{ $index }}"
                                        class="{{ !empty($img['carousel_active']) ? 'selected' : '' }}"
                                        data-slide-to="{{ $index }}" data-target="#custCarousel">
                                        <img src="{{ asset('image/project/poster/' . $img['img_file']) }}" class="img-fluid"
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
            <div class="row">
                <div class="col-md-12">
                    <div id="custCarousel" class="carousel slide" data-ride="carousel" align="center">
                        <!-- slides -->
                        <div class="carousel-inner">
                            @foreach ($project->imgTypes as $img)
                                <div class="carousel-item {{ $img['carousel_active'] == 'Y' ? 'active' : '' }}">
                                    <a href="{{ asset('image/project/type/' . $img['img_file']) }}"
                                        data-gallery="portfolio-gallery-app" class="glightbox">
                                        <img class="image-project" style="width: 38%; height: auto;"
                                            src="{{ asset('image/project/type/' . $img['img_file']) }}" alt="Project Image">
                                    </a>
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
                            @foreach ($project->imgTypes as $index => $img)
                                <li class="list-inline-item active">
                                    <a id="carousel-selector-{{ $index }}"
                                        class="{{ !empty($img['carousel_active']) ? 'selected' : '' }}"
                                        data-slide-to="{{ $index }}" data-target="#custCarousel">
                                        <img src="{{ asset('image/project/type/' . $img['img_file']) }}" class="img-fluid"
                                            style="border-radius: 5px">
                                    </a>
                                </li>
                            @endforeach
                        </ol>

                    </div>
                </div>
            </div>
        </section>


        {{-- Siteplan --}}
        <section id="siteplan" class="contact">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>SITEPLAN</h2>
                    <p>Aperiam dolorum et et wuia molestias qui eveniet numquam nihil porro incidunt dolores placeat sunt id
                        nobis omnis tiledo stran delop</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="custCarousel" class="carousel slide" data-ride="carousel" align="center">
                        <!-- slides -->
                        <div class="carousel-inner">
                            @foreach ($project->imgSiteplans as $img)
                                <div class="carousel-item {{ $img['carousel_active'] == 'Y' ? 'active' : '' }}">
                                    <a href="{{ asset('image/project/siteplan/' . $img['img_file']) }}"
                                        data-gallery="portfolio-gallery-app" class="glightbox">
                                        <img class="image-project" style="width: 38%; height: auto;"
                                            src="{{ asset('image/project/siteplan/' . $img['img_file']) }}" alt="Project Image">
                                    </a>
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
                            @foreach ($project->imgSiteplans as $index => $img)
                                <li class="list-inline-item active">
                                    <a id="carousel-selector-{{ $index }}"
                                        class="{{ !empty($img['carousel_active']) ? 'selected' : '' }}"
                                        data-slide-to="{{ $index }}" data-target="#custCarousel">
                                        <img src="{{ asset('image/project/siteplan/' . $img['img_file']) }}" class="img-fluid"
                                            style="border-radius: 5px">
                                    </a>
                                </li>
                            @endforeach
                        </ol>

                    </div>
                </div>
            </div>
        </section><!-- End Contact Section -->




        <!-- ======= Location ======= -->
        <section id="location" class="about sections-bg">
            <div class="container " data-aos="fade-up">

                <div class="section-header">
                    <h2>LOKASI</h2>
                    <h4>{{ $project['address'] }}</h4>
                </div>
                <iframe style="border-radius: 20px; box-shadow: 0px 0px 40px rgba(0, 0, 0, 0.3);" src="{{ $project['iframe_maps'] }}" width="100%" height="450"
                    style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div class="row mt-5 mb-5">
                    <div class="col">
                        <a href="{{ route('download-brochures', $project['id_project']) }}" style="box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);" class="btn btn-primary btn-lg btn-block-custom1 margin_cust_1"><i
                                class="fa fa-download"></i> Unduh Brosur</a>
                    </div>
                    <div class="col">
                        <a href="{{ $contact['contact_me'] }}" style="box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);" class="btn btn-secondary btn-lg btn-block-custom2 margin_cust_1"><i
                                class="fab fa-whatsapp"></i>
                            Hubungi Kami</a>
                    </div>
                    <div class="col">
                        <a href="{{ $project['link_maps'] }}" style="box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);" class="btn btn-primary btn-lg btn-block-custom1 margin_cust_1"><i
                                class="fa fa-compass"></i> Maps</a>
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->




        {{-- Contact Me --}}
        @include('layouts/contact_me')

    </main><!-- End #main -->
@endsection
