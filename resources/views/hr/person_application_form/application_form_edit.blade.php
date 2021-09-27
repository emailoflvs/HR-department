@extends('layouts.application_form')

@section('content')
    {{--    <script type="text/javascript" src="http://yandex.st/jquery/1.4.4/jquery.min.js"></script>--}}

    @isset($id)
        <form action="/hr_person_application_form_update/{{ $id }}" method="POST" id="personApplicationForm"
              name="personApplicationForm" class="formWithValidation">
            <input name="personApplicationId" type="hidden" value="{{ $id }}">
            @else
                <form action="/hr_person_application_form_store" method="POST" id="personApplicationForm"
                      name="personApplicationForm">
                    <input type="hidden" name="_method" value="PUT">
                    @endisset

                    @isset($personId)
                        <input name="personId" type="hidden" value="{{ $personId }}">
                    @endisset
                    @isset($personApplicationFormId)
                        <input name="personApplicationFormId" type="hidden" value="{{ $personApplicationFormId }}">
                    @endisset

                    <input name="applicationFormId" type="hidden" value="{{ $applicationForm['id'] ?? '' }}">
                    <div class="analytics-container" align="center">

                        <div class="content center">
                            <div class="title m-b-md center">

                            </div>

                            <div class="page-content container-fluid" align="left">

                                @include('.hr.person_application_form.html.application_form_html_div_header')
                                <table width="100%">
                                    <tr>
                                        <td><h3>
                                                {{ $applicationForm['name'] ?? '' }}
                                            </h3></td>
                                        <td><img src="/img/simpatik-logo.png" width="100"></td>
                                    </tr>
                                </table>
                                <p style="font-size: 19px">
                                    {{ $applicationForm['details'] ?? '' }}
                                    <br>
                                </p>
                                <div class="freebirdFormviewerViewHeaderRequiredLegend"
                                     aria-hidden="true" dir="auto">
                                    <span style="color: red">
                                    *&nbsp;Обязательно
                                        </span>
                                </div>
                                @include('.hr.person_application_form.html.application_form_html_div_footer')
                                {{--                                {{ $questions['name']['id'] }}--}}
                                @isset($questions)
                                    @foreach($questions as $question)

                                        {{--                                        {{ $question['id'] ?? 'id' }}--}}
                                        {{--                                                                                {{ $question['question'] ?? ' ' }}--}}
                                        {{--                                        {{ $question['type'] ?? 'type' }}--}}
                                        {{--                                        {{ $question['required'] ?? '' }}--}}
                                        {{--                                        <br>--}}
                                        {{--                                        {{ $question['vendorCode'] ?? 'vendorCode' }}--}}
                                        {{--{{ $a = "ss" }}--}}
                                        {{--{{ $a }}--}}

                                        @if ($question['type'] == 'input')
                                            @include('.hr.person_application_form.html.application_form_html_input',
                                                ['question'=> $question])
                                        @elseif($question['type'] == 'select')
                                            @include('.hr.person_application_form.html.application_form_html_select',
                                                        ['question'=> $question])
                                        @elseif($question['type'] == 'text')
                                            @include('.hr.person_application_form.html.application_form_html_textarea',
                                                            ['question'=> $question])
                                        @elseif($question['type'] == 'radio')
                                            @include('.hr.person_application_form.html.application_form_html_radio',
                                                            ['question'=> $question])
                                        @elseif($question['type'] == 'rating')
                                            @include('.hr.person_application_form.html.application_form_html_radio_horizontal',
                                                       ['question'=> $question])
                                        @elseif($question['type'] == 'checking')
                                            @include('.hr.person_application_form.html.application_form_html_radio_checking',
                                                    ['question'=> $question])
                                        @elseif($question['type'] == 'checkbox')
                                            {{--                                        @if($question['type'] == 'checkbox')--}}
                                            @include('.hr.person_application_form.html.application_form_html_checkbox',
                                                    ['question'=> $question])
                                        @endif

                                        {{--                                --}}{{-- Есть ли у Вас дети?--}}
                                        {{--                                @include('.hr.person_application_form.html.application_form_html_radio_checking', ['question'=>--}}
                                        {{--                                                                                            'children'])--}}



                                        {{--                                        @include('.hr.person_application_form.html.application_form_html_input',--}}
                                        {{--                                                ['question'=> 'name'])--}}
                                        {{--                                        <br>--}}
                                        {{--                                        @include('.hr.person_application_form.html.application_form_html_input',--}}
                                        {{--                                                ['question'=> {{ $question ?? '' }}])--}}
                                        {{--                                        <br>--}}
                                        {{--                                        <tr class="newTableRow">--}}
                                        {{--                                            <td>--}}
                                        {{--                                                <a href="/application_form_edit/{{ $applicationForm['id'] ?? ''}}">{{ $applicationForm['name'] ?? ''}}</a>--}}

                                        {{--                                            </td>--}}
                                        {{--                                            --}}{{--                        <td>--}}
                                        {{--                                            --}}{{--                                   {{ $vendorCode ?? ''}}--}}
                                        {{--                                            --}}{{--                        </td>--}}
                                        {{--                                            <td>--}}
                                        {{--                                                {{ $applicationForm['details'] ?? ''}}--}}
                                        {{--                                            </td>--}}
                                        {{--                                            <td>--}}
                                        {{--                                                {{ $applicationForm['comments'] ?? ''}}--}}
                                        {{--                                            </td>--}}
                                        {{--                                            <td>--}}
                                        {{--                                                @isset($applicationForm['status'])--}}
                                        {{--                                                    @if($applicationForm['status'])--}}
                                        {{--                                                        активнa--}}
                                        {{--                                                    @else--}}
                                        {{--                                                        заблокирована--}}
                                        {{--                                                    @endif--}}
                                        {{--                                                @endisset--}}
                                        {{--                                            </td>--}}
                                        {{--                                        </tr>--}}
                                    @endforeach
                                @endisset
                                {{--                                --}}{{--      Как Вас зовут? (имя и фамилия)--}}
                                {{--                                @include('.hr.person_application_form.html.application_form_html_input', ['question'=>--}}
                                {{--                                                                                        'name'])--}}

                                {{--                                --}}{{-- Вы пришли к нам на собеседование в городе--}}
                                {{--                                @include('.hr.person_application_form.html.application_form_html_select', ['question'=>--}}
                                {{--                                                                                        'filiation'])--}}

                                {{--                                --}}{{-- Ваш контактный номер телефона--}}
                                {{--                                @include('.hr.person_application_form.html.application_form_html_input', ['question'=>--}}
                                {{--                                                                                        'years'])--}}

                                {{--                                --}}{{-- Ваш возраст (полных лет)--}}
                                {{--                                @include('.hr.person_application_form.html.application_form_html_input', ['question'=>--}}
                                {{--                                                                                        'phoneNumber'])--}}

                                {{--                                --}}{{-- Вы желаете работать:--}}
                                {{--                                @include('.hr.person_application_form.html.application_form_html_select', ['question'=>--}}
                                {{--                                                                                        'hrEmploymentRule'])--}}

                                {{--                                --}}{{-- Ваш желаемый уровень дохода за первый месяц работы:--}}
                                {{--                                @include('.hr.person_application_form.html.application_form_html_select', ['question'=>--}}
                                {{--                                                                                        'desiredSalaryFirst'])--}}

                                {{--                                --}}{{-- Ваш желаемый уровень дохода со второго месяца работы:--}}
                                {{--                                @include('.hr.person_application_form.html.application_form_html_select', ['question'=>--}}
                                {{--                                                                                        'desiredSalarySecond'])--}}

                                {{--                                --}}{{-- Вы узнали о нас из:--}}
                                {{--                                @include('.hr.person_application_form.html.application_form_html_select', ['question'=>--}}
                                {{--                                                                                        'infoSource'])--}}

                                {{--                                --}}{{-- Если нашу вакансию Вам порекомендовал друг/знакомый,--}}
                                {{--                                --}}{{-- пожалуйста, укажите его/ее имя и фамилию:--}}
                                {{--                                @include('.hr.person_application_form.html.application_form_html_input', ['question'=>--}}
                                {{--                                                                                        'infoSourceName',--}}
                                {{--                                                                                        'notRequired'=>1])--}}

                                {{--                                --}}{{-- Наименование Высшего учебного заведения, которое закончили--}}
                                {{--                                --}}{{-- или в котором еще учитесь (+ укажите год выпуска)--}}
                                {{--                                @include('.hr.person_application_form.html.application_form_html_input', ['question'=>'education',--}}
                                {{--                                                                                               'notRequired'=>1])--}}

                                {{--                                --}}{{-- Есть ли у Вас дети?--}}
                                {{--                                @include('.hr.person_application_form.html.application_form_html_radio_checking', ['question'=>--}}
                                {{--                                                                                            'children'])--}}

                                {{--                                --}}{{-- Ваш желаемый график работы (варианты доступных графиков уточните у менеджера)--}}
                                {{--                                @include('.hr.person_application_form.html.application_form_html_select', ['question'=>--}}
                                {{--                                                                                        'desiredWorkTime'])--}}

                                {{--                                --}}{{-- Я ищу работу--}}
                                {{--                                @include('.hr.person_application_form.html.application_form_html_select', ['question'=>--}}
                                {{--                                                                                        'hrWorkTerm'])--}}

                                {{--                                --}}{{-- Я хочу работать на--}}
                                {{--                                @include('.hr.person_application_form.html.application_form_html_select', ['question'=>--}}
                                {{--                                                                                        'function'])--}}

                                {{--                                --}}{{-- У Вас ранее был опыт работы оператором контакт-центра?--}}
                                {{--                                @include('.hr.person_application_form.html.application_form_html_radio_checking', ['question'=>--}}
                                {{--                                                                                           'operatorExperience'])--}}

                                {{--                                --}}{{-- Из ниже перечисленных высказываний выберите наиболее близкое для Вас:--}}
                                {{--                                @include('.hr.person_application_form.html.application_form_html_radio', ['question'=>--}}
                                {{--                                                                                                'opinion'])--}}

                                {{--                                --}}{{-- Оцените такой фактор как "месторасположение работы" по степени важности для Вас,--}}
                                {{--                                --}}{{-- где 1 - абсолютно не важно и 10 очень важно--}}
                                {{--                                @include('.hr.person_application_form.html.application_form_html_radio_horizontal2', ['question'=>--}}
                                {{--                                                                                                'workLocationRating'])--}}

                                {{--                                --}}{{-- Оцените такой фактор как "Возможность повышения по карьерной лестнице" по степени--}}
                                {{--                                --}}{{-- важности--}}
                                {{--                                --}}{{-- для Вас, где 1 - абсолютно не важно и 10 очень важно:--}}
                                {{--                                @include('.hr.person_application_form.html.application_form_html_radio_horizontal', ['question'=>--}}
                                {{--                                                                                            'raisingCareerRating'])--}}

                                {{--                                --}}{{-- Насколько вы согласны с утверждением: "Уровень заработной платы для меня самый--}}
                                {{--                                --}}{{-- важный фактор в моей работе"--}}
                                {{--                                @include('.hr.person_application_form.html.application_form_html_radio_horizontal2', ['question'=>--}}
                                {{--                                                                                                         'salaryImportant'])--}}

                                {{--                                --}}{{-- Насколько вы согласны с утверждением: "Для меня важно, чтоб у меня были возможности--}}
                                {{--                                --}}{{--                               для профессионального и личностного развития"--}}
                                {{--                                @include('.hr.person_application_form.html.application_form_html_radio_horizontal', ['question'=>--}}
                                {{--                                                                                'professionalPersonalDevelopment'])--}}

                                {{--                                --}}{{-- Насколько вы согласны с утверждением: "Я считаю работу оператором контакт-центра"--}}
                                {{--                                --}}{{-- престижной"--}}
                                {{--                                @include('.hr.person_application_form.html.application_form_html_radio_horizontal2', ['question'=>--}}
                                {{--                                                                                                 'prestigeWork'])--}}

                                {{--                                --}}{{-- владение украинским языком--}}
                                {{--                                @include('.hr.person_application_form.html.application_form_html_textarea', ['question'=>--}}
                                {{--                                                                                                 'ruToUaTranslation'])--}}

                                {{--                                --}}{{-- Каким образом можно открыть файл?--}}
                                {{--                                @include('.hr.person_application_form.html.application_form_html_select', ['question'=>--}}
                                {{--                                                                                        'computerSkills'])--}}

                                {{--                                --}}{{-- Каким образом можно безопасно завершить работу на компьютере?--}}
                                {{--                                @include('.hr.person_application_form.html.application_form_html_select', ['question'=>--}}
                                {{--                                                                              'computerSkillsTurnOff'])--}}

                                {{--                                --}}{{--                              Что невозможно сделать с помощью меню "Пуск"?--}}
                                {{--                                @include('.hr.person_application_form.html.application_form_html_select', ['question'=>--}}
                                {{--                                                                              'computerSkillsPusk'])--}}

                                {{--                                --}}{{-- владение русским языком--}}
                                {{--                                @include('.hr.person_application_form.html.application_form_html_textarea', ['question'=>--}}
                                {{--                                                                                                 'uaToRuTranslation'])--}}

                                {{--                                --}}{{-- Необходимые документы для официального трудоустройства--}}
                                {{--                                @include('.hr.person_application_form.html.application_form_html_checkbox', ['question'=>--}}
                                {{--                                                                              'hrPersonDocuments'])--}}

                                {{--                                --}}{{-- набор технических требований для ПК/ноутбука. --}}
                                {{--                                @include('.hr.person_application_form.html.application_form_html_checkbox', ['question'=>--}}
                                {{--                                                                              'hrCompTechnicalRequirements'])--}}

                                {{-- @include('.hr.person_application_form.html.application_form_html_div_header')--}}
                                {{-- @include('.hr.person_application_form.html.application_form_html_div_footer')--}}

                                @include('.hr.person_application_form.html.application_form_html_div_header')

                                <div id="formValidation" style="display: none; color:red;">
                                    <h5>Проверьте заполнение полей</h5></div>

                                <input type="submit" value="Отправить" class="btn btn-primary pull-right"
                                       onclick="validateForm()">
                                @include('.hr.person_application_form.html.application_form_html_div_footer')
                            </div>
                        </div>
                    </div>
                    {{ csrf_field() }})
                </form>

                <script>
                    function validateRadio(element) {
                        var check = "";
                        var inp = document.getElementsByName(element);
                        for (var i = 0; i < inp.length; i++) {
                            if (inp[i].type == "radio" && inp[i].checked)
                                check = inp[i].value;
                        }
                        if (!check) {
                            $('#' + element).show();
                            $('#formValidation').show();
                        } else
                            $('#' + element).hide();
                    }

                    function validateForm() {

                        var elements = [];

                        //собираем в массив все элементы формы типа radio
                        $("form[name='personApplicationForm']").find("input").not('[type="submit"]').each(function () {

                            if ($(this).attr('type') == 'radio')
                                elements.push($(this).attr('name'));
                        });

                        //удаляю дубликаты
                        let inputRadioNames = [...new Set(elements)]

                        //проверяю валидацию
                        for (var i = 0; i < inputRadioNames.length; i++) {
                            validateRadio(inputRadioNames[i]);
                        }
                        return true;
                    };

                </script>
@endsection
