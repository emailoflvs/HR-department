<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationFormHrQuestionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // many_to_many для анкет и вопросов
        if (!Schema::hasTable('application_form_hr_question')) {
            Schema::create('application_form_hr_question', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('application_form_id');
                $table->unsignedBigInteger('hr_question_id');
                $table->foreign('application_form_id')->references('id')->on('application_forms');
                $table->foreign('hr_question_id')->references('id')->on('hr_questions');
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
        Schema::table('application_form_hr_questions', function (Blueprint $table) {
            //
        });
    }
}
