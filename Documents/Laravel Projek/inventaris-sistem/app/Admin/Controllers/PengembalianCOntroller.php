<?php

namespace App\Admin\Controllers;

use App\Models\MasterKIB;
use App\Models\Peminjaman;
use App\Models\Pengembalian;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class PengembalianCOntroller extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Pengembalian';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Pengembalian());

        $grid->column('kode_peminjam', __('Kode Peminjaman'));
        $grid->column('pinjam.kode_barang', __('Detail Barang'))->display(function() {
            $mbarang = MasterKIB::where(['nomor_kode_barang' => $this->pinjam->kode_barang])->first();
            return $mbarang->kategori_barang . " - " . $mbarang->jenis_barang;
        })->label('primary');
        $grid->column('pinjam.loan_by', __('Peminjam'));
        $grid->column('tgl_pengembalian', __('Tgl pengembalian'))->display(function ($date) {
            return \Carbon\Carbon::parse($date)->translatedFormat('l, d F Y');
        });;

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Pengembalian::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('kode_peminjam', __('Kode Peminjaman'));
        $show->field('tgl_pengembalian', __('Tgl pengembalian'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Pengembalian());

        $form->select('kode_peminjam', __('Kode Peminjaman'))->options(Peminjaman::pluck('kode_peminjaman', 'kode_peminjaman'));
        $form->date('tgl_pengembalian', __('Tgl pengembalian'))->default(date('Y-m-d'));
        $form->textarea('keterangan', ('Keterangan Barang Pinjaman'));

        $form->saving(function(Form $form) {
            $kibb = Peminjaman::where(['kode_peminjaman' => $form->kode_peminjam]);
            $kibb->update([
                'status_barang' => 'dikembalikan'
            ]);
        });

        return $form;
    }
}
