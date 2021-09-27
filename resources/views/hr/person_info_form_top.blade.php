@isset($id)
    <form action="/hr_person_update/{{ $id }}" method="POST">
        <input name="personId" type="hidden" value="{{ $id }}">

        {{--        @isset($action->id)--}}
        {{--            <input name="actionId" type="hidden" value="{{ $action->id }}">--}}
        {{--        @endisset--}}


        @isset($invite->id)
            <input name="inviteId" type="hidden" value="{{ $invite->id }}">
        @endisset

        @isset($interview->id)
            <input name="interviewId" type="hidden" value="{{ $interview->id }}">
        @endisset
        @else
            <form action="/hr_person_store" method="POST">
                <input type="hidden" name="_method" value="PUT">
                @endisset

                {{--                    <div class="panel panel-bordered">--}}
                {{--                        <div class="panel-body">--}}
                {{--                            <div class="row" >--}}
                {{--                                <div class="col-md-2">--}}
                {{--                                    <label for="name">Название таблицы</label>--}}
                {{--                                    <br> <input type="text"--}}
                {{--                                                                                                             placeholder="Название таблицы"--}}
                {{--                                                                                                             required="required"--}}
                {{--                                                                                                             pattern="^[a-zA-Z_][a-zA-Z0-9_]*$"--}}
                {{--                                                                                                             class="form-control">--}}
                {{--                                    <label for="name">Дата</label>--}}
                {{--                                     <input type="text"--}}
                {{--                                                                                                             placeholder="Название таблицы"--}}
                {{--                                                                                                             required="required"--}}
                {{--                                                                                                             pattern="^[a-zA-Z_][a-zA-Z0-9_]*$"--}}
                {{--                                                                                                             class="form-control">--}}
                {{--                                Дата:<input type="date" min="2001-01-01" name="start_date" class="form-control"--}}
                {{--                                             value="{{ $start_date }}">--}}
                {{--                                </div>--}}
                {{--                            </div> <!---->--}}
                <div id="alertsContainer"></div>
                {{--                            <p>Столбцы таблицы</p>--}}


                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th width="10%">Дата добавления в базу</th>
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
                            <input type="text" name="name"
                                   class="form-control" placeholder="Имя" value="{{ $person->name ?? '' }}">
                        </td>
                        <td>
                            <input type="text" name="phoneNumber"
                                   class="form-control" placeholder="Номер телефона"
                                   value="{{ $person->phoneNumber ?? '' }}">
                        </td>
                        <td>

                            <select name="personFiliation" id="personFiliation"
                                    class="form-control">
                                <option value="">город
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
                        </td>
                    </tr>
                    </tbody>
                </table>
                @isset($person->id)
                    @isset($applicationForm)
                        <a href="/hr_person_application_form_create/{{$applicationForm['id']}}/person/{{$person->id}}">
                            {{--                            Анкета --}}
                            "{{$applicationForm['name']}}"
                            для заполнения</a>
                    @endisset
                @endisset

                @isset($hrApplicationFormId)
                    <br>
                    <a href="/hr_person_application_form_show/{{$hrApplicationFormId}}">Результат заполненной анкеты</a>

@endisset


