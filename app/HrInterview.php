<?php

namespace App;

use App\HrInviteRefusingReason;
use App\HrPerson;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use DateTime;
use DB;

class HrInterview extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'person_id', 'reason', 'plan_time', 'happen_time', 'timetable_id', 'hr_specialization_id', 'invite',
        'invite_refusing_reason_company_id', 'invite_refusing_reason_company_details', 'invite_refusing_reason_person_id',
        'invite_refusing_reason_person_details', 'hr_messenger_id', 'invite', 'status', 'hr_operator_id', 'comments',
        'invite_sent_time', 'invite_automatic_sent_time', 'second_interviewer_id', 'third_interviewer_id',
        'type', 'invite_сlarification', 'invite_сlarification_details', 'plan_invite_сlarification_recall_time'
    ];


    /**
     * Update the Interview
     * @param object $form
     * @var array
     */
    public function updateOrCreateInterview($form, $personId, $interviewId = null)
    {

        $interviewForm = [];

        foreach ($form as $key => $value) {
            if (strstr($key, "interviewId_")) {

                var_dump($form);
                exit;

                $id = explode('_', $key);
                $id = $id[1];

                if (isset($form['inviteRefusingReasonCompany' . "_" . $id]))
                    $interviewForm += ['invite_refusing_reason_company_id' => $form['inviteRefusingReasonCompany' . "_" . $id],];

                if (isset($form['inviteRefusingReasonCompanyDetails' . "_" . $id]))
                    $interviewForm += ['invite_refusing_reason_company_details' => $form['inviteRefusingReasonCompanyDetails' . "_" . $id],];

                if (isset($form['inviteRefusingReasonPerson' . "_" . $id]))
                    $interviewForm += ['invite_refusing_reason_person_id' => $form['inviteRefusingReasonPerson' . "_" . $id],];

                if (isset($form['inviteRefusingReasonPersonDetails' . "_" . $id]))
                    $interviewForm += ['invite_refusing_reason_person_details' => $form['inviteRefusingReasonPersonDetails' . "_" . $id],];

                if (isset($form['inviteClarification' . "_" . $id]))
                    $interviewForm += ['invite_clarification' => $form['invite_clarification' . "_" . $id],];

                if (isset($form['inviteClarificationDetails' . "_" . $id]))
                    $interviewForm += ['invite_сlarification_details' => $form['inviteClarificationDetails' . "_" . $id],];


                if (isset($form['planInviteClarificationRecallDate' . "_" . $id]) &&
                    $form['planInviteClarificationRecallTime' . "_" . $id]) {
                    $interviewForm += ['plan_invite_сlarification_recall_time' => $form['planInviteClarificationRecallDate' . "_" . $id]
                        . " " . $form['planInviteClarificationRecallTime' . "_" . $id]];

                    $interviewForm += ['plan_time' => $form['planInviteClarificationRecallDate' . "_" . $id]
                        . " " . $form['planInviteClarificationRecallTime' . "_" . $id]];

                    $interviewForm += ['reason' => 'clarification'];
                }

                if (isset($form['inviteAutomaticInterviewSentDate' . "_" . $id])
                    && $form['inviteAutomaticInterviewSentTime' . "_" . $id]) {
                    $interviewForm += ['invite_automatic_sent_time' => $form['inviteAutomaticInterviewSentDate' . "_" . $id] . " " .
                        $form['inviteAutomaticInterviewSentTime' . "_" . $id]];
                }
                if (isset($form['hrOperator' . "_" . $id]))
                    $interviewForm += ['hr_operator_id' => $form['hrOperator' . "_" . $id],];
                elseif (isset($form['hrOperator']))
                    $interviewForm += ['hr_operator_id' => $form['hrOperator'],];

                if (isset($form['secondInterviewer' . "_" . $id]))
                    $interviewForm += ['second_interviewer_id' => $form['secondInterviewer' . "_" . $id],];

                if (isset($form['thirdInterviewer' . "_" . $id]))
                    $interviewForm += ['third_interviewer_id' => $form['thirdInterviewer' . "_" . $id],];


                if (isset($form['timetable' . "_" . $id]))
                    $interviewForm += ['timetable_id' => $form['timetable' . "_" . $id],];

                if (isset($form['inviteResult' . "_" . $id]))
                    $interviewForm += ['invite' => $form['inviteResult' . "_" . $id],];

                if (isset($form['messenger' . "_" . $id]))
                    $interviewForm += ['hr_messenger_id' => $form['messenger' . "_" . $id],];

                if (isset($form['hrSpecialization' . "_" . $id]))
                    $interviewForm += ['hr_specialization_id' => $form['hrSpecialization' . "_" . $id],];

                if (isset($form['comments' . "_" . $id]))
                    $interviewForm += ['comments' => $form['comments' . "_" . $id],];

                if (isset($form['planInterviewDate' . "_" . $id]) && $form['planInterviewTime' . "_" . $id]) {
                    $interviewForm += ['plan_time' => $form['planInterviewDate' . "_" . $id] . " "
                        . $form['planInterviewTime' . "_" . $id]];
//                    $interviewForm += ['reason' => $form['interview' . "_" . $id],];
                    if (isset($form['interview' . "_0"]))
                        $interviewForm += ['reason' => $form['interview' . "_0"],];
                    else
                        $interviewForm += ['reason' => 'interview',];
                }

                if (isset($form['planActionDate' . "_" . $id]) && $form['planActionTime' . "_" . $id]) {
                    $interviewForm += ['plan_time' => $form['planActionDate' . "_" . $id]
                        . " " . $form['planActionTime' . "_" . $id]];
                    $interviewForm += ['reason' => 'no_contact',];
//                    if (isset($form['actionDate' . "_" . $id]) && $form['actionTime' . "_" . $id]) {
//                        $interviewForm += ['happen_time' => $form['actionDate' . "_" . $id]
//                            . " " . $form['actionTime' . "_" . $id]];
////                        $interviewForm += ['reason' => 'refusing',];
//                    }
//                    $interviewForm += ['reason' => $form['interview' . "_" . $id],];
                }

                if (isset($form['interviewReason_0']) && !empty($form['interviewReason_0']))
                    $interviewForm += ['reason' => $form['interviewReason_0'],];

                if (isset($form['happenInterviewDate' . "_" . $id]) && $form['happenInterviewTime' . "_" . $id])
                    $interviewForm += ['happen_time' => $form['happenInterviewDate' . "_" . $id]
                        . " " . $form['happenInterviewTime' . "_" . $id]];

                if (isset ($form['inviteResult_0']) and $form['inviteResult_0'] == 'refusing') {

                    if (isset($form['actionDate' . "_" . $id]) && $form['actionTime' . "_" . $id]) {
                        $interviewForm += ['happen_time' => $form['actionDate' . "_" . $id]
                            . " " . $form['actionTime' . "_" . $id]];
                        $interviewForm += ['reason' => 'refusing',];
                    }
//                    $interviewForm += ['happen_time' => $form['happenInterviewDate' . "_" . $id]
//                        . " " . $form['happenInterviewTime' . "_" . $id]];
                }

                if (isset($form['inviteInterviewSentDate' . "_" . $id]) && $form['inviteInterviewSentTime' . "_" . $id])
                    $interviewForm += ['invite_sent_time' => $form['inviteInterviewSentDate' . "_" . $id] . " " .
                        $form['inviteInterviewSentTime' . "_" . $id]];

                if (isset($form['inviteAutomaticInterviewSentDate' . "_" . $id])
                    && $form['inviteAutomaticInterviewSentTime' . "_" . $id])
                    $interviewForm += ['invite_automatic_sent_time' => $form['inviteAutomaticInterviewSentDate' . "_" . $id]
                        . " " . $form['inviteAutomaticInterviewSentTime' . "_" . $id]];

                $interviewForm += ['person_id' => $personId];

                if (!isset($interviewForm['plan_time']) && !isset($interviewForm['happen_time']))
                    continue;

                $interview = $this->getInterview($personId);

                if (isset($interview->personId))
                    $result = HrInterview::where('person_id', $interview->personId)->update($interviewForm);
                else
                    $result = HrInterview::create($interviewForm);
            }
        }
        return false;
    }

    /**
     *
     * @param intereg $personId
     * @var array
     */
    public
    function getLastInterview($personId = null)
    {
        $interviews = $this->getInterviews($personId);
        $lastInterview = array_pop($interviews);
//        var_dump($lastInterview);
//        exit;
        return $lastInterview;

        if (empty($personId))
            return null;

        $info = HrInterview::where('person_id', $personId)->orderBy('created_at', 'desc')->take(1)->get();

        if (!isset($info[0]))
            return null;
        $info = $info[0];

        if ($info->plan_time) {
            $date = DateTime::createFromFormat('Y-m-d H:i:s', $info->plan_time);
            $this->planInterviewTime = $date->format('H:i');
            $this->planInterviewDate = $date->format('Y-m-d');
        }

        if ($info->plan_invite_сlarification_recall_time) {
            $date = DateTime::createFromFormat('Y-m-d H:i:s', $info->plan_invite_сlarification_recall_time);
            $this->planInviteClarificationRecallTime = $date->format('H:i');
            $this->planInviteClarificationRecallDate = $date->format('Y-m-d');
        }

        if ($info) {
            $this->id = $info->id;
            $this->personId = $info->person_id;
            $this->happenTime = $info->happen_time;
            $this->timetable = $info->timetable_id;
            $this->hrSpecialization = $info->hr_specialization_id;
            $this->inviteRefusingReasonCompany = $info->invite_refusing_reason_company_id;
            $this->inviteRefusingReasonCompanyDetails = $info->invite_refusing_reason_company_details;
            $this->inviteRefusingReasonPerson = $info->invite_refusing_reason_person_id;
            $this->inviteRefusingReasonPersonDetails = $info->invite_refusing_reason_person_details;
            $this->messenger = $info->hr_messenger_id;
            $this->inviteResult = $info->invite;
            $this->status = $info->status;
            $this->hrOperatorId = $info->hr_operator_id;
            $this->comments = $info->comments;
            $this->inviteSentTime = $info->invite_sent_time;
            $this->inviteAutomaticSentTime = $info->invite_automatic_sent_time;
            $this->secondInterviewer = $info->second_interviewer_id;
            $this->thirdInterviewer = $info->third_interviewer_id;
            $this->type = $info->type;
            $this->inviteClarification = $info->invite_сlarification;
            $this->inviteClarificationDetails = $info->invite_сlarification_details;
        }

        return $this;
    }

    /**
     *
     * @param intereg $personId
     * @var array
     */
    public
    function getInterviews($personId = null)
    {
        $interviews = [];

        if ($personId)
            $data = HrInterview::where('person_id', $personId)->orderBy('created_at', 'asc')->get();
        else
            $data = HrInterview::orderBy('created_at', 'asc')->get();

        $i = 0;
        foreach ($data as $item) {
            $interviews[] = $this->getInterview($item->id);
        }


        return $interviews;

        $data = json_decode(json_encode($data), true);

        $refusing = new HrInviteRefusingReason();
        if (isset($data[0])) {

            $interview = new HrInterview();
            foreach ($data as $info) {

                $interview = [];
                if (isset($info[0]))
                    continue;

                if ($info['plan_time']) {
                    $date = DateTime::createFromFormat('Y-m-d H:i:s', $info['plan_time']);
                    $interview['planInterviewTime'] = $date->format('H:i');
                    $interview['planInterviewDate'] = $date->format('Y-m-d');

                } elseif ($info['plan_invite_сlarification_recall_time']) {

                    $date = DateTime::createFromFormat('Y-m-d H:i:s',
                        $info['plan_invite_сlarification_recall_time']);
                    $interview['planInterviewTime'] = $date->format('H:i');
                    $interview['planInterviewDate'] = $date->format('Y-m-d');
                    $interview['planInviteClarificationRecallTime'] = $date->format('H:i');
                    $interview['planInviteClarificationRecallDate'] = $date->format('Y-m-d');

                } else {
//                    $interview['planInterviewTime'] = '1:1';
//                    $interview['planInterviewDate'] = '2020-1-1';
                }

                if ($info['happen_time']) {
                    $date = DateTime::createFromFormat('Y-m-d H:i:s', $info['happen_time']);
                    $interview['happenInterviewTime'] = $date->format('H:i');
                    $interview['happenInterviewDate'] = $date->format('Y-m-d');
                }
                if ($info['reason']) {
                    $reason = DB::table('hr_interview_reasons')
                        ->where('type', $info['reason'])->first();
                    $interview['reason'] = isset($reason->name) ? $reason->name : "";
                }

                if ($info) {
                    $interview['id'] = $info['id'];
                    $interview['personId'] = $info['person_id'];
                    $interview['timetable'] = $info['timetable_id'];
                    $interview['hrSpecialization'] = $info['hr_specialization_id'];
                    $interview['inviteRefusingReasonCompany'] =
                        $refusing->getReason($info['invite_refusing_reason_company_id'], 'company');
                    $interview['inviteRefusingReasonCompanyDetails'] = $info['invite_refusing_reason_company_details'];
                    $interview['inviteRefusingReasonPerson'] =
                        $refusing->getReason($info['invite_refusing_reason_person_id'], 'person');
                    $interview['inviteRefusingReasonPersonDetails'] = $info['invite_refusing_reason_person_details'];
                    $interview['messenger'] = $info['hr_messenger_id'];
                    $interview['inviteResult'] = $info['invite'];
                    $interview['status'] = $info['status'];
                    $interview['hrOperatorId'] = $info['hr_operator_id'];
                    $interview['comments'] = $info['comments'];
                    $interview['inviteSentTime'] = $info['invite_sent_time'];
                    $interview['inviteAutomaticSentTime'] = $info['invite_automatic_sent_time'];
                    $interview['secondInterviewer'] = $info['second_interviewer_id'];
                    $interview['thirdInterviewer'] = $info['third_interviewer_id'];
                    $interview['type'] = $info['type'];
                    $interview['inviteClarification'] = $info['invite_сlarification'];
                    $interview['inviteClarificationDetails'] = $info['invite_сlarification_details'];
                }
                $interviews[] = $interview;
            }
        }
        return $interviews;
    }

    /**
     * Получить интервью по его номеру
     * @param intereg $id
     * @var array
     */
    public
    function getInterview($id)
    {
        if (empty($id))
            return null;

        $info = HrInterview::where('id', $id)->first();

        if (!$info)
            return null;
        $refusing = new HrInviteRefusingReason();

        if ($info->plan_time) {
            $date = DateTime::createFromFormat('Y-m-d H:i:s', $info->plan_time);
            $this->planInterviewTime = $date->format('G:i');
            $this->planInterviewDate = $date->format('Y-m-d');
        } else {
            $this->planInterviewTime = "";
            $this->planInterviewDate = "";
        }

        if ($info->happen_time) {
            $date = DateTime::createFromFormat('Y-m-d H:i:s', $info->happen_time);
            $this->happenInterviewTime = $date->format('G:i');
            $this->happenInterviewDate = $date->format('Y-m-d');
        } else {
            $this->happenInterviewTime = "";
            $this->happenInterviewDate = "";
        }

        if ($info->plan_invite_сlarification_recall_time) {
            $date = DateTime::createFromFormat('Y-m-d H:i:s', $info->plan_invite_сlarification_recall_time);
            $this->planInviteClarificationRecallTime = $date->format('G:i');
            $this->planInviteClarificationRecallDate = $date->format('Y-m-d');
        } else {
            $this->planInviteClarificationRecallTime = '';
            $this->planInviteClarificationRecallDate = '';
        }

        $refusing = new HrInviteRefusingReason();

        if ($info) {
            $this->id = $info->id;
            $this->personId = $info->person_id;
            $this->timetable = $info->timetable_id;
            $this->hrSpecialization = $info->hr_specialization_id;
//            $this->inviteRefusingReasonCompany = $info->invite_refusing_reason_company_id;
            $this->inviteRefusingReasonCompany =
                $refusing->getReason($info->invite_refusing_reason_company_id, 'company');
            $this->inviteRefusingReasonCompanyDetails = $info->invite_refusing_reason_company_details;
//            $this->inviteRefusingReasonPerson = $info->invite_refusing_reason_person_id;
            $this->inviteRefusingReasonPerson =
                $refusing->getReason($info->invite_refusing_reason_person_id, 'person');
            $this->inviteRefusingReasonPersonDetails = $info->invite_refusing_reason_person_details;
            $this->messenger = $info->hr_messenger_id;
            $this->inviteResult = $info->invite;
            $this->status = $info->status;
            $this->hrOperatorId = $info->hr_operator_id;
            $this->interviewСomments = $info->comments;
            $this->inviteSentTime = $info->invite_sent_time;
            $this->inviteAutomaticSentTime = $info->invite_automatic_sent_time;
            $this->secondInterviewer = $info->second_interviewer_id;
            $this->thirdInterviewer = $info->third_interviewer_id;
            $this->type = $info->type;
            $this->inviteClarification = DB::table('hr_invite_clarifications')
                ->where('id', $info->invite_сlarification)->first();
            $this->inviteClarificationDetails = $info->invite_сlarification_details;
        }

        //переводим объект в массив
        $interview = json_decode(json_encode($this), true);

        return $interview;
    }

    /**
     * Все интервью из таблицы
     * //     * @param intereg $id
     * @var array
     */
