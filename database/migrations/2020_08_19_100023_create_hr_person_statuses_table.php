<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHrPersonStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //статус кандидата (уволен, работает и пр) - ключ на hr_person_statuses
        Schema::create('hr_person_statuses', function (Blueprint $table) {
            $table->id();
            // значение для работы
            $table->string('value');
            $table->string('name');
            // отображаемое значение
            $table->string('display_name');

            $table->string('comments')->nullable();

            //статус данной информации
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
        Schema::dropIfExists('hr_person_statuses');
    }
}
