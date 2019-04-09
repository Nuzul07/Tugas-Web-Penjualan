<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarangmasuksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barangmasuks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('no_nota');
            $table->date('tgl_masuk');
            $table->integer('iddistributor');
            $table->integer('idpetugas');
            $table->string('total');
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
        Schema::dropIfExists('barangmasuks');
    }
}
