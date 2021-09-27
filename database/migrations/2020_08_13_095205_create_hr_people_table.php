<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHrPeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Список кандидатов
        if (!Schema::hasTable('hr_people')) {
            Schema::create('hr_people', function (Blueprint $table) {
                $table->id();
                $table->string('name')->nullable();
                $table->string('surname')->nullable();
                $table->string('phone_number')->nullable();

                $table->date('date_added_to_database')->nullable();
                $table->string('sex')->nullable();
                $table->date('birthday')->nullable();
                $table->string('years')->nullable();
                $table->string('children')->nullable();

                // история в текстовом виде - иногда полезно
                $table->mediumText('history')->nullable();

                // филиал для работы с дальнейшим ключем на filiations
                $table->bigInteger('filiation_id')->nullable()->unsigned()->index();

                //id hr менеджера - ключ на users
                $table->bigInteger('hr_operator_id')->nullable()->unsigned()->index();

                // специализация - ключ на hr_specializations
                $table->bigInteger('hr_specialization_id')->nullable()->unsigned()->index();

                //откуда поступила информация о кандидате - ключ на hr_info_sources
                $table->bigInteger('hr_info_source_id')->nullable()->unsigned()->index();

                //откуда получили ответ - ключ на hr_info_sources
                $table->bigInteger('hr_mail_response_filiation_id')->nullable()->unsigned()->index();

                //каким способом общения пользуется - ключ на hr_messengers
                $table->bigInteger('hr_messenger_id')->nullable()->unsigned()->index();

                //статус кандидата (уволен, работает и пр) - ключ на hr_person_statuses
                $table->bigInteger('hr_person_status_id')->nullable()->unsigned()->index();

                //актуальность данной информации
                $table->integer('status')->nullable();

                $table->timestamps();


                $table->foreign('filiation_id')->references('id')
                    ->on('filiations')->onDelete('cascade');

                $table->foreign('hr_mail_response_filiation_id')->references('id')
                    ->on('filiations')->onDelete('cascade');

                $table->foreign('hr_operator_id')->references('id')
                    ->on('users')->onDelete('cascade');

                $table->foreign('hr_specialization_id')->references('id')
                    ->on('hr_specializations')->onDelete('cascade');

                $table->foreign('hr_info_source_id')->references('id')
                    ->on('hr_info_sources')->onDelete('cascade');

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
        Schema::dropIfExists('hr_people');
    }
}
