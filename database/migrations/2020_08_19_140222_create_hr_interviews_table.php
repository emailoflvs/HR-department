<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHrInterviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
            Таблица, в которую заносятся данные во время собеседования
        */
        // корректирую
        if (!Schema::hasTable('hr_interviews')) {
            Schema::create('hr_interviews', function (Blueprint $table) {
                $table->id();

                // кандидат - с ключем на people
                $table->bigInteger('person_id')->nullable()->unsigned()->index();

                // действие, которое привело к собеседованию - ключ на hr_actions
                $table->bigInteger('action_id')->nullable()->unsigned()->index();

                // причина собеседования (invite (при приглашении) /
                // refusing (сообщить об отказе)/
                //clarification (сообщить о задержке и уточнение вопросов)
                $table->string('reason')->nullable();

                // запланированная дата собеседования
                $table->dateTime('plan_time')->nullable();

                //Собеседование состоялось: да (тогда ставим время)/нет
                $table->dateTime('happen_time')->nullable();

                //когда менеджером отправлено приглашение на собеседование
                $table->dateTime('invite_sent_time')->nullable();
                //когда автоматически отправлено приглашение на собеседование (на перспективу)
                $table->dateTime('invite_automatic_sent_time')->nullable();

                //менеджер, ведущий собеседование - ключ на users
                $table->bigInteger('hr_operator_id')->nullable()->unsigned()->index();
                //дополннительный пользователя, который будет проводить интервью  - ключ на users
                $table->bigInteger('second_interviewer_id')->nullable()->unsigned()->index();
                $table->bigInteger('third_interviewer_id')->nullable()->unsigned()->index();

                //Тип собеседования (групповое group/индивидуальное indiv)
                $table->string('type')->nullable();

                // потенциальный график работы - ключ
                $table->bigInteger('timetable_id')->nullable()->unsigned()->index();
                // потенциальная специализация
                $table->bigInteger('hr_specialization_id')->nullable()->unsigned()->index();
                //способ общения
                $table->bigInteger('hr_messenger_id')->nullable()->unsigned()->index();

                //если приглашен на стажировку
                $table->string('invite')->nullable();

                //если на уточнении
                $table->bigInteger('invite_сlarification')->nullable();
                //причина уточнения
                $table->string('invite_сlarification_details')->nullable();
                //запланированное время для перезвона при уточнении
                $table->dateTime('plan_invite_сlarification_recall_time')->nullable();

                //причины отказа со стороны компании - ключ
                $table->bigInteger('invite_refusing_reason_company_id')->nullable()->unsigned()->index();
                //причины отказа со стороны компании в текстовом виде
                $table->string('invite_refusing_reason_company_details')->nullable();

                //причины отказа со стороны кандидата - ключ
                $table->bigInteger('invite_refusing_reason_person_id')->nullable()->unsigned()->index();
                //причины отказа со стороны кандидата в текстовом виде
                $table->string('invite_refusing_reason_person_details')->nullable();

                $table->string('comments')->nullable();

                $table->string('status')->nullable();

                //Результат собеседования (приглашен на стажировку/ отказ/ на уточнении)
//                $table->string('invited')->nullable();

                $table->timestamps();

                //ключи
                $table->foreign('person_id')->references('id')
                    ->on('hr_people')->onDelete('cascade');

                $table->foreign('action_id')->references('id')
                    ->on('hr_actions')->onDelete('cascade');

                $table->foreign('hr_operator_id')->references('id')
                    ->on('users')->onDelete('cascade');

                $table->foreign('second_interviewer_id')->references('id')
                    ->on('users')->onDelete('cascade');

                $table->foreign('third_interviewer_id')->references('id')
                    ->on('users')->onDelete('cascade');

//                $table->foreign('hr_invite_id')->references('id')
//                    ->on('hr_invites')->onDelete('cascade');

                $table->foreign('hr_specialization_id')->references('id')
                    ->on('hr_specializations')->onDelete('cascade');

                $table->foreign('timetable_id')->references('id')
                    ->on('timetables')->onDelete('cascade');

                $table->foreign('invite_refusing_reason_company_id')->references('id')
                    ->on('hr_invite_refusing_reasons')->onDelete('cascade');

                $table->foreign('invite_refusing_reason_person_id')->references('id')
                    ->on('hr_invite_refusing_reasons')->onDelete('cascade');


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
        Schema::dropIfExists('hr_interviews');
    }
}
