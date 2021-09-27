<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHrInviteClarificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Причины, почему кандидатура может быть "на уточнении"
        Schema::create('hr_invite_clarifications', function (Blueprint $table) {
            $table->id();
            $table->string('reason');
            $table->string('reason_details');

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
        Schema::dropIfExists('hr_invite_clarifications');
    }
}
