@extends('layouts.profile')
@section('content')
    {{-- Hero --}}
    <section id="call-to-action" class="call-to-action">
        <div class="container text-center" data-aos="zoom-out">
            <h3>{{ $contact['title'] }}</h3>
            <p>{{ $contact['description'] }}</p>
        </div>
    </section>

    {{-- Content Contact --}}
    <section id="stats-counter" class="stats-counter mb-4" style="margin-bottom:20px;">


        <div class="section-header">
            <h2>Kontak kami, <b style="font-weight: bold; color:#C82121;">kami siap!</b></h2>
            <p>Jangan ragu untuk menghubungi kami! <b style="font-weight: bold; color:#C82121;">Klik tombol di bawah ini</b> untuk memulai percakapan dan layani kebutuhan
                Anda dengan cepat. </p>
        </div>

        <div class="icon-boxes position-relative">
            <div class="container position-relative">
                <div class="row gy-4 mt-5">

                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <a href="tel:{{ $contact['no_telephone'] }}">
                            <div class="icon-box2">
                                <div class="icon"><i class="bi bi-telephone"></i></div>
                                <h4 class="title"><a href="tel:{{ $contact['no_telephone'] }}" class="stretched-link">Ponsel</a></h4>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <a href="https://wa.me/{{ $contact['no_whatsapp'] }}">
                            <div class="icon-box2">
                                <div class="icon"><i class="bi bi-whatsapp"></i></div>
                                <h4 class="title"><a href="https://wa.me/{{ $contact['no_whatsapp'] }}" class="stretched-link">Whatsapp</a></h4>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <a href="mailto:{{ $contact['email'] }}">
                            <div class="icon-box2">
                                <div class="icon"><i class="bi bi-envelope-at"></i></div>
                                <h4 class="title"><a href="mailto:{{ $contact['email'] }}" class="stretched-link">Email</a></h4>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <a href="{{ $contact['youtube'] }}">
                            <div class="icon-box2">
                                <div class="icon"><i class="bi bi-youtube"></i></div>
                                <h4 class="title"><a href="{{ $contact['youtube'] }}" class="stretched-link">Youtube</a></h4>
                            </div>
                        </a>
                    </div>
                    

                </div>
            </div>
        </div>

    </section>

    <section>

    </section>

    {{-- Contact Me --}}
    @include('layouts/contact_me')
@endsection
