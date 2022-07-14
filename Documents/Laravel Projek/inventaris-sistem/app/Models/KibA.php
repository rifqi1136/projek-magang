<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $judul_kib
 * @property string $jenis_barang
 * @property string $nomor_kode_barang
 * @property string $nomor_registrasi
 * @property string $luas_m2
 * @property string $tanggal
 * @property string $bulan
 * @property string $tahun_pembelian
 * @property string $letak_alamat
 * @property string $hak
 * @property string $sertifikat_nomor
 * @property string $sertifikat_tanggal
 * @property string $penggunaan
 * @property string $asal_usul
 * @property float $harga
 * @property string $keterangan
 * @property string $created_at
 * @property string $updated_at
 */
class KibA extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'kib_a';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['judul_kib', 'jenis_barang', 'nomor_kode_barang', 'nomor_registrasi', 'luas_m2', 'tanggal', 'bulan', 'tahun_pembelian', 'letak_alamat', 'hak', 'sertifikat_nomor', 'sertifikat_tanggal', 'penggunaan', 'asal_usul', 'harga', 'keterangan', 'created_at', 'updated_at'];

    public function masterKib()
    {
        return $this->belongsTo(MasterKIB::class, 'id_master_kib_a', 'nomor_kode_barang');
    }
}
