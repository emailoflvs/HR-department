@isset($interviews)
    Результаты созвона:
    <table class="table table-bordered" style="width: 100%;">
        <thead>
        <tr>

            <th width="10%">Планируется:</th>
            <th width="10%">Проведено:</th>
            <th width="10%">Причина</th>
            <th width="50%">Статус:</th>
            <th width="30%">Комментарий</th>

        </tr>
        </thead>
        <tbody>

        @foreach($interviews as $interview)

            @isset($interview['id'])
                <input name="interviewId_{{ $interview['id'] ?? '' }}" type="hidden"
                       value="{{ $interview['id'] ?? '' }}">
                {{--                <input name="hr_person_id_{{ $interview['id'] ?? '' }}" type="hidden"--}}
                {{--                       value="{{ $hr_person_id_['id'] ?? '' }}">--}}
            @endisset

            <tr class="newTableRow">
                <td style="white-space: nowrap;">
                    {{ $interview['planInterviewDate'] ?? '' }}  {{ $interview['planInterviewTime'] ?? '' }}
                    {{--                    @isset($interview['planInterviewDate'])--}}
                    {{--                        <input id="planInterviewDate{{ $interview['id'] ?? '' }}" type="date"--}}
                    {{--                               name="planInterviewDate_{{ $interview['id'] ?? '' }}"--}}
                    {{--                               value="{{ $interview['planInterviewDate'] ?? date("yy-m-d")}}">--}}

                    {{--                        <select id="planInterviewTime{{ $interview['id'] ?? '' }}"--}}
                    {{--                                name="planInterviewTime_{{ $interview['id'] ?? '' }}">--}}
                    {{--                            <option></option>--}}
                    {{--                            <option value="09:00">09:00</option>--}}
                    {{--                            <option value="09:30">09:30</option>--}}
                    {{--                            @for ($i = 10; $i < 19; $i++)--}}
                    {{--                                <option value="{{ $i }}:00">{{ $i }}:00</option>--}}
                    {{--                                <option value="{{ $i }}:30">{{ $i }}:30</option>--}}
                    {{--                            @endfor--}}
                    {{--                        </select>--}}
                    {{--                        <script>--}}
                    {{--                            $('#planInterviewTime{{ $interview['id'] ?? '' }} option[value="{{ $interview['planInterviewTime'] ?? '' }}"]')--}}
                    {{--                                .prop('selected', true);--}}
                    {{--                        </script>--}}
                    {{--                    @endisset--}}
                </td>
                <td style="white-space: nowrap;">
                    {{ $interview['happenInterviewDate'] ?? '' }}  {{ $interview['happenInterviewTime'] ?? '' }}
                    {{--                    @isset($interview['happenInterviewTime'])--}}
                    {{--                        <input id="happenInterviewDate{{ $interview['id'] ?? '' }}" type="date"--}}
                    {{--                               name="happenInterviewDate_{{ $interview['id'] ?? '' }}"--}}
                    {{--                               value="{{ $interview['happenInterviewDate'] ?? date("yy-m-d")}}">--}}

                    {{--                        <select id="happenInterviewTime{{ $interview['id'] ?? '' }}"--}}
                    {{--                                name="happenInterviewTime_{{ $interview['id'] ?? '' }}">--}}
                    {{--                            <option></option>--}}
                    {{--                            <option value="09:00">09:00</option>--}}
                    {{--                            <option value="09:30">09:30</option>--}}
                    {{--                            @for ($i = 10; $i < 19; $i++)--}}
                    {{--                                <option value="{{ $i }}:00">{{ $i }}:00</option>--}}
                    {{--                                <option value="{{ $i }}:30">{{ $i }}:30</option>--}}
                    {{--                            @endfor--}}
                    {{--                        </select>--}}
                    {{--                        <script>--}}
                    {{--                            $('#happenInterviewTime{{ $interview['id'] ?? '' }} option[value="{{ $interview['happenInterviewTime'] ?? '' }}"]')--}}
                    {{--                                .prop('selected', true);--}}
                    {{--                        </script>--}}
                    {{--                    @endisset--}}
                </td>
                <td>
                    {{$interview['reason']??''}}
                </td>
                <td>

                    @isset($interview['inviteResult'])
                        @if($interview['inviteResult'] == 'invite')
                            <span class="btn btn-success" style="cursor:text;">Приглашен на собеседование</span>

                            @isset($interview['timetable'])
                                <br>График работы:
                                {{--                                {{ $interview['timetable'] ?? '00' }}--}}
                                {{--                                <select name="timetable_{{ $interview['id'] ?? '' }}"--}}
                                {{--                                        id="timetable{{ $interview['id'] ?? '' }}"--}}
                                {{--                                        class="form-control" width="10px">--}}
                                {{--                                    <option value="">--}}
                                {{--                                        ---}}
                                {{--                                    </option>--}}
                                @isset($timetables)
                                    @foreach($timetables as $timetable)
                                        @if($interview['timetable'] == $timetable->id)
                                            {{--                                            <option value="{{ $timetable->id }}">--}}
                                            {{ $timetable->timetable }}
                                            {{--                                            </option>--}}
                                        @endif
                                    @endforeach
                                @endisset
                                {{--                                </select>--}}
                                {{--                                <script>--}}
                                {{--                                    $('#timetable{{ $interview['id'] ?? '' }} option[value="{{ $interview['timetable'] ?? '' }}"]')--}}
                                {{--                                        .prop('selected', true);--}}
                                {{--                                </script>--}}
                            @endisset

                            @isset($interview['hrSpecialization'])
                                <br>Направление работы:
                                {{--                                <select name="hrSpecialization_{{ $interview['id'] ?? '' }}"--}}
                                {{--                                        id="hrSpecialization{{ $interview['id'] ?? '' }}" class="form-control"--}}
                                {{--                                        width="10px">--}}
                                {{--                                    <option value="">--}}
                                {{--                                        ---}}
                                {{--                                    </option>--}}
                                @isset($hrSpecializations)
                                    @foreach($hrSpecializations as $hrSpecialization)
                                        {{--                                            <option value="{{ $hrSpecialization->id }}">--}}
                                        {{--                                                {{ $hrSpecialization->name }}--}}
                                        {{--                                            </option>--}}
                                        @if($interview['hrSpecialization'] == $hrSpecialization->id)
                                            {{--                                            <option value="{{ $timetable->id }}">--}}
                                            {{ $hrSpecialization->name }}
                                            {{--                                            </option>--}}
                                        @endif
                                    @endforeach
                                @endisset
                                {{--                                </select>--}}
                                {{--                                <script>--}}
                                {{--                                    $('#hrSpecialization{{ $interview['id'] ?? '' }} option[value="{{ $interview['hrSpecialization'] ?? '' }}"]')--}}
                                {{--                                        .prop('selected', true);--}}
                                {{--                                </script>--}}
                            @endisset
                        @endif


                        @if($interview['inviteResult'] == 'clarification')

                            <span class="btn btn-warning" style="cursor:text;">На уточнении</span>


                            @isset($interview['inviteClarification']->reason)
                                <br>Причина: {{ $interview['inviteClarification']->reason }}
                            @endisset
                            @isset($interview['inviteClarificationDetails'])
                                <br>Подробнее: {{ $interview['inviteClarificationDetails'] }}
                            @endisset

                            @isset($interview['planInviteClarificationRecallDate'])
                                <br>Перезвонить:
                                <input id="planInviteClarificationRecallDate{{ $interview['id'] ?? '' }}" type="date"
                                       name="planInviteClarificationRecallDate_{{ $interview['id'] ?? '' }}"
                                       value="{{ $interview['planInviteClarificationRecallDate'] ?? date("yy-m-d")}}">

                                <select id="planInviteClarificationRecallTime{{ $interview['id'] ?? '' }}"
                                        name="planInviteClarificationRecallTime_{{ $interview['id'] ?? '' }}">
                                    <option></option>
                                    <option value="09:00">09:00</option>
                                    <option value="09:30">09:30</option>
                                    @for ($i = 10; $i < 19; $i++)
                                        <option value="{{ $i }}:00">{{ $i }}:00</option>
                                        <option value="{{ $i }}:30">{{ $i }}:30</option>
                                    @endfor
                                </select>
                                <script>
                                    $('#planInviteClarificationRecallTime{{ $interview['id'] ?? '' }} option[value="{{ $interview['planInviteClarificationRecallTime'] ?? '' }}"]')
                                        .prop('selected', true);
                                </script>
                            @endisset
                        @endif

                        @if($interview['inviteResult'] == 'refusing')
                            <span class="btn btn-danger" style="cursor:text;">Отказ</span>

                            @isset($interview['inviteRefusingReasonCompany'])
                                <br>Со стороны компании: {{ $interview['inviteRefusingReasonCompany'] }}
                            @endisset
                            @isset($interview['inviteRefusingReasonCompanyDetails'])
                                <br>Со стороны
                                компании: {{ $interview['inviteRefusingReasonCompanyDetails'] }}
                            @endisset

                            @isset($interview['inviteRefusingReasonPerson'])
                                <br>Со стороны компании: {{ $interview['inviteRefusingReasonPerson'] }}
                            @endisset
                            @isset($interview['inviteRefusingReasonPersonDetails'])
                                <br>Со стороны
                                кандидата: {{ $interview['inviteRefusingReasonPersonDetails'] }}
                            @endisset
                            {{--                        @endif--}}
                        @endif
                    @endisset

                </td>
                <td>
                    @isset($interview['interviewСomments'])
                        <input type="text" name="interviewComments_{{ $interview['id'] ?? '' }}"
                               value="{{ $interview['interviewСomments'] ?? '' }}"
                               class="form-control">
                    @endisset
                </td>

            </tr>
        @endforeach
        </tbody>
    </table>

@endisset
