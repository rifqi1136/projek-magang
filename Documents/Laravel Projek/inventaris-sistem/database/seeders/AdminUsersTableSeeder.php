<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminUsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin_users')->delete();
        
        \DB::table('admin_users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'username' => 'admin',
                'password' => '$2y$10$rM79z1yA/HXAywn6V7QAUO9pgrHKF4veQChH2zfx.etKXbHo79tOa',
                'name' => 'Administrator',
                'avatar' => NULL,
                'remember_token' => 'APdxj7hIIIfRlUtv3lwAebAo3IroIXeTbEpFyKzGi8ju7Dcoz41r8V2MZkwP',
                'created_at' => '2022-04-20 11:04:40',
                'updated_at' => '2022-04-20 11:04:40',
            ),
            1 => 
            array (
                'id' => 2,
                'username' => 'user',
                'password' => '$2y$10$ZXSkKc8OQukzBkK7jr82Ve1DOwGRsbm5xg90TnOVhPVwMBB3sbPVu',
                'name' => 'Rifqi',
                'avatar' => NULL,
                'remember_token' => 'TpvMlZX8M60RVx15TvxbrvQF3LLlEv4sk5nLIOVGkuFA4Jg2geAETgf2aXlk',
                'created_at' => '2022-04-20 22:36:34',
                'updated_at' => '2022-04-21 19:51:11',
            ),
        ));
        
        
    }
}