<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHrPersonDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Документы, необходимые для трудоустройства
        if (!Schema::hasTable('hr_person_documents')) {
            Schema::create('hr_person_documents', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->text('details');
                $table->text('comments');
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
        Schema::dropIfExists('hr_person_documents');
    }
}
