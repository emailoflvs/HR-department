<?php

use Illuminate\Database\Seeder;

class HrInviteClarificationsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reasons = [
            'Ожидание доп. информации',
            'Отсутствие руководителя',
            'Обсуждение',
        ];

        foreach ($reasons as $reason) {
            if (!DB::table('hr_invite_clarifications')
                ->where(['reason' => $reason,
                ])->first()) {

                DB::table('hr_invite_clarifications')->insert([
                    'reason' => $reason,
                    'reason_details' => '',
                ]);
            }
        }

    }
}
