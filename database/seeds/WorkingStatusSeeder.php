<?php

use Illuminate\Database\Seeder;

class WorkingStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('working_statuses')->insert([
            'name' => 'В очереди',
            'reason' => '',
            'type' => 1,
        ]);

        DB::table('working_statuses')->insert([
            'name' => 'нет',
            'reason' => '',
            'type' => 0,
        ]);

        DB::table('working_statuses')->insert([
            'name' => 'перерыв',
            'reason' => '',
            'type' => 0,
        ]);

        DB::table('working_statuses')->insert([
            'name' => 'обед',
            'reason' => '',
            'type' => 0,
        ]);

        DB::table('working_statuses')->insert([
            'name' => 'конец рабочего дня',
            'reason' => '',
            'type' => 0,
        ]);

//        DB::table('working_statuses')->insert([
//            'name' => 'нет',
//            'reason' => '',
//            'type' => 0,
//        ]);
    }
}
