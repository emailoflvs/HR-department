@extends('layouts.app')

@section('content')


    {{--        <div class="container-fluid">--}}
    <h1 class="page-title">
        <i class="voyager-telephone"></i> Мои планируемые звонки
    </h1>
    <div id="voyager-notifications"></div>

    <div class="page-content container-fluid">
        <div class="row">
            <div id="dbManager" class="col-md-12">

                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th width="10%">Время</th>
                        <th>Кандидат</th>
                        <th>Номер телефона</th>
                        <th>Причина звонка</th>
                        <th>Менеджер</th>
                    </tr>
                    </thead>
                    <tbody>
                    @isset($calendar)

                        @foreach($calendar as $day => $calls)
                            <tr>
                                <td colspan="10">
                                    <h5>{{$day ?? 'day'}}</h5>
                                </td>
                            </tr>

                            @isset($calls)
                                @foreach($calls as $call)

                                    <tr class="newTableRow">
                                        <td style="white-space: nowrap;">
{{--                                            {{ $call['id'] ?? '' }}--}}
                                            {{--                                    {{ $call['planActionDate'] }}--}}
                                            {{--                                            {{ \Carbon\Carbon::parse($call['planActionDate'])->format('d.m.yy')?? '' }}--}}
                                            {{--                                            в --}}
                                            {{ $call['planActionTime'] }}
                                        </td>
                                        <td>
                                            <a href="/hr_person_edit/{{ $call['person']['id'] }}">
                                                {{ $call['person']['surname'] ?? '' }} {{ $call['person']['name'] ?? '' }}</a>
                                        </td>

                                        <td>
                                            {{ $call['person']['phoneNumber'] ?? '' }}
                                        </td>
                                        <td>
                                            {{ $call['reason'] }}
                                        </td>

                                        <td>
                                            @isset($call['operator'])
                                                {{ $call['operator'] }}
                                            @endisset

                                        </td>

                                        {{--                                <td>--}}
                                        {{--                                    {{ $person->phone_number ?? '' }}--}}
                                        {{--                                </td>--}}
                                    </tr>

                                @endforeach
                            @endisset
                        @endforeach
                    @endisset
                    </tbody>
                </table>


@endsection

