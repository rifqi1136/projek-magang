<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $kode_barang
 * @property string $tgl_pinjam
 * @property string $keterangan_peminjaman
 * @property string $loan_by
 * @property string $status
 * @property string $created_at
 * @property string $updated_at
 */
class Peminjaman extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'peminjaman';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['kode_barang', 'tgl_pinjam', 'keterangan_peminjaman', 'loan_by', 'status', 'created_at', 'updated_at'];

    public function kibb()
    {
        return $this->belongsTo(KibB::class, 'kode_barang', 'id_master_kib_b');
    }
}
