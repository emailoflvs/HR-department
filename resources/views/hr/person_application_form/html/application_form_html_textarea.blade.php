@include('.hr.person_application_form.html.application_form_html_div_header')
<h5>{{ $question['question'] ?? '' }}
    @if ($question['required'] != '0')
        <span style="color: red">*</span>
    @endif
</h5>
<h5>{{ $question['details'] }}</h5>
<textarea name="{{ $question['vendorCode'] }}"
          @if ($question['required'] != '0')
          required
          @endif
          class="form-control" rows="4"></textarea>
@include('.hr.person_application_form.html.application_form_html_div_footer')
