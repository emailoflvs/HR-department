@include('.hr.person_application_form.html.application_form_html_div_header')
<div id="{{ $question['vendorCode'] }}" style="display: none; color:red;">
    <h5>Заполните поле:</h5></div>
<h5>
    {{ $question['question'] ?? '' }}

    @if ($question['required'] != '0')
        <span style="color: red">*</span>
    @endif
</h5>
<div class="form_toggle">
    <div class="form_toggle-item item-1">
        <input id="{{ $question['vendorCode'] }}-1" type="radio" name="{{ $question['vendorCode'] }}" value="off"
               @if ($question['required'] != '0')
               required
               @endif
               class="form-control">
        <label for="{{ $question['vendorCode'] }}-1">нет</label>
    </div>
    <div class="form_toggle-item item-2">
        <input id="{{ $question['vendorCode'] }}-2" type="radio" name="{{ $question['vendorCode'] }}" value="on"
               class="form-control">
        <label for="{{ $question['vendorCode'] }}-2">да</label>
    </div>
</div>
<script>
    $(document.getElementsByName('{{ $question['vendorCode'] }}')).change(function () {
        $('#' + '{{ $question['vendorCode'] }}').hide();
    });
</script>
@include('.hr.person_application_form.html.application_form_html_div_footer')
