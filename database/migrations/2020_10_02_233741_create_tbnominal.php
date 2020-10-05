<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbnominal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbnominal', function (Blueprint $table) {
           $table->bigIncrements('id');
           $table->bigInteger('nominal')->nullable();
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
        Schema::dropIfExists('tbnominal');
    }
}
