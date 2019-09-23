@extends('front.layout.layout')

@section('title','Persik About')
@section('content')

<section class="section">

    <div class="container pt-lg-3">
        <div class="row px-2">
         @if($about->body())  {!! $about->body() !!} @endif
        </div>
       
    </div> <!-- container -->
</section> <!-- main-section -->

@endsection
