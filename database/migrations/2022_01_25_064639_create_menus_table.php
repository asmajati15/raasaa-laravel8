<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            // $table->foreign('drinks_id')->references('id')->on('drinks')->onDelete('cascade');
            // $table->foreignId('drinks_id');
            // $table->foreign('types_id')->references('id')->on('types')->onDelete('cascade');
            $table->foreignId('types_id');
            $table->foreignId('availabilities_id');
            $table->string('nama');
            $table->string('slug')->unique();
            $table->text('deskripsi');
            $table->string('gambar')->nullable();
            $table->string('harga');
            $table->integer('stok')->nullable();
            $table->string('hari')->nullable();
            $table->string('mulai')->nullable();
            $table->string('sampai')->nullable();
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
        Schema::dropIfExists('menus');
    }
}
