<?php

namespace App\Http\Controllers;

use App\HrAction;
use App\HelpModule;
use App\HrInterview;
use App\HrOperator;
use Illuminate\Http\Request;
use PHPUnit\TextUI\Help;

class TrainingController extends Controller
{

    /**
     * Показывает Конверсию подбора в УЦ
     *
     * @return \Illuminate\Http\Response
     */
    public function conversion()
    {
        $actions = new HrAction();
        $help = new HelpModule();
        $hrInterview = new HrInterview();
        $hrOperator = new HrOperator();

//        все совершенные действия
        $allActions = $actions->getAllActions();
        $actions = [];

        //кол-во входящих звонков
        $incomingCalls[10] = 0;

        //кол-во исходящих звонков
        $outcomingCalls[9] = 0;

        foreach ($allActions as $action) {

            if (empty($action['id']))
                continue;

            //цифровое значение месяца
            $intMonth = explode("-", $action['actionDate']);
            $intMonth = number_format($intMonth[1]);

            //подсчитывает кол-во входящих-исходящих звонков

            if (!isset($incomingCalls[$intMonth]))
                $incomingCalls[$intMonth] = 0;

            if (!isset($outcomingCalls[$intMonth]))
                $outcomingCalls[$intMonth] = 0;

            if ($action['actionType'] == 1)
                $incomingCalls[$intMonth] = ++$incomingCalls[$intMonth];
            else
                $outcomingCalls[$intMonth] = ++$outcomingCalls[$intMonth];

            ////////////////

            $actions[$intMonth]['id'] = $action['id'];
            $actions[$intMonth]['month'] = $intMonth;

            //название месяца совершения действия на русском
            $actions[$intMonth]['displayMonth'] = $help->getMonthName($action['actionDate']);

            $actions[$intMonth]['incomingCalls'] = $incomingCalls[$intMonth];
            $actions[$intMonth]['outcomingCalls'] = $outcomingCalls[$intMonth];

        }


        //все интервью из базы
//        $interviews = $interview->getAllInterviews();
//        $interviews = $hrOperator->getPlannedInterviews();
        $interviews = $hrInterview->getAllInterviews();
        foreach ($interviews as $interview) {
            $interview = $interview[0];

            if (empty($interview['id']))
                continue;

            //цифровое значение месяца, взятое из запланированной даты
            if ($interview['planActionDate']) {
                $intPlanMonth = explode("-", $interview['planActionDate']);
                $intPlanMonth = number_format($intPlanMonth[1]);

                //подсчитывает кол-во запларированых собеседований
                if (!isset($planInterviews[$intPlanMonth]))
                    $planInterviews[$intPlanMonth] = 0;
                $planInterviews[$intPlanMonth] = ++$planInterviews[$intPlanMonth];
                $actions[$intPlanMonth]['planInterviews'] = $planInterviews[$intPlanMonth];
            }

            //цифровое значение месяца, взятое из даты совершенного собеседования
            if (isset($interview['happenActionDate'])) {
                $intHappenMonth = explode("-", $interview['happenActionDate']);
                $intHappenMonth = number_format($intHappenMonth[1]);

                //подсчитывает кол-во прошедших собеседований
                if (!isset($happenInterviews[$intHappenMonth]))
                    $happenInterviews[$intHappenMonth] = 0;
                $happenInterviews[$intHappenMonth] = ++$happenInterviews[$intHappenMonth];
                $actions[$intHappenMonth]['happenInterviews'] = $happenInterviews[$intHappenMonth];

                //подсчитывает кол-во приглашенных на стажировку
                if (isset($interview['inviteResult']) && $interview['inviteResult'] == 'invite') {
                    if (!isset($invite[$intHappenMonth]))
                        $invite[$intHappenMonth] = 0;
                    $invite[$intHappenMonth] = ++$invite[$intHappenMonth];
                    $actions[$intHappenMonth]['invite'] = $invite[$intHappenMonth];
                }

                //подсчитывает кол-во отказов со стороны компании
                if (isset($interview['inviteRefusingReasonCompany']) || isset($interview['inviteRefusingReasonCompanyDetails'])) {
                    if (!isset($refusingCompany[$intHappenMonth]))
                        $refusingCompany[$intHappenMonth] = 0;
                    $refusingCompany[$intHappenMonth] = ++$refusingCompany[$intHappenMonth];
                    $actions[$intHappenMonth]['refusingCompany'] = $refusingCompany[$intHappenMonth];
                }

                //подсчитывает кол-во отказов со стороны кандидата
                if (isset($interview['inviteRefusingReasonPerson']) || isset($interview['inviteRefusingReasonPersonDetails'])) {
                    if (!isset($refusingPerson[$intHappenMonth]))
                        $refusingPerson[$intHappenMonth] = 0;
                    $refusingPerson[$intHappenMonth] = ++$refusingPerson[$intHappenMonth];
                    $actions[$intHappenMonth]['refusingPerson'] = $refusingPerson[$intHappenMonth];
                }
            }
        }

        foreach ($actions as $action) {
            $item = [];

            //Коеф дозвон - приглашены
            if (isset ($action['planInterviews']) && $action['incomingCalls'] && $action['outcomingCalls']) {

                $actions[$action['month']]['ratioContactInvite']
                    = $action['planInterviews'] / ($action['incomingCalls'] + $action['outcomingCalls']);
            }

            //Коеф Приглашены-пришли
            if (isset ($action['planInterviews']) && $action['planInterviews'] && isset($action['happenInterviews'])) {
                $actions[$action['month']]['ratioInviteCame']
                    = $action['happenInterviews'] / $action['planInterviews'];
            }

        }

        return view('hr.training.conversion',
            ['actions' => $actions]);

    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
