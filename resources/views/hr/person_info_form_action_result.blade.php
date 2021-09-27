{{--                                Если не дозвон--}}
<div id="noContactDiv{{ $action['id'] ?? '' }}" style="display: none;">
    <div class="col-md-12 form-group">
        Время повторного звонка:<br>
        {{--                            <input id="planActionDate{{ $action['id'] ?? '' }}" type="date"--}}
        {{--                                   name="planActionDate_{{ $action['id'] ?? '' }}"--}}
        {{--                                   value="{{ $action['planActionDate'] ?? ''}}">--}}

        {{--                            <select id="planActionTime{{ $action['id'] ?? '' }}"--}}
        {{--                                    name="planActionTime_{{ $action['id'] ?? '' }}">--}}
        {{--                                <option></option>--}}
        {{--                                @for ($i = 9; $i < 19; $i++)--}}
        {{--                                    <option value="{{ $i }}:00">{{ $i }}:00</option>--}}
        {{--                                    <option value="{{ $i }}:30">{{ $i }}:30</option>--}}
        {{--                                @endfor--}}
        {{--                            </select>--}}
        {{--                            <script>--}}
        {{--                                $('#planActionTime{{ $action['id'] ?? '' }} option[value="{{ $action['planActionTime'] ?? '' }}"]').prop('selected', true);--}}
        {{--                            </script>--}}

        <input id="interviewReason{{ $action['id'] ?? '0' }}"
               name="interviewReason_{{ $action['id'] ?? '0' }}"
               type="hidden" value="">

        <input id="planActionDate{{ $action['id'] ?? '' }}" type="date"
               name="planActionDate_{{ $action['id'] ?? '0' }}"
               value="{{ $action['planActionDate'] ?? date("yy-m-d")}}">

        <select id="planActionTime{{ $action['id'] ?? '' }}"
                name="planActionTime_{{ $action['id'] ?? '0' }}">
            <option></option>
            <option value="09:00">09:00</option>
            <option value="09:30">09:30</option>
            @for ($i = 10; $i < 19; $i++)
                <option value="{{ $i }}:00">{{ $i }}:00</option>
                <option value="{{ $i }}:30">{{ $i }}:30</option>
            @endfor
        </select>
        <script>
            $('#planActionTime{{ $action['id'] ?? '' }} option[value="{{ $action['planActionTime'] ?? '' }}"]')
                .prop('selected', true);
        </script>
        <br>Отправьте шаблон сообщения в мессенджер.
    </div>
</div>


