<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHrInvitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
            Таблица, в которую заносятся данные пользователей, которые прошли собеседование
        */
        if (!Schema::hasTable('hr_invites')) {
            Schema::create('hr_invites', function (Blueprint $table) {
                $table->id();

                $table->bigInteger('person_id')->nullable()->unsigned()->index();

//                $table->bigInteger('hr_interview_id')->nullable()->unsigned()->index();

                //если приглашен на стажировку
                $table->bigInteger('timetable_id')->nullable()->unsigned()->index();
                $table->bigInteger('hr_specialization_id')->nullable()->unsigned()->index();

                //Дата, время запланированного выхода на стажировку
                $table->dateTime('internship_time')->nullable();

                //Опция информирования кандидата сообщением в вайбер или телеграмм о времени и дате выхода на
                // стажировку (отправляется после завершения собеседования)
                $table->dateTime('internship_sent_time')->nullable();

                // Опция напоминания кандидату о его первом рабочем дне (автоматически за 2 часа до назначенного
                // времени выхода на стажировку)
                $table->dateTime('reminder_sent_time')->nullable();

                //Дата, время совершенного выхода на стажировку
                $table->dateTime('internship_happen_time')->nullable();

                //Руководитель, к кому идет новый сотрудник
                $table->bigInteger('hr_leader_id')->nullable()->unsigned()->index();

                $table->string('comments')->nullable();

                //актуальность данной информации
                $table->integer('status')->nullable();

                $table->timestamps();

                $table->foreign('hr_leader_id')->references('id')
                    ->on('users')->onDelete('cascade');

                $table->foreign('hr_specialization_id')->references('id')
                    ->on('hr_specializations')->onDelete('cascade');

                $table->foreign('timetable_id')->references('id')
                    ->on('timetables')->onDelete('cascade');
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
        Schema::dropIfExists('hr_invites');
    }
}
