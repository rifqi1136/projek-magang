<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');

    $router->resource('peminjaman', PeminjamanController::class);
    $router->resource('pengembalian', PengembalianCOntroller::class);

    $router->group([
        'prefix' => 'master',
        'as' => 'master.'
    ], function(Router $master) {
        #Master Barang
        $master->resource('data-barang', Master\BarangController::class);
        $master->resource('item-barang', Master\ItemBarangController::class);

        #Master KIB
        $master->resource('data-kib', MasterKIB\MasterKibController::class);
    });

    $router->group([
        'prefix' => 'menu',
        'as' => 'menu.'
    ], function(Router $menu) {
        $menu->resource('kib-a', MenuKIB\KibAController::class);
        $menu->resource('kib-b', MenuKIB\KibBController::class);
        $menu->resource('kib-c', MenuKIB\KibCController::class);
    });

});
