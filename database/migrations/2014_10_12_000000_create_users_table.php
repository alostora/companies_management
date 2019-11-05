<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('password')->nullable();
            $table->string('emailToken')->nullable();
            $table->boolean('emailApprove')->default(false)->nullable();
            $table->boolean('confirmConditions')->nullable();
            $table->string('api_token')->nullable();
            $table->boolean('infoCompleted')->default(false)->nullable();
            $table->boolean('isManager')->default(false)->nullable();
            $table->boolean('isAdmin')->default(false)->nullable();
            $table->boolean('jobNumber')->default(false)->nullable();
            $table->string('userImage')->nullable();

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}




