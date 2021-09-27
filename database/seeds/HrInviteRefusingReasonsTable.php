<?php

use Illuminate\Database\Seeder;

class HrInviteRefusingReasonsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reasons = [
            'Cпецифика',
            'График',
            'Заработная плата',
        ];

        foreach ($reasons as $reason) {
            if (!DB::table('hr_invite_refusing_reasons')
                ->where(['reason' => $reason,
                    'decision_maker' => 'person'
                ])->first()) {

                DB::table('hr_invite_refusing_reasons')->insert([
                    'reason' => $reason,
                    'reason_details' => '',
                    'decision_maker' => 'person'
                ]);
            }
        }

        $reasons = [
            'ПК',
            'Владение языком',
            'Проблемы с оформлением',

        ];

        foreach ($reasons as $reason) {
            if (!DB::table('hr_invite_refusing_reasons')
                ->where(['reason' => $reason,
                    'decision_maker' => 'company'
                ])->first()) {

                DB::table('hr_invite_refusing_reasons')->insert([
                    'reason' => $reason,
                    'reason_details' => '',
                    'decision_maker' => 'company'
                ]);
            }
        }
    }
}
