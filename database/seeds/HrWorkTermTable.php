<?php

use Illuminate\Database\Seeder;

class HrWorkTermTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tableName = 'hr_work_term';

        $items = [
            [
                'term' => 'только на 1-3 месяца',
            ],
            [
                'term' => 'на постоянной основе',
            ],
            [
                'term' => 'ищу на 1-3 месяца, но если понравится останусь "надолго":)',
            ],

        ];

        foreach ($items as $item) {
            if (!DB::table($tableName)
                ->where('term', $item['term'])
                ->first()) {

                DB::table($tableName)->insert(
                    $item
                );
            }
        }

    }
}
