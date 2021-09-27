@include('.hr.person_application_form.html.application_form_html_div_header')
<div id="{{ $question['vendorCode'] }}" style="display: none; color:red;">
    <h5>Заполните поле:</h5></div>
<h5>{{ $question['question'] ?? '' }}

    @if ($question['required'] != '0')
        <span style="color: red">*</span>
    @endif
</h5>
Абсолютно не важно
@for ($i = 1; $i <= 10; $i++)
    <div class="form_radio_btn">
        <input id="{{ $question['vendorCode'] }}-{{ $i }}" type="radio" name="{{ $question['vendorCode'] }}"
               value="{{ $i }}"
               @if ($question['required'] != '0')
               required
            @endif
        >
        <label for="{{ $question['vendorCode'] }}-{{ $i }}">{{ $i }}</label>
    </div>
@endfor
Очень важно
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
{{--Абсолютно не важно--}}
{{--@for ($i = 1; $i <= 10; $i++)--}}
{{--    <div class="form_radio_btn">--}}
{{--        <input id="{{ $question }}-{{ $i }}" type="radio" name="{{ $question }}"--}}
{{--               value="{{ $i }}" required>--}}
{{--        <label for="{{ $question }}-{{ $i }}">{{ $i }}</label>--}}
{{--    </div>--}}
{{--@endfor--}}
{{--Очень важно--}}
{{--<script>--}}
{{--    $(document.getElementsByName('{{ $question }}')).change(function () {--}}
{{--        $('#' + '{{ $question }}').hide();--}}
{{--    });--}}

@include('.hr.person_application_form.html.application_form_html_div_footer')
