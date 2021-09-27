<?php

use Illuminate\Database\Seeder;

class HrQuestionsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tableName = 'hr_questions';

        $items = [
            [
                'question' => 'Вы пришли к нам на собеседование в городе',
                'vendor_code' => 'filiation',
                'details' => '',
                'answer' => '',
                'answer_table' => 'filiations',
                'result_column' => 'city_name',
                'type' => '',
                'status' => '1',
            ],

            [
                'question' => 'Как Вас зовут? (имя и фамилия)',
                'vendor_code' => 'name',
                'details' => '',
                'answer' => '',
                'answer_table' => '',
                'result_column' => '',
                'type' => '',
                'status' => '1',
            ],

            [
                'question' => 'Ваш контактный номер телефона',
                'vendor_code' => 'phone_number',
                'details' => '',
                'answer' => '',
                'answer_table' => '',
                'result_column' => '',
                'type' => '',
                'status' => '1',
            ],

            [
                'question' => 'Ваш возраст (полных лет)',
                'vendor_code' => 'years',
                'details' => '',
                'answer' => '',
                'answer_table' => '',
                'result_column' => '',
                'type' => '',
                'status' => '1',
            ],

            [
                'question' => 'Вы желаете работать:',
                'vendor_code' => 'hr_employment_rule',
                'details' => '',
                'answer' => '',
                'answer_table' => 'hr_employment_rules',
                'result_column' => 'name',
                'type' => '',
                'status' => '1',
            ],

            [
                'question' => 'Ваш желаемый уровень дохода за первый месяц работы:',
                'vendor_code' => 'desired_salary_first',
                'details' => '',
                'answer' => '',
                'answer_table' => 'hr_desired_salary',
                'result_column' => 'salary',
                'type' => '',
                'status' => '1',
            ],
            [
                'question' => 'Ваш желаемый уровень дохода со второго месяца работы:',
                'vendor_code' => 'desired_salary_second',
                'details' => '',
                'answer' => '',
                'answer_table' => 'hr_desired_salary',
                'result_column' => 'salary',
                'type' => '',
                'status' => '1',
            ],
            [
                'question' => 'Вы узнали о нас из:',
                'vendor_code' => 'info_source',
                'details' => '',
                'answer' => '',
                'answer_table' => 'hr_info_sources',
                'result_column' => 'name',
                'type' => '',
                'status' => '1',
            ],
            [
                'question' => 'Если нашу вакансию Вам порекомендовал друг/знакомый,
                            пожалуйста, укажите его/ее имя и фамилию:',
                'vendor_code' => 'info_source_name',
                'details' => '',
                'answer' => '',
                'answer_table' => '',
                'result_column' => '',
                'type' => '',
                'status' => '1',
            ],

            [
                'question' => 'Наименование Высшего учебного заведения, которое закончили
                или в котором еще учитесь (+ укажите год выпуска)',
                'vendor_code' => 'education',
                'details' => '',
                'answer' => '',
                'answer_table' => '',
                'result_column' => '',
                'type' => '',
                'status' => '1',
            ],

            [
                'question' => 'Есть ли у Вас дети?',
                'vendor_code' => 'children',
                'details' => '',
                'answer' => '',
                'answer_table' => '',
                'result_column' => '',
                'type' => '',
                'status' => '1',
            ],

            [
                'question' => 'Ваш желаемый график работы (варианты доступных графиков уточните
                у менеджера)',
                'vendor_code' => 'desired_work_time',
                'details' => '',
                'answer' => 'Первая половина дня',
                'answer_table' => 'hr_questions',
                'result_column' => 'answer',
                'type' => 'sub',
                'status' => '1',
            ],
            [
                'question' => 'Ваш желаемый график работы (варианты доступных графиков уточните у
                менеджера)',
                'vendor_code' => 'desired_work_time',
                'details' => '',
                'answer' => 'Вторая половина дня',
                'answer_table' => 'hr_questions',
                'result_column' => 'answer',
                'type' => 'sub',
                'status' => '1',
            ],
            [
                'question' => 'Ваш желаемый график работы (варианты доступных графиков уточните у менеджера)',
                'vendor_code' => 'desired_work_time',
                'details' => '',
                'answer' => 'Полный рабочий день',
                'answer_table' => 'hr_questions',
                'result_column' => 'answer',
                'type' => 'sub',
                'status' => '1',
            ],
            [
                'question' => 'Я ищу работу',
                'vendor_code' => 'hr_work_term',
                'details' => '',
                'answer' => '',
                'answer_table' => 'hr_work_term',
                'result_column' => 'term',
                'type' => 'sub',
                'status' => '1',
            ],
            [
                'question' => 'Я хочу работать на:',
                'vendor_code' => 'function',
                'details' => '',
                'answer' => 'Входящей линии',
                'answer_table' => 'hr_questions',
                'result_column' => 'answer',
                'type' => 'sub',
                'status' => '1',
            ],
            [
                'question' => 'Я хочу работать на:',
                'vendor_code' => 'function',
                'details' => '',
                'answer' => 'Исходящей линии (для г.Киев и г. Сумы)',
                'answer_table' => 'hr_questions',
                'result_column' => 'answer',
                'type' => 'sub',
                'status' => '1',
            ],
            [
                'question' => 'Я хочу работать на:',
                'vendor_code' => 'function',
                'details' => '',
                'answer' => 'Отдел интернет-продаж',
                'answer_table' => 'hr_questions',
                'result_column' => 'answer',
                'type' => 'sub',
                'status' => '1',
            ],
            [
                'question' => 'У Вас ранее был опыт работы оператором контакт-центра?',
                'vendor_code' => 'operator_experience',
                'details' => 'Если был опыт, напишите, пожалуйста, наименование компании и чем Вы занимались',
                'answer' => '',
                'answer_table' => '',
                'result_column' => '',
                'type' => '',
                'status' => '1',
            ],
            [
                'question' => 'Из ниже перечисленных высказываний выберите наиболее близкое для Вас:',
                'vendor_code' => 'opinion',
                'details' => '',
                'answer' => 'Сама работа не является для меня сколько-нибудь значимой ценностью и рассматривается
                        только как источник заработка и других благ, получаемых в качестве вознаграждения за труд.',
                'answer_table' => 'hr_questions',
                'result_column' => 'answer',
                'type' => 'sub',
                'status' => '1',
            ],
            [
                'question' => 'Из ниже перечисленных высказываний выберите наиболее близкое для Вас:',
                'vendor_code' => 'opinion',
                'details' => '',
                'answer' => 'В работе я ценю ее содержание, возможность проявить себя и доказать (не только окружающим, но и себе),
                        что он могу справиться с трудным заданием, которое не каждому посильно.',
                'answer_table' => 'hr_questions',
                'result_column' => 'answer',
                'type' => 'sub',
                'status' => '1',
            ],
            [
                'question' => 'Из ниже перечисленных высказываний выберите наиболее близкое для Вас:',
                'vendor_code' => 'opinion',
                'details' => '',
                'answer' => 'Меня мотивирует участие в реализации общего, очень важного для организации дела. Мне важно убеждаться в своей
                    нужности для организации. я всегда готов(-а) взять на себя дополнительную ответственность ради достижения
                    результатов общего дела.',
                'answer_table' => 'hr_questions',
                'result_column' => 'answer',
                'type' => 'sub',
                'status' => '1',
            ],
            [
                'question' => 'Из ниже перечисленных высказываний выберите наиболее близкое для Вас:',
                'vendor_code' => 'opinion',
                'details' => '',
                'answer' => 'Мне нравится брать на себя полную ответственность за выполняемую работу. Я люблю работать с максимальной
                    отдачей, для меня не важен контроль моей деятельности. Уровень заработка не самый важный мотиватор для меня.',
                'answer_table' => 'hr_questions',
                'result_column' => 'answer',
                'type' => 'sub',
                'status' => '1',
            ],
            [
                'question' => 'Из ниже перечисленных высказываний выберите наиболее близкое для Вас:',
                'vendor_code' => 'opinion',
                'details' => '',
                'answer' => 'Сама работа не является для меня сколько-нибудь значимой ценностью и рассматривается
                    только как источник заработка и других благ, получаемых в качестве вознаграждения за труд.',
                'answer_table' => 'hr_questions',
                'result_column' => 'answer',
                'type' => 'sub',
                'status' => '1',
            ],

            [
                'question' => 'Оцените такой фактор как "месторасположение работы" по степени важности для Вас,
                    где 1 - абсолютно не важно и 10 очень важно',
                'vendor_code' => 'work_location_rating',
                'details' => '',
                'answer' => '',
                'answer_table' => '',
                'result_column' => '',
                'type' => 'rating',
                'status' => '1',
            ],

            [
                'question' => 'Оцените такой фактор как "Возможность повышения по карьерной лестнице" по степени важности
                для Вас, где 1 - абсолютно не важно и 10 очень важно:',
                'vendor_code' => 'raising_career_rating',
                'details' => '',
                'answer' => '',
                'answer_table' => '',
                'result_column' => '',
                'type' => 'rating',
                'status' => '1',
            ],

            [
                'question' => 'Насколько вы согласны с утверждением: "Уровень заработной платы для меня самый
                    важный фактор в моей работе"',
                'vendor_code' => 'salary_important',
                'details' => '',
                'answer' => '',
                'answer_table' => '',
                'result_column' => '',
                'type' => 'rating',
                'status' => '1',
            ],

            [
                'question' => 'Насколько вы согласны с утверждением: "Для меня важно, чтоб у меня были возможности
                        для профессионального и личностного развития"',
                'vendor_code' => 'professional_personal_development',
                'details' => '',
                'answer' => '',
                'answer_table' => '',
                'result_column' => '',
                'type' => 'rating',
                'status' => '1',
            ],

            [
                'question' => 'Насколько вы согласны с утверждением: "Я считаю работу оператором контакт-центра"
                            престижной"',
                'vendor_code' => 'prestige_work',
                'details' => '',
                'answer' => '',
                'answer_table' => '',
                'result_column' => '',
                'type' => 'rating',
                'status' => '1',
            ],

            [
                'question' => 'Так как для нас важен уровень владение украинским языком, просим Вас перевести на украинский
                язык следующие предложения:',
                'vendor_code' => 'ru_to_ua_translation',
                'details' => '«Симпатик Групп» – одна из ведущих на украинском рынке компаний в сфере дистанционной
                торговли. Благодаря широкому ассортименту и высокому качеству предлагаемой продукции,
                клиентоориентированной стратегии и комплексному подходу к продажам мы реализовали более 16 миллионов
                товаров за 15 лет работы»',
                'answer' => '',
                'answer_table' => '',
                'result_column' => '',
                'type' => '',
                'status' => '1',
            ],
            [
                'question' => 'Каким образом можно открыть файл?',
                'vendor_code' => 'computer_skills',
                'details' => '',
                'answer' => 'Двойным нажатием левой кнопки мыши по значку файла.',
                'answer_table' => 'hr_questions',
                'result_column' => 'answer',
                'type' => 'sub',
                'status' => '1',
            ],
            [
                'question' => 'Каким образом можно открыть файл?',
                'vendor_code' => 'computer_skills',
                'details' => '',
                'answer' => 'Двойным нажатием правой кнопки мыши по значку файла.',
                'answer_table' => 'hr_questions',
                'result_column' => 'answer',
                'type' => 'sub',
                'status' => '1',
            ],
            [
                'question' => 'Каким образом можно открыть файл?',
                'vendor_code' => 'computer_skills',
                'details' => '',
                'answer' => 'Удержанием в течение 5 секунд правой кнопки мыши на значке файла',
                'answer_table' => 'hr_questions',
                'result_column' => 'answer',
                'type' => 'sub',
                'status' => '1',
            ],
            [
                'question' => 'Каким образом можно открыть файл?',
                'vendor_code' => 'computer_skills',
                'details' => '',
                'answer' => 'Удержанием в течение 5 секунд левой кнопки мыши на значке файла.',
                'answer_table' => 'hr_questions',
                'result_column' => 'answer',
                'type' => 'sub',
                'status' => '1',
            ],

            [
                'question' => 'Что невозможно сделать с помощью меню "Пуск"?',
                'vendor_code' => 'computer_skills_pusk',
                'details' => '',
                'answer' => 'Найти файлы и папки, находящиеся на компьютере.',
                'answer_table' => 'hr_questions',
                'result_column' => 'answer',
                'type' => 'sub',
                'status' => '1',
            ],
            [
                'question' => 'Что невозможно сделать с помощью меню "Пуск"?',
                'vendor_code' => 'computer_skills_pusk',
                'details' => '',
                'answer' => 'Запустить на печать текстовый или графический документ.',
                'answer_table' => 'hr_questions',
                'result_column' => 'answer',
                'type' => 'sub',
                'status' => '1',
            ],
            [
                'question' => 'Что невозможно сделать с помощью меню "Пуск"?',
                'vendor_code' => 'computer_skills_pusk',
                'details' => '',
                'answer' => 'Запустить программу, установленную на компьютере.',
                'answer_table' => 'hr_questions',
                'result_column' => 'answer',
                'type' => 'sub',
                'status' => '1',
            ],

            [
                'question' => 'Каким образом можно безопасно завершить работу на компьютере?',
                'vendor_code' => 'computer_skills_turn_off',
                'details' => '',
                'answer' => 'Нажав на кнопку Power на системном блоке.',
                'answer_table' => 'hr_questions',
                'result_column' => 'answer',
                'type' => 'sub',
                'status' => '1',
            ],
            [
                'question' => 'Каким образом можно безопасно завершить работу на компьютере?',
                'vendor_code' => 'computer_skills_turn_off',
                'details' => '',
                'answer' => 'Выключив монитор.',
                'answer_table' => 'hr_questions',
                'result_column' => 'answer',
                'type' => 'sub',
                'status' => '1',
            ],
            [
                'question' => 'Каким образом можно безопасно завершить работу на компьютере?',
                'vendor_code' => 'computer_skills_turn_off',
                'details' => '',
                'answer' => 'С помощью клавиши Enter на клавиатуре.',
                'answer_table' => 'hr_questions',
                'result_column' => 'answer',
                'type' => 'sub',
                'status' => '1',
            ],
            [
                'question' => 'Каким образом можно безопасно завершить работу на компьютере?',
                'vendor_code' => 'computer_skills_turn_off',
                'details' => '',
                'answer' => 'С помощью меню "Пуск".',
                'answer_table' => 'hr_questions',
                'result_column' => 'answer',
                'type' => 'sub',
                'status' => '1',
            ],
            [
                'question' => 'Просим Вас перевести на русский язык нашу Миссию:',
                'vendor_code' => 'ua_to_ru_translation',
                'details' => '"Наша місія - Надихати людей на нову якість життя, робити їх шлях до здоров’я, довголіття,
                краси і гармонії простим та приємним. Для нас важливо: створювати ефективні і безпечні Wellness
                продукти, засоби і комплекси, просувати ідею здорового способу життя"',
                'answer' => '',
                'answer_table' => '',
                'result_column' => '',
                'type' => '',
                'status' => '',
            ],

            [
                'question' => 'Уважаемый соискатель, в нашей компании, новые сотрудники проходят
                этап официального трудоустройства. В случае дальнейшего нашего с Вами
                сотрудничества, для трудоустройства Вам могут понадобиться нижеперечисленные
                документы. Просим Вас отметить каких из нижеперечисленных документов у Вас НЕТ
                или с какими могут возникнуть трудности. Просим об этом также сообщить нашему
                менеджеру. ',
                'vendor_code' => 'hr_person_documents',
                'details' => '',
                'answer' => '',
                'answer_table' => 'hr_person_documents',
                'result_column' => 'name',
                'type' => '',
                'status' => '1',
            ],
            [
                'question' => 'Для удалённой работы необходим определённый набор технических требований
                для ПК/ноутбука. Просим Вас отметить каких из нижеперечисленных технических требованей
                у Вас НЕТ, либо могут возникнуть трудности',
                'vendor_code' => 'hr_comp_technical_requirements',
                'details' => '',
                'answer' => '',
                'answer_table' => 'hr_comp_technical_requirements',
                'result_column' => 'name',
                'type' => '',
                'status' => '1',
            ],

//            [
//                'question' => '',
//              'vendor_code' => '',
//                  'details' => '',
//                'answer' => '',
//                'type' => '',
//                'status' => '1',
//            ],

        ];

        foreach ($items as $item) {
//            $item['vendor_code'] = isset($item['vendor_code']) ? $item['vendor_code'] : '';
//            $item['answer_table'] = isset($item['answer_table']) ? $item['vendor_code'] : '';
            if (!DB::table($tableName)
                ->where('question', $item['question'])
                ->where('vendor_code', $item['vendor_code'])
                ->where('details', $item['details'])
                ->where('answer', $item['answer'])
                ->where('answer_table', $item['answer_table'])
                ->where('result_column', $item['result_column'])
                ->where('type', $item['type'])
                ->where('status', $item['status'])
                ->first()) {

                DB::table($tableName)->insert(
                    $item
                );
            }
        }

    }
}
