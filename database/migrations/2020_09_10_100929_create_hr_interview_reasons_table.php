<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHrInterviewReasonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Повод для проведения собеседования (просто собеседование, уточнение информации и пр)
        Schema::create('hr_interview_reasons', function (Blueprint $table) {
            $table->id();
            // отображаемое название
            $table->string('name');
            // рабочее название
            $table->string('type');

            //актуальность данной информации
            $table->integer('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hr_interview_reasons');
    }
}
