<?php

namespace App\Admin\Controllers\Master;

use App\Models\Barang;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class BarangController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Barang';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Barang());

        $grid->column('kode_barang', __('Kode barang'));
        $grid->column('nama_barang', __('Nama barang'));

        $grid->filter(function($filter) {
            $filter->disableIdFilter();
            $filter->like('kode_barang');
            $filter->like('nama_barang');
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
        $show = new Show(Barang::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('kode_barang', __('Kode barang'));
        $show->field('nama_barang', __('Nama barang'));
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
        $form = new Form(new Barang());

        $form->text('kode_barang', __('Kode barang'));
        $form->text('nama_barang', __('Nama barang'));
        $form->textarea('keterangan', __('Keterangan'));

        // $form->saving(function(Form $form) {
        //     $form->kode_barang = 1234;
        // });

        return $form;
    }
}
