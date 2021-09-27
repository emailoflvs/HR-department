@extends('layouts.app')

@section('content')


    @isset($id)
        <form action="/application_form_update/{{ $id }}" method="POST" id="applicationForm"
              name="applicationForm" class="formWithValidation">
            <input name="applicationId" type="hidden" value="{{ $id }}">
            @else
                <form action="/application_form_store" method="POST" id="applicationForm"
                      name="applicationForm">
                    <input type="hidden" name="_method" value="PUT">
                    @endisset


                    {{--        <div class="container-fluid">--}}
                    <h1 class="page-title">
                        <i class="voyager-question"></i> Список вопросов в анкете
                        "{{ $applicationForm['name'] ?? '' }}
                        "
                    </h1>
                    <div id="voyager-notifications"></div>

                    <div class="page-content container-fluid">
                        <div class="row">
                            <div id="dbManager" class="col-md-12">

                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th width="40%">Вопрос</th>
                                        {{--                        <th>vendorCode</th>--}}
                                        <th width="80%">Потенциальные ответы</th>
                                        <th width="10%">Комментарии</th>
                                        <th width="1%">Статус</th>
                                        {{--                        <th>Тип</th>--}}
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @isset($questions)
                                        @foreach($questions as $question)
                                            <tr>
                                                <td>{{ $question['question'] ?? '' }}</td>
                                                <td>@isset($question['answers'])
                                                        @foreach($question['answers'] as $answer)
                                                            {{$answer['answer'] ?? ''}}<br>
                                                        @endforeach
                                                    @endisset
                                                </td>
                                                <td></td>
                                            </tr>
                                        @endforeach
                                    @endisset
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
@endsection