{{--                                    Если дозвон--}}
<div id="inviteDiv{{ $action['id'] ?? '' }}" style="display: none;">
    <div class="col-md-12 form-group">
        <select name="actionResult_{{ $action['id'] ?? '' }}" id="actionResult{{ $action['id'] ?? '' }}"
                class="form-control">
            <option></option>
            <option value="clarification">На уточнении</option>
            <option value="invite">Приглашен на собеседованиие</option>
            <option value="refusing">Отказ</option>
        </select>

        <script>
            $('#actionResult{{ $action['id'] ?? '' }} option[value="{{ $interview->actionResult ?? '' }}"]')
                .prop('selected', true);
        </script>

        {{--                                            Если на уточнении--}}
        <div id="clarification{{ $action['id'] ?? '' }}"
             style="display: none;"
        ><br>
            Время следующего звонка:<br>
            <input id="planInviteClarificationRecallDate{{ $interview['id'] ?? '' }}" type="date"
                   name="planInviteClarificationRecallDate_{{ $interview['id'] ?? '0' }}"
                   value="{{ $interview->planInviteClarificationRecallDate ?? date("yy-m-d")}}">

            <select id="planInviteClarificationRecallTime{{ $interview['id'] ?? '' }}"
                    name="planInviteClarificationRecallTime_{{ $interview['id'] ?? '0' }}">
                <option></option>
                <option value="09:00">09:00</option>
                <option value="09:30">09:30</option>
                @for ($i = 10; $i < 19; $i++)
                    <option value="{{ $i }}:00">{{ $i }}:00</option>
                    <option value="{{ $i }}:30">{{ $i }}:30</option>
                @endfor
            </select>
            <script>
                $('#planInviteClarificationRecallTime{{ $interview['id'] ?? '' }} option[value="{{ $interview->planInviteClarificationRecallTime ?? '0' }}"]').prop('selected', true);
            </script>
            <br>
            <input type="text" id="inviteClarificationDetails{{ $interview['id'] ?? '' }}"
                   name="inviteClarificationDetails_{{ $interview['id'] ?? '0' }}"
                   placeholder="В чем причина уточнения?"
                   class="form-control"
                   value="{{ $interview->inviteClarificationDetails ?? '' }}"
            >
        </div>

        {{--        <label for="invite">Приглашен?</label>--}}

        {{--        <input type="checkbox"--}}
        {{--               name="invite"--}}
        {{--               id="inviteCheckbox"--}}
        {{--               class="toggleswitch"--}}
        {{--               data-on="Да"--}}
        {{--               data-off="Нет"--}}
        {{--               onchange="inviteInterview()"--}}
        {{--        >--}}

        {{--                                            Если приглашен--}}
        <div id="inviteInterview{{ $action['id'] ?? '' }}"
             style="display: none;"
        >
            <br> Время собеседования:
            {{--            <input id="datetime" type="datetime-local" name="interviewDatetime"--}}
            {{--                   value="{{ $interviewDatetime ?? ''}}">--}}

            <br><input id="planInterviewDate{{ $interview['id'] ?? '' }}" type="date"
                       name="planInterviewDate_{{ $interview['id'] ?? '0' }}"
                       value="{{ $interview->planInterviewDate ?? ''}}">
            <select id="planInterviewTime{{ $action['id'] ?? '' }}"
                    name="planInterviewTime_{{ $action['id'] ?? '' }}">
                <option></option>
                <option value="09:00">09:00</option>
                <option value="09:30">09:30</option>
                @for ($i = 10; $i < 19; $i++)
                    <option value="{{ $i }}:00">{{ $i }}:00</option>
                    <option value="{{ $i }}:30">{{ $i }}:30</option>
                @endfor
            </select>
            <script>
                $('#planInterviewTime option[value="{{ $interview->planInterviewTime ?? '' }}"]').prop('selected', true);
            </script>
            <br>
            <br>График работы:
            <select name="timetable_{{ $action['id'] ?? '' }}" id="timetable{{ $action['id'] ?? '' }}"
                    class="form-control" width="10px">
                <option value="">
                    -
                </option>
                @isset($timetables)
                    @foreach($timetables as $timetable)
                        <option value="{{ $timetable->id }}">
                            {{ $timetable->timetable }}
                        </option>
                    @endforeach
                @endisset
            </select>
            <script>
                $('#timetable{{ $action['id'] ?? '' }} option[value={{ $interview->timetable ?? '' }}]').prop('selected', true);
            </script>

            <br>Направление работы:
            <select name="hrSpecialization_{{ $action['id'] ?? '' }}"
                    id="hrSpecialization{{ $action['id'] ?? '' }}" class="form-control"
                    width="10px">
                <option value="">
                    -
                </option>
                @isset($hrSpecializations)
                    @foreach($hrSpecializations as $hrSpecialization)
                        <option value="{{ $hrSpecialization->id }}">
                            {{ $hrSpecialization->name }}
                        </option>
                    @endforeach
                @endisset
            </select>
            <script>
                $('#hrSpecialization{{ $action['id'] ?? '' }} option[value={{ $interview->hrSpecialization ?? '' }}]').prop('selected', true);
            </script>
            <br>

        </div>


        {{--                                      Если отказ                        --}}
        <div id="refusing{{ $action['id'] ?? '' }}"
             style="display: none;"
        >
            <br>
            Причина отказа со стороны компании:
            <select name="inviteRefusingReasonCompany_{{ $action['id'] ?? '' }}"
                    id="inviteRefusingReasonCompany{{ $action['id'] ?? '' }}"
                    class="form-control" width="10px">
                <option value="">
                    -
                </option>
                @isset($inviteRefusingReasonsCompany)
                    @foreach($inviteRefusingReasonsCompany as $inviteRefusingReason)
                        <option value="{{ $inviteRefusingReason->id }}">
                            {{ $inviteRefusingReason->reason }}
                        </option>
                    @endforeach
                @endisset
                <option value="0">
                    Другое
                </option>
            </select>
            <script>
                $('#inviteRefusingReasonCompany{{ $action['id'] ?? '' }} option[value={{ $interview->inviteRefusingReasonCompany ?? '' }}]').prop('selected', true);
            </script>

            <input type="text" id="inviteRefusingReasonCompanyDetails{{ $action['id'] ?? '' }}"
                   name="inviteRefusingReasonCompanyDetails_{{ $action['id'] ?? '' }}"
                   placeholder="причина отказа"
                   style="display: none;"
                   class="form-control"
                   value="{{ $interview->inviteRefusingReasonCompanyDetails ?? '' }}">

            <script>
                $('#inviteRefusingReasonCompany' +{{ $action['id'] ?? '' }}).change(function () {
                    var el = $(this);
                    if (el.val() === "0") {
                        $('#inviteRefusingReasonCompanyDetails' +{{ $action['id'] ?? '' }}).show();
                    } else {
                        $('#inviteRefusingReasonCompanyDetails' +{{ $action['id'] ?? '' }}).hide();
                    }
                });
                if ($('#inviteRefusingReasonCompanyDetails' +{{ $action['id'] ?? '' }}).val()) {
                    $('#inviteRefusingReasonCompany{{ $action['id'] ?? '' }} option[value=0]').prop('selected', true);
                    $('#inviteRefusingReasonCompanyDetails' +{{ $action['id'] ?? '' }}).show();
                }
            </script>
            <br>
            Причина отказа со стороны кандидата:
            <select name="inviteRefusingReasonPerson_{{ $action['id'] ?? '' }}"
                    id="inviteRefusingReasonPerson{{ $action['id'] ?? '' }}"
                    class="form-control" width="10px">
                <option value="">
                    -
                </option>
                @isset($inviteRefusingReasonsPerson)
                    @foreach($inviteRefusingReasonsPerson as $inviteRefusingReason)
                        <option value="{{ $inviteRefusingReason->id }}">
                            {{ $inviteRefusingReason->reason }}
                        </option>
                    @endforeach
                @endisset
                <option value="0">
                    Другое
                </option>
            </select>
            <script>
                $('#inviteRefusingReasonPerson{{ $action['id'] ?? '' }} option[value={{ $interview->inviteRefusingReasonPerson ?? '' }}]').prop('selected', true);
            </script>

            <input type="text" id="inviteRefusingReasonPersonDetails{{ $action['id'] ?? '' }}"
                   name="inviteRefusingReasonPersonDetails_{{ $action['id'] ?? '' }}"
                   placeholder="причина отказа"
                   style="display: none;"
                   class="form-control"
                   value="{{ $interview->inviteRefusingReasonPersonDetails ?? '' }}"
            >
            <script>
                $('#inviteRefusingReasonPerson' +{{ $action['id'] ?? '' }}).change(function () {
                    var el = $(this);
                    if (el.val() === "0") {
                        $('#inviteRefusingReasonPersonDetails' +{{ $action['id'] ?? '' }}).show();
                    } else {
                        $('#inviteRefusingReasonPersonDetails' +{{ $action['id'] ?? '' }}).hide();
                    }
                });
                if ($('#inviteRefusingReasonPersonDetails' +{{ $action['id'] ?? '' }}).val()) {
                    $('#inviteRefusingReasonPerson{{ $action['id'] ?? '' }} option[value=0]').prop('selected', true);
                    $('#inviteRefusingReasonPersonDetails' +{{ $action['id'] ?? '' }}).show();
                }
            </script>
        </div>
    </div>
