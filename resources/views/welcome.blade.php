{{--<!DOCTYPE html>--}}
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
{{--<title>simpatik</title>--}}
{{--<head>--}}
{{--    <meta http-equiv="content-language" content="ru">--}}
{{--    <meta name="robots" content="all">--}}
{{--    <meta name="document-state" content="dynamic">--}}
{{--    <meta name="revisit-after" content="1 day">--}}
{{--    <meta name="resourse-type" content="document">--}}
{{--    <meta name="copyright" content="OOO «Телефонные Системы»">--}}
{{--    <meta name="verify-reformal" content="291d04502a4b1aed67913f0b">--}}
{{--    <meta name="keywords" content="call-центр, call-center, контакт-центр, contact-центр, телефонные системы, оборудование call-центра, Oktell, АТС-программа, IP-ATC, IP-PBX, IP-АТС, IP ATC, IP АТС, Contact-center, Contact-центр, контакт-центр, контакт центр, Call-center, Call-центр, call center, Call центр, коллцентр, колцентр, колл центр">--}}
{{--    <meta name="description" content="Компания «Телефонные Системы» — один из ведущих российских разработчиков систем автоматизации телефонного обслуживания. Основной программный продукт — коммуникационная платформа Oktell — многофункциональное программное решение для организации Call-центров, IP-АТС, клиентских сервисов. Важными принципами развития компании выступают технологичность, функциональность и ориентированность на достижение результата.">--}}

{{--    <meta charset="utf-8">--}}
{{--    <!-- Fonts -->--}}
{{--    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">--}}
{{--    <!-- Styles -->--}}
{{--    <style>--}}
{{--        html, body {--}}
{{--            background-color: #fff;--}}
{{--            color: #636b6f;--}}
{{--            font-family: 'Nunito', sans-serif;--}}
{{--            font-weight: 200;--}}
{{--            height: 100vh;--}}
{{--            margin: 0;--}}
{{--        }--}}
{{--        .full-height {--}}
{{--            height: 100vh;--}}
{{--        }--}}
{{--        .flex-center {--}}
{{--            align-items: center;--}}
{{--            display: flex;--}}
{{--            justify-content: center;--}}
{{--        }--}}
{{--        .position-ref {--}}
{{--            position: relative;--}}
{{--        }--}}
{{--        .top-right {--}}
{{--            position: absolute;--}}
{{--            right: 10px;--}}
{{--            top: 18px;--}}
{{--        }--}}
{{--        .content {--}}
{{--            text-align: center;--}}
{{--        }--}}
{{--        .title {--}}
{{--            font-size: 84px;--}}
{{--        }--}}
{{--        .links > a {--}}
{{--            color: red;--}}
{{--            padding: 0 20px;--}}
{{--            font-size: 17px;--}}
{{--            font-weight: 600;--}}
{{--            letter-spacing: .1rem;--}}
{{--            text-decoration: none;--}}
{{--            text-transform: uppercase;--}}
{{--        }--}}
{{--        .m-b-md {--}}
{{--            margin-bottom: 30px;--}}
{{--        }--}}
{{--    </style>--}}
{{--</head>--}}

{{--<body>--}}


<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/') }}">Home</a>
                <a href="{{ route('logout') }}">Logout</a>

            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif


    <div class="content">
        <div class="title m-b-md">
            <img src="/img/simpatik-logo.png" width="300">
        </div>
        <div class="links">
            <a href="/admin"> ->> Админ панель <<- </a>
{{--            {{ $title }}--}}
        </div>
    </div>
</div>

