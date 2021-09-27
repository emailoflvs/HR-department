<?php

use Illuminate\Database\Seeder;

class HrSpecializationsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $specializations = [
            'Входящие продажи (Киев)',
            'Телемаркетинг (Киев)',
            'Digital (Киев)',

            'Входящие продажи (Сумы)',
            'Телемаркетинг (Сумы)',
            'Digital (Сумы)',
            'HK (Сумы)',

            'Входящие продажи (Николаев)',
            'Телемаркетинг (Николаев)',
            'Digital (Николаев)',
            'HK (Николаев)',
        ];

        foreach ($specializations as $name) {
            if (!DB::table('hr_specializations')
                ->where('name', $name)->first()) {
                DB::table('hr_specializations')->insert([
                    'name' => $name,
                ]);
            }
        }
    }
}
