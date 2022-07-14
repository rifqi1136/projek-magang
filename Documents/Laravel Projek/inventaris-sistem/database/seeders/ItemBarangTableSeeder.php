<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ItemBarangTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('item_barang')->delete();
        
        \DB::table('item_barang')->insert(array (
            0 => 
            array (
                'id' => 1,
                'kode_item_barang' => '0204030171',
                'kode_barang' => '02040301',
                'nama_item_barang' => 'GPS',
                'keterangan' => NULL,
                'created_at' => '2022-04-21 10:41:11',
                'updated_at' => '2022-04-21 10:41:11',
            ),
            1 => 
            array (
                'id' => 2,
                'kode_item_barang' => '0206010301',
                'kode_barang' => '02060103',
                'nama_item_barang' => 'Mesin Fotocopy',
                'keterangan' => NULL,
                'created_at' => '2022-04-21 10:41:32',
                'updated_at' => '2022-04-21 10:41:32',
            ),
            2 => 
            array (
                'id' => 3,
                'kode_item_barang' => '0206010401',
                'kode_barang' => '02060104',
                'nama_item_barang' => 'Lemari',
                'keterangan' => NULL,
                'created_at' => '2022-04-21 10:41:49',
                'updated_at' => '2022-04-21 10:41:49',
            ),
            3 => 
            array (
                'id' => 4,
                'kode_item_barang' => '0206010404',
                'kode_barang' => '02060104',
                'nama_item_barang' => 'Filling Cabinet',
                'keterangan' => NULL,
                'created_at' => '2022-04-21 10:42:07',
                'updated_at' => '2022-04-21 10:42:07',
            ),
            4 => 
            array (
                'id' => 7,
                'kode_item_barang' => '0206010501',
                'kode_barang' => '02060105',
                'nama_item_barang' => 'Papan Visual',
                'keterangan' => NULL,
                'created_at' => '2022-04-21 10:44:14',
                'updated_at' => '2022-04-21 10:44:14',
            ),
            5 => 
            array (
                'id' => 8,
                'kode_item_barang' => '0206010505',
                'kode_barang' => '02060105',
                'nama_item_barang' => 'Alat Penghancur Kertas',
                'keterangan' => NULL,
                'created_at' => '2022-04-21 10:44:33',
                'updated_at' => '2022-04-21 10:44:33',
            ),
            6 => 
            array (
                'id' => 9,
                'kode_item_barang' => '0206010507',
                'kode_barang' => '02060105',
                'nama_item_barang' => 'Papan Pengumuman',
                'keterangan' => NULL,
                'created_at' => '2022-04-21 10:44:57',
                'updated_at' => '2022-04-21 10:45:15',
            ),
            7 => 
            array (
                'id' => 10,
                'kode_item_barang' => '0206010508',
                'kode_barang' => '02060105',
                'nama_item_barang' => 'Papan Tulis',
                'keterangan' => NULL,
                'created_at' => '2022-04-21 10:45:40',
                'updated_at' => '2022-04-21 10:45:40',
            ),
            8 => 
            array (
                'id' => 11,
                'kode_item_barang' => '0206010510',
                'kode_barang' => '02060105',
                'nama_item_barang' => 'White Board',
                'keterangan' => NULL,
                'created_at' => '2022-04-21 10:45:53',
                'updated_at' => '2022-04-21 10:45:53',
            ),
            9 => 
            array (
                'id' => 12,
                'kode_item_barang' => '0206010517',
                'kode_barang' => '02060105',
                'nama_item_barang' => 'Mesin Absensi',
                'keterangan' => NULL,
                'created_at' => '2022-04-21 10:46:03',
                'updated_at' => '2022-04-21 10:46:03',
            ),
            10 => 
            array (
                'id' => 13,
                'kode_item_barang' => '0206020101',
                'kode_barang' => '02060201',
                'nama_item_barang' => 'Lemari Kayu',
                'keterangan' => NULL,
                'created_at' => '2022-04-21 10:53:55',
                'updated_at' => '2022-04-21 10:53:55',
            ),
            11 => 
            array (
                'id' => 14,
                'kode_item_barang' => '0206020102',
                'kode_barang' => '02060201',
                'nama_item_barang' => 'Rak Kayu',
                'keterangan' => NULL,
                'created_at' => '2022-04-21 10:53:55',
                'updated_at' => '2022-04-21 10:53:55',
            ),
            12 => 
            array (
                'id' => 15,
                'kode_item_barang' => '0206020103',
                'kode_barang' => '02060201',
                'nama_item_barang' => 'Meja besi / Metal',
                'keterangan' => NULL,
                'created_at' => '2022-04-21 10:53:55',
                'updated_at' => '2022-04-21 10:53:55',
            ),
            13 => 
            array (
                'id' => 16,
                'kode_item_barang' => '0206020104',
                'kode_barang' => '02060201',
                'nama_item_barang' => 'Meja Kayu /rotan',
                'keterangan' => NULL,
                'created_at' => '2022-04-21 10:53:55',
                'updated_at' => '2022-04-21 10:53:55',
            ),
            14 => 
            array (
                'id' => 17,
                'kode_item_barang' => '0206020105',
                'kode_barang' => '02060201',
                'nama_item_barang' => ' Kursi besi / Metal',
                'keterangan' => NULL,
                'created_at' => '2022-04-21 10:53:55',
                'updated_at' => '2022-04-21 10:53:55',
            ),
            15 => 
            array (
                'id' => 18,
                'kode_item_barang' => '0206020106',
                'kode_barang' => '02060201',
                'nama_item_barang' => 'Kursi Kayu / rotan / bambu',
                'keterangan' => NULL,
                'created_at' => '2022-04-21 10:53:55',
                'updated_at' => '2022-04-21 10:53:55',
            ),
            16 => 
            array (
                'id' => 19,
                'kode_item_barang' => '0206020110',
                'kode_barang' => '02060201',
                'nama_item_barang' => 'Meja Rapat',
                'keterangan' => NULL,
                'created_at' => '2022-04-21 10:53:55',
                'updated_at' => '2022-04-21 10:53:55',
            ),
            17 => 
            array (
                'id' => 20,
                'kode_item_barang' => '0206020117',
                'kode_barang' => '02060201',
                'nama_item_barang' => 'Meja Resepsionist',
                'keterangan' => NULL,
                'created_at' => '2022-04-21 10:53:55',
                'updated_at' => '2022-04-21 10:53:55',
            ),
            18 => 
            array (
                'id' => 21,
                'kode_item_barang' => '0206020118',
                'kode_barang' => '02060201',
                'nama_item_barang' => 'Meja Tambahan',
                'keterangan' => NULL,
                'created_at' => '2022-04-21 10:53:55',
                'updated_at' => '2022-04-21 10:53:55',
            ),
            19 => 
            array (
                'id' => 22,
                'kode_item_barang' => '0206020127',
                'kode_barang' => '02060201',
                'nama_item_barang' => 'Kursi Rapat',
                'keterangan' => NULL,
                'created_at' => '2022-04-21 10:53:55',
                'updated_at' => '2022-04-21 10:53:55',
            ),
            20 => 
            array (
                'id' => 23,
                'kode_item_barang' => '0206020128',
                'kode_barang' => '02060201',
                'nama_item_barang' => 'Kursi Tamu',
                'keterangan' => NULL,
                'created_at' => '2022-04-21 10:53:55',
                'updated_at' => '2022-04-21 10:53:55',
            ),
            21 => 
            array (
                'id' => 24,
                'kode_item_barang' => '0206020129',
                'kode_barang' => '02060201',
                'nama_item_barang' => 'Kursi Tangan',
                'keterangan' => NULL,
                'created_at' => '2022-04-21 10:53:55',
                'updated_at' => '2022-04-21 10:53:55',
            ),
            22 => 
            array (
                'id' => 25,
                'kode_item_barang' => '0206020130',
                'kode_barang' => '02060201',
                'nama_item_barang' => 'Kursi Putar',
                'keterangan' => NULL,
                'created_at' => '2022-04-21 10:53:55',
                'updated_at' => '2022-04-21 10:53:55',
            ),
            23 => 
            array (
                'id' => 26,
                'kode_item_barang' => '0206020131',
                'kode_barang' => '02060201',
                'nama_item_barang' => 'Kursi Biasa',
                'keterangan' => NULL,
                'created_at' => '2022-04-21 10:53:55',
                'updated_at' => '2022-04-21 10:53:55',
            ),
            24 => 
            array (
                'id' => 27,
                'kode_item_barang' => '0206020137',
                'kode_barang' => '02060201',
                'nama_item_barang' => 'Meja Komputer',
                'keterangan' => NULL,
                'created_at' => '2022-04-21 10:53:55',
                'updated_at' => '2022-04-21 10:53:55',
            ),
            25 => 
            array (
                'id' => 28,
                'kode_item_barang' => '0206020138',
                'kode_barang' => '02060201',
                'nama_item_barang' => 'Kasur',
                'keterangan' => NULL,
                'created_at' => '2022-04-21 10:53:55',
                'updated_at' => '2022-04-21 10:53:55',
            ),
            26 => 
            array (
                'id' => 29,
                'kode_item_barang' => '0206020149',
                'kode_barang' => '02060201',
                'nama_item_barang' => 'Sofa',
                'keterangan' => NULL,
                'created_at' => '2022-04-21 10:53:55',
                'updated_at' => '2022-04-21 10:53:55',
            ),
            27 => 
            array (
                'id' => 30,
                'kode_item_barang' => '0206020161',
                'kode_barang' => '02060201',
                'nama_item_barang' => 'Lain-lain',
                'keterangan' => NULL,
                'created_at' => '2022-04-21 10:53:55',
                'updated_at' => '2022-04-21 10:53:55',
            ),
            28 => 
            array (
                'id' => 31,
                'kode_item_barang' => '0206020201',
                'kode_barang' => '02060202',
                'nama_item_barang' => 'Jam Mekanis',
                'keterangan' => NULL,
                'created_at' => '2022-04-21 10:55:06',
                'updated_at' => '2022-04-21 10:55:06',
            ),
            29 => 
            array (
                'id' => 32,
                'kode_item_barang' => '0206020401',
                'kode_barang' => '02060204',
                'nama_item_barang' => 'Lemari Es',
                'keterangan' => NULL,
                'created_at' => '2022-04-21 10:55:22',
                'updated_at' => '2022-04-21 10:55:22',
            ),
            30 => 
            array (
                'id' => 33,
                'kode_item_barang' => '0206020403',
                'kode_barang' => '02060204',
                'nama_item_barang' => 'AC Unit',
                'keterangan' => NULL,
                'created_at' => '2022-04-21 10:55:35',
                'updated_at' => '2022-04-21 10:55:35',
            ),
            31 => 
            array (
                'id' => 34,
                'kode_item_barang' => '0206020404',
                'kode_barang' => '02060204',
                'nama_item_barang' => 'AC Splits',
                'keterangan' => NULL,
                'created_at' => '2022-04-21 10:55:49',
                'updated_at' => '2022-04-21 10:55:49',
            ),
            32 => 
            array (
                'id' => 35,
                'kode_item_barang' => '0206020406',
                'kode_barang' => '02060204',
                'nama_item_barang' => 'Kipas Angin',
                'keterangan' => NULL,
                'created_at' => '2022-04-21 10:56:02',
                'updated_at' => '2022-04-21 10:56:02',
            ),
            33 => 
            array (
                'id' => 36,
                'kode_item_barang' => '0206020407',
                'kode_barang' => '02060204',
                'nama_item_barang' => 'Exhause Fan',
                'keterangan' => NULL,
                'created_at' => '2022-04-21 10:56:14',
                'updated_at' => '2022-04-21 10:56:14',
            ),
            34 => 
            array (
                'id' => 37,
                'kode_item_barang' => '0206020501',
                'kode_barang' => '02060205',
                'nama_item_barang' => 'Kompor Listrik',
                'keterangan' => NULL,
                'created_at' => '2022-04-21 10:56:43',
                'updated_at' => '2022-04-21 10:56:43',
            ),
            35 => 
            array (
                'id' => 38,
                'kode_item_barang' => '0206020502',
                'kode_barang' => '02060205',
                'nama_item_barang' => 'Kompor Gas',
                'keterangan' => NULL,
                'created_at' => '2022-04-21 10:56:59',
                'updated_at' => '2022-04-21 10:56:59',
            ),
            36 => 
            array (
                'id' => 39,
                'kode_item_barang' => '0206020503',
                'kode_barang' => '02060205',
                'nama_item_barang' => 'Kompor Minyak',
                'keterangan' => NULL,
                'created_at' => '2022-04-21 10:57:13',
                'updated_at' => '2022-04-21 10:57:13',
            ),
            37 => 
            array (
                'id' => 40,
                'kode_item_barang' => '0206020504',
                'kode_barang' => '02060205',
                'nama_item_barang' => 'Teko Listrik',
                'keterangan' => NULL,
                'created_at' => '2022-04-21 10:57:27',
                'updated_at' => '2022-04-21 10:57:27',
            ),
            38 => 
            array (
                'id' => 41,
                'kode_item_barang' => '0206020508',
                'kode_barang' => '02060205',
                'nama_item_barang' => 'Kitchen Set',
                'keterangan' => NULL,
                'created_at' => '2022-04-21 10:57:43',
                'updated_at' => '2022-04-21 10:57:43',
            ),
            39 => 
            array (
                'id' => 42,
                'kode_item_barang' => '0206020602',
                'kode_barang' => '02060206',
                'nama_item_barang' => 'Radio',
                'keterangan' => NULL,
                'created_at' => '2022-04-21 10:57:59',
                'updated_at' => '2022-04-21 10:57:59',
            ),
            40 => 
            array (
                'id' => 43,
                'kode_item_barang' => '0206020603',
                'kode_barang' => '02060206',
                'nama_item_barang' => 'Televisi',
                'keterangan' => NULL,
                'created_at' => '2022-04-21 10:58:14',
                'updated_at' => '2022-04-21 10:58:14',
            ),
            41 => 
            array (
                'id' => 44,
                'kode_item_barang' => '0206020620',
                'kode_barang' => '02060206',
                'nama_item_barang' => 'Stabilizer',
                'keterangan' => NULL,
                'created_at' => '2022-04-21 10:58:28',
                'updated_at' => '2022-04-21 10:58:28',
            ),
            42 => 
            array (
                'id' => 45,
                'kode_item_barang' => '0206020621',
                'kode_barang' => '02060206',
                'nama_item_barang' => 'Camera / Video',
                'keterangan' => NULL,
                'created_at' => '2022-04-21 10:58:41',
                'updated_at' => '2022-04-21 10:58:41',
            ),
            43 => 
            array (
                'id' => 46,
                'kode_item_barang' => '0206020639',
                'kode_barang' => '02060206',
                'nama_item_barang' => 'Dispenser',
                'keterangan' => NULL,
                'created_at' => '2022-04-21 10:58:55',
                'updated_at' => '2022-04-21 10:58:55',
            ),
            44 => 
            array (
                'id' => 47,
                'kode_item_barang' => '0206020648',
                'kode_barang' => '02060206',
                'nama_item_barang' => 'Cooffee Maker',
                'keterangan' => NULL,
                'created_at' => '2022-04-21 10:59:06',
                'updated_at' => '2022-04-21 10:59:06',
            ),
            45 => 
            array (
                'id' => 48,
                'kode_item_barang' => '0206020661',
                'kode_barang' => '02060206',
                'nama_item_barang' => 'Lain-lain',
                'keterangan' => NULL,
                'created_at' => '2022-04-21 10:59:17',
                'updated_at' => '2022-04-21 10:59:17',
            ),
            46 => 
            array (
                'id' => 49,
                'kode_item_barang' => '0206020701',
                'kode_barang' => '02060207',
                'nama_item_barang' => 'Pemadam kebakaran portable',
                'keterangan' => NULL,
                'created_at' => '2022-04-21 10:59:32',
                'updated_at' => '2022-04-21 10:59:32',
            ),
            47 => 
            array (
                'id' => 50,
                'kode_item_barang' => '0206030201',
                'kode_barang' => '02060302',
                'nama_item_barang' => 'PC UNIT',
                'keterangan' => NULL,
                'created_at' => '2022-04-21 10:59:47',
                'updated_at' => '2022-04-21 10:59:47',
            ),
            48 => 
            array (
                'id' => 51,
                'kode_item_barang' => '0206030202',
                'kode_barang' => '02060302',
                'nama_item_barang' => 'Laptop',
                'keterangan' => NULL,
                'created_at' => '2022-04-21 11:00:00',
                'updated_at' => '2022-04-21 11:00:00',
            ),
            49 => 
            array (
                'id' => 52,
                'kode_item_barang' => '0206030203',
                'kode_barang' => '02060302',
                'nama_item_barang' => 'Note Book',
                'keterangan' => NULL,
                'created_at' => '2022-04-21 11:00:15',
                'updated_at' => '2022-04-21 11:00:15',
            ),
            50 => 
            array (
                'id' => 53,
                'kode_item_barang' => '0206030206',
                'kode_barang' => '02060302',
                'nama_item_barang' => 'TAB',
                'keterangan' => NULL,
                'created_at' => '2022-04-21 11:00:26',
                'updated_at' => '2022-04-21 11:00:26',
            ),
            51 => 
            array (
                'id' => 54,
                'kode_item_barang' => '0206030312',
                'kode_barang' => '02060303',
                'nama_item_barang' => 'Hard Disk',
                'keterangan' => NULL,
                'created_at' => '2022-04-21 11:00:39',
                'updated_at' => '2022-04-21 11:00:39',
            ),
            52 => 
            array (
                'id' => 55,
                'kode_item_barang' => '0206030501',
                'kode_barang' => '02060305',
                'nama_item_barang' => 'CPU',
                'keterangan' => NULL,
                'created_at' => '2022-04-21 11:00:53',
                'updated_at' => '2022-04-21 11:00:53',
            ),
            53 => 
            array (
                'id' => 56,
                'kode_item_barang' => '0206030502',
                'kode_barang' => '02060305',
                'nama_item_barang' => 'Monitor',
                'keterangan' => NULL,
                'created_at' => '2022-04-21 11:01:06',
                'updated_at' => '2022-04-21 11:01:06',
            ),
            54 => 
            array (
                'id' => 57,
                'kode_item_barang' => '0206030503',
                'kode_barang' => '02060305',
                'nama_item_barang' => 'Printer',
                'keterangan' => NULL,
                'created_at' => '2022-04-21 11:01:17',
                'updated_at' => '2022-04-21 11:01:17',
            ),
            55 => 
            array (
                'id' => 58,
                'kode_item_barang' => '0206030504',
                'kode_barang' => '02060305',
                'nama_item_barang' => 'Scanner',
                'keterangan' => NULL,
                'created_at' => '2022-04-21 11:01:36',
                'updated_at' => '2022-04-21 11:01:36',
            ),
            56 => 
            array (
                'id' => 59,
                'kode_item_barang' => '0207020109',
                'kode_barang' => '02070201',
            'nama_item_barang' => 'Telephone (PABX)',
                'keterangan' => NULL,
                'created_at' => '2022-04-21 11:02:04',
                'updated_at' => '2022-04-21 11:02:04',
            ),
            57 => 
            array (
                'id' => 60,
                'kode_item_barang' => '0207020111',
                'kode_barang' => '02070201',
                'nama_item_barang' => 'Pesawat Telepon',
                'keterangan' => NULL,
                'created_at' => '2022-04-21 11:02:18',
                'updated_at' => '2022-04-21 11:02:18',
            ),
            58 => 
            array (
                'id' => 61,
                'kode_item_barang' => '0207020121',
                'kode_barang' => '02070201',
                'nama_item_barang' => 'Hand Phone',
                'keterangan' => NULL,
                'created_at' => '2022-04-21 11:02:34',
                'updated_at' => '2022-04-21 11:02:34',
            ),
        ));
        
        
    }
}