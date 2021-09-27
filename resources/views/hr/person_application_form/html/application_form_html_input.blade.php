@include('.hr.person_application_form.html.application_form_html_div_header')
<h5>
    {{ $question['question'] ?? '' }}
    @if ($question['required'] != '0')
        <span style="color: red">*</span>
    @endif
</h5>
<input type="text" name="{{ $question['vendorCode'] }}"
       @if ($question['required'] != '0')
       required
       @endif
       class="form-control" placeholder="" value="">
{{--<h5>--}}
{{--    {{ $questions[$question]['question'] ?? ''}}--}}

{{--    @isset($notRequired)--}}
{{--        --}}{{--не требуем обязательного заполнения, если есть $required --}}
{{--    @else--}}
{{--        <span style="color: red">*</span>--}}
{{--    @endisset--}}
{{--</h5>--}}
{{--<input type="text" name="{{ $question }}"--}}
{{--       @isset($notRequired)--}}
{{--       --}}{{--не требуем обязательного заполнения, если есть $required --}}
{{--       @else--}}
{{--       required--}}
{{--       @endisset--}}
{{--       class="form-control" placeholder="" value="">--}}
@include('.hr.person_application_form.html.application_form_html_div_footer')
