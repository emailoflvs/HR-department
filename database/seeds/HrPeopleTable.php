<?php

use App\HrPerson;
use Illuminate\Database\Seeder;

class HrPeopleTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        HrPerson::firstOrCreate($table);

        if (!DB::table('hr_people')
            ->where(
                [
                    'name' => "Вася",
                    'surname' => 'Иванов',
                ])->first()) {

            DB::table('hr_people')->insert([
                'name' => 'Вася',
                'surname' => 'Иванов',
                'phone_number' => '123',
                'history' => 'История Васи в текстовом формате',
                'filiation_id' => 1,
                'hr_operator_id' => 5,
                'hr_specialization_id' => 1,
                'hr_info_source_id' => 1,
                'hr_messenger_id' => 2,
                'hr_mail_response_filiation_id' => 2,
                'date_added_to_database' => '2020-08-19',
                'birthday' => '2000-01-01'
            ]);
        }

        if (!DB::table('hr_people')
            ->where(
                [
                    'name' => "Петя",
                    'surname' => 'Пупкин',
                ])->first()) {

            DB::table('hr_people')->insert([
                'name' => "Петя",
                'surname' => 'Пупкин',
                'phone_number' => '222123',
                'history' => 'История  в текстовом формате',
                'filiation_id' => 2,
                'hr_operator_id' => 3,
                'hr_specialization_id' => 2,
                'hr_info_source_id' => 2,
                'hr_messenger_id' => 1,
                'hr_mail_response_filiation_id' => 2,
                'date_added_to_database' => '2020-06-10',
                'birthday' => '2000-01-01'
            ]);
        }

    }
}
