<?php
use Illuminate\Database\Seeder;

class HrСompTechnicalRequirementsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tableName = "hr_comp_technical_requirements";

        $items = [
            [
                'name' => 'ОС Windows 7 SP2, Windows 10 Pro',
                'details' => '',
                'comments' => '',
                'type' => '',
                'status' => '',
            ],
            [
                'name' => 'Процессор не менее 2 GHz',
                'details' => '',
                'comments' => '',
                'type' => '',
                'status' => '',
            ],
            [
                'name' => 'Жесткий диск объем не менее 50 Gb',
                'details' => '',
                'comments' => '',
                'type' => '',
                'status' => '',
            ],
            [
                'name' => 'Оперативная память не менее 2 Gb. Желательно, 4 Gb',
                'details' => '',
                'comments' => '',
                'type' => '',
                'status' => '',
            ],
            [
                'name' => 'Проводной интернет (не WiFi)',
                'details' => '',
                'comments' => '',
                'type' => '',
                'status' => '',
            ],
            [
                'name' => 'Гарнитура',
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
