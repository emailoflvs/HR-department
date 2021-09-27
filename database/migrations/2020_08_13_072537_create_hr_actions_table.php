<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHrActionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // действия совершаемые для первого общения ( сейчас звонок)
        if (!Schema::hasTable('hr_actions')) {
            Schema::create('hr_actions', function (Blueprint $table) {
                $table->id();
                // название действия - перенес в hr_action_types
                $table->string('name')->nullable();

                //id кандидата - ключ
                $table->bigInteger('hr_person_id')->nullable()->unsigned()->index();

                // название действия - ключ
                $table->bigInteger('hr_action_type_id')->nullable()->unsigned()->index();

                //время совершения действия
                $table->dateTime('time')->nullable();

                //запланированное время совершения аналогичного действия (например, если не дозвон)
                $table->dateTime('plan_action_time')->nullable();

                //результат действия contact/no_contact (убрал ключ на hr_action_contact_results)
                $table->string('hr_action_contact_result')->nullable();

                //коммендарии
                $table->string('hr_action_comments')->nullable();

                $table->integer('status')->nullable();
                $table->timestamps();

                // внешний ключ на виды действия
                $table->foreign('hr_action_type_id')->references('id')
                    ->on('hr_action_types')->onDelete('cascade');

                // внешний ключ на кандидата
                $table->foreign('hr_person_id')->references('id')
                    ->on('hr_people')->onDelete('cascade');
            }
            );


        }

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hr_actions');
    }
}
