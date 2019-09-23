@extends('front.layout.layout')

@section('title','ShopApp')
@section('content')



<section class="section">
		<div class="container mt-sm-5">
			<div class="row">
				<div class="col-sm-6 col-md-5 col-xl-4 d-flex align-items-start">
					<div class="mycard2 mybig_card mb-0">
						<div class="swiper-container ">

							<div class="swiper-wrapper ">

                            @foreach($product->images as $image)
								<div class="swiper-slide mycard_img2">
									<img src="@if($image)/{{$image->image}} @endif" alt="{{$product->title()}}">
								</div>
							@endforeach	
						
							</div>

							<div class="myswiper-button-next">
								<i class="fa fa-angle-right"></i>
							</div>
							<div class="myswiper-button-prev">
								<i class="fa fa-angle-left"></i>
							</div>
						</div>



						<a href="#" class="mycard_info2">
							<h3>@if($product->title()) {{$product->title()}} @endif</h3>
							<div>
								<h4>@if($product->price['sell']) {{$product->price['sell']}} @endif @if(app()->getLocale() == 'ru') сум @else so'm @endif </h4>
								<span>@if($product->price['discount']) {{$product->price['discount']}}  @if(app()->getLocale() == 'ru') сум @else so'm @endif @endif  </span>
							</div>
						</a> <!-- mycard_info -->


						<div class="mycard_btns">
			            	<a href="#" class="oneclick_btn order w-100" data-toggle="modal" data-target="#exampleModal" data-id="{{$product->name}}" data-name="{{$product->title()}}" data-price="{{$product->price['sell']}}"><img src="/front/images/click.png" alt="">Купить в 1 клик</a>
						</div> <!-- mycard_btns -->

					</div> <!-- mycard -->
				</div>
				<div class="col-sm-6 col-md-7 col-xl-8">
					<div class="mymin-h">
						<div class="white_bg">
							<p>
							     @if($product->body())
                                {!! $product->body() !!}
                                @endif
							</p>
						</div>
						<div class="mycard_btns">
					        <a href="#" class="oneclick_btn order w-100" data-toggle="modal" data-target="#exampleModal" data-id="{{$product->name}}" data-name="{{$product->title()}}" data-price="{{$product->price['sell']}}"><img src="/front/images/click.png" alt="">Купить в 1 клик</a>
						</div>
					</div>

				</div>
			</div>

		</div>
	</section>
@endsection
@push('css')
    <link rel="stylesheet" href="/front/libs/swiper-slider/swiper.min.css">
@endpush
@push('js')
    <script src="/front/libs/swiper-slider/swiper.min.js"></script>
@endpush

