<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDtlbarangmasuksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dtlbarangmasuks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('no_nota');
            $table->integer('kode_barang');
            $table->string('jumlah');
            $table->string('subtotal');
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
        Schema::dropIfExists('dtlbarangmasuks');
    }
}
