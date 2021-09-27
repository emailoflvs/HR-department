@extends('layouts.app')

@section('content')

    <h1 class="page-title">
        <i class="voyager-cannon"></i>Конверсия подбора в учебном центре
    </h1>
    <div id="voyager-notifications"></div>

    <div class="page-content container-fluid">
        <div class="row">
            <div id="dbManager" class="col-md-12">

                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Месяц</th>
                        <th>Кол-во принятых звонков
                        </th>
                        <th>Кол-во совершенных звонков (дозвонов)
                        </th>
                        {{--                        <th>Кол-во трудоустроеных по акции "Приведи друга"--}}
                        {{--                        </th>--}}
                        <th>Количество приглашенных на собеседование
                        </th>
                        <th>Кол-во пришедших на собеседование
                        </th>
                        <th>Кол-во отказов со стороны кандидата
                        </th>
                        <th>Кол-во отказов со стороны компании
                        </th>
                        <th>Количество приглашенных на стажировку
                        </th>
                        <th>Кол-во вышедших на стаж.
                        </th>
                        <th>Коеф дозвон - приглашены
                        </th>
                        <th>Приглашены-пришли
                        </th>
                        <th>Прошли собес-вышли на стажировку
                        </th>
                        {{--                        <th></th>--}}
                    </tr>
                    </thead>
                    <tbody>
                    @isset($actions)
                        @foreach ($actions as $action)

                            <tr class="newTableRow">
                                <td>
                                    {{ $action['displayMonth'] ?? '' }}
                                </td>
                                <td>
                                    {{ $action['incomingCalls'] ?? '0' }}
                                </td>
                                <td>
                                    {{ $action['outcomingCalls'] ?? '0' }}
                                </td>
                                <td>
                                    {{ $action['planInterviews'] ?? '0' }}
                                </td>
                                <td>
                                    {{ $action['happenInterviews'] ?? '0' }}
                                </td>
                                <td>
                                    {{ $action['refusingPerson'] ?? '0' }}
                                </td>
                                <td>
                                    {{ $action['refusingCompany'] ?? '0' }}
                                </td>
                                <td>
                                    {{ $action['invite'] ?? '0' }}
                                </td>
                                <td>
                                    -
                                </td>
                                <td>
                                    {{ $action['ratioContactInvite'] ?? '0' }}
                                </td>
                                <td>
                                    {{ $action['ratioInviteCame'] ?? '0' }}
                                </td>
                                <td>
                                    -
                                </td>
                            </tr>

                        @endforeach

                    @endisset

                    </tbody>
                </table>


@endsection

