@extends('layouts.profile')
@section('content')
{{-- Hero --}}
<section id="call-to-action-award" class="call-to-action-award">
    <div class="container text-center" data-aos="zoom-out">
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
    </div>
</section>


{{-- Penghargaan --}}
@foreach ( $award['award_picture'] as $awards )    
<section class="" style="padding: 0 200px">
    <div class="section-header">
        <h2>{{ $awards['title'] }}</h2>
        <p>{{ $award['award_desc']['desc1'] }}</p>
    </div>
    <div class="section-header">
        <img src="{{ asset('image/award/' . $awards['img_file']) }}" class="img-fluid image-project"
            alt="Award Image">
    </div>
</section>
@endforeach

{{-- Contact Me --}}
@include('layouts/contact_me')

@endsection