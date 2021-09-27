@isset($interview['inviteResult'])

    @if($interview['inviteResult'] == 'invite')
        {{--        <span class="success" style="cursor:text;">Приглашен</span>--}}
        @if($interview['inviteResult'] == 'invite')
            @isset($interview['timetable']->timetable)
                {{ $interview['timetable']->timetable ?? 'timetable' }}
            @endisset

            {{ $interview['specialization']->name ?? '' }}
        @endif

    @endif


    @if($interview['inviteResult'] == 'clarification')

        @isset($interview['inviteClarification']->reason)
            {{ $interview['inviteClarification']->reason ?? '' }}
        @endisset
        @isset($interview['inviteClarificationDetails'])
            <br>Подробнее: {{ $interview['inviteClarificationDetails'] ?? '' }}
        @endisset

        {{--        @isset($interview['planInviteClarificationRecallDate'])--}}
        {{--            <br>Перезвонить:--}}
        {{--            {{ $interview['planInviteClarificationRecallDate'] ?? ''}}--}}
        {{--            {{ $interview['planInviteClarificationRecallTime'] ?? '' }}--}}
        {{--        @endisset--}}
    @endif

    @isset($interview['inviteResult'])
        @if($interview['inviteResult'] == 'refusing')
            @isset($interview['inviteRefusingReasonCompany'])
                От компании: {{ $interview['inviteRefusingReasonCompany'] ?? '' }}
            @endif
            @isset($interview['inviteRefusingReasonCompanyDetails'])
                <br>От компании:{{ $interview['inviteRefusingReasonCompanyDetails']  ?? ''}}
            @endisset

            @isset($interview['inviteRefusingReasonPerson'])
                От кандидата: {{ $interview['inviteRefusingReasonPerson'] ?? '' }}
            @endisset
            @isset($interview['inviteRefusingReasonPersonDetails'])
                <br>От кандидата: {{ $interview['inviteRefusingReasonPersonDetails'] ?? '' }}
            @endisset
        @endif
    @endisset
@endisset

