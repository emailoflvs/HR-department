<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHrActionResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // результат "первого" (до собеседования)  общения
        if (!Schema::hasTable('hr_action_results')) {
            Schema::create('hr_action_results', function (Blueprint $table) {
                $table->id();

                // действие - созвон
                $table->bigInteger('action_id')->nullable()->unsigned()->index();

                //результат первого общения invite (приглашен на собеседование) /
                // сlarification (на уточнении) / refusing (отказ)
                $table->string('action_result')->nullable();
//            $table->bigInteger('action_result_id')->nullable()->unsigned()->index();

                //если приглашен
                // потенциальный график работы - ключ
                $table->bigInteger('timetable_id')->nullable()->unsigned()->index();
                // потенциальная специализация
                $table->bigInteger('hr_specialization_id')->nullable()->unsigned()->index();

                //если на уточнении - причина ключ
                $table->bigInteger('invite_сlarification_id')->nullable()->unsigned()->index();
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

                //менеджер, ведущий собеседование - ключ на users
                $table->bigInteger('hr_operator_id')->nullable()->unsigned()->index();

                $table->string('comments')->nullable();

                $table->string('status')->nullable();

                //Результат собеседования (приглашен на стажировку/ отказ/ на уточнении)
//                $table->string('invited')->nullable();

                $table->timestamps();

                $table->foreign('action_id')->references('id')
                    ->on('hr_actions')->onDelete('cascade');

//            $table->foreign('action_result_id')->references('id')
//                ->on('hr_action_result')->onDelete('cascade');

                $table->foreign('hr_specialization_id')->references('id')
                    ->on('hr_specializations')->onDelete('cascade');

                $table->foreign('timetable_id')->references('id')
                    ->on('timetables')->onDelete('cascade');

                $table->foreign('invite_сlarification_id')->references('id')
                    ->on('hr_invite_clarifications')->onDelete('cascade');

                $table->foreign('invite_refusing_reason_company_id')->references('id')
                    ->on('hr_invite_refusing_reasons')->onDelete('cascade');

                $table->foreign('invite_refusing_reason_person_id')->references('id')
                    ->on('hr_invite_refusing_reasons')->onDelete('cascade');

                $table->foreign('hr_operator_id')->references('id')
                    ->on('users')->onDelete('cascade');

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
        Schema::dropIfExists('hr_action_results');
    }
}
