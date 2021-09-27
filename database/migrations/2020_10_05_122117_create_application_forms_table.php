<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // анкеты
        if (!Schema::hasTable('application_forms')) {
            Schema::create('application_forms', function (Blueprint $table) {
                $table->id();
                // отображаемое название анкеты
                $table->string('name')->nullable();
                // уникальное рабочее название
                $table->string('vendor_code')->nullable()->index();
                $table->text('details')->nullable();
                // ссылка на фото
                $table->string('picture')->nullable();
                // ссылка на видео
                $table->string('video')->nullable();

                $table->text('comments')->nullable();
                $table->string('type')->nullable();
                $table->string('status')->nullable();

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
        Schema::dropIfExists('hr_person_application_forms');
        Schema::dropIfExists('application_forms');
    }
}
