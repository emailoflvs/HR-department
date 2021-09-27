<?php

use Illuminate\Database\Seeder;

class HrDesiredSalaryTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tableName = 'hr_desired_salary';

        $items = [
            [
                'salary' => '3-5 тыс. грн.',
                'role' => 'operator',
                'type' => ''
            ],
            [
                'salary' => '5-7 тыс. грн',
                'role' => 'operator',
                'type' => ''
            ],
            [
                'salary' => '7-10 тыс. грн.',
                'role' => 'operator',
                'type' => ''
            ],
            [
                'salary' => '10-13 тыс. грн.',
                'role' => 'operator',
                'type' => ''
            ],

            [
                'salary' => 'От 13 тыс. грн',
                'role' => 'operator',
                'type' => ''
            ],

        ];

        foreach ($items as $item) {
            if (!DB::table($tableName)
                ->where('salary', $item['salary'])
                ->where('role', $item['role'])
                ->where('type', $item['type'])
                ->first()) {

                DB::table($tableName)->insert(
                    $item
                );
            }
        }

    }
}
