<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignToHrActionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('hr_actions', function (Blueprint $table) {
            $table->foreign('hr_action_type_id')->references('id')
                ->on('hr_action_types')->onDelete('cascade');

            $table->foreign('hr_person_id')->references('id')
                ->on('hr_people')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('hr_actions', function (Blueprint $table) {
            //
        });
    }
}
