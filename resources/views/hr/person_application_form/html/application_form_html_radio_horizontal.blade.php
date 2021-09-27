@include('.hr.person_application_form.html.application_form_html_div_header')
<div id="{{ $question['vendorCode'] }}" style="display: none; color:red;">
    <h5>Заполните поле:</h5></div>
{{ $question['question'] ?? '' }}

@if ($question['required'] != '0')
    <span style="color: red">*</span>
@endif

<table>
    <tr>
        <td>Абсолютно не важно&nbsp;&nbsp;</td>
        <td>
            <div class="form_radio_group">
                @for ($i = 1; $i <= 10; $i++)
                    <div class="form_radio_group-item">
                        <input id="{{$question['vendorCode']}}-{{$i}}" type="radio"
                               name="{{$question['vendorCode']}}" value="{{$i}}"
                               @if ($question['required'] != '0')
                               required
                            @endif
                        >
                        <label
                            for="{{$question['vendorCode']}}-{{$i}}">{{$i}}</label>
                    </div>
                @endfor
            </div>
        </td>
        <td>&nbsp;&nbsp;Очень важно</td>
    </tr>
</table>

<script>
    $(document.getElementsByName('{{ $question['vendorCode'] }}')).change(function () {
        $('#' + '{{ $question['vendorCode'] }}').hide();
    });
</script>


{{--<div id="{{ $question }}" style="display: none; color:red;">--}}
{{--    <h5>Заполните поле:</h5></div>--}}
{{--<h5>{{ $questions[$question]['question'] ?? ''}}--}}
{{--    <span style="color: red">*</span></h5>--}}
{{--<table>--}}
{{--    <tr>--}}
{{--        <td>Абсолютно не важно&nbsp;&nbsp;</td>--}}
{{--        <td>--}}
{{--            <div class="form_radio_group">--}}
{{--                @for ($i = 1; $i <= 10; $i++)--}}
{{--                    <div class="form_radio_group-item">--}}
{{--                        <input id="{{$question}}-{{$i}}" type="radio"--}}
{{--                               name="{{$question}}" value="{{$i}}" required>--}}
{{--                        <label--}}
{{--                            for="{{$question}}-{{$i}}">{{$i}}</label>--}}
{{--                    </div>--}}
{{--                @endfor--}}
{{--            </div>--}}
{{--        </td>--}}
{{--        <td>&nbsp;&nbsp;Очень важно</td>--}}
{{--    </tr>--}}
{{--</table>--}}
{{--<script>--}}
{{--    $(document.getElementsByName('{{ $question }}')).change(function () {--}}
{{--        $('#' + '{{ $question }}').hide();--}}
{{--    });--}}
{{--</script>--}}
@include('.hr.person_application_form.html.application_form_html_div_footer')


