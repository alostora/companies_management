<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalInterviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_interviews', function (Blueprint $table) {
            $table->bigIncrements('id');



            $table->enum('generalView',['Excellent','Good','Medium','Poor'])->nullable();
            $table->enum('character',['Excellent','Good','Medium','Poor'])->nullable();
            $table->enum('trust',['Excellent','Good','Medium','Poor'])->nullable();
            $table->enum('english',['Excellent','Good','Medium','Poor'])->nullable();
            $table->enum('understanding',['Excellent','Good','Medium','Poor'])->nullable();
            $table->enum('qualificationWithJob',['Excellent','Good','Medium','Poor'])->nullable();
            $table->enum('experienceWithJob',['Excellent','Good','Medium','Poor'])->nullable();
            $table->enum('earnedExperienceWithJob',['Excellent','Good','Medium','Poor'])->nullable();
            $table->enum('expectCompletWork',['Yes','No'])->nullable();
            $table->enum('recommendForWorkHR',['Yes','No'])->nullable();
            $table->enum('recommendForWorkGM',['Yes','No'])->nullable();

            $table->bigInteger('interview_id')->unsigned()->nullable();
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->bigInteger('hr_id')->unsigned()->nullable();
            $table->string('hr_notes')->nullable();
            $table->bigInteger('hrSuperGm_id')->unsigned()->nullable();


            $table->foreign('interview_id')
                ->references('id')
                ->on('interviews')
                ->onDelete('cascade');


            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');


            $table->foreign('hr_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');


            $table->foreign('hrSuperGm_id')
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
        Schema::dropIfExists('personal_interviews');
    }
}
