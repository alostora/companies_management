<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserIncuranceInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_incurance_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('insuranceStatus',['havent','haveAndWork','haveAndNotWork'])->nullable();
            $table->string('insuranceOffice')->nullable();
            $table->string('insuranceNumber')->nullable();
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
        Schema::dropIfExists('user_incurance_infos');
    }
}
