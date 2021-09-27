@php
    session_start();
@endphp<!DOCTYPE html>
<html lang="ru">
{{--<html lang="ru" dir="ltr">--}}
<head>
    <title>{!! setting('site.title') !!}</title>
    {{--    <meta name="viewport" content="width=device-width, initial-scale=1">--}}
    {{--    <meta name="csrf-token" content="{{ csrf_token() }}"/>--}}
    <meta name="assets-path" content="/admin/voyager-assets"/>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcut icon" href="/admin/voyager-assets?path=images%2Flogo-icon.png" type="image/png">

    {{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />--}}
    {{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>--}}
    {{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />--}}
    {{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js" integrity="sha256-4iQZ6BVL4qNKlQ27TExEhBN1HFPvAvAMbFavKKosSWQ=" crossorigin="anonymous"></script>--}}
    {{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>--}}

    {{--    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>--}}

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <!-- App CSS -->
    <link rel="stylesheet" href="/admin/voyager-assets?path=css%2Fapp.css">

    <!-- Few Dynamic Styles -->
    <style type="text/css">
        .voyager .side-menu .navbar-header {
            background: #22A7F0;
            border-color: #22A7F0;
        }

        .widget .btn-primary {
            border-color: #22A7F0;
        }

        .widget .btn-primary:focus, .widget .btn-primary:hover, .widget .btn-primary:active, .widget .btn-primary.active, .widget .btn-primary:active:focus {
            background: #22A7F0;
        }

        .voyager .breadcrumb a {
            color: #22A7F0;
        }


    </style>

</head>
