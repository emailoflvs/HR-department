<?php

use Illuminate\Database\Seeder;

class HrInterviewReasonsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reasons = [
            [
                'name' => 'Собеседование',
                'type' => 'interview'
            ],
            [
                'name' => 'Уточнение',
                'type' => 'clarification'
            ],
            [
                'name' => 'Получение информации',
                'type' => 'add_information'
            ],
            [
                'name' => 'Повторный звонок',
                'type' => 'no_contact'
            ],
        ];

        foreach ($reasons as $reason) {
            if (!DB::table('hr_interview_reasons')
                ->where(['type' => $reason['type'],
                ])->first()) {

                DB::table('hr_interview_reasons')->insert([
                    'name' => $reason['name'],
                    'type' => $reason['type'],
                ]);
            }
        }

    }
}
