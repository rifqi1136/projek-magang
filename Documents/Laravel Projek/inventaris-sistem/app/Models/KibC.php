<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $judul_kib
 * @property string $jenis_barang
 * @property string $nomor_kode_barang
 * @property string $nomor_registrasi
 * @property string $status_bangunan
 * @property string $bertingkat_atau_tidak
 * @property string $beton_atau_tidak
 * @property string $luas_lantai_m2
 * @property string $lokasi_alamat
 * @property string $dokumen_nomor
 * @property string $dokumen_tanggal
 * @property string $luas_tanah
 * @property string $status_tanah
 * @property string $no_kode_tanah
 * @property string $asal_usul
 * @property float $harga
 * @property string $keterangan
 * @property string $created_at
 * @property string $updated_at
 */
class KibC extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'kib_c';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['judul_kib', 'jenis_barang', 'nomor_kode_barang', 'nomor_registrasi', 'status_bangunan', 'bertingkat_atau_tidak', 'beton_atau_tidak', 'luas_lantai_m2', 'lokasi_alamat', 'dokumen_nomor', 'dokumen_tanggal', 'luas_tanah', 'status_tanah', 'no_kode_tanah', 'asal_usul', 'harga', 'keterangan', 'created_at', 'updated_at'];

    public function masterKib()
    {
        return $this->belongsTo(MasterKIB::class, 'id_master_kib_c', 'nomor_kode_barang');
    }
}
