@extends('front.layout.layout')

@section('title','ShopApp')
@section('content')

<section class="section">

    <div class="container mt-sm-5">
        <div class="row">
            
            
            
            
            @foreach($products as $product)
        
        <!--<a href="{{route('more',$product->slug)}}">-->
        <div class="col-md-6 col-xl-3">
					<div class="mycard my-card_two">

						<div class="mycard_img">
							<img src="/{{$product->images[0]->image}}" alt="{{$product->title()}}">

						</div>
						<a href="{{route('more',$product->slug)}}" class="mycard_info2">
							<h3>@if($product->title()) {{\Illuminate\Support\Str::limit($product->title(),40)}} @endif</h3>
							<div>
								<h4> @if($product->price['sell']) {{$product->price['sell']}} @endif @if(app()->getLocale() == 'ru') сум @else so'm @endif </h4>
								<span>@if($product->price['discount']) {{$product->price['discount']}}  @if(app()->getLocale() == 'ru') сум @else so'm @endif @endif </span>
							</div>
						</a>
						<div class="mycard_btns">
							<a href="{{route('more',$product->slug)}}" class="cart_btn"><img src="/front/images/more_v.png" alt="">Подробнее</a>
							<a href="#" class="oneclick_btn order" data-toggle="modal" data-target="#exampleModal" data-id="{{$product->name}}" data-name="{{$product->title()}}" data-price="{{$product->price['sell']}}"><img src="/front/images/click.png" alt="">Купить</a>
						</div>
					</div>
				</div>
         <!--</a> -->
        
        
        
          
            
            
            
            
            
            
            
            
            
            
            @endforeach











        </div> <!-- row -->
    </div> <!-- container -->
</section> <!-- main-section -->

@endsection
