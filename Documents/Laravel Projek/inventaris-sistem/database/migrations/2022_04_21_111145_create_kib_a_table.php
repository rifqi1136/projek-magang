<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKibATable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kib_a', function (Blueprint $table) {
            $table->id();
            $table->string('judul_kib');
            $table->string('jenis_barang');
            $table->string('nomor_kode_barang');
            $table->string('nomor_registrasi');
            $table->string('luas_m2');
            $table->string('tanggal');
            $table->string('bulan');
            $table->string('tahun_pembelian');
            $table->text('letak_alamat');
            #Status Tanah
            $table->string('hak');
            $table->string('sertifikat_nomor');
            $table->string('sertifikat_tanggal');
            #End
            $table->string('penggunaan');
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
        Schema::dropIfExists('kib_a');
    }
}
