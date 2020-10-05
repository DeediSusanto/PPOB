<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbpulsa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbpulsa', function (Blueprint $table) {
           $table->bigIncrements('id');
           $table->string('nomer_hp')->nullable();
           $table->bigInteger('id_provider')->nullable();
           $table->bigInteger('id_nominal')->nullable();
           $table->dateTime('check_out')->nullable();
           $table->dateTime('created_at')->nullable();
           $table->dateTime('updated_at')->nullable();
           $table->dateTime('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbpulsa');
    }
}
