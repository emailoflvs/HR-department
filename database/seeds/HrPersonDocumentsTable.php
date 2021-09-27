<?php

use Illuminate\Database\Seeder;

class HrPersonDocumentsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tableName = 'hr_person_documents';

        $items = [
            [
                'name' => 'Паспорт гражданина Украины или карта ID',
                'details' => '',
                'comments' => '',
                'type' => '',
                'status' => '',
            ],
            [
                'name' => 'Идентификационный код',
                'details' => '',
                'comments' => '',
                'type' => '',
                'status' => '',
            ],

            [
                'name' => 'Документ об образовании (диплом или аттестат)',
                'details' => '',
                'comments' => '',
                'type' => '',
                'status' => '',
            ],

            [
                'name' => 'Свидетельство о браке (если диплом на девичье имя)',
                'details' => '',
                'comments' => '',
                'type' => '',
                'status' => '',
            ],
            [
                'name' => 'Документ, что подтверждает наличие льгот (инвалидность, участник АТО,
                при статусе одинокой матери и т.д.)',
                'details' => '',
                'comments' => '',
                'type' => '',
                'status' => '',
            ],
            [
                'name' => 'Военные билет или приписное свидетельство (для мужчин)',
                'details' => '',
                'comments' => '',
                'type' => '',
                'status' => '',
            ],
            [
                'name' => 'Медицинские справки: Флюорография, справка от терапевта, справка от офтальмолога',
                'details' => '',
                'comments' => '',
                'type' => '',
                'status' => '',
            ],

        ];

        foreach ($items as $item) {
            if (!DB::table($tableName)
                ->where('name', $item['name'])
                ->first()) {

                DB::table($tableName)->insert(
                    $item
                );
            }
        }

    }
}
