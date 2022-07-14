<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $kode_barang
 * @property string $nama_barang
 * @property string $keterangan
 * @property string $created_at
 * @property string $updated_at
 */
class Barang extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'barang';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['kode_barang', 'nama_barang', 'keterangan', 'created_at', 'updated_at'];
}
