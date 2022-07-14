<?php

namespace App\Admin\Controllers;

use App\Admin\Actions\DeletePinjam;
use App\Models\KibB;
use App\Models\Peminjaman;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Illuminate\Support\Facades\DB;

class PeminjamanController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Peminjaman Peralatan dan Mesin';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Peminjaman());

        $grid->column('kode_peminjaman', __('Kode Peminjaman'));
        $grid->column('kibb.judul_kib', __('Judul KIB'))->label('primary');
        $grid->column('kibb.jenis_barang', __('Jenis Barang'));
        $grid->column('loan_by', __('Dipinjam Oleh'));
        $grid->column('status_barang', __('Status Keadaan Barang'))->display(function ($sb) {
            if ($sb == "dipinjam") {
                return "<span class='label label-danger'>Sedang Dipinjam</span>";
            } else if($sb == "dikembalikan"){
                return "<span class='label label-success'>Sudah Dikembalikan</span>";
            }
        });
        $grid->column('tgl_pinjam', __('Tanggal Pinjam'))->display(function ($date) {
            return \Carbon\Carbon::parse($date)->translatedFormat('l, d F Y');
        });
        
        $grid->actions(function($actions) {
            
            $actions->disableDelete();
            $actions->add(new DeletePinjam);
        });

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
        $show = new Show(Peminjaman::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('kode_barang', __('Kode barang'));
        $show->field('tgl_pinjam', __('Tgl pinjam'));
        $show->field('keterangan_peminjaman', __('Keterangan peminjaman'));
        $show->field('loan_by', __('Loan by'));
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
        $form = new Form(new Peminjaman());

        $form->select('kode_barang', __('Kode Barang'))->options(KibB::pluck('jenis_barang', 'nomor_kode_barang'));
        $form->text('loan_by', __('Dipinjam Oleh'));
        $form->date('tgl_pinjam', __('Tgl pinjam'))->default(date('Y-m-d'));
        $form->textarea('keterangan_peminjaman', __('Keterangan peminjaman'));
        
        if($form->isCreating()){
            $form->hidden('kode_peminjaman');
            $form->status_barang = 'Dipinjam';
            $form->saving(function(Form $form) {
                $no = isset(KibB::latest()->first()->id) ? KibB::latest()->first()->id : 1;
                DB::statement("ALTER TABLE kib_b AUTO_INCREMENT = {$no}");

                $autoid = isset(KibB::latest()->first()->id) ? KibB::latest()->first()->id + 1 : 1;
                $form->kode_peminjaman = 'PMJ-' . date('dmY') . '-' . $autoid;

                
                $kibb = KibB::where(['nomor_kode_barang' => $form->kode_barang]);
                $kibb->update([
                    'status_barang' => 'dipinjam'
                ]);
            });
        }

        return $form;
    }
}