</div>

<script language="JavaScript">
    <!--
    {{--if ('{{ $interview->invite ?? '' }}' === 'on') {--}}
        {{--    $("#inviteCheckbox").prop('checked', true);--}}
        {{--    $('#inviteInterview').show();--}}
        {{--    $('#noInviteInterview').hide();--}}
        {{--}--}}

    if (('{{ $interview->actionResult ?? '' }}' +{{ $action['id'] ?? '' }}) === 'invite') {
        $('#inviteInterview' +{{ $action['id'] ?? '' }}).show();
        $('#refusing' +{{ $action['id'] ?? '' }}).hide();
        $('#clarification' +{{ $action['id'] ?? '' }}).hide();
    }

    if (('{{ $interview->actionResult ?? '' }}' +{{ $action['id'] ?? '' }}) === 'refusing') {
        // $("#inviteCheckbox").prop('checked', true);
        $('#inviteInterview' +{{ $action['id'] ?? '' }}).hide();
        $('#clarification' +{{ $action['id'] ?? '' }}).hide();
        $('#refusing' +{{ $action['id'] ?? '' }}).show();
    }

    if (('{{ $interview->actionResult ?? '' }}' +{{ $action['id'] ?? '' }}) === 'clarification') {
        $("#refusing" +{{ $action['id'] ?? '' }}).hide();
        $('#inviteInterview' +{{ $action['id'] ?? '' }}).hide();
        $('#clarification' +{{ $action['id'] ?? '' }}).show();
    }

    $('#actionResult' +{{ $action['id'] ?? '' }}).change(function () {
        if ($("#actionResult" +{{ $action['id'] ?? '' }}).prop('selected', true)) {
            var el = $('#actionResult' +{{ $action['id'] ?? '' }});
            if (el.val() === "invite") {
                $('#inviteInterview' +{{ $action['id'] ?? '' }}).show();
                $('#clarification' +{{ $action['id'] ?? '' }}).hide();
                $('#refusing' +{{ $action['id'] ?? '' }}).hide();

            } else if (el.val() === "clarification") {
                $('#inviteInterview' +{{ $action['id'] ?? '' }}).hide();
                $('#refusing' +{{ $action['id'] ?? '' }}).hide();
                $('#clarification' +{{ $action['id'] ?? '' }}).show();
            } else if (el.val() === "refusing") {
                $('#inviteInterview' +{{ $action['id'] ?? '' }}).hide();
                $('#refusing' +{{ $action['id'] ?? '' }}).show();
                $('#clarification' +{{ $action['id'] ?? '' }}).hide();
            }
        }
    });

    // $('#hrActionContactResult').show();

    function inviteInterview() {
        var id = "#inviteCheckbox" +{{ $action['id'] ?? '' }};
        if ($(id).is(':checked', true)) {
            // Снять checkbox
            // $(id).prop('checked', false);
            //спрятать список городов
            $('#inviteInterview' +{{ $action['id'] ?? '' }}).show();
            $('#noInviteInterview' +{{ $action['id'] ?? '' }}).hide();

        } else {
            // // Отметить checkbox
            // $(id).prop('checked', true);
            //показать время собеседования
            $('#inviteInterview' +{{ $action['id'] ?? '' }}).hide();
            $('#noInviteInterview' +{{ $action['id'] ?? '' }}).show();
        }
    }

    -->
</script>

