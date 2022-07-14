<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BarangTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('barang')->delete();
        
        \DB::table('barang')->insert(array (
            0 => 
            array (
                'id' => 1,
                'kode_barang' => '02040301',
                'nama_barang' => 'Alat Ukur Universal',
                'keterangan' => NULL,
                'created_at' => '2022-04-20 21:31:08',
                'updated_at' => '2022-04-20 21:31:08',
            ),
            1 => 
            array (
                'id' => 2,
                'kode_barang' => '02060103',
                'nama_barang' => 'Mesin Pengganda',
                'keterangan' => NULL,
                'created_at' => '2022-04-20 21:31:32',
                'updated_at' => '2022-04-20 21:31:32',
            ),
            2 => 
            array (
                'id' => 3,
                'kode_barang' => '02060104',
                'nama_barang' => 'Alat Penyimpanan Perlengkapan Kantor',
                'keterangan' => NULL,
                'created_at' => '2022-04-20 21:32:05',
                'updated_at' => '2022-04-20 21:32:05',
            ),
            3 => 
            array (
                'id' => 4,
                'kode_barang' => '02060105',
                'nama_barang' => 'Alat Kantor Lainnya',
                'keterangan' => NULL,
                'created_at' => '2022-04-20 21:32:18',
                'updated_at' => '2022-04-20 21:32:18',
            ),
            4 => 
            array (
                'id' => 5,
                'kode_barang' => '02060201',
                'nama_barang' => 'Meubeul Air',
                'keterangan' => NULL,
                'created_at' => '2022-04-20 21:32:40',
                'updated_at' => '2022-04-20 21:32:40',
            ),
            5 => 
            array (
                'id' => 6,
                'kode_barang' => '02060202',
                'nama_barang' => 'Alat Pengukur Waktu',
                'keterangan' => NULL,
                'created_at' => '2022-04-20 21:33:00',
                'updated_at' => '2022-04-20 21:33:00',
            ),
            6 => 
            array (
                'id' => 7,
                'kode_barang' => '02060204',
                'nama_barang' => 'Alat Pendingin',
                'keterangan' => NULL,
                'created_at' => '2022-04-20 21:33:16',
                'updated_at' => '2022-04-20 21:33:16',
            ),
            7 => 
            array (
                'id' => 8,
                'kode_barang' => '02060205',
                'nama_barang' => 'Alat Dapur',
                'keterangan' => NULL,
                'created_at' => '2022-04-20 21:33:38',
                'updated_at' => '2022-04-20 21:33:38',
            ),
            8 => 
            array (
                'id' => 9,
                'kode_barang' => '02060206',
            'nama_barang' => 'Alat Rumah Tangga Lainnya (Home Use)',
                'keterangan' => NULL,
                'created_at' => '2022-04-20 21:34:12',
                'updated_at' => '2022-04-20 21:34:12',
            ),
            9 => 
            array (
                'id' => 10,
                'kode_barang' => '02060207',
                'nama_barang' => 'Pemadam Kebakaran Portable',
                'keterangan' => NULL,
                'created_at' => '2022-04-20 21:34:36',
                'updated_at' => '2022-04-20 21:34:36',
            ),
            10 => 
            array (
                'id' => 11,
                'kode_barang' => '02060302',
                'nama_barang' => 'Personal Komputer',
                'keterangan' => NULL,
                'created_at' => '2022-04-20 21:34:58',
                'updated_at' => '2022-04-20 21:34:58',
            ),
            11 => 
            array (
                'id' => 12,
                'kode_barang' => '02060303',
                'nama_barang' => 'Hard Disk',
                'keterangan' => NULL,
                'created_at' => '2022-04-20 21:35:16',
                'updated_at' => '2022-04-20 21:35:16',
            ),
            12 => 
            array (
                'id' => 13,
                'kode_barang' => '02060305',
                'nama_barang' => 'Peralatan Personal Komputer',
                'keterangan' => NULL,
                'created_at' => '2022-04-20 21:35:40',
                'updated_at' => '2022-04-20 21:35:40',
            ),
            13 => 
            array (
                'id' => 14,
                'kode_barang' => '02070201',
                'nama_barang' => 'Alat Komunikasi Telepon',
                'keterangan' => NULL,
                'created_at' => '2022-04-20 21:36:08',
                'updated_at' => '2022-04-20 21:36:08',
            ),
        ));
        
        
    }
}