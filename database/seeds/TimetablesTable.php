<?php

use Illuminate\Database\Seeder;

class TimetablesTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $timetables = [
            '6-12 (PM)',
            '8-14',
            '8-15',
            '8-17',
            '8-12',
            '9-16',
            '9-17',
            '9-18',
            '10-16',
            '10-18',
            '10-19',
            '11-17',
            '12-18',
            '13-18',
            '13-19',
            '14-20',
            '15-20',
            '15-21',
            '16-19',
            '16-20',
            '16-21',
        ];

        foreach ($timetables as $timetable) {

            if (!DB::table('timetables')
                ->where('timetable', $timetable)->first()) {

                DB::table('timetables')->insert([
                    'timetable' => $timetable,
                ]);
            }
        }
    }
}
