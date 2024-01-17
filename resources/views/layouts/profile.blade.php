<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Cakrawala</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  {{-- NGROK ASSET --}}
  {{-- <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> --}}

  <!-- Favicons -->
  <link href="{{asset('image/icon/logo-cakrawala.png')}}" rel="icon">
  <link href="{{asset('image/icon/logo-cakrawala.png')}}" rel="apple-touch-icon">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />

  {{-- <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}"> --}}

  <!-- Vendor CSS Files -->
  <link href="{{asset('vendor/impact/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/impact/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/impact/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/impact/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/impact/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('vendor/impact/assets/css/main.css')}}" rel="stylesheet">

  {{-- Carousel --}}
  <script src="{{ asset('vendor/Impact/assets/js/jquery_3.2.1.min.js') }}"></script>
  <script src="{{ asset('vendor/Impact/assets/js/bootstrap_bundle_4.3.1.min.js') }}"></script>


  <!-- =======================================================
  * Template Name: Impact
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  {{-- <!-- ======= Header ======= -->
  <section id="topbar" class="topbar d-flex align-items-center " >
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center" ><a href="mailto:contact@example.com" >contact@example.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span >+1 5589 55488 55</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter" ><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook" ><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram" ><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin" ><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section><!-- End Top Bar --> --}}

  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="{{ route('/') }}" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Cakrawala<span>.</span></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          {{-- @dd($nav_bar); --}}
          @foreach ($nav_bar as $nav)
            @if ($nav['dropdown'] == 'true')
              <li class="dropdown">
                <a href="#" @if(Route::currentRouteName() == 'detail' || Route::currentRouteName() == 'project' ) class="active" @endif>
                  <span>{{ $nav['name'] }}</span> <i class="bi bi-chevron-down dropdown-indicator"></i>
                </a>
                <ul>
                  @foreach ($nav['dropdown_list'] as $sub_menu)
                    <li><a href="{{ route($nav['route'], $sub_menu['id']) }}" >{{ $sub_menu['name'] }}</a></li>
                  @endforeach
                </ul>
              </li>
            @else
              <li><a href="{{ route($nav['url']) }}" @if(Route::currentRouteName() == $nav['url']) class="active" @endif>{{ $nav['name'] }}</a></li>
            @endif
          @endforeach

      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
  <!-- End Header -->
  {{-- CONTENT --}}
    @yield('content')
  {{-- END CONTENT --}}

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.html" class="logo d-flex align-items-center">
            <span style="font-size: 25px">{{ $contact['company_name'] }}</span></a>
          <div class="col-lg-9">
            <p>{{ $contact['description'] }}</p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-6 footer-links">
          <h4>Menu yang tersedia</h4>
          <ul>
            @foreach ($nav_bar as $menu )
              <li><a href="{{ $menu['url'] }}">{{ $menu['name'] }}</a></li>          
            @endforeach
          </ul>
        </div>
{{-- 
        <div class="col-lg-2 col-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Web Development</a></li>
            <li><a href="#">Product Management</a></li>
            <li><a href="#">Marketing</a></li>
            <li><a href="#">Graphic Design</a></li>
          </ul>
        </div> --}}

        <div class="col-lg-4 col-md-12 footer-contact text-center text-md-start">
          <h4>Hubungi kami</h4>
          <p>
            
            {{ $contact['alamat']  }}
            <br>&nbsp;<br>
            <strong>Ponsel:</strong> + {{ $contact['no_telephone'] }}<br>
            <strong>Email:</strong> {{ $contact['email'] }}<br>
          </p>

        </div>

      </div>
    </div>

    <div class="container mt-4">
      <div class="copyright">
        &copy; Copyright <strong><span>PT. Cakrawala Pratama Manunggal</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/impact-bootstrap-business-website-template/ -->
        {{-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> --}}
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('vendor/impact/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('vendor/impact/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('vendor/impact/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('vendor/impact/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('vendor/impact/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('vendor/impact/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('vendor/impact/assets/vendor/php-email-form/validate.js')}}"></script>


  

  <!-- Template Main JS File -->
  <script src="{{asset('vendor/impact/assets/js/main.js')}}"></script>

</body>

</html>