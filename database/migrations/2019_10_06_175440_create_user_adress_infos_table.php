<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserAdressInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_adress_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('governoment')->nullable();
            $table->string('city')->nullable();
            $table->string('referenecePersoneName')->nullable();
            $table->string('referenecePersoneMobile')->nullable();
            $table->string('compeleteAdress')->nullable();
            $table->enum('adressStatus',['past','current'])->nullable();
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
        Schema::dropIfExists('user_adress_infos');
    }
}
