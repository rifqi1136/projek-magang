<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(AdminMenuTableSeeder::class);
        $this->call(AdminRoleMenuTableSeeder::class);
        $this->call(AdminRolePermissionsTableSeeder::class);
        $this->call(AdminRolesTableSeeder::class);
        $this->call(BarangTableSeeder::class);
        $this->call(ItemBarangTableSeeder::class);
        $this->call(MasterKibTableSeeder::class);
        $this->call(AdminUsersTableSeeder::class);
    }
}
