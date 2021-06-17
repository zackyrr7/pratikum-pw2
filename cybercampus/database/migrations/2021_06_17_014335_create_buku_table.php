<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBukuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buku', function (Blueprint $table) {
            $table->id();
            $table->string('judul',100);
            $table->string('isbn',100);
            $table->unsignedBigInteger('kategori_id');
            $table->unsignedBigInteger('penulis_id');
            $table->foreign('kategori_id')->references('id')->on('kategori');
            $table->foreign('penulis_id')->references('id')->on('penulis');
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
        Schema::dropIfExists('buku');
    }
}
