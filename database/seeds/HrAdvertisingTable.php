<?php

use Illuminate\Database\Seeder;

class HrAdvertisingTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hr_advertisings = ['work.ua',
            'rabota.ua',
            'от знакомых',
            'соц.сети',
            'реклама',
        ];

        foreach ($hr_advertisings as $hr_advertising) {

            if (!DB::table('hr_advertising')
                ->where('name', $hr_advertising)->first()) {

                DB::table('hr_advertising')->insert([
                    'name' => $hr_advertising,
                ]);
            }
        }
    }
}
