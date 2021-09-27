<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHrQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //таблица вопросов для анкет
        if (!Schema::hasTable('hr_questions')) {
            Schema::create('hr_questions', function (Blueprint $table) {
                $table->id();
                // кандидат - ключ
                $table->bigInteger('person_id')->nullable()->unsigned()->index();
                // текст вопроса
                $table->text('question');
                // уникальное рабочее название вопроса
                $table->string('vendor_code')->nullable()->index();
                // более подробное описание вопроса
                $table->text('details')->nullable();
                // потенциальные ответы, хранящиеся в этой табл
                // (нужно переделать систему, перенеся все эти потенциальные ответы в отдельную табл)
                $table->text('answer')->nullable();

                // таблица, в которой находятся другие потенциальные ответы, например:
                // таблицы с филиалами, специализациями и пр
                $table->string('answer_table')->nullable();
                //с каким столбцом из answer_table мы будем сравнивать нужный параметр
                $table->string('result_column')->nullable();
                //тип отображения вопроса: ввод текста, выбор в списке, отметка в чекбоксах и пр.
                $table->string('type')->nullable();
                //обязательность заполнения поля
                $table->string('required')->nullable();

                $table->string('status');
                $table->timestamps();

                $table->foreign('person_id')->references('id')
                    ->on('hr_people')->onDelete('cascade');

            });
        }


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hr_person_questions_table');
    }
}
