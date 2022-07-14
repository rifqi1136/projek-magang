<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MasterKibTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('master_kib')->delete();
        
        \DB::table('master_kib')->insert(array (
            0 => 
            array (
                'id' => 1,
                'kategori_barang' => 'TANAH',
                'nomor_kode_barang' => '01',
                'jenis_barang' => 'GOLONGAN TANAH',
                'created_at' => '2022-04-21 12:23:40',
                'updated_at' => '2022-04-21 12:23:40',
            ),
            1 => 
            array (
                'id' => 2,
                'kategori_barang' => 'TANAH',
                'nomor_kode_barang' => '01.01',
                'jenis_barang' => 'TANAH',
                'created_at' => '2022-04-21 12:23:40',
                'updated_at' => '2022-04-21 20:01:03',
            ),
            2 => 
            array (
                'id' => 3,
                'kategori_barang' => 'TANAH',
                'nomor_kode_barang' => '01.01.11',
                'jenis_barang' => 'TANAH UNTUK BANGUNAN GEDUNG',
                'created_at' => '2022-04-21 12:23:40',
                'updated_at' => '2022-04-21 20:15:23',
            ),
            3 => 
            array (
                'id' => 4,
                'kategori_barang' => 'TANAH',
                'nomor_kode_barang' => '01.01.11.04',
                'jenis_barang' => 'TANAH UNTUK BANGUNAN TEMPAT KERJA',
                'created_at' => '2022-04-21 12:23:40',
                'updated_at' => '2022-04-21 20:16:03',
            ),
            4 => 
            array (
                'id' => 5,
                'kategori_barang' => 'TANAH',
                'nomor_kode_barang' => '01.01.11.04.01',
                'jenis_barang' => 'TANAH BANGUNAN KANTOR',
                'created_at' => '2022-04-21 12:23:40',
                'updated_at' => '2022-04-21 20:16:23',
            ),
            5 => 
            array (
                'id' => 6,
                'kategori_barang' => 'PERALATAN DAN MESIN',
                'nomor_kode_barang' => '02',
                'jenis_barang' => 'PERALATAN DAN MESIN',
                'created_at' => '2022-04-21 12:36:00',
                'updated_at' => '2022-04-27 07:42:09',
            ),
            6 => 
            array (
                'id' => 7,
                'kategori_barang' => 'PERALATAN DAN MESIN',
                'nomor_kode_barang' => '02.03',
                'jenis_barang' => 'ALAT-ALAT ANGKUTAN',
                'created_at' => '2022-04-21 12:36:00',
                'updated_at' => '2022-04-28 11:22:38',
            ),
            7 => 
            array (
                'id' => 8,
                'kategori_barang' => 'PERALATAN DAN MESIN',
                'nomor_kode_barang' => '02.03.01',
                'jenis_barang' => 'Alat Angkutan Darat Bermotor',
                'created_at' => '2022-04-21 12:36:00',
                'updated_at' => '2022-04-28 11:22:49',
            ),
            8 => 
            array (
                'id' => 9,
                'kategori_barang' => 'PERALATAN DAN MESIN',
                'nomor_kode_barang' => '02.03.01.01',
                'jenis_barang' => 'Kendaraan Bermotor Perorangan',
                'created_at' => '2022-04-21 12:36:00',
                'updated_at' => '2022-04-28 11:22:57',
            ),
            9 => 
            array (
                'id' => 10,
                'kategori_barang' => 'PERALATAN DAN MESIN',
                'nomor_kode_barang' => '02.03.01.01.03',
                'jenis_barang' => 'Station Wagon',
                'created_at' => '2022-04-21 12:36:00',
                'updated_at' => '2022-04-28 11:23:05',
            ),
            10 => 
            array (
                'id' => 11,
                'kategori_barang' => 'GEDUNG DAN BANGUNAN',
                'nomor_kode_barang' => '03',
                'jenis_barang' => 'GOLONGAN GEDUNG DAN BANGUNAN',
                'created_at' => '2022-04-21 12:36:00',
                'updated_at' => '2022-04-21 12:36:00',
            ),
            11 => 
            array (
                'id' => 12,
                'kategori_barang' => 'GEDUNG DAN BANGUNAN',
                'nomor_kode_barang' => '03.11',
                'jenis_barang' => 'BANGUNAN GEDUNG',
                'created_at' => '2022-04-21 12:36:00',
                'updated_at' => '2022-04-28 11:23:11',
            ),
            12 => 
            array (
                'id' => 13,
                'kategori_barang' => 'GEDUNG DAN BANGUNAN',
                'nomor_kode_barang' => '03.11.02',
                'jenis_barang' => 'BANGUNAN GEDUNG TEMPAT TINGGAL',
                'created_at' => '2022-04-21 12:36:00',
                'updated_at' => '2022-04-28 11:23:18',
            ),
            13 => 
            array (
                'id' => 14,
                'kategori_barang' => 'GEDUNG DAN BANGUNAN',
                'nomor_kode_barang' => '03.11.02.08',
                'jenis_barang' => 'Bangunan Tempat Tinggal, Mess, Tempat peristirahatan',
                'created_at' => '2022-04-21 12:36:00',
                'updated_at' => '2022-04-28 11:23:26',
            ),
            14 => 
            array (
                'id' => 15,
                'kategori_barang' => 'GEDUNG DAN BANGUNAN',
                'nomor_kode_barang' => '03.11.02.08.01',
            'jenis_barang' => 'Bangunan Gedung Tempat Tinggal / Flat (rumah susun) permanen',
                'created_at' => '2022-04-21 12:36:00',
                'updated_at' => '2022-04-28 11:23:34',
            ),
        ));
        
        
    }
}