@extends('layouts.profile')
@section('content')
    {{-- Hero --}}
    <section id="call-to-action" class="call-to-action">
        <div class="container text-center" data-aos="zoom-out">
            <h3>{{ $collaboration['description']['title'] }}</h3>
            <p>{{ $collaboration['description']['desc'] }}</p>
        </div>
    </section>

    {{-- Kerja Sama --}}
    <section id="portfolio" class="portfolio sections-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>{{ $collaboration['description']['title'] }}</h2>
                <p>{{ $collaboration['description']['desc'] }}</p>
            </div>

            <div class="row gy-4 portfolio-container">

                @foreach ($collaboration['activity'] as $activity)
                    <div class="col-xl-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('image/collaboration/'.$activity['image']) }}"
                                data-gallery="portfolio-gallery-app" class="glightbox"><img
                                    src="{{ asset('image/collaboration/'.$activity['image']) }}" class="img-fluid"
                                    alt="Image Collaboration"></a>
                            <div class="portfolio-info" style="height: 150px">
                                <h4><a href="portfolio-details.html" title="More Details">{{ $activity['name'] }}</a></h4>
                                <p>{{ $activity['desc'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>

        </div>
    </section>

    {{-- Contact Me --}}
    @include('layouts/contact_me')
@endsection