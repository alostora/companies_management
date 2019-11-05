<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDelayInterviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delay_interviews', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->date('interviewDate')->nullable();
            $table->time('interviewTime')->nullable();
            $table->enum('hrAction',['accepted','refused'])->nullable();

            $table->bigInteger('interview_id')->unsigned()->nullable();
            $table->foreign('interview_id')
                ->references('id')
                ->on('interviews')
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
        Schema::dropIfExists('delay_interviews');
    }
}
