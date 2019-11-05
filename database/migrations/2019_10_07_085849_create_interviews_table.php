<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInterViewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interviews', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->date('interviewDate')->nullable();
            $table->time('interviewTime')->nullable();
            $table->enum('hrAction',['accepted','refused','delay'])->nullable();
            $table->string('refuseReason')->nullable();    


            $table->bigInteger('hr_employer')->unsigned()->nullable();
            $table->foreign('hr_employer')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');



            $table->bigInteger('user_employer')->unsigned()->nullable();
            $table->foreign('user_employer')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');


            $table->bigInteger('interview_job')->unsigned()->nullable();
            $table->foreign('interview_job')
                ->references('id')
                ->on('jobs')
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
        Schema::dropIfExists('inter_views');
    }
}
