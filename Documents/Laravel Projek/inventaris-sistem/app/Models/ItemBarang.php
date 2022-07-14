<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $kode_item_barang
 * @property integer $kode_barang
 * @property string $nama_item_barang
 * @property string $keterangan
 * @property string $created_at
 * @property string $updated_at
 */
class ItemBarang extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'item_barang';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['kode_item_barang', 'kode_barang', 'nama_item_barang', 'keterangan', 'created_at', 'updated_at'];

    public function barang()
    {
        return $this->belongsTo(Barang::class, 'kode_barang', 'kode_barang');
    }
}
