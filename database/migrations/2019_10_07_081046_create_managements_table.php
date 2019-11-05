<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManagementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('managements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('managementName')->nullable();
            $table->string('managementCode')->nullable();
            $table->integer('managementRule')->nullable();
            $table->boolean('isCategory')->default(false)->nullable();
            $table->bigInteger('mainManagement')->unsigned()->nullable();


            $table->foreign('mainManagement')
                ->references('id')
                ->on('managements')
                ->onDelete('cascade')
                ->onUpdate('cascade');


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
        Schema::dropIfExists('managements');
    }
}
