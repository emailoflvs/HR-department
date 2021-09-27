<?php

use Illuminate\Database\Seeder;

class HrActionTypesTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            'Исходящий звонок',
            'Входящий звонок',
        ];

        $table_name = 'hr_action_types';

        foreach ($items as $item) {
            if (!DB::table($table_name)
                ->where(['name' => $item,
                ])->first()) {

                DB::table($table_name)->insert([
                    'name' => $item,
                ]);
            }
        }
    }
}
