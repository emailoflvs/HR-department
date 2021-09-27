<table class="table table-bordered" style="width: 100%;" width="50%">
    <thead>
    <tr>
        <th width="30%">Статус:</th>
        <th width="70%">
            Комментарии:
        </th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>
            @isset($hrPersonStatuses)
                @isset($lastInterview)
                    Потенциальный статус:
                    <table class="table table-bordered" style="width: 100%;">
                        <thead>
                        <tr>
                            <th width="10%">Проведено:</th>
                            <th width="50%">Статус:</th>
                            <th width="30%">Комментарий</th>
                        </tr>
                        </thead>
                        <tbody>
                        @isset($lastInterview['inviteResult'])
                            <tr class="newTableRow">
                                <td>
                                    {{ $lastInterview['happenInterviewDate'] ?? '' }}  {{ $lastInterview['happenInterviewTime'] ?? '' }}
                                </td>
                                <td>
                                    @if($lastInterview['inviteResult'] == 'invite')
                                        <span class="btn btn-success"
                                              style="cursor:text;">Приглашен на собеседование</span>

                                        @isset($lastInterview['timetable'])
                                            <br>График работы:
                                            @isset($timetables)
                                                @foreach($timetables as $timetable)
                                                    @if($lastInterview['timetable'] == $timetable->id)
                                                            {{ $timetable->timetable }}
                                                        @endif
                                                    @endforeach
                                                @endisset
                                        @endisset
                                        @isset($lastInterview['hrSpecialization'])
                                                <br>Направление работы:
                                                @isset($hrSpecializations)
                                                @foreach($hrSpecializations as $hrSpecialization)
                                                    @if($lastInterview['hrSpecialization'] == $hrSpecialization->id)
                                                        {{ $hrSpecialization->name }}
                                                    @endif
                                                @endforeach
                                            @endisset
                                        @endisset
                                    @endif
                                    @if($lastInterview['inviteResult'] == 'clarification')
                                        <span class="btn btn-warning" style="cursor:text;">На уточнении</span>
                                        @isset($lastInterview['inviteClarification']->reason)
                                            <br>Причина: {{ $lastInterview['inviteClarification']->reason }}
                                        @endisset
                                        @isset($lastInterview['inviteClarificationDetails'])
                                            <br>Подробнее: {{ $lastInterview['inviteClarificationDetails'] }}
                                        @endisset

                                        @isset($lastInterview['planInviteClarificationRecallDate'])
                                            <br>Перезвонить:
                                            <input
                                                id="planInviteClarificationRecallDate{{ $lastInterview['id'] ?? '' }}"
                                                type="date"
                                                name="planInviteClarificationRecallDate_{{ $lastInterview['id'] ?? '' }}"
                                                value="{{ $lastInterview['planInviteClarificationRecallDate'] ?? date("yy-m-d")}}">

                                            <select
                                                id="planInviteClarificationRecallTime{{ $lastInterview['id'] ?? '' }}"
                                                name="planInviteClarificationRecallTime_{{ $lastInterview['id'] ?? '' }}">
                                                <option></option>
                                                <option value="09:00">09:00</option>
                                                <option value="09:30">09:30</option>
                                                @for ($i = 10; $i < 19; $i++)
                                                    <option value="{{ $i }}:00">{{ $i }}:00</option>
                                                    <option value="{{ $i }}:30">{{ $i }}:30</option>
                                                @endfor
                                            </select>
                                            <script>
                                                $('#planInviteClarificationRecallTime{{ $lastInterview['id'] ?? '' }} option[value="{{ $interview['planInviteClarificationRecallTime'] ?? '' }}"]')
                                                    .prop('selected', true);
                                            </script>
                                        @endisset
                                    @endif

                                    @if($lastInterview['inviteResult'] == 'refusing')
                                        <span class="btn btn-danger" style="cursor:text;">Отказ</span>

                                        @isset($lastInterview['inviteRefusingReasonCompany'])
                                            <br>Со стороны компании: {{ $lastInterview['inviteRefusingReasonCompany'] }}
                                        @endisset
                                        @isset($lastInterview['inviteRefusingReasonCompanyDetails'])
                                            <br>Со стороны
                                            компании: {{ $lastInterview['inviteRefusingReasonCompanyDetails'] }}
                                        @endisset

                                        @isset($lastInterview['inviteRefusingReasonPerson'])
                                            <br>Со стороны компании: {{ $lastInterview['inviteRefusingReasonPerson'] }}
                                        @endisset
                                        @isset($lastInterview['inviteRefusingReasonPersonDetails'])
                                            <br>Со стороны
                                            кандидата: {{ $lastInterview['inviteRefusingReasonPersonDetails'] }}
                                        @endisset
                                        {{--                        @endif--}}
                                    @endif

                                </td>
                                <td>
                                    @isset($lastInterview['interviewСomments'])
                                        <input type="text" name="interviewComments_{{ $lastInterview['id'] ?? '' }}"
                                               value="{{ $lastInterview['interviewСomments'] ?? '' }}"
                                               class="form-control">
                                    @endisset
                                </td>
                            </tr>
                        @endisset
                        {{--                        @endforeach--}}
                        </tbody>
                    </table>

                @endisset







                Выбранный менеджером:
                <select name="hrPersonStatuse_{{ $hrPersonStatuse['id'] ?? '' }}"
                        id="hrPersonStatuse{{ $hrPersonStatuse['id'] ?? '' }}"
                        class="form-control" width="10px"
                        width="100px"
                >
                    <option value="">
                        -
                    </option>
                    @foreach($hrPersonStatuses as $hrPersonStatuse)
                        {{--                                                @if($hrPersonStatuse['name'] == $timetable->id)--}}
                        <option value="{{ $hrPersonStatuse['id'] ?? '' }}">
                            {{ $hrPersonStatuse['displayName'] ?? '' }}
                        </option>
                        {{--                                                @endif--}}
                    @endforeach
                </select>
                <script>
                    $('#hrPersonStatuse{{ $hrPersonStatuse['id'] ?? '' }} option[value="{{ $hrPersonStatuse['id'] ?? '' }}"]')
                        .prop('selected', true);
                </script>
            @endisset
        </td>
        <td>
            <div class="col-md-7 form-group">
                <textarea rows="2" cols="50" name="history" class="form-control">{{ $person->history ?? '' }}</textarea>
            </div>
            {{--                <input type="text" name="hrPersonStatuseComment"--}}
            {{--                       class="form-control" placeholder="" value="{{ $hrPersonStatuseComment ?? '' }}">--}}

        </td>
    </tr>
    </tbody>
</table>

