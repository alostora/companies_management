<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionFackAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question_fack_answers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fackAnswer')->nullable();
            $table->boolean('theTrueAnswer')->default(false)->nullable();
            $table->bigInteger('question_id')->unsigned()->nullable();

            $table->foreign('question_id')
                ->references('id')
                ->on('questions')
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
        Schema::dropIfExists('question_fack_answers');
    }
}


/*

    'fackAnswer',
    'question_id',

*/
