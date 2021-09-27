<?php

use App\HrAction;
use Illuminate\Database\Seeder;

class HrActionsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        HrAction::firstOrCreate(
            [
                'name' => 'test1',
//                'time' => date(),
                'hr_action_type_id' => 1,
                'hr_action_contact_result' => 'contact',
                'hr_action_comments' => 'comments',
                'hr_person_id' => 2,
                'hr_operator_id' => 3,
            ]
        );

        HrAction::firstOrCreate(
            [
//                'name' => 'test1',
//                'time' => date(),
                'hr_action_type_id' => 2,
                'hr_action_contact_result' => 'contact',
//                'hr_action_comments' => 'comments',
                'hr_person_id' => 2,
                'hr_operator_id' => 3,
            ]
        );

    }
}
