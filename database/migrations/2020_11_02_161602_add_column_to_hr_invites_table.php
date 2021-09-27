<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToHrInvitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('hr_invites', function (Blueprint $table) {
            //Дата, время совершенного выхода на стажировку
            $table->dateTime('internship_happen_time')->nullable()->after('reminder_sent_time');

            $table->string('comments')->nullable()->after('hr_leader_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('hr_invites', function (Blueprint $table) {
            //
        });
    }
}
