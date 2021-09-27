@extends('layouts.app')

@section('content')


    <div class="analytics-container" align="center">
        <div class="content center">
            <div class="title m-b-md center">
                <img src="/img/simpatik-logo.png" width="300">
            </div>
            <div class="links">
                <div class="card-header">
                    {{--                {{ __('Login') }}--}}
                </div>
                <br>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">

                            <div class="col-md-4">
                            </div>

                            <label for="email" class="col-md-1 col-form-label text-md-right">
                                {{--                                {{ __('E-Mail') }}--}}
                                Логин
                            </label>

                            <div class="col-md-2">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                       name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-5">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-4">
                            </div>
                            <label for="password" class="col-md-1 col-form-label text-md-right">
                                {{--                                {{ __('Password') }}--}}
                                Пароль
                            </label>
                            <div class="col-md-2">

                                <input id="password" type="password"
                                       class="form-control @error('password') is-invalid @enderror" name="password"
                                       required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <br>
                                <button type="submit" class="btn btn-primary center">
                                    {{--                                {{ __('Login') }}--}}
                                    Войти
                                </button>
                            </div>
                            <div class="col-md-5">
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
