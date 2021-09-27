<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignToHrPeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('hr_people', function (Blueprint $table) {
            $table->foreign('hr_messenger_id')->references('id')
                ->on('hr_messengers')->onDelete('cascade');


            $table->foreign('hr_person_status_id')->references('id')
                ->on('hr_person_statuses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('hr_people', function (Blueprint $table) {
            //
        });
    }
}
