@include('.hr.person_application_form.html.application_form_html_div_header')
<h5>
    {{ $question['question'] ?? '' }}
    @if ($question['required'] != '0')
        <span style="color: red">*</span>
    @endif
</h5>
<select name="{{ $question['vendorCode'] }}" id="{{ $question['vendorCode'] }}"
        @if ($question['required'] != '0')
        required
        @endif
        class="form-control"
    {{--        style="width: 300px;"--}}
>
    <option></option>
    @isset($question['answers'])
        @foreach($question['answers'] as $answer)
            <option value="{{ $answer['id'] }}">
                {{ $answer['answer'] }}</option>
        @endforeach
    @endisset
</select>

{{--<input type="text" name="{{ $question['vendorCode'] }}"--}}
{{--       @isset($notRequired)--}}
{{--       не требуем обязательного заполнения, если есть $required--}}
{{--       @else--}}
{{--       required--}}
{{--       @endisset--}}
{{--       class="form-control" placeholder="" value="">--}}

{{--<h5>--}}
{{--    {{ $questions[$question]['question'] ?? ''}}--}}
{{--    <span style="color: red">*</span></h5>--}}
{{--<select name="{{ $question }}" id="{{ $question }}"--}}
{{--        required class="form-control"--}}
{{--    --}}{{--        style="width: 300px;"--}}
{{-->--}}
{{--    <option></option>--}}
{{--    @isset($questions[$question]['answers'])--}}
{{--        @foreach($questions[$question]['answers'] as $answer)--}}
{{--            <option value="{{ $answer['id'] }}">--}}
{{--                {{ $answer['answer'] }}</option>--}}
{{--        @endforeach--}}
{{--    @endisset--}}
{{--</select>--}}
@include('.hr.person_application_form.html.application_form_html_div_footer')
