<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeingToHrPersonApplicationFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('hr_person_application_forms')) {
            Schema::table('hr_person_application_forms', function (Blueprint $table) {
                $table->foreign('application_form_id')->references('id')
                    ->on('application_forms')->onDelete('cascade');
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
//        Schema::table('hr_person_application_forms', function (Blueprint $table) {
//            $table->foreign('application_form_id')->references('id')
//                ->on('application_forms')->onDelete('cascade');
//        });
//        Schema::table('application_forms', function (Blueprint $table) {
//            //
//        });
    }
}
