<?php

namespace App;

use App\HrAction;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class HrInvite extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'action_id', 'plan_time', 'happen_time', 'hr_operator_id', 'timetable_id', 'hr_specialization_id',
        'invite_refusing_reason_company_id', 'invite_refusing_company_details',
        'invite_refusing_reason_person_id', 'invite_refusing_person_details',
        'hr_messenger_id', 'invite', 'status'
    ];


    /**
     * Update the Intenvite
     * @param object $form
     * @var array
     */
    public function updateOrCreateInvite($form, $actionId, $inviteId = null)
    {
        if (!$actionId)
            return false;

////            $hrInviteRefusingReason = (!empty($form['inviteRefusingReasonPerson'])) ?
////                $form['inviteRefusingReasonPerson'] : null;
////            $hrInviteRefusingReason = (!empty($form['inviteRefusingReasonCompany'])) ?
////                $form['inviteRefusingReasonCompany'] : null;
////
////            $hrInviteRefusingReasonDetails = (!empty($form['inviteRefusingReasonCompanyDetails'])) ?
////                $form['inviteRefusingReasonCompanyDetails'] : "";
////        $hrInviteRefusingReasonDetails .= (!empty($form['inviteRefusingReasonPersonDetails'])) ?
////            " | " . $form['inviteRefusingReasonPersonDetails'] : "";
//
//            $inviteResultForm += [
//                //причины отказа
////            'invite_refusing_reason_id' => $hrInviteRefusingReason,
////            'invite_refusing_reason_details' => $hrInviteRefusingReasonDetails,
//            ];


        $invite = $this->getLastPersonInvite($actionId);
        $inviteForm = [
            'action_id' => $actionId,
//            'status' => $form['status'],
        ];
        if (isset($form['invite']))
            $inviteForm += ['invite' => $form['invite'],];
        else
            $inviteForm += ['invite' => "",];


        return $inviteForm;
//        return $result;
    }


    /**
     * Get last invite of action
     * @param intereg $actionId
     * @var array
     */
    public
    function getLastPersonInvite($personId)
    {
        if (empty($actionId))
            return null;

        $info = HrInvite::where('person_id', $actionId)->orderBy('created_at', 'desc')->take(1)->get();

        if (!isset($info[0]))
            return null;
        $info = $info[0];

        if ($info) {
            $this->id = $info->id;
            $this->actionId = $info->action_id;
            $this->planTime = $info->plan_time;
            $this->happenTime = $info->happen_time;
            $this->timetable = $info->timetable_id;
            $this->hrSpecialization = $info->hr_specialization_id;
            $this->inviteRefusingReasonCompany = $info->invite_refusing_reason_company_id;
            $this->inviteRefusingReasonCompanyDetails = $info->invite_refusing_reason_company_details;
            $this->inviteRefusingReasonPerson = $info->invite_refusing_reason_person_id;
            $this->inviteRefusingReasonPersonDetails = $info->invite_refusing_reason_person_details;
            $this->messenger = $info->hr_messenger_id;
            $this->invite = $info->invite;
            $this->status = $info->status;
            $this->hrOperatorId = $info->hr_operator_id;
        }

        return $this;
    }

}
