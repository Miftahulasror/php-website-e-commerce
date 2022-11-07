<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel_barangs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kodebrg',6);
            $table->string('nama');
            $table->integer('stok');
            $table->bigInteger('harga');
            $table->text('gambar');
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
        Schema::dropIfExists('tabel_barangs');
    }
};
