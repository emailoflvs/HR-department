<?php

namespace App;

use App\HrPerson;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use TCG\Voyager\Models\Role;
use DateTime;
use DB;

class HrOperator extends Model
{
    use Notifiable;

    /** HrOperators listing
     *
     * @return array
     */
    public function getHrOperators()
    {
        //id доступа hr_operator
        $hrOperatorRoleId = Role::where('name', 'hr_operator')->firstOrFail()->id;
        $hrOperators = User::where(['role_id' => $hrOperatorRoleId])->get();

        foreach ($hrOperators as $item) {
            $item->name = $item->name;
            $item->id = $item->id;
            $hrOperator[] = $item;
        }
        return $hrOperator;
    }

    /**
     * @param int $operatorId
     * @return array
     */
    public function getPlannedCalls($operatorId = null)
    {

        $plannedCalls = [];

        $operatorPeople = $this->getOperatorsPeople($operatorId);

        foreach ($operatorPeople as $operatorPerson) {
            if ($operatorId)
                $actions = HrAction::where('hr_person_id', '=', $operatorPerson->id)
                    ->where('plan_action_time', '<>', '')
                    ->orderby('plan_action_time')
                    ->get();
            else
                $actions = HrAction::where('plan_action_time', '<>', '')
                    ->orderby('plan_time')
                    ->get();

        }

        $person = new HrPerson();

        foreach ($actions as $item) {
            $call['id'] = $item['id'];
            if ($item['hr_operator_id'])
                $call['operator'] = $this->getOperatorName($item['hr_operator_id']);

            $call['person'] = $person->getPerson($item['hr_person_id'])->toArray();
            $date = DateTime::createFromFormat('Y-m-d H:i:s', $item['plan_action_time']);
            $call['planActionTime'] = $date->format('H:i');
            $call['planActionDate'] = $date->format('Y-m-d');
            $call['reason'] = "Не дозвонились";
            $plannedCalls[] = $call;
        }

        if ($operatorId)
            $interviews = HrInterview::where('hr_operator_id', '=', $operatorId)
                ->where('plan_time', '<>', '')
                ->orderby('plan_time')
                ->get();
        else
            $interviews = HrInterview::where('plan_time', '<>', '')
                ->orderby('plan_time')
                ->get();

        foreach ($interviews as $item) {
            $call['id'] = $item['id'];

            if ($item['hr_operator_id'])
                $call['operator'] = $this->getOperatorName($item['hr_operator_id']);

            if (isset($item['reason'])) {
                $reason = DB::table('hr_interview_reasons')
                    ->where('type', $item['reason'])->first();
                $call['reason'] = isset($reason->name) ? $reason->name : "";
            } else
                $call['reason'] = "";

            $call['person'] = $person->getPerson($item['person_id'])->toArray();
            $date = DateTime::createFromFormat('Y-m-d H:i:s', $item['plan_time']);
            $call['planActionTime'] = $date->format('H:i');
            $call['planActionDate'] = $date->format('Y-m-d');
            $plannedCalls[] = $call;
        }

        if ($operatorId)
            $сlarifications = HrInterview::where('hr_operator_id', '=', $operatorId)
                ->where('plan_invite_сlarification_recall_time', '<>', '')
                ->orderby('plan_invite_сlarification_recall_time')
                ->get();
        else
            $сlarifications = HrInterview::where('plan_invite_сlarification_recall_time', '<>', '')
                ->orderby('plan_invite_сlarification_recall_time')
                ->get();

        foreach ($сlarifications as $item) {
            $call['id'] = $item['id'];
            if ($item['hr_operator_id'])
                $call['operator'] = $this->getOperatorName($item['hr_operator_id']);

            $call['person'] = $person->getPerson($item['person_id'])->toArray();
            $date = DateTime::createFromFormat('Y-m-d H:i:s', $item['plan_invite_сlarification_recall_time']);
            $call['planActionTime'] = $date->format('H:i');
            $call['planActionDate'] = $date->format('Y-m-d');
            $call['reason'] = "Уточнение";
            $plannedCalls[] = $call;
        }

        $plannedCalls = array_unique($plannedCalls, SORT_REGULAR);
        asort($plannedCalls);

        $calendar = [];
        foreach ($plannedCalls as $call) {
            $calendar[$call['planActionDate']][] = $call;
        }

        return $calendar;
        return $plannedCalls;
    }


