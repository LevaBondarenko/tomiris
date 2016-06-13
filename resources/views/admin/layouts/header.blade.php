<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.0/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/screen.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.js"></script>



</head>
<body>
<header class="header" style="height: 60px;">
    <div class="container">
        @if(\Illuminate\Support\Facades\Auth::check())
            <span style="float: left;">Вы авторизованны</span>
        @endif
        <ul class="header__navigation" style="margin: 20px 0 0 0;">

            @if(\Illuminate\Support\Facades\Auth::check())
                <li><a href="#">Новости</a></li>
                <li><a href="/">На сайт</a></li>
            @else

            @endif
            @if(\Illuminate\Support\Facades\Auth::check())
                <a href="{{url('logout/')}}">Выйти</a>
            @else
                <a href="{{url('admin/')}}">Вход</a>
            @endif
        </ul>
    </div>
</header>