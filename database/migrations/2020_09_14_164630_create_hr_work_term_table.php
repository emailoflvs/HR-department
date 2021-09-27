<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHrWorkTermTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Планируемый срок работы
        if (!Schema::hasTable('hr_work_term')) {
            Schema::create('hr_work_term', function (Blueprint $table) {
                $table->id();
                //срок
                $table->string('term')->nullable();

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
        Schema::dropIfExists('hr_work_term_table');
    }
}
