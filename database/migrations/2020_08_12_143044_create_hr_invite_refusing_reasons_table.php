<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHrInviteRefusingReasonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Причины отказов о приеме на работу
        Schema::create('hr_invite_refusing_reasons', function (Blueprint $table) {
            $table->id();
            // причина
            $table->string('reason');
            // более подробное описание
            $table->string('reason_details')->nullable();
            // кто отказал компания или кандидат сам company/person
            $table->string('decision_maker')->nullable();

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
        Schema::dropIfExists('hr_invite_refusing_reasons');
    }
}
