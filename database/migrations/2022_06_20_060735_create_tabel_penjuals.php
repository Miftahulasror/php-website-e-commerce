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
        Schema::create('tabel_penjuals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('email');
            $table->string('password',255);
            $table->text('alamat');
            $table->text('logo');
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
        Schema::dropIfExists('tabel_penjuals');
    }
};
