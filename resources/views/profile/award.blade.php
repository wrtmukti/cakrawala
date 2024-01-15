@extends('layouts.profile')
@section('content')
{{-- Hero --}}
<section id="call-to-action" class="call-to-action">
    <div class="container text-center" data-aos="zoom-out">
        <h3 style="font-size:3rem;">{{ $award['award_desc']['title'] }}</h3>
        <h3>{{ $award['award_desc']['company'] }}</h3>
        <p>{{ $award['award_desc']['desc1'] }}</p>
    </div>
</section>


{{-- Penghargaan --}}
@foreach ( $award['award_picture'] as $awards )    
<section class="">
    <div class="section-header">
        <h2>{{ $awards['name'] }}</h2>
        <p>Aperiam dolorum et et wuia molestias qui eveniet numquam nihil porro incidunt dolores placeat sunt id nobis omnis tiledo stran delop</p>
    </div>
    <div class="section-header">
        <img src="{{ asset('image/award/' . $awards['image']) }}" class="img-fluid image-project"
            alt="Award Image">
    </div>
</section>
@endforeach

{{-- Contact Me --}}
@include('layouts/contact_me')

@endsection