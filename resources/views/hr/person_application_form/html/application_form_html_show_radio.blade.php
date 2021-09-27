@isset($question['question'])
    <h6 style="color:#777; ">{{ $question['question'] ?? ''}}<br>
        @if($question['answer'] == 'on')
            Да
        @else
            Нет
        @endif
    </h6>
    <hr width="100px" align="left">
    <hr width="100px" align="left">
@endisset
