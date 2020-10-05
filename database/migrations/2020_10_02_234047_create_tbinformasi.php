<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbinformasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbinformasi', function (Blueprint $table) {
           $table->bigIncrements('id');
           $table->string('kategori', 100)->nullable();
           $table->string('nama', 100)->nullable();
           $table->mediumText('isi')->nullable();
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
        Schema::dropIfExists('tbinformasi');
    }
}
