<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbpln extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbpln', function (Blueprint $table) {
           $table->bigIncrements('id');
           $table->string('no_meter', 100)->nullable();
           $table->string('kategori', 100)->nullable();
           $table->string('informasi', 100)->nullable();
           $table->bigInteger('histori_id')->nullable();
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
        Schema::dropIfExists('tbpln');
    }
}
