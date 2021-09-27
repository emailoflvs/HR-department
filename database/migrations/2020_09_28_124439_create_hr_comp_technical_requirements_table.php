<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHrCompTechnicalRequirementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // необходимые тех. характеристике компьютера для удаленной работы
        if (!Schema::hasTable('hr_comp_technical_requirements')) {
            Schema::create('hr_comp_technical_requirements', function (Blueprint $table) {
                $table->id();
                $table->string('name')->nullable();
                $table->text('details')->nullable();
                $table->text('comments')->nullable();
                $table->string('type')->nullable();

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
        Schema::dropIfExists('hr_comp_technical_requirements');
    }
}
