@isset($id)
    <form action="/hr_application_form_update/{{ $id }}" method="POST">
        <input name="applicationId" type="hidden" value="{{ $id }}">
        {{--        @isset($action->id)--}}
        {{--            <input name="actionId" type="hidden" value="{{ $action->id }}">--}}
        {{--        @endisset--}}
        @else
            <form action="/hr_application_form_store" method="POST">
                <input type="hidden" name="_method" value="PUT">
                @endisset

                {{--                                <input name="personId" type="hidden" value="2">--}}
                {{--                <input name="applicationFormId" type="hidden" value="11">--}}
                @isset($personId)
                    <input name="personId" type="hidden" value="{{ $personId }}">
                @endisset
                @isset($questions)

                    <h5>
                        {{ $questions['filiations']['question'] ?? ''}}
                    </h5>
                    <select name="personFiliation" id="personFiliation"
                            class="form-control">
                        <option value="">
                        </option>
                        @isset($filiations)
                            @foreach($filiations as $filiation)
                                <option value="{{ $filiation->id }}">
                                    {{ $filiation->cityName }}
                                </option>
                            @endforeach
                        @endisset
                    </select>

                    <script>
                        $('#personFiliation option[value={{ $person->personFiliation ?? '0' }}]').prop('selected', true);
                    </script>

                    <h5>
                        {{ $questions['name']['question'] ?? ''}}
                    </h5>
                    <input type="text" name="name"
                           class="form-control" placeholder="" value="">

                    <h5>
                        {{ $questions['phoneNumber']['question'] ?? ''}}
                    </h5>
                    <input type="text" name="phoneNumber"
                           class="form-control" placeholder="" value="">

                    <h5>
                        {{ $questions['years']['question'] ?? ''}}
                    </h5>
                    <input type="text" name="phoneNumber"
                           class="form-control" placeholder="" value="">



                    <h5>
                        {{ $questions['hrEmploymentRules']['question'] ?? ''}}
                    </h5>
                    <select name="hrEmploymentRules" id="hrEmploymentRules">
                        <option></option>
                        @foreach($questions['hrEmploymentRules']['answers'] as $answer)
                            <option value="{{ $answer['id'] ?? '' }}">{{ $answer['answer'] ?? '' }}</option>
                        @endforeach
                    </select>

                    <h5>
                        {{ $questions['desiredSalaryFirst']['question'] ?? ''}}
                    </h5>
                    <select name="desiredSalaryFirst" id="desiredSalaryFirst">
                        <option></option>
                        @foreach($questions['desiredSalaryFirst']['answers'] as $answer)
                            <option value="{{ $answer['id'] ?? '' }}">{{ $answer['answer'] ?? '' }}</option>
                        @endforeach
                    </select>

                    <h5>
                        {{ $questions['desiredSalarySecond']['question'] ?? ''}}
                    </h5>
                    <select name="desiredSalarySecond" id="desiredSalarySecond">
                        <option></option>
                        @foreach($questions['desiredSalarySecond']['answers'] as $answer)
                            <option value="{{ $answer['id'] ?? '' }}">{{ $answer['answer'] ?? '' }}</option>
                        @endforeach
                    </select>

                    <h5>
                        {{ $questions['infoSources']['question'] ?? ''}}
                    </h5>
                    <select name="infoSource" id="infoSource" class="form-control">
                        <option value="">
                        </option>
                        @isset($infoSources)
                            @foreach($infoSources as $infoSource)
                                <option value="{{ $infoSource->id }}">
                                    {{ $infoSource->name }}
                                </option>
                            @endforeach
                        @endisset
                    </select>
                    <script>
                        $('#infoSources option[value={{ $person->hrInfoSource ?? '0' }}]').prop('selected', true);
                    </script>

                    <h5>
                        {{ $questions['computerSkillsTurnOff']['question'] ?? ''}}
                    </h5>
                    <select name="computerSkillsTurnOff" id="computerSkillsTurnOff">
                        <option></option>
                        @foreach($questions['computerSkillsTurnOff']['answers'] as $answer)
                            <option value="{{ $answer['id'] ?? '' }}">{{ $answer['answer'] ?? '' }}</option>
                        @endforeach
                    </select>



                @endisset
                <div id="alertsContainer"></div>
                {{--                            <p>Столбцы таблицы</p>--}}


                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th width="10%">Дата</th>
                        <th>Фамилия</th>
                        <th>Имя</th>
                        <th>Номер телефона</th>
                        <th>Город</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="newTableRow">
                        <td>
                            <input type="date" min="1990-01-01" name="dateAddedToDatabase" class="form-control"
                                   value="{{ $person->dateAddedToDatabase ?? date("Y-m-d") }}">
                        </td>
                        <td>
                            <input type="text" name="surname"
                                   class="form-control" placeholder="Фамилия" value="{{ $person->surname ?? '' }}">
                        </td>
                        <td>
                            {{--                            <input type="text" name="name"--}}
                            {{--                                   class="form-control" placeholder="Имя" value="{{ $person->name ?? '' }}">--}}
                        </td>
                        <td>
                            {{--                            <input type="text" name="phoneNumber"--}}
                            {{--                                   class="form-control" placeholder="Номер телефона"--}}
                            {{--                                   value="{{ $person->phoneNumber ?? '' }}">--}}
                        </td>
                        <td>

                            {{--                            <select name="personFiliation" id="personFiliation"--}}
                            {{--                                    class="form-control">--}}
                            {{--                                <option value="">город--}}
                            {{--                                </option>--}}
                            {{--                                @isset($filiations)--}}
                            {{--                                    @foreach($filiations as $filiation)--}}
                            {{--                                        <option value="{{ $filiation->id }}">--}}
                            {{--                                            {{ $filiation->cityName }}--}}
                            {{--                                        </option>--}}
                            {{--                                    @endforeach--}}
                            {{--                                @endisset--}}
                            {{--                            </select>--}}

                            {{--                            <script>--}}
                            {{--                                $('#personFiliation option[value={{ $person->personFiliation ?? '0' }}]').prop('selected', true);--}}
                            {{--                            </script>--}}
                        </td>
                    </tr>
                    </tbody>
                </table>
