<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $judul_kib
 * @property string $nomor_kode_barang
 * @property string $jenis_barang
 * @property string $merk_type
 * @property string $ukuran_cc
 * @property string $tanggal
 * @property string $bulan
 * @property string $tahun
 * @property string $pabrik
 * @property string $nomor_rangka
 * @property string $nomor_mesin
 * @property string $nomor_polisi
 * @property string $nomor_bpkb
 * @property string $asal_usul
 * @property float $harga
 * @property string $keterangan
 * @property string $created_at
 * @property string $updated_at
 */
class KibB extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'kib_b';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['judul_kib', 'nomor_kode_barang', 'jenis_barang', 'merk_type', 'ukuran_cc', 'tanggal', 'bulan', 'tahun', 'pabrik', 'nomor_rangka', 'nomor_mesin', 'nomor_polisi', 'nomor_bpkb', 'asal_usul', 'harga', 'keterangan', 'created_at', 'updated_at'];

    public function masterKib()
    {
        return $this->belongsTo(MasterKIB::class, 'id_master_kib_b', 'nomor_kode_barang');
    }
}
