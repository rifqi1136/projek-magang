<?php

namespace App\Admin\Controllers\Master;

use App\Models\Barang;
use App\Models\ItemBarang;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Illuminate\Support\Facades\DB;

class ItemBarangController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Item Barang';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new ItemBarang());

        $grid->column('kode_item_barang', __('Kode item barang'));
        $grid->column('barang.nama_barang', __('Nama induk barang'))->label('primary');
        $grid->column('nama_item_barang', __('Nama item barang'));

        $grid->filter(function ($filter) {
            $filter->disableIdFilter();
            $filter->like('kode_item_barang');
            $filter->like('kode_barang');
            $filter->like('nama_item_barang');
            $filter->like('barang.nama_barang', __('Nama induk barang'));
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
        $show = new Show(ItemBarang::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('kode_item_barang', __('Kode item barang'));
        $show->field('kode_barang', __('Kode barang'));
        $show->field('nama_item_barang', __('Nama item barang'));
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
        $form = new Form(new ItemBarang());

        $form->select('kode_barang', __('Pilih Induk Barang'))->options(Barang::pluck('nama_barang', 'kode_barang'));
        $form->text('nama_item_barang', __('Nama item barang'));
        $form->text('kode_item_barang', __('Kode Item Barang'))->placeholder('Masukkan 2 digit kode pada item barang');
        $form->textarea('keterangan', __('Keterangan'));

        if($form->isCreating()) {
            $form->saving(function(Form $form) {
                $form->kode_item_barang = $form->kode_barang . $form->kode_item_barang;
            });
        }

        return $form;
    }
}
