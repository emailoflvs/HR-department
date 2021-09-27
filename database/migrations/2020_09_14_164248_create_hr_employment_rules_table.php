<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHrEmploymentRulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //способы оформления на работу
        if (!Schema::hasTable('hr_employment_rules')) {
            Schema::create('hr_employment_rules', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('type');

                //актуальность данной информации
                $table->integer('status')->nullable();
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
        Schema::dropIfExists('hr_employment_rules_table');
    }
}
