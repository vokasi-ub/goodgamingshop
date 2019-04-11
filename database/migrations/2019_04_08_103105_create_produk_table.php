<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produk', function (Blueprint $table) {
            $table->bigIncrements('id_produk');

            $table->unsignedBigInteger('id_kategori');
            $table->foreign('id_kategori')->references('id_kategori')->on('kategori')->onDelete('cascade');

            $table->unsignedBigInteger('id_merek');
            $table->foreign('id_merek')->references('id_merek')->on('merek')->onDelete('cascade');
           
            $table->string('nama_produk',100);
            $table->text('deskripsi');
            $table->integer('harga');
            $table->string('gambar');
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
        Schema::dropIfExists('produk');
         $table->dropForeign(['id_kategori']);
        $table->dropForeign(['id_merek']);
    }
}
