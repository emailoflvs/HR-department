<?php

use Illuminate\Database\Seeder;

class HrActionContactResultsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table_name = 'hr_action_contact_results';

        if (!DB::table($table_name)
            ->where([
                'value' => 'contact'
            ])->first()) {

            DB::table($table_name)->insert([
                'display_name' => 'Дозвон',
                'value' => 'contact'
            ]);
        }

        if (!DB::table($table_name)
            ->where([
                'value' => 'no_contact'
            ])->first()) {

            DB::table($table_name)->insert([
                'display_name' => 'Не дозвон',
                'value' => 'no_contact'
            ]);
        }

    }
}
