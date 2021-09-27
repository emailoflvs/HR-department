@include('.hr.person_application_form.html.application_form_html_div_header')
<div id="{{ $question['vendorCode'] }}" style="display: none; color:red;">
    <h5>Заполните поле:</h5></div>
{{ $question['question'] ?? '' }}

@if ($question['required'] != '0')
    <span style="color: red">*</span>
@endif

@isset($question['answers'])
    @foreach($question['answers'] as $answer)
        <div class="form_radio" id="{{ $question['vendorCode'] }}">
            <input id="{{ $question['vendorCode'] }}-{{ $answer['id'] }}" type="radio"
                   name="{{ $question['vendorCode'] }}"
                   value="{{ $answer['id'] }}"
                   @if ($question['required'] != '0')
                   required
                @endif
            >
            <label for="{{ $question['vendorCode'] }}-{{ $answer['id'] }}">{{ $answer['answer'] }}</label>
        </div>
    @endforeach
@endisset

<script>
    $(document.getElementsByName('{{ $question['vendorCode'] }}')).change(function () {
        $('#' + '{{ $question['vendorCode'] }}').hide();
    });
</script>


{{--<div id="{{ $question }}" style="display: none; color:red;">--}}
{{--    <h5>Заполните поле:</h5></div>--}}
{{--<h5>--}}
{{--    {{ $questions[$question]['question'] ?? ''}}--}}
{{--    <span style="color: red">*</span></h5>--}}

{{--@foreach($questions[$question]['answers'] as $answer)--}}
{{--    <div class="form_radio" id="{{$question}}">--}}
{{--        <input id="{{$question}}-{{ $answer['id'] }}" type="radio" name="{{$question}}"--}}
{{--               value="{{ $answer['id'] }}" required>--}}
{{--        <label for="{{$question}}-{{ $answer['id'] }}">{{ $answer['answer'] }}</label>--}}
{{--    </div>--}}
{{--@endforeach--}}

{{--<script>--}}
{{--    $(document.getElementsByName('{{ $question }}')).change(function () {--}}
{{--        $('#' + '{{ $question }}').hide();--}}
{{--    });--}}
{{--</script>--}}
@include('.hr.person_application_form.html.application_form_html_div_footer')
