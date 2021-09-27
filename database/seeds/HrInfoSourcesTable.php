<?php

use Illuminate\Database\Seeder;

class HrInfoSourcesTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hrInfoSources = [
            'work.ua',
            'rabota.ua',
            'от знакомых',
            'соц.сети',
            'реклама',
        ];

        foreach ($hrInfoSources as $hrInfoSource) {

            if (!DB::table('hr_info_sources')
                ->where('name', $hrInfoSource)->first()) {

                DB::table('hr_info_sources')->insert([
                    'name' => $hrInfoSource,
                ]);
            }
        }
    }
}
