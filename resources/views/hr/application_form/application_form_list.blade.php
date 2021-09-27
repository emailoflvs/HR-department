@extends('layouts.app')

@section('content')


    {{--        <div class="container-fluid">--}}
    <h1 class="page-title">
        <i class="voyager-people"></i> Список анкет
    </h1>
    <div id="voyager-notifications"></div>

    <div class="page-content container-fluid">
        <div class="row">
            <div id="dbManager" class="col-md-12">

                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th width="10%">Название</th>
                        {{--                        <th>vendorCode</th>--}}
                        <th width="80%">Описание</th>
                        <th width="10%">Комментарии</th>
                        <th width="1%">Статус</th>
                        {{--                        <th>Тип</th>--}}
                    </tr>
                    </thead>
                    <tbody>
                    @isset($applicationForms)
                        @foreach($applicationForms as $applicationForm)
                            <tr class="newTableRow">
                                <td>
                                    <a href="/application_form_edit/{{ $applicationForm['id'] ?? ''}}">{{ $applicationForm['name'] ?? ''}}</a>

                                </td>
                                {{--                        <td>--}}
                                {{--                                   {{ $vendorCode ?? ''}}--}}
                                {{--                        </td>--}}
                                <td>
                                    {{ $applicationForm['details'] ?? ''}}
                                </td>
                                <td>
                                    {{ $applicationForm['comments'] ?? ''}}
                                </td>
                                <td>
                                    @isset($applicationForm['status'])
                                        @if($applicationForm['status'])
                                            активнa
                                        @else
                                            заблокирована
                                        @endif
                                    @endisset
                                </td>
                            </tr>
                        @endforeach
                    @endisset
                    </tbody>
                </table>


            </div>
        </div>
    </div>


@endsection

