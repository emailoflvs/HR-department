@extends('layouts.app')

@section('content')
<style>
    .links > a {
        color: red;
        padding: 0 20px;
        font-size: 17px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }
</style>
{{--    <div class="container">--}}
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                            <div class="content"  style="border-radius:4px; padding:20px; background:#fff; margin:0; color:#999; text-align:center;">
                            <div class="title m-b-md">
                                <img src="/img/simpatik-logo.png" width="100">
                            </div>
<h3>Основной рабочий стол</h3>

{{--                                {!! role('') !!}--}}

{{--                                @if (Auth::user()->hasRole('admin') || Auth::user()->hasRole('developer'))--}}
{{--                                    <div class="links">--}}
{{--                                        <a href="/admin"> ->> Админ панель <<- </a>--}}
{{--                                        <br>--}}
{{--                                        <br>--}}
{{--                                    </div>--}}
{{--                                @endif--}}
                                {{--            {{ $title }}--}}
{{--                                <br>--}}
{{--                                <div class="links">--}}
{{--                                    <a href="/workplace"> ->> Workplace <<- </a>--}}
{{--                                    --}}{{--            {{ $title }}--}}
{{--                                </div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
{{--    </div>--}}


{{--    <div class="side-body padding-top">--}}
{{--        <div class="page-content">--}}
{{--            <div class="analytics-container" style="border-radius:4px; padding:20px; background:#fff; margin:0; color:#999; text-align:center;">--}}
{{--                --}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div class="card-header">{{ __('Dashboard') }}</div>--}}

    {{--    @if (session('status'))--}}
{{--        <div class="alert alert-success" role="alert">--}}
{{--            {{ session('status') }}--}}
{{--        </div>--}}
{{--    @endif--}}

{{--    {{ __('You are logged in!') }}--}}

    {{--    <div class="flex-center position-ref full-height">--}}
{{--        @if (Route::has('login'))--}}
{{--            <div class="top-right links">--}}
{{--                @auth--}}
{{--                    --}}{{--                    <a href="{{ url('/') }}">Home</a>--}}
{{--                    <a href="{{ route('logout') }}">Logout</a>--}}
{{--                @else--}}
{{--                    <a href="{{ route('login') }}">Login</a>--}}

{{--                    --}}{{--                    @if (Route::has('register'))--}}
{{--                    --}}{{--                        <a href="{{ route('register') }}">Register</a>--}}
{{--                    --}}{{--                    @endif--}}
{{--                @endauth--}}
{{--            </div>--}}
{{--        @endif--}}
{{--    </div>--}}

@endsection
