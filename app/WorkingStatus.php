<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use phpDocumentor\Reflection\Types\Array_;

class WorkingStatus extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'reason', 'type'
    ];

    /**
     * Возвращаем массив возможных статусов работы. Type=1 если считается работой, type=0 если выход по какой-то причине
     * @param integer $type
     * @return array
     */
    public function getStatuseByType($type = 0)
    {
        foreach (WorkStatus::where('type', '=', $type)->get() as $item)
            $statuses[] = $item->getAttributes();

        return $statuses;
    }

    /**
     * @return int
     */
    public function GetCurrentUserWorkingStatus()
    {
        if (!isset($_SESSION['working_status']))
            $_SESSION['working_status'] = 0;

        return $_SESSION['working_status'];
    }

    /**
     *
     * @param int $working_status
     * @return int
     */
    public function SetCurrentUserWorkingStatus($working_status)
    {
        $_SESSION['working_status'] = $working_status;

        return $_SESSION['working_status'];
    }

}
