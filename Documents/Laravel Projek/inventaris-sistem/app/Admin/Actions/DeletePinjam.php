<?php

namespace App\Admin\Actions;

use App\Models\KibB;
use App\Models\Peminjaman;
use Encore\Admin\Actions\RowAction;
use Illuminate\Database\Eloquent\Model;

class DeletePinjam extends RowAction
{
    public $name = 'Hapus';

    public function handle(Model $model)
    {
        $kibb = KibB::where(['nomor_kode_barang' => $this->row->kode_barang]);
        $kibb->update([
            'status_barang' => 'tersedia'
        ]);

        $this->row->delete();

        return $this->response()->success('Berhasil Dihapus!.')->refresh();
    }

    public function dialog()
    {
        $this->confirm('Apakah anda ingin menghapus data ini?');
    }

}