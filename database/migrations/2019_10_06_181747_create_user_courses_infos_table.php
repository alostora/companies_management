<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserCoursesInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_courses_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('courseName')->nullable();
            $table->string('handGraduation')->nullable();
            $table->date('joinDate')->nullable();
            $table->date('endDate')->nullable();
            $table->string('courseGrading')->nullable();
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
        Schema::dropIfExists('user_courses_infos');
    }
}
