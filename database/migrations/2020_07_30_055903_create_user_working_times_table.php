<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserWorkingTimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_working_times', function (Blueprint $table) {
//            $table->bigIncrements('id')->autoIncrement();
            $table->bigIncrements('id');

            //взял из миграции вояжера
            $type = DB::connection()->getDoctrineColumn(DB::getTablePrefix().'users', 'id')->getType()->getName();
            if ($type == 'bigint') {
                $table->bigInteger('user_id')->unsigned()->index();
            } else {
                $table->integer('user_id')->unsigned()->index();
            }

            $table->bigInteger('working_status_id')->unsigned()->index();
            $table->dateTime('time');
            $table->timestamps();
        });

        Schema::table('user_working_times', function (Blueprint $table) {

            $table->foreign('user_id')->references('id')
                ->on('users')->onDelete('cascade');

            $table->foreign('working_status_id')->references('id')
                ->on('working_statuses')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_working_times');
    }
}
