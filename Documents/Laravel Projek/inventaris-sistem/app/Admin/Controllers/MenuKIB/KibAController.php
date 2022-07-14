<?php

namespace App\Admin\Controllers\MenuKIB;

use App\Models\KibA;
use App\Models\MasterKIB;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Illuminate\Support\Facades\DB;

class KibAController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Data KIB A (Tanah)';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new KibA());

        // $grid->model()->where('created_by', Admin::user()->id);

        $grid->column('nomor_kode_barang', __('Nomor Kode KIB A'));
        $grid->column('masterKib.jenis_barang', __('Nama Master Barang'));
        $grid->column('judul_kib', __('Nama KIB'))->label('primary');
        $grid->column('jenis_barang', __('Jenis Barang'));

        $grid->filter(function($filter) {
            $filter->like('judul_kib');
            $filter->like('jenis_barang');
            $filter->like('nomor_kode_barang');
            $filter->like('masterKib.jenis_barang', __('Jenis Barang'));
        });

        if(Admin::user()->isRole('user')) {
            $grid->disableCreateButton();
            $grid->actions(function ($actions) {
                $actions->disableDelete();
                $actions->disableEdit();
            });
        }

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
        $show = new Show(KibA::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('judul_kib', __('Judul kib'));
        $show->field('jenis_barang', __('Jenis barang'));
        $show->field('nomor_kode_barang', __('Nomor kode barang'));
        $show->field('nomor_registrasi', __('Nomor registrasi'));
        $show->field('luas_m2', __('Luas m2'));
        $show->field('tanggal', __('Tanggal'));
        $show->field('bulan', __('Bulan'));
        $show->field('tahun_pembelian', __('Tahun pembelian'));
        $show->field('letak_alamat', __('Letak alamat'));
        $show->field('hak', __('Hak'));
        $show->field('sertifikat_nomor', __('Sertifikat nomor'));
        $show->field('sertifikat_tanggal', __('Sertifikat tanggal'));
        $show->field('penggunaan', __('Penggunaan'));
        $show->field('asal_usul', __('Asal usul'));
        $show->field('harga', __('Harga'));
        $show->field('keterangan', __('Keterangan'));
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
        $form = new Form(new KibA());

        $form->hidden('created_by')->default(Admin::user()->id);
        $form->hidden('judul_kib', __('Judul kib'))->default('Tanah');
        #Nomor
        $form->text('jenis_barang');
        $form->select('nomor_kode_barang', __('Nomor kode barang'))->options(MasterKIB::where('kategori_barang', 'TANAH')->pluck('jenis_barang', 'nomor_kode_barang'));
        $form->hidden('id_master_kib_a')->default(0);
        $form->hidden('nomor_registrasi', __('Nomor registrasi'))->default('-');
        
        $form->number('luas_m2', __('Luas m2'));
        $form->date('tanggal', __('Tanggal'))->format('DD');
        $form->date('bulan', __('Bulan'))->format('MMMM');
        $form->date('tahun_pembelian', __('Tahun pembelian'))->format('YYYY');
        $form->textarea('letak_alamat', __('Letak alamat'));
        #Status Tanah
        $form->text('hak', __('Hak'));
        $form->text('sertifikat_nomor', __('Sertifikat nomor'));
        $form->text('sertifikat_tanggal', __('Sertifikat tanggal'));
        
        $form->text('penggunaan', __('Penggunaan'));
        $form->text('asal_usul', __('Asal usul'));
        $form->currency('harga', __('Harga'))->symbol('Rp.');
        $form->textarea('keterangan', __('Keterangan'));

        if($form->isCreating()) {
            $form->saving(function(Form $form) {
                $form->id_master_kib_a = $form->nomor_kode_barang;

                $no = isset(KibA::latest()->first()->id) ? KibA::latest()->first()->id : 1;
                DB::statement("ALTER TABLE kib_a AUTO_INCREMENT = {$no}");

                $autoid = isset(KibA::latest()->first()->id) ? KibA::latest()->first()->id + 1 : 1;
                $form->nomor_kode_barang = $form->nomor_kode_barang . $autoid;

            });
        }

        return $form;
    }
}
