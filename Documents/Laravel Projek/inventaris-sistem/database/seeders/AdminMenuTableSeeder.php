<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminMenuTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin_menu')->delete();
        
        \DB::table('admin_menu')->insert(array (
            0 => 
            array (
                'id' => 1,
                'parent_id' => 0,
                'order' => 1,
                'title' => 'Dashboard',
                'icon' => 'fa-bar-chart',
                'uri' => '/',
                'permission' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'parent_id' => 0,
                'order' => 10,
                'title' => 'Admin',
                'icon' => 'fa-tasks',
                'uri' => '',
                'permission' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-04-27 15:04:36',
            ),
            2 => 
            array (
                'id' => 3,
                'parent_id' => 2,
                'order' => 11,
                'title' => 'Users',
                'icon' => 'fa-users',
                'uri' => 'auth/users',
                'permission' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-04-27 15:04:36',
            ),
            3 => 
            array (
                'id' => 4,
                'parent_id' => 2,
                'order' => 12,
                'title' => 'Roles',
                'icon' => 'fa-user',
                'uri' => 'auth/roles',
                'permission' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-04-27 15:04:36',
            ),
            4 => 
            array (
                'id' => 5,
                'parent_id' => 2,
                'order' => 13,
                'title' => 'Permission',
                'icon' => 'fa-ban',
                'uri' => 'auth/permissions',
                'permission' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-04-27 15:04:36',
            ),
            5 => 
            array (
                'id' => 6,
                'parent_id' => 2,
                'order' => 14,
                'title' => 'Menu',
                'icon' => 'fa-bars',
                'uri' => 'auth/menu',
                'permission' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-04-27 15:04:36',
            ),
            6 => 
            array (
                'id' => 7,
                'parent_id' => 2,
                'order' => 15,
                'title' => 'Operation log',
                'icon' => 'fa-history',
                'uri' => 'auth/logs',
                'permission' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-04-27 15:04:36',
            ),
            7 => 
            array (
                'id' => 11,
                'parent_id' => 0,
                'order' => 4,
                'title' => 'Menu KIB',
                'icon' => 'fa-edit',
                'uri' => '#',
                'permission' => NULL,
                'created_at' => '2022-04-20 22:35:11',
                'updated_at' => '2022-04-27 15:04:36',
            ),
            8 => 
            array (
                'id' => 12,
                'parent_id' => 11,
                'order' => 5,
                'title' => 'KIB A',
                'icon' => 'fa-align-justify',
                'uri' => '/menu/kib-a',
                'permission' => NULL,
                'created_at' => '2022-04-20 22:37:46',
                'updated_at' => '2022-04-27 15:04:36',
            ),
            9 => 
            array (
                'id' => 13,
                'parent_id' => 11,
                'order' => 6,
                'title' => 'KIB B',
                'icon' => 'fa-align-left',
                'uri' => '/menu/kib-b',
                'permission' => NULL,
                'created_at' => '2022-04-20 22:38:04',
                'updated_at' => '2022-04-27 15:04:36',
            ),
            10 => 
            array (
                'id' => 14,
                'parent_id' => 11,
                'order' => 7,
                'title' => 'KIB C',
                'icon' => 'fa-align-right',
                'uri' => '/menu/kib-c',
                'permission' => NULL,
                'created_at' => '2022-04-20 22:38:30',
                'updated_at' => '2022-04-27 15:04:36',
            ),
            11 => 
            array (
                'id' => 15,
                'parent_id' => 0,
                'order' => 2,
                'title' => 'Data Master KIB',
                'icon' => 'fa-inbox',
                'uri' => '#',
                'permission' => '*',
                'created_at' => '2022-04-21 11:05:41',
                'updated_at' => '2022-04-27 15:04:36',
            ),
            12 => 
            array (
                'id' => 16,
                'parent_id' => 15,
                'order' => 3,
                'title' => 'Data KIB',
                'icon' => 'fa-archive',
                'uri' => '/master/data-kib',
                'permission' => '*',
                'created_at' => '2022-04-21 11:06:26',
                'updated_at' => '2022-04-27 15:04:36',
            ),
            13 => 
            array (
                'id' => 18,
                'parent_id' => 0,
                'order' => 8,
                'title' => 'Peminjaman',
                'icon' => 'fa-hand-paper-o',
                'uri' => 'peminjaman',
                'permission' => '*',
                'created_at' => '2022-04-27 13:20:44',
                'updated_at' => '2022-04-27 15:04:36',
            ),
            14 => 
            array (
                'id' => 19,
                'parent_id' => 0,
                'order' => 9,
                'title' => 'Pengembalian',
                'icon' => 'fa-inbox',
                'uri' => 'pengembalian',
                'permission' => '*',
                'created_at' => '2022-04-27 15:03:41',
                'updated_at' => '2022-04-27 15:04:36',
            ),
        ));
        
        
    }
}