<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $nomor_kode_barang
 * @property string $jenis_barang
 * @property integer $id_kategori_kib
 * @property string $created_at
 * @property string $updated_at
 */
class MasterKIB extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'master_kib';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['nomor_kode_barang', 'jenis_barang', 'created_at', 'updated_at'];
}
