<?php

use Illuminate\Database\Seeder;

class HrPersonStatusesTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tableName = 'hr_person_statuses';

        $items = [
            [
//                ждём (если мы на собеседовании пригласили кандидата на стажировку и ждём его выхода)
                'value' => 'waiting_internship',
                'name' => '',
                'display_name' => 'Ждем выхода на стажировку',
//                'status' => '',
            ],
            [
//                стажировка (если кандидат вышел на стажировку и пока её не прошёл)
                'value' => 'start_internship',
                'name' => '',
                'display_name' => 'Стажировка',
//                'status' => '',
            ],
            [
//                отказ (если кандидату отказали на собеседовании и не приглашали на стажировку)
                'value' => 'refusing',
                'name' => '',
                'display_name' => 'Отказ',
//                'status' => '',
            ],
            [
//                испытательный срок (когда сотрудник прошёл стажировку (5 дней) и перешёл работать в свою команду)
                'value' => 'test_period',
                'name' => '',
                'display_name' => 'Испытательный срок',
//                'status' => '',
            ],
            [
//                ушёл/ушла (если кандидат выходил на стажировку и ушёл с неё
                'value' => 'gone_internship',
                'name' => '',
                'display_name' => 'Ушёл/ушла',
//                'status' => '',
            ],
//            [
//                'value' => '',
//                'name' => '',
//                'display_name' => '',
//                'status' => '',
//            ],


        ];

        foreach ($items as $item) {
            if (!DB::table($tableName)
                ->where('value', $item['value'])
                ->first()) {

                DB::table($tableName)->insert(
                    $item
                );
            }
        }

    }
}
