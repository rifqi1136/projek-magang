<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKibCTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kib_c', function (Blueprint $table) {
            $table->id();
            $table->string('judul_kib');
            $table->text('jenis_barang');
            #Nomor
            $table->string('nomor_kode_barang');
            $table->string('nomor_registrasi');
            #End
            $table->string('status_bangunan');
            #Konstruksi
            $table->string('bertingkat_atau_tidak');
            $table->string('beton_atau_tidak');
            #Status Tanah
            $table->string('luas_lantai_m2');
            $table->text('lokasi_alamat');
            $table->string('dokumen_nomor');
            $table->string('dokumen_tanggal');
            #End
            $table->string('luas_tanah');
            $table->string('status_tanah');
            $table->string('no_kode_tanah');
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
        Schema::dropIfExists('kib_c');
    }
}
