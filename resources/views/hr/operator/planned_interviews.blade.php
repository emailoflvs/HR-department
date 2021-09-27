@extends('layouts.app')

@section('content')


    {{--        <div class="container-fluid">--}}
    <h1 class="page-title">
        <i class="voyager-list"></i> Мои собеседования
    </h1>
    <div id="voyager-notifications"></div>

    <div class="page-content container-fluid">
        <div class="row">
            <div id="dbManager" class="col-md-12">
                {{--                                @foreach($interviews['planActionDate'] as $date)--}}

                {{--                                    {{  $date['planActionDate']?? '' }}--}}

                {{--                                @endforeach--}}

                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th width="5%">Время</th>
                        <th width="20%">Кандидат</th>

                        <th width="20%">Номер телефона</th>
                        {{--                        <th>Тема общения</th>--}}
                        <th width="5%">Тип</th>
                        <th width="5%">Явка</th>
                        <th width="5%">Статус</th>
                        <th width="30%">Описание</th>
                        <th width="5%">Мессенджер</th>
                        <th>Комментарий</th>
                        <th>Менеджер</th>
                    </tr>
                    </thead>
                    <tbody>
                    @isset($calendar)
                        @foreach($calendar as $day => $interviews)
                            <tr>
                                <td colspan="10">
                                    <h5>{{$day ?? 'day'}}</h5>
                                </td>
                            </tr>

                            @isset($interviews)
                                @foreach($interviews as $interview)

                                    <tr class="newTableRow">
                                        <td style="white-space: nowrap">
                                            {{ $interview['planActionTime']?? '' }}
                                        </td>
                                        <td style="white-space: nowrap">
                                            {{--                                    {{ $interview['person']['id'] ?? '' }}--}}
                                            <a href="/hr_person_edit/{{ $interview['person']['id'] ?? '' }}">
                                                {{ $interview['person']['surname'] ?? '' }}
                                                {{ $interview['person']['name'] ?? '' }}</a>
                                        </td>
                                        <td>
                                            {{ $interview['person']['phoneNumber'] ?? '' }}
                                        </td>
                                        {{--                                <td>--}}
                                        {{--                                    {{ $interview['reason'] }}--}}
                                        {{--                                </td>--}}
                                        <td>
                                            {{ $interview['type'] ?? '' }}
                                        </td>
                                        <td>
                                            @isset($interview['happen'])
                                                @if($interview['happen'])
                                                    да
                                                @else
                                                    <span class="danger">нет</span>
                                                @endif
                                            @endisset
                                        </td>
                                        <td>
                                            {{ $interview['reason'] ?? '' }}
                                            @isset($interview['inviteResult'])
                                                @if($interview['inviteResult'] == 'invite')
                                                    <span class="success" style="cursor:text;">Приглашен</span>
                                                @endif
                                                @if($interview['inviteResult'] == 'clarification')
                                                    <span class="warning"
                                                          style="cursor:text; white-space: nowrap;">На уточнении</span>
                                                @endif
                                                @if($interview['inviteResult'] == 'refusing')
                                                    <span class="danger" style="cursor:text;">Отказ</span>
                                                @endif
                                            @endisset
                                        </td>
                                        <td>
                                            @include("hr.person_status")
                                        </td>
                                        <td>
                                            {{ $interview['messenger']->name ?? '' }}
                                        </td>
                                        <td>
                                            {{ $interview['comments'] ?? '' }}
                                        </td>
                                        <td>
                                            {{ $interview['operator'] ?? ''}}
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

