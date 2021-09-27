<table class="table table-bordered">
    <thead>
    <tr>
        <th>Источник</th>
        <th width="15%">Отклик по рассылке</th>
        <th>Мессенджер</th>
        <th>HR менеджер</th>
    </tr>
    </thead>
    <tbody>
    <tr class="newTableRow">
        <td width="20%">
            <select name="hrInfoSource" id="hrInfoSource" class="form-control">
                <option value="">
                </option>
                @isset($hrInfoSources)
                    @foreach($hrInfoSources as $hrInfoSource)
                        <option value="{{ $hrInfoSource->id }}">
                            {{ $hrInfoSource->name }}
                        </option>
                    @endforeach
                @endisset
            </select>
            <script>
                $('#hrInfoSource option[value={{ $person->hrInfoSource ?? '0' }}]').prop('selected', true);
            </script>
        </td>

        <td>
            <input type="checkbox" name="mailResponse" id="mailResponse">

            <span onclick='checkMailResponse()'>Отклик по рассылке</span>

            {{--                                        <div id="mailing_response_city" style="display: none;">--}}
            <select name="mailResponseFiliation" id="mailResponseFiliation"
                    class="form-control" style="display: none;">
                <option value="0">город
                </option>
                @isset($filiations)
                    @foreach($filiations as $filiation)
                        <option value="{{ $filiation->id }}">
                            {{ $filiation->cityName }}
                        </option>
                    @endforeach
                @endisset
            </select>

            {{--                                        </div>--}}
            <script language="JavaScript">
                <!--
                function checkMailResponse() {
                    var id = "#mailResponse";
                    if ($(id).is(':checked', true)) {
                        // Снять checkbox
                        $(id).prop('checked', false);
                        //спрятать список городов
                        $('#mailResponseFiliation').hide();
                        $('#mailResponseFiliation option[value={{ $person->mailResponseFiliation ?? '0' }}]').prop('selected', false);

                    } else {
                        // Отметить checkbox
                        $(id).prop('checked', true);
                        //показать список городов
                        $('#mailResponseFiliation').show();
                    }
                }

                -->
            </script>
            @empty ($person->mailResponseFiliation)
            @else
                <script>
                    // Отметить checkbox
                    $("#mailResponse").prop('checked', true);
                    //показать список городов
                    $('#mailResponseFiliation').show();

                    $('#mailResponseFiliation option[value={{ $person->mailResponseFiliation ?? '0' }}]').prop('selected', true);
                </script>
            @endempty

        </td>
        <td>
            <select name="messenger" id="messenger" class="form-control">
                <option value="">
                    -
                </option>
                @isset($messengers)
                    @foreach($messengers as $messenger)
                        <option value="{{ $messenger->id }}">
                            {{ $messenger->name }}
                        </option>
                    @endforeach
                @endisset
            </select>
            <script>
                $('#messenger option[value={{ $person->messenger ?? '0' }}]').prop('selected', true);
            </script>
        </td>
        <td>
            <select name="hrOperator" id="hrOperator" class="form-control">
                <option value="">
                    -
                </option>
                @isset($hrOperators)
                    @foreach($hrOperators as $hrOperator)
                        <option value="{{ $hrOperator->id }}">
                            {{ $hrOperator->name }}
                        </option>
                    @endforeach
                @endisset
            </select>
            <script>
                $('#hrOperator option[value={{ $person->hrOperator ?? '' }}]').prop('selected', true);
            </script>
        </td>
    </tr>
    </tbody>
</table>
