<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHrAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //ответы в заполненных анкетах
        if (!Schema::hasTable('hr_person_answers')) {
            Schema::create('hr_person_answers', function (Blueprint $table) {
                $table->id();
                //Заполненная анкета - ключ
                $table->bigInteger('person_application_form_id')->nullable()->unsigned()->index();
                // уникальное рабочее название вопроса
                $table->string('question_vendor_code')->nullable()->index();
                // ответ
                $table->text('answer')->nullable();
                $table->text('comments')->nullable();
                $table->string('type')->nullable();
                $table->string('status')->nullable();

                $table->timestamps();

                $table->foreign('person_application_form_id')->references('id')
                    ->on('hr_person_application_forms')->onDelete('cascade');

                $table->foreign('question_vendor_code')->references('vendor_code')
                    ->on('hr_questions')->onDelete('cascade');

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
        Schema::dropIfExists('hr_person_answers');
    }
}
