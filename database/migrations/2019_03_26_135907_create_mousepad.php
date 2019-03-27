<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMousepad extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mousepad', function (Blueprint $table) {
            $table->bigIncrements('id_mousepad');
            $table->integer('id_brand');
            $table->string('nama_mousepad',100);
            $table->text('deskripsi');
            $table->integer('harga');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mousepad');
    }
}
