<?php

use Illuminate\Database\Seeder;

class HrMessengersTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tableName = 'hr_messengers';

        $items = [
            'Viber',
            'Whatsapp',
            'Skype',
            'Telegram',
            'Смс',
            'Другое',
        ];

        foreach ($items as $item) {
            if (!DB::table($tableName)
                ->where(['name' => $item,
                ])->first()) {

                DB::table($tableName)->insert([
                    'name' => $item,
                ]);
            }

        }
    }
}
