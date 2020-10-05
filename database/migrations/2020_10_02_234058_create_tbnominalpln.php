<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbnominalpln extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbnominalpln', function (Blueprint $table) {
           $table->bigIncrements('id');
           $table->bigInteger('nominal')->nullable();
           $table->string('nama_pelanggan', 100)->nullable();
           $table->string('nomer_meter', 100)->nullable();
           $table->bigInteger('daya')->nullable();
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
        Schema::dropIfExists('tbnominalpln');
    }
}
