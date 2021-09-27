<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHrDesiredSalaryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Желаемая зарплата
        if (!Schema::hasTable('hr_desired_salary')) {
            Schema::create('hr_desired_salary', function (Blueprint $table) {
                $table->id();

                // сумма
                $table->string('salary')->nullable();

                //должность
                $table->string('role')->nullable();

                //варианты зарплаты
                $table->string('type')->nullable();

                $table->timestamps();
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
        Schema::dropIfExists('hr_desired_salary_table');
    }
}
