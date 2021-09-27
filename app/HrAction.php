<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use DateTime;
use DB;

class HrAction extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'time', 'hr_action_type_id', 'hr_action_contact_result',
        'hr_person_id', 'hr_action_comments', 'plan_action_time'
    ];

    /**
     * Get last action of the person
     * @param intereg $personId
     * @var array
     */
    public function getLastAction($personId = null)
    {
        if (!$personId)
            return null;

        $info = HrAction::where('hr_person_id', $personId)->orderBy('created_at', 'desc')->take(1)->get();

        if (!isset($info[0]))
            return null;

        $info = $info[0];

//        $plan_action_time = Carbon::createFromFormat('Y-m-d h:m:s',
//            $info->plan_action_time)->format('Y-m-d h:m:s');

        if ($info) {
            $this->id = $info->id;
            $this->actionName = $info->name;
            $this->actionTime = $info->time;
            $this->actionType = $info->hr_action_type_id;
            $this->actionContactResult = $info->hr_action_contact_result;
            $this->actionComments = $info->hr_action_comments;
            $this->hrPersonId = $info->hr_person_id;
//            $this->hrOperatorId = $info->hr_operator_id;
        }

        if ($info->plan_action_time) {
            $date = DateTime::createFromFormat('Y-m-d H:i:s', $info->plan_action_time);
            $planActionTime = $date->format('H:i');
            $planActionDate = $date->format('Y-m-d');
            $this->planActionTime = $planActionTime;
            $this->planActionDate = $planActionDate;
        }

        return $this;
    }

    /**
     * Get all actions of the person
     * @param intereg $personId
     * @var array
     */
    public function getAllActions($personId = null)
    {
//        if (!$personId)
//            return null;

        if ($personId)
            $data = HrAction::where('hr_person_id', $personId)->orderBy('created_at', 'asc')->get()->toArray();
        else
            //добавил этот запрос после оттестированной работы кандидатов
            $data = HrAction::orderBy('created_at', 'asc')->get()->toArray();

        if (isset($data[0])) {

            $action = new HrAction();
            foreach ($data as $info) {

                $action = [];

                if ($info) {
                    $action['id'] = $info['id'];
                    $action['actionName'] = $info['name'];
                    $action['actionTime'] = $info['time'];
                    $action['actionType'] = $info['hr_action_type_id'];
                    $action['actionContactResult'] = $info['hr_action_contact_result'];
                    $action['actionComments'] = $info['hr_action_comments'];
                    $action['hrPersonId'] = $info['hr_person_id'];
                }


                if ($info['plan_action_time']) {
                    $date = DateTime::createFromFormat('Y-m-d H:i:s', $info['plan_action_time']);
                    $planActionTime = $date->format('H:i');
                    $planActionDate = $date->format('Y-m-d');
                    $action['planActionTime'] = $planActionTime;
                    $action['planActionDate'] = $planActionDate;
                }

                if ($info['time']) {
                    $date = DateTime::createFromFormat('Y-m-d H:i:s', $info['time']);
                    $actionTime = $date->format('H:i');
                    $actionDate = $date->format('Y-m-d');
                    $action['actionTime'] = $actionTime;
                    $action['actionDate'] = $actionDate;
                }

                $actions[] = $action;
            }
        }

        $action = [];
        $action['id'] = 0;
        $actions[] = $action;
        return $actions;
    }

    /**
     * Update the action
     * @param object $form
     * @var array
     */
    public function updateOrCreateAction($form, $personId)
    {

        foreach ($form as $key => $value) {
            if (strstr($key, "actionId_")) {

                $id = explode('_', $key);
                $id = $id[1];

                if (!$form['hrActionType_' . $id])
                    continue;

                /*
                    Данные в hr_actions
                */
                $action = [
//                    'time' => $hrActionDatetime,
                    'hr_person_id' => $personId,
//                'hr_operator_id' => $form['hrOperator'],
                    'hr_action_type_id' => $form['hrActionType_' . $id],
                    'hr_action_contact_result' => $form['hrActionContactResult_' . $id],
                    'hr_action_comments' => $form['hrActionComments_' . $id],
                ];

                if (isset($form['actionDate' . "_" . $id]) && $form['actionTime' . "_" . $id])
                    $action += ['time' => $form['actionDate' . "_" . $id] . " " . $form['actionTime' . "_" . $id]];

                if (isset($form['planActionDate' . "_" . $id]) && $form['planActionTime' . "_" . $id])
                    $action += ['plan_action_time' => $form['planActionDate' . "_" . $id] . " " . $form['planActionTime' . "_" . $id]];


                /*
                      Данные в hr_action_results
                 */
                $actionResult = [];
                if (isset($form['inviteRefusingReasonCompany' . "_" . $id]))
                    $actionResult += ['invite_refusing_reason_company_id' => $form['inviteRefusingReasonCompany' . "_" . $id],];

                if (isset($form['inviteRefusingReasonCompanyDetails' . "_" . $id]))
                    $actionResult += ['invite_refusing_reason_company_details' => $form['inviteRefusingReasonCompanyDetails' . "_" . $id],];

                if (isset($form['inviteRefusingReasonPerson' . "_" . $id]))
                    $actionResult += ['invite_refusing_reason_person_id' => $form['inviteRefusingReasonPerson' . "_" . $id],];

                if (isset($form['inviteRefusingReasonPersonDetails' . "_" . $id]))
                    $actionResult += ['invite_refusing_reason_person_details' => $form['inviteRefusingReasonPersonDetails' . "_" . $id],];

                if (isset($form['inviteClarification' . "_" . $id]))
                    $actionResult += ['invite_clarification' => $form['invite_clarification' . "_" . $id],];

                if (isset($form['inviteClarificationDetails' . "_" . $id]))
                    $actionResult += ['invite_сlarification_details' => $form['inviteClarificationDetails' . "_" . $id],];


                if (isset($form['planInviteClarificationRecallDate' . "_" . $id]) &&
                    $form['planInviteClarificationRecallTime' . "_" . $id]) {
                    $actionResult += ['plan_invite_сlarification_recall_time' => $form['planInviteClarificationRecallDate' . "_" . $id]
                        . " " . $form['planInviteClarificationRecallTime' . "_" . $id]];

//                    $actionResult += ['plan_time' => $form['planInviteClarificationRecallDate' . "_" . $id]
//                        . " " . $form['planInviteClarificationRecallTime' . "_" . $id]];
//                    $actionResult += ['reason' => 'clarification'];
                }

//                if (isset($form['inviteAutomaticInterviewSentDate' . "_" . $id])
//                    && $form['inviteAutomaticInterviewSentTime' . "_" . $id]) {
//                    $actionResult += ['invite_automatic_sent_time' => $form['inviteAutomaticInterviewSentDate' . "_" . $id] . " " .
//                        $form['inviteAutomaticInterviewSentTime' . "_" . $id]];
//                }
                if (isset($form['hrOperator' . "_" . $id]))
                    $actionResult += ['hr_operator_id' => $form['hrOperator' . "_" . $id],];
                elseif (isset($form['hrOperator']))
                    $actionResult += ['hr_operator_id' => $form['hrOperator'],];

                if (isset($form['actionResult' . "_" . $id]))
                    $actionResult += ['action_result' => $form['actionResult' . "_" . $id],];

                if (isset($form['hrSpecialization' . "_" . $id]))
                    $actionResult += ['hr_specialization_id' => $form['hrSpecialization' . "_" . $id],];

                if (isset($form['timetable' . "_" . $id]))
                    $actionResult += ['timetable_id' => $form['timetable' . "_" . $id],];

                if (!$id) {
                    $actionId = HrAction::create($action)->id;

                    $actionResult += ['action_id' => $actionId];
                    DB::table('hr_action_results')->insert($actionResult);
                } else {
                    $action += ['id' => $id];
                    HrAction::where('id', $id)->update($action);
                }

            }
//            return $this->getLastAction($personId);

        }

        var_dump($form);
        exit;

//        exit;
//        if (!empty($form['hrActionType'])) {
//
//            $hrActionDatetime = Carbon::createFromFormat('Y-m-d\TH:i',
//                $form['hrActionDatetime'])->format('Y-m-d h:m:s');
//
//            $action = [
//                'time' => $hrActionDatetime,
//                'hr_person_id' => $personId,
////                'hr_operator_id' => $form['hrOperator'],
//                'hr_action_type_id' => $form['hrActionType'],
//                'hr_action_contact_result' => $form['hrActionContactResult'],
//                'hr_action_comments' => $form['hrActionComments'],
//            ];
//
//            if (isset($form['planActionDate']) && $form['planActionTime'])
//                $action += ['plan_action_time' => $form['planActionDate'] . " " . $form['planActionTime']];
//
//            if (isset($form['actionId'])) {
//
//                $action += ['id' => $form['actionId']];
//                $result = HrAction::where('id', $form['actionId'])->update($action);
//
//            } else
//                $result = HrAction::firstOrCreate($action);
//
//            return $this->getLastAction($personId);

//        }
        return false;
    }

}
