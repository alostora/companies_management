<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserWorkInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_work_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('companyName')->nullable();
            $table->string('managerName')->nullable();
            $table->date('startWork')->nullable();
            $table->date('endWork')->nullable();
            $table->string('workDuration')->nullable();
            $table->string('salary')->nullable();
            $table->string('missions')->nullable();
            $table->string('position')->nullable();
            $table->string('managerPhone')->nullable();
            $table->string('reasonForLeaving')->nullable();
            $table->bigInteger('user_id')->unsigned()->nullable();


            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_work_infos');
    }
}
