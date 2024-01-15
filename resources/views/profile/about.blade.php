@extends('layouts.profile')
@section('content')
    {{-- Hero --}}
    <section id="call-to-action" class="call-to-action">
        <div class="container text-center" data-aos="zoom-out">
            <h3>{{ $about['title'] }}</h3>
            <p>{{ $about['description'] }}</p>
        </div>
    </section>

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
