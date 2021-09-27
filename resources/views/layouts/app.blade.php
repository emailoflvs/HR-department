@include('layouts.header')

<body class="voyager ">

{{--<div id="voyager-loader" style="display: none;">--}}
{{--    <img src="/admin/voyager-assets?path=images%2Flogo-icon.png" alt="Voyager Loader">--}}
{{--</div>--}}
<div class="app-container">
    <div class="fadetoblack visible-xs"></div>
    <div class="row content-container">
        @auth
            @include('navigation.menu')
        @endauth

        <!-- Main Content -->
        <div class="container-fluid">
            <div class="side-body padding-top">

                @yield('content')

@include('layouts.footer')
