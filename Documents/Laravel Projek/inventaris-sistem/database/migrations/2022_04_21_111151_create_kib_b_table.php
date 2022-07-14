<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKibBTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kib_b', function (Blueprint $table) {
            $table->id();
            $table->string('judul_kib');
            $table->string('nomor_kode_barang');
            $table->string('jenis_barang');
            $table->string('merk_type');
            $table->string('ukuran_cc');
            $table->string('tanggal');
            $table->string('bulan');
            $table->string('tahun');
            $table->string('pabrik');
            #Nomor
            $table->string('nomor_rangka');
            $table->string('nomor_mesin');
            $table->string('nomor_polisi');
            $table->string('nomor_bpkb');
            #End 
            $table->string('asal_usul');
            $table->float('harga', 15, 2);
            $table->text('keterangan');
            $table->integer('created_by');
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
        Schema::dropIfExists('kib_b');
    }
}
