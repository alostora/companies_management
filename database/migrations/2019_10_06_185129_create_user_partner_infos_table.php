<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserPartnerInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_partner_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('partnerName')->nullable();
            $table->string('personalCardNumber')->nullable();
            $table->enum('relativeRelation',['husband','wife','son','daughter'])->nullable();
            $table->string('birthDate')->nullable();
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
        Schema::dropIfExists('user_partner_infos');
    }
}
