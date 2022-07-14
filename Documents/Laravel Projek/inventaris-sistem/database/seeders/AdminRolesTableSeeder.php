<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminRolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin_roles')->delete();
        
        \DB::table('admin_roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Administrator',
                'slug' => 'administrator',
                'created_at' => '2022-04-20 11:04:41',
                'updated_at' => '2022-04-20 11:04:41',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'User',
                'slug' => 'user',
                'created_at' => '2022-04-20 22:36:01',
                'updated_at' => '2022-04-20 22:36:01',
            ),
        ));
        
        
    }
}