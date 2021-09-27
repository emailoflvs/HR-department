<?php

use Illuminate\Database\Seeder;

class ApplicationFormsHrQuestionsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tableName = 'application_form_hr_question';

        $items = [
            [
                'application_form_vendor_code' => 'candidate_application_form',
                'hr_question_vendor_code' => 'name',
            ],
            [
                'application_form_vendor_code' => 'candidate_application_form',
                'hr_question_vendor_code' => 'education',
            ],
            [
                'application_form_vendor_code' => 'candidate_application_form',
                'hr_question_vendor_code' => 'desired_work_time',
            ],

//            [
//                'application_form_vendor_code' => 'candidate_application_form',
//                'hr_question_vendor_code' => '',
//            ],

        ];

        $id = 1;
        foreach ($items as $item) {

            $application_form_id = DB::table('application_forms')
                ->where(['vendor_code' => $item['application_form_vendor_code'],
                ])->first();

            $hr_question_id = DB::table('hr_questions')
                ->where(['vendor_code' => $item['hr_question_vendor_code'],
                ])->first();

            if (!DB::table('application_form_hr_question')
                ->where(['application_form_id' => $application_form_id->id])
                ->where(['hr_question_id' => $hr_question_id->id])
                ->first()) {

                DB::table('application_form_hr_question')->insert([
                    'application_form_id' => $application_form_id->id,
                    'hr_question_id' => $hr_question_id->id,
                ]);
            }
        }
    }
}
