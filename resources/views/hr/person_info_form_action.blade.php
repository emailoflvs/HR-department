<table class="table table-bordered" style="width: 100%;">
    <thead>
    <tr>

        <th width="15%">Действие</th>
        <th width="10%">Дата и время</th>
        <th width="15%">Результат</th>
        <th id="thResult"></th>
        <th>Комментарий</th>

    </tr>
    </thead>
    <tbody>

    @isset($actions)
        @foreach($actions as $action)

            @isset($action['id'])
                <input name="actionId_{{ $action['id'] ?? '' }}" type="hidden" value="{{ $action['id'] ?? '' }}">
                {{--                <input name="hr_person_id_{{ $action['id'] ?? '' }}" type="hidden"--}}
                {{--                       value="{{ $hr_person_id_['id'] ?? '' }}">--}}
            @endisset

            <tr class="newTableRow">
                <td>
                    <select name="hrActionType_{{ $action['id'] ?? '' }}" class="form-control"
                            id="hrActionType{{ $action['id'] ?? '' }}">
                        <option value="">
                            нет действия
                        </option>
                        @isset($hrActionTypes)
                            @foreach($hrActionTypes as $hrActionType)
                                <option value="{{ $hrActionType->id }}">
                                    {{ $hrActionType->name }}
                                </option>
                            @endforeach
                        @endisset
                    </select>

                    <script>
                        $('#hrActionType{{ $action['id'] ?? '' }} option[value="{{ $action['actionType'] ?? '' }}"]')
                            .prop('selected', true);
                    </script>
                </td>
                <td style="white-space: nowrap;
                            display: none;
                            "
                    id="td_actionDate{{ $action['id'] ?? '' }}">
                    @php
                        //                                    $time1= date("Y-m-d H:i",time());
                        //                                    $time1= date("Y-m-d",time());
                        //echo $time1;
                    @endphp
                    {{--                    <input type="datetime-local" id="datetime{{ $action['id'] ?? '' }}"--}}
                    {{--                           name="hrActionDatetime_{{ $action['id'] ?? '' }}"--}}
                    {{--                           value="{{ $hrActionDatetime ?? date("yy-m-d\Th:m") }}">--}}

                    <input id="actionDate{{ $action['id'] ?? '' }}" type="date"
                           name="actionDate_{{ $action['id'] ?? '' }}"
                           value="{{ $action['actionDate'] ?? date("yy-m-d")}}">

                    <select id="actionTime{{ $action['id'] ?? '' }}"
                            name="actionTime_{{ $action['id'] ?? '' }}">
                        <option></option>
                        <option value="09:00">09:00</option>
                        <option value="09:30">09:30</option>
                        @for ($i = 10; $i < 19; $i++)
                            <option value="{{ $i }}:00">{{ $i }}:00</option>
                            <option value="{{ $i }}:30">{{ $i }}:30</option>
                        @endfor
                    </select>
                    <script>
                        $('#actionTime{{ $action['id'] ?? '' }} option[value="{{ $action['actionTime'] ?? '' }}"]').prop('selected', true);
                    </script>

                </td>
                <td>
                    <select id="hrActionContactResult{{ $action['id'] ?? '' }}"
                            name="hrActionContactResult_{{ $action['id'] ?? '' }}"
                            class="form-control"
                            style="display: none"
                    >
                        <option value="">
                        </option>
                        @isset($hrActionContactResults)
                            @foreach($hrActionContactResults as $hrActionContactResult)
                                <option value="{{ $hrActionContactResult->value }}">
                                    {{ $hrActionContactResult->display_name }}
                                </option>
                            @endforeach
                        @endisset
                    </select>

                    <script>
                        $('#hrActionContactResult{{ $action['id'] ?? '' }} option[value={{ $action['actionContactResult'] ?? '0' }}]').prop('selected', true);
                    </script>
                </td>
                <td
                    {{--                    style="display: none;" --}}
                    id="tdResult{{ $action['id'] ?? '' }}">


                    {{--                                    Результаты действия            --}}

                    @include("hr.person_info_form_action_result")


                </td>
                <td>
                    <input type="text" name="hrActionComments_{{ $action['id'] ?? '' }}"
                           value="{{ $hrActionComments ?? '' }}"
                           class="form-control">
                </td>
                {{--                                    Результат на дозвон\не дозвон--}}
                <script>

                    $('#hrActionType{{ $action['id'] ?? '' }}').change(function () {
                        if ($("#hrActionType{{ $action['id'] ?? '' }}").val() != "") {
                            $('#hrActionContactResult{{ $action['id'] ?? '' }}').show();
                            $('#td_actionDate{{ $action['id'] ?? '' }}').show();
                        } else {
                            $('#hrActionContactResult{{ $action['id'] ?? '' }}').hide();
                            $('#td_actionDate{{ $action['id'] ?? '' }}').hide();
                        }
                    });
                    if ($("#hrActionType{{ $action['id'] ?? '' }}").prop('selected', true)) {
                        if ($("#hrActionType{{ $action['id'] ?? '' }}").val() != "") {
                            $('#hrActionContactResult{{ $action['id'] ?? '' }}').show();
                            $('#td_actionDate{{ $action['id'] ?? '' }}').show();
                        }
                    }

                    if ($("#hrActionContactResult{{ $action['id'] ?? '' }}").prop('selected', true)) {
                        // alert($().val())
                        var el = $('#hrActionContactResult' +{{ $action['id'] ?? '' }});
                        if (el.val() === "contact") {
                            $('#inviteDiv' +{{ $action['id'] ?? '' }}).show();
                            $('#noContactDiv' +{{ $action['id'] ?? '' }}).hide();
                            $('#thResult' +{{ $action['id'] ?? '' }}).show();
                            $('#tdResult' +{{ $action['id'] ?? '' }}).show();
                            // $('#text').hide();
                        } else if (el.val() === "no_contact") {
                            // $('#text').show();
                            $('#inviteDiv' +{{ $action['id'] ?? '' }}).hide();
                            $('#noContactDiv' +{{ $action['id'] ?? '' }}).show();
                            $('#thResult' +{{ $action['id'] ?? '' }}).show();
                            $('#tdResult' +{{ $action['id'] ?? '' }}).show();
                            $('#interviewReason' +{{ $action['id'] ?? '' }}).val();

                        }

                        // $('#hrActionContactResult').show();
                    }
                    $('#hrActionContactResult' +{{ $action['id'] ?? '' }}).change(function () {
                        var el = $(this);
                        if (el.val() === "contact") {
                            $('#inviteDiv' +{{ $action['id'] ?? '' }}).show();
                            $('#noContactDiv' +{{ $action['id'] ?? '' }}).hide();
                            $('#thResult' +{{ $action['id'] ?? '' }}).show();
                            $('#tdResult' +{{ $action['id'] ?? '' }}).show();
                            // $('#text').hide();
                        } else if (el.val() === "no_contact") {
                            // $('#text').show();
                            $('#inviteDiv' +{{ $action['id'] ?? '' }}).hide();
                            $('#noContactDiv' +{{ $action['id'] ?? '' }}).show();
                            $('#thResult' +{{ $action['id'] ?? '' }}).show();
                            $('#tdResult' +{{ $action['id'] ?? '' }}).show();

                            $('#interviewReason' +{{ $action['id'] ?? '' }}).val("no_contact");
                            {{--                            alert($('#interviewReason'+{{ $action['id'] ?? '' }}).val());--}}
                        }
                    });

                    {{--            $('#hrActionContactResult option[value="{{ $action['contact ?? '' }}"]').prop('selected', true);--}}
                </script>

            </tr>
        @endforeach
    @endisset
    </tbody>
</table>
