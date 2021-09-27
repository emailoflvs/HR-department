@include('.hr.person_application_form.html.application_form_html_div_header')
<h5>
    {{ $question['question'] ?? ''}}
    <span style="color: red">*</span></h5>
@isset($question['answers'])
    @foreach($question['answers'] as $answer)
        <p>
            <label class="checkbox-other">
                <input type="checkbox" name="checkbox-{{ $question ['vendorCode']}}-{{ $answer['id'] }}"
                       value="{{ $answer['id'] }}">
                {{ $answer['answer'] }}
            </label>
        </p>
    @endforeach
@endisset

{{--<h5>--}}
{{--    {{ $questions[$question]['question'] ?? ''}}--}}
{{--    <span style="color: red">*</span></h5>--}}
{{--@isset($questions[$question]['answers'])--}}
{{--    @foreach($questions[$question]['answers'] as $answer)--}}
{{--        <p>--}}
{{--            <label class="checkbox-other">--}}
{{--                <input type="checkbox" name="checkbox-{{ $question z}}-{{ $answer['id'] }}" value="{{ $answer['id'] }}">--}}
{{--                {{ $answer['answer'] }}--}}
{{--            </label>--}}
{{--        </p>--}}
{{--    @endforeach--}}
{{--@endisset--}}
@include('.hr.person_application_form.html.application_form_html_div_footer')
