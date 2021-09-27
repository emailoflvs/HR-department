@isset($question['question'])
    <h6>{{ $question['question'] ?? '' }}
        <br>{{ $question['answer'] ?? ''}}</h6>
    <hr width="100px" align="left">
@endisset
