@extends('front.layout.layout')

@section('title','Persik About')
@section('content')

<section class="section">

    <div class="container">
        <div class="row justify-content-center">
         @if($contact->body())  {!! $contact->body() !!} @endif
        </div>
       
    </div> <!-- container -->
</section> <!-- main-section -->

@endsection
