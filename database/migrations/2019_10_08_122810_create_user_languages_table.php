<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_languages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('langName')->nullable();
            $table->enum('write',['good','veryGood','excellent'])->nullable();
            $table->enum('read',['good','veryGood','excellent'])->nullable();
            $table->enum('speak',['good','veryGood','excellent'])->nullable();
            $table->enum('printSpeed',['good','veryGood','excellent'])->nullable();
            $table->enum('understandingSpeed',['good','veryGood','excellent'])->nullable();

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
        Schema::dropIfExists('user_languages');
    }
}
