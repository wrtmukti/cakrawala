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


{{-- Contact Me --}}
@include('layouts/contact_me')
@endsection