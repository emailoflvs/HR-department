<?php

namespace App;

use App\HrAction;
use App\HrInvite;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class HrInviteRefusingReason extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'reason', 'reason_details', 'decision_maker'
    ];

    /**
     * Get last invite of action
     * @param intereg $actionId
     * @var array
     */
    public
    function getReasonList($decision_maker = null)
    {
        $reasonList = HrInviteRefusingReason::where('decision_maker', $decision_maker)->get();

        return $reasonList;

        if (empty($actionId))
            return null;

        $info = HrInvite::where('action_id', $actionId)->orderBy('created_at', 'desc')->take(1)->get();

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
            $this->inviteRefusingReasonId = $info->invite_refusing_reason_id;
            $this->inviteRefusingReasonDetails = $info->invite_refusing_reason_details;
            $this->messenger = $info->hr_messenger_id;
            $this->invite = $info->invite;
            $this->status = $info->status;
            $this->hrOperatorId = $info->hr_operator_id;
        }

        return $this;
    }

    /**
     * Get reason by id
     * @param int $Id
     * @var array
     */
    public
    function getReason($id = null, $decision_maker = null)
    {
        $reason = HrInviteRefusingReason::where('id', $id)
            ->where('decision_maker', $decision_maker)->first();

        return $reason['reason'];
    }

}