    /**
     * @param int $operatorId
     * @return array
     */
    public function getPlannedInterviews($operatorId = null)
    {
        if ($operatorId)
            $interviews = HrInterview::where('hr_operator_id', '=', $operatorId)
                ->where('plan_time', '<>', '')
                ->where('reason', 'interview')
                ->orderby('plan_time')
                ->get();
        else
            $interviews = HrInterview::where('plan_time', '<>', '')
                ->where('reason', 'interview')
                ->orderby('plan_time')
                ->get();

        $person = new HrPerson();
        $refusing = new HrInviteRefusingReason();

        $plannedInterviews = [];
        foreach ($interviews as $item) {
            $interview = [];
            $interview['id'] = $item['id'];

            if ($item['reason']) {
                $reason = DB::table('hr_interview_reasons')
                    ->where('type', $item['reason'])->first();
                $interview['reason'] = isset($reason->name) ? $reason->name : "";
            }
            $interview['inviteResult'] = $item['invite'];
            $interview['comments'] = $item['comments'];

            if ($item['hr_operator_id'])
                $interview['operator'] = $this->getOperatorName($item['hr_operator_id']);

            if ($item['timetable_id'])
                $interview['timetable'] = DB::table('timetables')->where('id', $item['timetable_id'])->first();

            if ($item['hr_specialization_id'])
                $interview['specialization'] = DB::table('hr_specializations')->where('id',
                    $item['hr_specialization_id'])->first();

            if ($item['hr_messenger_id'])
                $interview['messenger'] = DB::table('hr_messengers')->
                where('id', $item['hr_messenger_id'])->first();


            if ($item['type'] == "indiv")
                $interview['type'] = "индив";
            elseif ($item['type'] == "group")
                $interview['type'] = "групповое";
            else
                $interview['type'] = "";


            if ($item['invite'] == 'refusing') {
                $interview['inviteRefusingReasonCompany'] = $refusing->
                getReason($item['invite_refusing_reason_company_id'], 'company');
                $interview['inviteRefusingReasonCompanyDetails'] = $item['invite_refusing_reason_company_details'];

                $interview['inviteRefusingReasonPerson'] = $refusing->
                getReason($item['invite_refusing_reason_person_id'], 'person');
                $interview['inviteRefusingReasonPersonDetails'] = $item['invite_refusing_reason_person_details'];
            }

            if ($item['invite'] == 'clarification') {

                $interview['inviteClarification'] = DB::table('hr_invite_clarifications')
                    ->where('id', $item['invite_сlarification'])->first();

                $interview['inviteClarificationDetails'] = $item['invite_сlarification_details'];
            }
            if ($item['timetable_id'])
                $interview['timetable'] = DB::table('timetables')->where('id', $item['timetable_id'])->first();

            $interview['person'] = $person->getPerson($item['person_id'])->toArray();
            $date = DateTime::createFromFormat('Y-m-d H:i:s', $item['plan_time']);
            $interview['planActionTime'] = $date->format('H:i');
            $interview['planActionDate'] = $date->format('Y-m-d');

            $planActionDate[$date->format('Y-m-d')] = $date->format('Y-m-d');

            if ($item['happen_time']) {
                $date = DateTime::createFromFormat('Y-m-d H:i:s', $item['happen_time']);
                $interview['happenActionTime'] = $date->format('H:i');
                $interview['happenActionDate'] = $date->format('Y-m-d');
//                было
                $interview['happen'] = "1";
            } else
                $interview['happen'] = "0";

            $plannedInterviews[] = $interview;
        }
        $calendar = [];
        foreach ($plannedInterviews as $interview) {
            $calendar[$interview['planActionDate']][] = $interview;
        }

        return $calendar;
    }

    /**
     * @param int $operatorId
     * @return striing
     */
    public function getOperatorName($operatorId = null)
    {
        if (!$operatorId)
            return "неизвестно";

        $user = User::where('id', $operatorId)->first();

        if ($user->name)
            return $user->name;

        return "неизвестно";
    }

    /**
     * @param int $operatorId
     * @return striing
     */
    public function getOperatorsPeople($operatorId = null)
    {
        if (!$operatorId)
            return false;

//        $operatorId = HrPerson::where('hr_operator_id', $operatorId)->all();
        $operatorPeople = HrPerson::where('hr_operator_id', $operatorId)->get();

        if ($operatorPeople)
            return $operatorPeople;

        return "";
    }

}
