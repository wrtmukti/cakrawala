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
                <img src="{{ asset('image/project/' . $project['image_poster']) }}" class="img-fluid image-project"
                    alt="PROJECT" style="width: 68%; height: auto;">
            </div>
        </section>

        {{-- Facility --}}
        <section id="services" class="services sections-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>FITUR</h2>
                    {{-- <p>Aperiam dolorum et et wuia molestias qui eveniet numquam nihil porro incidunt dolores placeat sunt id nobis omnis tiledo stran delop</p> --}}
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
                <h2>TIPE</h2>
                {{-- <p>Aperiam dolorum et et wuia molestias qui eveniet numquam nihil porro incidunt dolores placeat sunt id nobis omnis tiledo stran delop</p> --}}
            </div>
            <div class="section-header">
                <img src="{{ asset('image/project/' . $project['image_type']) }}" class="img-fluid image-project"
                    alt="TIPE">
            </div>
        </section>

        {{-- Spesification --}}
        <section id="services" class="services sections-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>SPESIFIKASI</h2>
                    {{-- <p>Aperiam dolorum et et wuia molestias qui eveniet numquam nihil porro incidunt dolores placeat sunt id nobis omnis tiledo stran delop</p> --}}
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
                    {{-- <p>Aperiam dolorum et et wuia molestias qui eveniet numquam nihil porro incidunt dolores placeat sunt id nobis omnis tiledo stran delop</p> --}}
                </div>
            </div>
            <div class="section-header">
                <img src="{{ asset('image/project/' . $project['image_siteplan']) }}" class="img-fluid image-project"
                    alt="TIPE">
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
                            <h3>Free Plan</h3>
                            <div class="icon">
                                <i class="bi bi-box"></i>
                            </div>
                            <h4><sup>$</sup>0<span> / month</span></h4>
                            <ul>
                                <li><i class="bi bi-check"></i> Quam adipiscing vitae proin</li>
                                <li><i class="bi bi-check"></i> Nec feugiat nisl pretium</li>
                                <li><i class="bi bi-check"></i> Nulla at volutpat diam uteera</li>
                                <li class="na"><i class="bi bi-x"></i> <span>Pharetra massa massa ultricies</span></li>
                                <li class="na"><i class="bi bi-x"></i> <span>Massa ultricies mi quis hendrerit</span>
                                </li>
                            </ul>
                            <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
                        </div>
                    </div><!-- End Pricing Item -->

                    <div class="col-lg-4">
                        <div class="pricing-item featured">
                            <h3>Business Plan</h3>
                            <div class="icon">
                                <i class="bi bi-airplane"></i>
                            </div>

                            <h4><sup>$</sup>29<span> / month</span></h4>
                            <ul>
                                <li><i class="bi bi-check"></i> Quam adipiscing vitae proin</li>
                                <li><i class="bi bi-check"></i> Nec feugiat nisl pretium</li>
                                <li><i class="bi bi-check"></i> Nulla at volutpat diam uteera</li>
                                <li><i class="bi bi-check"></i> Pharetra massa massa ultricies</li>
                                <li><i class="bi bi-check"></i> Massa ultricies mi quis hendrerit</li>
                            </ul>
                            <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
                        </div>
                    </div><!-- End Pricing Item -->

                    <div class="col-lg-4">
                        <div class="pricing-item">
                            <h3>Developer Plan</h3>
                            <div class="icon">
                                <i class="bi bi-send"></i>
                            </div>
                            <h4><sup>$</sup>49<span> / month</span></h4>
                            <ul>
                                <li><i class="bi bi-check"></i> Quam adipiscing vitae proin</li>
                                <li><i class="bi bi-check"></i> Nec feugiat nisl pretium</li>
                                <li><i class="bi bi-check"></i> Nulla at volutpat diam uteera</li>
                                <li><i class="bi bi-check"></i> Pharetra massa massa ultricies</li>
                                <li><i class="bi bi-check"></i> Massa ultricies mi quis hendrerit</li>
                            </ul>
                            <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
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
                        <a href="" class="btn btn-primary btn-lg btn-block-custom1"><i class="fa fa-download"></i>
                            Unduh Brosur</a>
                    </div>
                    <div class="col">
                        <a href="" class="btn btn-secondary btn-lg btn-block-custom2"><i class="fab fa-whatsapp"></i>
                            Hubungi Kami</a>
                    </div>
                    <div class="col">
                        <a href="{{ $project['maps_url'] }}" class="btn btn-primary btn-lg btn-block-custom1"><i
                                class="fa fa-compass"></i> Maps</a>
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->


        <section id="services" class="contact contact-custom">
            <div class="container" data-aos="fade-up">
                <div class="col-lg-12">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form"
                        style="border-radius: 2rem;">
                        <div class="section-header">
                            <h2>Dapatkan penawaran khusus dari Cakrawala</h2>
                            {{-- <p>Nulla dolorum nulla nesciunt rerum facere sed ut inventore quam porro nihil id ratione ea sunt quis
                                dolorem dolore earum</p> --}}
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <h5 class="text-center">Nama</h5>
                                <input type="text" name="name" class="form-control rounded-pill" id="name"
                                    placeholder="Masukkan nomor anda . . . ." required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <h5 class="text-center">No. WhatsApp</h5>
                                <input type="email" class="form-control rounded-pill" name="no_wa_client"
                                    id="" placeholder="Masukkan nomor Whats App . . . ." required>
                            </div>
                        </div>


                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit" style="background-color:#C82121;">Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection
