<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePetugassTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('petugass', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('idpetugas');
            $table->string('nama_petugas');
            $table->text('alamat');
            $table->string('email');
            $table->string('telpon');
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
        Schema::dropIfExists('petugass');
    }
}
