<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/media.css') }}" rel="stylesheet">
    @stack("style")

</head>
<body>

{{--    Шапка--}}
<div class="container-fluid bg-white">
    <nav class="navbar navbar-expand-lg navbar-light bg-white header">
        {{--        Логотип--}}
        <a class="navbar-brand ml-md-5 text-uppercase font-weight-bold logo" href="/">Нужен логотип</a>
        {{--        Конец логотипа--}}
        {{--        Кнопка меню--}}
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        {{--        Конец Кнопки меню--}}
        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto">
                <li class="nav-item ml-2">
                    <a class="nav-link font-weight-bold header-link" href="#">
                        <i class="fas fa-envelope main-color"></i>+7 707 777 77 77
                    </a>
                </li>
                <li class="nav-item ml-2">
                    <a class="nav-link font-weight-bold header-link" href="#">
                        <i class="fas fa-phone-alt main-color"></i>komek@gmail.com
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle font-weight-bold text-black-100 text-dark" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">РУС</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">EN</a>
                        <a class="dropdown-item" href="#">ҚАЗ</a>
                    </div>
                </li>
                <li class="nav-item ml-2">
                    <a class="nav-link font-weight-bold header-link main-color" href="#">
                        ВОЙТИ
                    </a>
                </li>
                <li class="nav-item">
                    <a class="navbar-brand ml-md-5 font-weight-bold border-logo" href="/">Зарегистрироваться</a>
                </li>
            </ul>
        </div>


    </nav>
</div>

{{--Конец Шапки--}}

{{--    Основной контент--}}
@yield("content")

{{--    Конец Основного контента--}}


<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
@stack("script")
</body>
</html>
