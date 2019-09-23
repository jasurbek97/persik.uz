<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>@yield('title')</title>
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#1D1D1D">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#1D1D1D">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#1D1D1D">
    
    <link rel="stylesheet" href="/front/css/style.css">
    <link rel="stylesheet" href="/front/css/media.css">
    <link rel="stylesheet" href="/front/font/css/font-awesome.css">
    <link rel="stylesheet" href="/front/libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/front/libs/touch-sideswipe-master/touch-sideswipe.min.css">
    <link rel="shortcut icon" href="/front/images/favicon.png" type="image/x-icon">
    @stack('css')
          
        <!-- Facebook Pixel Code -->
                <script>
                !function(f,b,e,v,n,t,s)
                {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
                n.callMethod.apply(n,arguments):n.queue.push(arguments)};
                if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
                n.queue=[];t=b.createElement(e);t.async=!0;
                t.src=v;s=b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t,s)}(window,document,'script',
                'https://connect.facebook.net/en_US/fbevents.js');
                 fbq('init', '365688054020227'); 
                fbq('track', 'PageView');
                </script>
        <noscript>
         <img height="1" width="1" 
        src="https://www.facebook.com/tr?id=365688054020227&ev=PageView
        &noscript=1"/>
        </noscript>
        <!-- End Facebook Pixel Code -->
        
        
        
        <!-- Yandex.Metrika counter -->
        <script type="text/javascript" >
           (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
           m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
           (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
        
           ym(55410382, "init", {
                clickmap:true,
                trackLinks:true,
                accurateTrackBounce:true,
                webvisor:true
           });
        </script>
        <noscript><div><img src="https://mc.yandex.ru/watch/55410382" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
        
        
</head>
<body>
	<header>

		<nav class="main-nav notresponsive-nav">
			<div class="container">


				<div id="menu">
					<a href="/" class="logo mobil-logo">
						<img src="/front/images/logo.png" alt="Brand Logo">
					</a>

					<ul class="main-ul">
						<li><a href="{{route('about.f')}}" class="d-flex align-items-center link">О нас</a></li>
						<li><a href="#section02" class="d-flex align-items-center link">Доставка</a></li>
						<li><a href="{{route('contact.f')}}" class="d-flex align-items-center link">Контакты</a></li>
						<!-- Modal -->
					</ul>
				</div> <!-- #menu -->

			</div> <!-- container -->

		</nav>


		<div class="top-div">
			<a href="/" class="logo sticky-logo">
				<img src="/front/images/logo.png" alt="Brand Logo">
			</a>
		</div>

		<!-- MOBILE MENU -->

		<nav id="touchSideSwipe" class="touch-side-swipe responsive-nav">

			<div class="container p-0">
				<div id="menu">
					<div class="logo-div">
						<a href="/" class="logo">
							<img src="/front/images/logo.png" alt="Brand Logo">
						</a>

					</div>


					<ul class="main-ul">
						<li><a href="{{route('about.f')}}" class="hvr-underline-from-center link">О нас</a></li>
						<li><a href="#section01" class="hvr-underline-from-center link">Доставка</a></li>
						<li><a href="{{route('contact.f')}}" class="hvr-underline-from-center link">Контакты</a></li>
					</ul>


				</div>

			</div>

		</nav> <!-- touch-side-swipe responsive-nav -->
		
		 @if(url()->current() != route('index'))
            <div class="more-back">
		        <div class="container">
                    <button onclick="javascript: window.history.back();">
                        <i class="fas fa fa-angle-left text-white" ></i>
                    </button>
                </div>
            </div>
          @endif
    
    
    
	</header> <!-- header -->
	<div class="menu_out">

	</div>

	<div class="bonus">
		<div class="container">
			<p>@if($setting->header_text()){{$setting->header_text()}}@endif</p>
		</div>
	</div>


@yield('content')


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header ">
        <h5 class="modal-title text-center justify-content-center" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                <form action="http://shaftoli.ru/persik/order" method="GET">
                   
                    <input type="hidden" name="product_name" id="product_name">
                    
                    <input type="hidden" name="price" id="price">
                    
                   <div class="mb-2 d-flex justify-content-center align-items-center flex-column">
                        <label for="this_name">Имя</label>
                        <input id="this_name" type="text" class="my_input w-100" placeholder="" name="name" required>
                    </div>
                    
                    <div class="mb-2 d-flex justify-content-center align-items-center flex-column">
                        <label for="this_phone">Телефон</label>
                        <input id="this_phone" type="text" class="my_input w-100" placeholder="" name="phone" required>
                    </div>
                
                    <button type="submit" class="btn my_btn form-control mb-3 mt-2 h-25 text-white">Отправить</button>
                </form>
      </div>
    </div>
  </div>
</div>
<footer>
</footer> <!-- footer -->

<script src="/front/js/jquery.js"></script>
<script src="/front/libs/bootstrap/js/bootstrap.min.js"></script>
<script src="/front/libs/bootstrap/js/popper.min.js"></script>
{{--<script src="/front/js/smoothscroll.min.js"></script>--}}
<script src="/front/libs/touch-sideswipe-master/touch-sideswipe.min.js"></script>
<script src="/front/js/main.js"></script>

@stack('js')
<script>
    $('.order').on('click',function(){
        var name =  $(this).data('name');
        $('#exampleModalLabel').text(name)
         var price =  $(this).data('price');
        $('#price').val(price)
        var product_name = $(this).data('id');
             $('#product_name').val(product_name);
    })
</script>
</body>
</html>
