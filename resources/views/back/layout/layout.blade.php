<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/front/css/style.css">
    <link rel="stylesheet" href="/front/css/media.css">
    <link rel="stylesheet" href="/front/font/css/font-awesome.css">
    <link rel="stylesheet" href="/front/libs/bootstrap/css/bootstrap.min.css">
    <link rel="shortcut icon" href="/front/images/favicon.png" type="image/x-icon">
    @stack('css')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>


<header class="navbar navbar-expand navbar-dark flex-column flex-md-row bd-navbar bg-info">
    <div class="navbar-nav-scroll">
        <ul class="navbar-nav bd-navbar-nav flex-row">
            <li class="nav-item">
                <a class="nav-link text-dark" href="/">
                            <img src="/front/images/logo.png" width="100" height="30" class="d-inline-block align-top " alt="">
                </a>
            </li>
            <li class=" nav-item  ">
                <a class="nav-link text-dark btn {{ active(['product','product.*','product./']) }}  text-dark d-none d-lg-inline-block mb-3 mb-md-0 ml-md-3" href="{{route('product')}}">@lang('admin.product')</a>
            </li>
            <li class=" nav-item ">
                <a class="nav-link text-dark btn  {{ active(['about','about.*']) }}  text-dark d-none d-lg-inline-block mb-3 mb-md-0 ml-md-3" href="{{route('about')}}">@lang('admin.about')</a>
            </li>
            <li class=" nav-item ">
                <a class="nav-link text-dark btn  {{ active(['contact','contact.*']) }}  text-dark d-none d-lg-inline-block mb-3 mb-md-0 ml-md-3" href="{{route('contact')}}">@lang('admin.contact')</a>
            </li>
            <li class=" nav-item ">
                <a class="nav-link text-dark btn  {{ active(['setting','setting.*']) }}  text-dark d-none d-lg-inline-block mb-3 mb-md-0 ml-md-3" href="{{route('setting')}}">@lang('admin.setting')</a>
            </li>

        </ul>
    </div>

    <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">


    </ul>

    <a class="btn btn-bd-download text-dark d-none d-lg-inline-block mb-3 mb-md-0 ml-md-3" href="{{ route('logout') }}"
       onclick="event.preventDefault();document.getElementById('logout-form').submit();">
        @lang('admin.logout')
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</header>

<!--@if (session('success'))-->
<!--    <div class="alert alert-success justify-content-center" role="alert">-->
<!--        {{ session('success') }}-->
<!--    </div>-->
<!--@endif-->

@yield('content')



 <a class="popup_message" id="popup_message" data-toggle="modal" data-target="#message" href="#"></a>
        <div class="modal fade" id="message" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content bg-info">
                    <div class="alert ">
                        <button type="button" class="close"  data-dismiss="modal" aria-hidden="true">&times;</button>
                        <strong><i class="fas fa fa-info"></i> {{ session('success') }}</strong><br>
                    </div>
                </div>
            </div>
        </div>
        
<footer>
</footer> <!-- footer -->

<script src="/front/js/jquery.js"></script>
<script src="/front/libs/bootstrap/js/bootstrap.min.js"></script>
<script src="/front/libs/bootstrap/js/popper.min.js"></script>
<script src="/front/ckeditor/ckeditor.js"></script>

<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });

    CKEDITOR.replace('about_ru');
    CKEDITOR.replace('about_uz');
</script>
@stack('js')
@if(session('success'))
    <script>
    document.getElementById("popup_message").click();
    </script>
@endif
</body>
</html>
