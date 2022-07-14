<?php

namespace App\Admin\Controllers\MenuKIB;

use App\Models\KibC;
use App\Models\MasterKIB;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Illuminate\Support\Facades\DB;

class KibCController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Data KIB C (Gedung Dan Bangunan)';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new KibC());

        $grid->model()->where('created_by', Admin::user()->id);

        $grid->column('nomor_kode_barang', __('Nomor Kode KIB A'))->label('warning');
        $grid->column('masterKib.jenis_barang', __('Nama Master Barang'));
        $grid->column('judul_kib', __('Nama KIB'))->label('primary');
        $grid->column('jenis_barang', __('Jenis Barang'));

        $grid->filter(function ($filter) {
            $filter->like('judul_kib');
            $filter->like('jenis_barang');
            $filter->like('nomor_kode_barang');
            $filter->like('masterKib.jenis_barang', __('Jenis Barang'));
        });

        if (Admin::user()->isRole('user')) {
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
        $show = new Show(KibC::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('judul_kib', __('Judul kib'));
        $show->field('jenis_barang', __('Jenis barang'));
        $show->field('nomor_kode_barang', __('Nomor kode barang'));
        $show->field('nomor_registrasi', __('Nomor registrasi'));
        $show->field('status_bangunan', __('Status bangunan'));
        $show->field('bertingkat_atau_tidak', __('Bertingkat atau tidak'));
        $show->field('beton_atau_tidak', __('Beton atau tidak'));
        $show->field('luas_lantai_m2', __('Luas lantai m2'));
        $show->field('lokasi_alamat', __('Lokasi alamat'));
        $show->field('dokumen_nomor', __('Dokumen nomor'));
        $show->field('dokumen_tanggal', __('Dokumen tanggal'));
        $show->field('luas_tanah', __('Luas tanah'));
        $show->field('status_tanah', __('Status tanah'));
        $show->field('no_kode_tanah', __('No kode tanah'));
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
        $form = new Form(new KibC());

        $form->hidden('created_by')->default(Admin::user()->id);
        $form->hidden('judul_kib', __('Judul kib'))->default('Gedung Dan Bangunan');

        $form->text('jenis_barang');
        $form->select('nomor_kode_barang', __('Nomor kode barang'))->options(MasterKIB::where('kategori_barang', 'GEDUNG DAN BANGUNAN')->pluck('jenis_barang', 'nomor_kode_barang'));
        $form->hidden('id_master_kib_c')->default(0);

        $form->hidden('nomor_registrasi', __('Nomor registrasi'))->default('-');

        $form->text('status_bangunan', __('Kondisi bangunan'));
        #Konstruksi
        $form->text('bertingkat_atau_tidak', __('Bertingkat atau tidak'));
        $form->text('beton_atau_tidak', __('Beton atau tidak'));
        #Status Tanah
        $form->text('luas_lantai_m2', __('Luas lantai m2'));
        $form->textarea('lokasi_alamat', __('Lokasi alamat'));
        $form->text('dokumen_nomor', __('Dokumen nomor'));
        $form->text('dokumen_tanggal', __('Dokumen tanggal'));
        
        $form->number('luas_tanah', __('Luas tanah'));
        $form->text('status_tanah', __('Status tanah'));
        $form->text('no_kode_tanah', __('No kode tanah'));
        $form->text('asal_usul', __('Asal usul'));
        $form->currency('harga', __('Harga'))->symbol('Rp.');
        $form->textarea('keterangan', __('Keterangan'));

        if ($form->isCreating()) {
            $form->saving(function (Form $form) {
                $form->id_master_kib_c = $form->nomor_kode_barang;

                $no = isset(KibC::latest()->first()->id) ? KibC::latest()->first()->id : 1;
                DB::statement("ALTER TABLE kib_c AUTO_INCREMENT = {$no}");

                $autoid = isset(KibC::latest()->first()->id) ? KibC::latest()->first()->id + 1 : 1;
                $form->nomor_kode_barang = $form->nomor_kode_barang . $autoid;
            });
        }

        return $form;
    }
}
