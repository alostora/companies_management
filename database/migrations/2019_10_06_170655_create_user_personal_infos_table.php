<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserPersonalInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_personal_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('firstName')->nullable();
            $table->string('lastName')->nullable();
            $table->string('fatherName')->nullable();
            $table->string('grandFatherName')->nullable();
            $table->string('familyName')->nullable();
            $table->string('personalCardNumber')->nullable();
            $table->date('cardReleaseDate')->nullable();
            $table->date('cardExpireDate')->nullable();
            $table->string('currentJobCard')->nullable();
            $table->string('nationality')->nullable();
            $table->string('sex')->nullable();
            $table->date('birthDay')->nullable();
            $table->string('birthPlace')->nullable();
            $table->string('religion')->nullable();
            $table->string('userImage')->nullable();
            $table->enum('socialStatus',['married','widowed','single','divorced'])->nullable();
            $table->enum('armyStatus',['wanted','notWanted','delayed','done'])->nullable();
            $table->date('armyDate')->nullable();
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
        Schema::dropIfExists('user_personal_infos');
    }
}
