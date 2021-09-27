<?php

use Illuminate\Database\Seeder;

class FiliationsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $filiations = ['Сумы',
            'Киев',
            'Николаев',
            'удаленный филиал',
        ];

        foreach ($filiations as $city_name) {

            if (!DB::table('filiations')
                ->where('city_name', $city_name)->first()) {

                DB::table('filiations')->insert([
                    'city_name' => $city_name,
                ]);
            }
        }
    }
}
