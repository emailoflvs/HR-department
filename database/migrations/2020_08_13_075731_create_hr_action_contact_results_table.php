<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHrActionContactResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Результат первого действия (дозвон/не дозвон)
        Schema::create('hr_action_contact_results', function (Blueprint $table) {
            $table->id();
            //здачение для дальнейшей работы (contact/no_contact)
            $table->string('value');

            //текст для отображения
            $table->string('display_name');
            $table->integer('status')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hr_action_contact_results');
    }
}