//    public
//    function getAllInterviews()
//    {
//        $allInterviews = [];
//
//        $interviews = HrInterview::orderBy('created_at', 'asc')->get()->toArray();
//
//        if (isset($interviews[0])) {
//            foreach ($interviews as $item) {
//                $interview = [];
//                $interview = $this->getInterview($item['id']);
////                $interview['id'] = $item['id'];
////                var_dump($item['id']);
////                var_dump($interview);
//                $allInterviews[] = $interview;
//            }
//        }
////                var_dump($this->getInterview($allInterviews[1]));
////        var_dump($allInterviews[0]['id']);
////        var_dump($allInterviews[1]['id']);
////        exit;
//        return $allInterviews;
//
//    }

    /**
     * Все интервью оператора
     * @param int $operatorId
     * @return array
     */
    public function getAllInterviews($operatorId = null)
    {
        if ($operatorId)
            $interviews = HrInterview::where('hr_operator_id', '=', $operatorId)
                ->where('plan_time', '<>', '')
//                ->where('reason', 'interview')
                ->orderby('plan_time')
                ->get();
        else
            $interviews = HrInterview::where('plan_time', '<>', '')
//                ->where('reason', 'interview')
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

//            if ($item['hr_operator_id'])
//                $interview['operator'] = $this->getOperatorName($item['hr_operator_id']);

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

}
