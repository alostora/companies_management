<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserEducationInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_education_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('qualificationType')->nullable();
            $table->string('specialization')->nullable();
            $table->string('educationGrading')->nullable();
            $table->string('handGraduation')->nullable();
            $table->date('graduationDate')->nullable();
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
        Schema::dropIfExists('user_education_infos');
    }
}
