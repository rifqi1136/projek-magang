<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $name
 * @property string $keterangan
 * @property string $created_at
 * @property string $updated_at
 */
class KategoriKIB extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'kategori_kib';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['name', 'keterangan', 'created_at', 'updated_at'];
}
