<?php

namespace App\Admin\Controllers\MenuKIB;

use App\Models\KibB;
use App\Models\MasterKIB;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Illuminate\Support\Facades\DB;

class KibBController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Data KIB B (Peralatan Dan Mesin)';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new KibB());

        $grid->model()->where('created_by', Admin::user()->id);

        $grid->column('nomor_kode_barang', __('Nomor Kode KIB B'));
        $grid->column('jenis_barang', __('Nama barang'));
        $grid->column('masterKib.jenis_barang', __('Jenis Barang'));
        $grid->column('judul_kib', __('Nama KIB'))->label('primary');
        $grid->column('status_barang', __('Status Keadaan Barang'))->display(function($sb) {
            if($sb == "tersedia") {
                return "<span class='label label-success'>Tersedia</span>";
            } else if($sb == "tidak_tersedia") {
                return "<span class='label label-warning'>Tidak Tersedia</span>";
            } else if($sb == "dipinjam"){
                return "<span class='label label-danger'>Dipinjam</span>";
            }
        });

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
        $show = new Show(KibB::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('judul_kib', __('Judul kib'));
        $show->field('nomor_kode_barang', __('Nomor kode barang'));
        $show->field('jenis_barang', __('Jenis barang'));
        $show->field('merk_type', __('Merk type'));
        $show->field('ukuran_cc', __('Ukuran cc'));
        $show->field('tanggal', __('Tanggal'));
        $show->field('bulan', __('Bulan'));
        $show->field('tahun', __('Tahun'));
        $show->field('pabrik', __('Pabrik'));
        $show->field('nomor_rangka', __('Nomor rangka'));
        $show->field('nomor_mesin', __('Nomor mesin'));
        $show->field('nomor_polisi', __('Nomor polisi'));
        $show->field('nomor_bpkb', __('Nomor bpkb'));
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
        $form = new Form(new KibB());

        $form->hidden('created_by')->default(Admin::user()->id);
        $form->hidden('judul_kib', __('Judul kib'))->default('Peralatan Dan Mesin');

        $form->text('jenis_barang');
        $form->select('id_master_kib_b', __('Nomor kode barang'))
                ->options(MasterKIB::where('kategori_barang', '=', 'PERALATAN DAN MESIN')
                ->pluck('jenis_barang', 'nomor_kode_barang'));
        $form->hidden('nomor_kode_barang')->default("");        
        $form->text('merk_type', __('Merk type'));
        $form->text('ukuran_cc', __('Ukuran cc'));
        #Tambahan 
        if($form->isEditing()) {
            $states = [
                "tersedia" => "Tersedia",
                "tidak_tersedia" => "Tidak Tersedia",
                "dipinjam" => "Dipinjam"
            ];
            $form->select('status_barang', __('Status Barang'))->options($states);
        } else {
            $form->hidden('status_barang')->default('tersedia');
        }
        #Pengadaan
        $form->date('tanggal', __('Tanggal'))->format('DD');
        $form->date('bulan', __('Bulan'))->format('MMMM');
        $form->date('tahun', __('Tahun'))->format('YYYY');
        ###
        $form->text('pabrik', __('Pabrik'));
        #Nomor
        $form->text('nomor_rangka', __('Nomor rangka'));
        $form->text('nomor_mesin', __('Nomor mesin'));
        $form->text('nomor_polisi', __('Nomor polisi'));
        $form->text('nomor_bpkb', __('Nomor bpkb'));

        $form->text('asal_usul', __('Asal usul'));
        $form->currency('harga', __('Harga'))->symbol('Rp.');
        $form->textarea('keterangan', __('Keterangan'));

        if ($form->isCreating()) {
            $form->saving(function (Form $form) {
                $no = isset(KibB::latest()->first()->id) ? KibB::latest()->first()->id : 1;
                DB::statement("ALTER TABLE kib_b AUTO_INCREMENT = {$no}");

                $autoid = isset(KibB::latest()->first()->id) ? KibB::latest()->first()->id + 1 : 1;
                $form->nomor_kode_barang = $form->id_master_kib_b . $autoid;
            });
        }

        return $form;
    }
}
