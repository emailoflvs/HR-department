@extends('layouts.application_form')

@section('content')
    {{--    <script type="text/javascript" src="http://yandex.st/jquery/1.4.4/jquery.min.js"></script>--}}

    <div class="analytics-container" align="center">

        <div class="content center">
            <div class="title m-b-md center">

            </div>

            <div class="page-content container-fluid" align="left">

                @include('.hr.person_application_form.html.application_form_html_div_header')
                <table width="100%">
                    <tr>
                        <td><h3>
                                Холдинг "Симпатик Групп"
                            </h3></td>
                        <td><img src="/img/simpatik-logo.png" width="100"></td>
                    </tr>
                </table>

                <div class="freebirdFormviewerViewHeaderRequiredLegend"
                     aria-hidden="true" dir="auto">
                </div>
                @include('.hr.person_application_form.html.application_form_html_div_footer')

                @include('.hr.person_application_form.html.application_form_html_div_header')

                <h4>
                    Спасибо. Ваша анкета успешно отправлена.
                </h4>
                <div class="freebirdFormviewerViewHeaderRequiredLegend"
                     aria-hidden="true" dir="auto">
                </div>
                @include('.hr.person_application_form.html.application_form_html_div_footer')
            </div>
        </div>
    </div>

@endsection
