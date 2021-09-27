@extends('layouts.application_form')

@section('content')

    <div class="analytics-container" align="center">
        <div class="content center">
            <form class="page-content container-fluid" align="left" action="/hr_person_edit/{{ $person->id }}"
                  method="get">

                @include('.hr.person_application_form.html.application_form_html_div_header')
                <h3>Список вопросов в форме <a href="/hr_person_edit/{{ $person->id }}">
                        {{ $person->surname }} {{ $person->name }}</a></h3>

                @include('.hr.person_application_form.html.application_form_html_div_footer')

                {{--                @include('.hr.person_application_form.html.application_form_html_div_header')--}}

                {{--                --}}{{--                                 Как Вас зовут? (имя и фамилия)--}}
                {{--                @include('.hr.person_application_form.html.application_form_html_show_part', ['question'=>--}}
                {{--                                                                            $name])--}}

                {{--                --}}{{--              Вы пришли к нам на собеседование в городе--}}
                {{--                @include('.hr.person_application_form.html.application_form_html_show_part', ['question'=>--}}
                {{--                                                                            $filiation])--}}

                {{--                @include('.hr.person_application_form.html.application_form_html_show_part', ['question'=>--}}
                {{--                                                                                            $phoneNumber])--}}

                {{--                @include('.hr.person_application_form.html.application_form_html_show_part', ['question'=>--}}
                {{--                                                                                            $years])--}}

                {{--                --}}{{--                                Вы желаете работать:--}}
                {{--                @include('.hr.person_application_form.html.application_form_html_show_part', ['question'=>--}}
                {{--                                                                                            $hrEmploymentRule])--}}

                {{--                --}}{{--                                Ваш желаемый уровень дохода за первый месяц работы:--}}
                {{--                @include('.hr.person_application_form.html.application_form_html_show_part', ['question'=>--}}
                {{--                                                                                            $desiredSalaryFirst])--}}

                {{--                --}}{{--                                Ваш желаемый уровень дохода со второго месяца работы:--}}
                {{--                @include('.hr.person_application_form.html.application_form_html_show_part', ['question'=>--}}
                {{--                                                                                            $desiredSalarySecond])--}}

                {{--                --}}{{--                                Вы узнали о нас из:--}}
                {{--                --}}{{--                                Ваш желаемый уровень дохода со второго месяца работы:--}}
                {{--                @include('.hr.person_application_form.html.application_form_html_show_part', ['question'=>--}}
                {{--                                                                                            $infoSource])--}}

                {{--                --}}{{--                                Если нашу вакансию Вам порекомендовал друг/знакомый,--}}
                {{--                @include('.hr.person_application_form.html.application_form_html_show_part', ['question'=>--}}
                {{--                                                                                            $infoSourceName])--}}

                {{--                --}}{{--                                Наименование Высшего учебного заведения, которое закончили--}}
                {{--                --}}{{--                                                                или в котором еще учитесь (+ укажите год выпуска)--}}

                {{--                @include('.hr.person_application_form.html.application_form_html_show_radio', ['question'=>--}}
                {{--                                                                                $children ?? ''])--}}


                {{--                --}}{{--        Ваш желаемый график работы (варианты доступных графиков уточните у менеджера)--}}
                {{--                @include('.hr.person_application_form.html.application_form_html_show_part', ['question'=>--}}
                {{--                                                                            $desiredWorkTime])--}}

                {{--                --}}{{--                                    Я ищу работу--}}
                {{--                --}}{{--                                    @include('.hr.person_application_form.application_form_html_div_header')--}}
                {{--                --}}{{--                                    Я ищу работу--}}
                {{--                --}}{{--                                    @include('.hr.person_application_form.application_form_html_div_footer')--}}

                {{--                --}}{{--                                --}}{{----}}{{--                                Я хочу работать на--}}
                {{--                --}}{{--                                @include('.hr.person_application_form.application_form_html_div_header')--}}
                {{--                --}}{{--                                Я хочу работать на--}}
                {{--                --}}{{--                                @include('.hr.person_application_form.application_form_html_div_footer')--}}


                {{--                --}}{{--                                У Вас ранее был опыт работы оператором контакт-центра?--}}

                {{--                @include('.hr.person_application_form.html.application_form_html_show_radio', ['question'=>--}}
                {{--                                                                            $operatorExperience ?? ''])--}}


                {{--                --}}{{--                                Из ниже перечисленных высказываний выберите наиболее близкое для Вас:--}}
                {{--                @include('.hr.person_application_form.html.application_form_html_show_part', ['question'=>--}}
                {{--                                                                            $opinion ?? ''])--}}


                {{--                --}}{{--                                Оцените такой фактор как "месторасположение работы" по степени важности для Вас,--}}
                {{--                --}}{{--                                где 1 - абсолютно не важно и 10 очень важно--}}
                {{--                @include('.hr.person_application_form.html.application_form_html_show_part', ['question'=>--}}
                {{--                                                                            $workLocationRating])--}}

                {{--                --}}{{--                                --}}{{----}}{{--                                Оцените такой фактор как "Возможность повышения по карьерной лестнице" по степени важности--}}
                {{--                --}}{{--                                --}}{{----}}{{--                                для Вас, где 1 - абсолютно не важно и 10 очень важно:--}}
                {{--                @include('.hr.person_application_form.html.application_form_html_show_part', ['question'=>--}}
                {{--                                                                            $raisingCareerRating])--}}


                {{--                @include('.hr.person_application_form.html.application_form_html_show_part', ['question'=>--}}
                {{--                                                                                $salaryImportant])--}}

                {{--                @include('.hr.person_application_form.html.application_form_html_show_part', ['question'=>--}}
                {{--                                                                                $professionalPersonalDevelopment])--}}

                {{--                @include('.hr.person_application_form.html.application_form_html_show_part', ['question'=>--}}
                {{--                                                                                $prestigeWork])--}}

                {{--                @include('.hr.person_application_form.html.application_form_html_show_part', ['question'=>--}}
                {{--                                                                                $ruToUaTranslation])--}}

                {{--                --}}{{--                                    Каким образом можно открыть файл?--}}
                {{--                @include('.hr.person_application_form.html.application_form_html_show_part', ['question'=>--}}
                {{--                                                                                $computerSkills])--}}

                {{--                --}}{{--                                Каким образом можно безопасно завершить работу на компьютере?--}}
                {{--                @include('.hr.person_application_form.html.application_form_html_show_part', ['question'=>--}}
                {{--                                                                                $computerSkillsTurnOff])--}}

                {{--                --}}{{--                                Что невозможно сделать с помощью меню "Пуск"?--}}
                {{--                @include('.hr.person_application_form.html.application_form_html_show_part', ['question'=>--}}
                {{--                                                                                $computerSkillsPusk])--}}

                {{--                @include('.hr.person_application_form.html.application_form_html_show_part', ['question'=>--}}
                {{--                                                                                $uaToRuTranslation])--}}

                {{--                @include('.hr.person_application_form.html.application_form_html_show_part', ['question'=>--}}
                {{--                                                                                $hrPersonDocuments])--}}

                {{--                @include('.hr.person_application_form.html.application_form_html_show_part', ['question'=>--}}
                {{--                                                                                $hrCompTechnicalRequirements])--}}

                {{--    @include('.hr.person_application_form.html.application_form_html_show_part', ['question'=>--}}
                {{--                                                                    $])--}}




                {{--                                    @include('.hr.person_application_form.html.application_form_html_div_header')--}}
                {{--    dddd--}}
                {{--                                    <input type="submit" value="Отправить" class="btn btn-primary pull-right">--}}
                {{--                                    @include('.hr.person_application_form.html.application_form_html_div_footer')--}}

                {{--                @include('.hr.person_application_form.html.application_form_html_div_header')--}}
                <input type="submit" value="Вернуться к кандидату" class="btn btn-primary pull-right">
            </form>

    {{--    @include('.hr.person_application_form.html.application_form_html_div_footer')--}}


    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <input type="hidden" name="table">--}}
    {{--                    {{ csrf_field() }}--}}
    {{--                </form>--}}
@endsection
