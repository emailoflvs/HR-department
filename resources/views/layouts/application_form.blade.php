@php
    session_start();
@endphp<!DOCTYPE html>
<html lang="ru">
{{--<html lang="ru" dir="ltr">--}}
<head>
    <title>Анкета кандидата</title>
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

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <!-- App CSS -->
    <link rel="stylesheet" href="/admin/voyager-assets?path=css%2Fapp.css">
{{--    <link rel="stylesheet" href="/css/app.css">--}}

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

        /*-------- Группа кнопок---------- */
        .form_radio_group {
            display: inline-block;
            overflow: hidden;
        }

        .form_radio_group-item {
            display: inline-block;
            float: left;
        }

        .form_radio_group input[type=radio] {
            display: none;
        }

        .form_radio_group label {
            display: inline-block;
            cursor: pointer;
            padding: 0px 10px;
            line-height: 34px;
            border: 1px solid #999;
            border-right: none;
            user-select: none;
        }

        .form_radio_group .form_radio_group-item:first-child label {
            border-radius: 6px 0 0 6px;
        }

        .form_radio_group .form_radio_group-item:last-child label {
            border-radius: 0 6px 6px 0;
            border-right: 1px solid #999;
        }

        /* Checked */
        .form_radio_group input[type=radio]:checked + label {
            background: #ffe0a6;
        }

        /* Hover */
        .form_radio_group label:hover {
            color: #666;
        }

        /* Disabled */
        .form_radio_group input[type=radio]:disabled + label {
            background: #efefef;
            color: #666;
        }

        /*-------- Radio в виде кнопок---------- */
        .form_radio_btn {
            display: inline-block;
            margin-right: 5px;
        }

        .form_radio_btn input[type=radio] {
            display: none;
        }

        .form_radio_btn label {
            display: inline-block;
            cursor: pointer;
            padding: 0px 5px;
            line-height: 34px;
            border: 1px solid #999;
            border-radius: 6px;
            user-select: none;
        }

        /* Checked */
        .form_radio_btn input[type=radio]:checked + label {
            background: #ffe0a6;
        }

        /* Hover */
        .form_radio_btn label:hover {
            color: #666;
        }

        /* Disabled */
        .form_radio_btn input[type=radio]:disabled + label {
            background: #efefef;
            color: #666;
        }

        /*-----------Переключатель on/off----------------------*/
        .form_toggle {
            display: inline-block;
            overflow: hidden;
        }

        .form_toggle-item {
            float: left;
            display: inline-block;
        }

        .form_toggle-item input[type=radio] {
            display: none;
        }

        .form_toggle-item label {
            display: inline-block;
            padding: 0px 15px;
            line-height: 34px;
            border: 1px solid #999;
            border-right: none;
            cursor: pointer;
            user-select: none;
        }

        .form_toggle .item-1 label {
            border-radius: 6px 0 0 6px;
        }

        .form_toggle .item-2 label {
            border-radius: 0 6px 6px 0;
            border-right: 1px solid #999;
        }

        /* Checked */
        .form_toggle .item-1 input[type=radio]:checked + label {
            background: #ffc5c5;
        }

        .form_toggle .item-2 input[type=radio]:checked + label {
            background: #bbffbb;
        }

        /*-------- Стандартные элементы---------- */
        .form_radio {
            margin-bottom: 10px;
        }

        .form_radio input[type=radio] {
            display: none;
        }

        .form_radio label {
            display: inline-block;
            cursor: pointer;
            position: relative;
            padding-left: 25px;
            margin-right: 0;
            line-height: 18px;
            user-select: none;
        }

        .form_radio label:before {
            content: "";
            display: inline-block;
            width: 17px;
            height: 18px;
            position: absolute;
            left: 0;
            bottom: 1px;
            background: url(https://snipp.ru/img/radio-1.png) 0 0 no-repeat;
        }

        /* Checked */
        .form_radio input[type=radio]:checked + label:before {
            background: url(https://snipp.ru/img/radio-2.png) 0 0 no-repeat;
        }

        /* Hover */
        .form_radio label:hover:before {
            filter: brightness(120%);
        }

        /* Disabled */
        .form_radio input[type=radio]:disabled + label:before {
            filter: grayscale(100%);
        }

        .form {
            width: 150px;
            margin: 0 auto;
        }

        .voyager {
            /*background-color: #f9f9f9*/
            background-color: #e09d2d
        }

        body {
            background-color: #e09d2d
        }

        /*input:required:invalid {*/
        /*    background: pink;*/
        /*}*/
        /*input:required:valid {*/
        /*    background: green;*/
        /*}*/

        /*input:invalid {*/
        /*    border: 2px dashed red;*/
        /*}*/

        /*input:valid {*/
        /*    border: 2px solid black;*/
        /*}*/
    </style>

</head>

<body>
<div style="background-color: #e09d2d">

{{--<div id="voyager-loader" style="display: none;">--}}
{{--    <img src="/admin/voyager-assets?path=images%2Flogo-icon.png" alt="Voyager Loader">--}}
{{--</div>--}}
{{--<div class="app-container">--}}
{{--    <div class="fadetoblack visible-xs"></div>--}}
{{--    <div class="row content-container">--}}
@auth
    {{--        @include('navigation.menu')--}}
@endauth

<!-- Main Content -->
{{--        <div class="container-fluid">--}}
{{--            <div class="side-body padding-top">--}}

@yield('content')

</div>

{{--@include('layouts.footer')--}}
