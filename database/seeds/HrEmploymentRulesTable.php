<?php

use Illuminate\Database\Seeder;

class HrEmploymentRulesTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tableName = 'hr_employment_rules';

        $items = [
            [
                'name' => 'Только официально по КЗоТ Украины',
                'type' => 'officially'
            ],
            [
                'name' => 'Только НЕ официально',
                'type' => 'no_officially'
            ],
            [
                'name' => 'Только официально по КЗоТ Украины',
                'type' => 'no_matter'
            ],
        ];

        foreach ($items as $item) {
            if (!DB::table($tableName)
                ->where('name', $item['name'])
                ->where('type', $item['type'])
                ->first()) {

                DB::table($tableName)->insert(
                    $item
                );
            }
        }
    }
}
