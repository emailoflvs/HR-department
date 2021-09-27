<?php

use Illuminate\Database\Seeder;

class ApplicationFormsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tableName = 'application_forms';

        $items = [
            [
//                'name' => 'Анкета кандитата',
                'name' => 'Анкета кандидата в компанию Холдинг "Симпатик Групп"',
                'vendor_code' => 'candidate_application_form',
                'details' => 'Уважаемый кандидат, Мы очень рады познакомиться с  Вами! Для того, что наше с Вами знакомство было более продуктивным, предлагаем Вам заполнить анкету. Чтобы Вы ориентировались по времени,  это займет 15 минут. По любым вопросам, Вы можете обратиться к HR-менеджеру.',
                'picture' => '',
                'video' => '',
                'comments' => 'Комментарии к анкете кандидата',
                'type' => '',
                'status' => '1',
            ],
            [
                'name' => 'Тестирование по окончанию вводного обучения',
                'vendor_code' => 'testing_after_introductory_training',
                'details' => 'Уважаемый коллега, поздравляем ты уже на "финишной прямой" вводного обучения:) ,  предлагаем тебе пройти финальное тестирование для определения уровня твоих знаний . Длительность заполнения - 25-30 минут. В случае возникновения вопросов, ты можешь обратиться к своему специалисту по адаптации. ',
                'picture' => '',
                'video' => '',
                'comments' => 'Комментарии к тестированию',
                'type' => '',
                'status' => '1',
            ],
        ];

        foreach ($items as $item) {
            if (!DB::table($tableName)
//                ->where('name', $item['name'])
                ->where('vendor_code', $item['vendor_code'])
//                ->where('details', $item['details'])
                ->first()) {

                DB::table($tableName)->insert(
                    $item
                );
            }
        }
    }
}
