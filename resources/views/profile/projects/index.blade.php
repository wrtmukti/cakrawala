@extends('layouts.profile')
@section('content')
    <main id="main">

        <section id="call-to-action" class="contact-custom2">
            <div class="container text-center" data-aos="zoom-out">
                <h1><b>Seluruh Proyek Cakrawala</b></h1>
            </div>
        </section>

        {{-- Project List --}}
        <!-- ======= Project Section ======= -->
        <section id="portfolio" class="portfolio sections-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Proyek Cakrawala</h2>
                    <p> CAKRAWALA UTAMA RESIDENCE adalah project perumahan pertama dan sukses sampai saat ini, sudah lebih
                        dari 500+ unit rumah terjual. </p>
                </div>

                <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
                    data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

                    {{-- Website Scale --}}
                    <div class="row justify-content-center">
                        @foreach ($projects as $project)
                            <div class="col-xl-4 col-md-6 portfolio-item filter-app mb-3">
                                <div class="portfolio-wrap">
                                    <a href="{{ asset('image/project/poster/' . $project->imgPosters[0]['img_file']) }}"
                                        data-gallery="portfolio-gallery-app" class="glightbox"><img
                                            src="{{ asset('image/project/poster/' . $project->imgPosters[0]['img_file']) }}"
                                            class="img-fluid" alt=""></a>
                                    <div class="portfolio-info">
                                        {{-- Name --}}
                                        <h5>
                                            <a href="project/detail/{{ $project['id_project'] }}" target="__blank"
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
                        @endforeach
                    </div>

                </div>
            </div>
        </section>
        <!-- End Project Section -->

        {{-- Contact Me --}}
        @include('layouts/contact_me')

    </main><!-- End #main -->
@endsection
