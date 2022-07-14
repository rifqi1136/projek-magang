<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $kode_barang
 * @property integer $id_peminjam
 * @property string $tgl_pengembalian
 * @property string $created_at
 * @property string $updated_at
 */
class Pengembalian extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'pengembalian';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['kode_barang', 'kode_peminjam', 'tgl_pengembalian', 'created_at', 'updated_at'];

    public function pinjam()
    {
        return $this->belongsTo(Peminjaman::class, 'kode_peminjam', 'kode_peminjaman');
    }
}
