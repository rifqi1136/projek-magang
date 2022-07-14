<?php

namespace App\Admin\Controllers\MasterKIB;

use App\Models\MasterKIB;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class MasterKibController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Master KIB';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new MasterKIB());

        $grid->filter(function($filter) {
            $filter->disableIdFilter();
            $filter->like('kategori_barang',__('Kategori KIB'));
            $filter->like('nomor_kode_barang');
            $filter->like('jenis_barang');
        });

        $grid->column('kategori_barang', __('Kategori KIB'))->label('info');
        $grid->column('nomor_kode_barang', __('Nomor kode barang'));
        $grid->column('jenis_barang', __('Jenis barang'));

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
        $show = new Show(MasterKIB::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('nomor_kode_barang', __('Nomor kode barang'));
        $show->field('jenis_barang', __('Jenis barang'));
        $show->field('id_kategori_kib', __('Id kategori kib'));
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
        $form = new Form(new MasterKIB());

        $form->text('kategori_barang', __('Kategori Barang'));
        $form->textarea('jenis_barang', __('Jenis barang'));
        $form->text('nomor_kode_barang', __('Nomor kode barang'));

        return $form;
    }
}
