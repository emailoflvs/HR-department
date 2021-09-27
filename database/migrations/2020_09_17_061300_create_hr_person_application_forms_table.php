<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHrPersonApplicationFormsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Заполненные анкеты
        if (!Schema::hasTable('hr_person_application_forms')) {
            Schema::create('hr_person_application_forms', function (Blueprint $table) {
                $table->id();
                // тип анкеты, которую нужно заполнять - ключ
                $table->bigInteger('application_form_id')->nullable()->unsigned()->index();

                //кандидат
                $table->bigInteger('person_id')->nullable()->unsigned()->index();

                //Дата и время отправки на заполнение
                $table->dateTime('sent_time')->nullable();

                //Дата и время заполнения
                $table->dateTime('completed_time')->nullable();

                //Дата и время просмотра менеджером
                $table->dateTime('viewed_on_time')->nullable();

                //Скорость заполнения
                $table->integer('speed')->nullable();

                $table->text('comments')->nullable();
                $table->string('type')->nullable();
                $table->string('status')->nullable();

                $table->foreign('person_id')->references('id')
                    ->on('hr_people')->onDelete('cascade');

                $table->timestamps();
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
        Schema::dropIfExists('hr_person_application_forms');
    }
}
