<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMobilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobil', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->integer('tahun');
            $table->string('bbm');
            $table->integer('km');
            $table->string('transmisi');
            $table->integer('cc');
            $table->string('lokasi');
            $table->string('penjual');
            $table->string('telepon');
            $table->string('gambar')->nullable();
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
        Schema::dropIfExists('mobil');
        Schema::table('mobil', function (Blueprint $table) {
            $table->dropColumn('gambar');
        });
    }
}
