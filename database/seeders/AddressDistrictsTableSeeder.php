<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AddressDistrictsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('districts')->delete();
        
        \DB::table('districts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'ALADAĞ',
                'city_id' => 1,
                'created_at' => '2021-03-20 08:10:36',
                'updated_at' => '2021-03-20 08:10:36',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'CEYHAN',
                'city_id' => 1,
                'created_at' => '2021-03-20 08:10:37',
                'updated_at' => '2021-03-20 08:10:37',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'ÇUKUROVA',
                'city_id' => 1,
                'created_at' => '2021-03-20 08:10:39',
                'updated_at' => '2021-03-20 08:10:39',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'FEKE',
                'city_id' => 1,
                'created_at' => '2021-03-20 08:10:39',
                'updated_at' => '2021-03-20 08:10:39',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'İMAMOĞLU',
                'city_id' => 1,
                'created_at' => '2021-03-20 08:10:40',
                'updated_at' => '2021-03-20 08:10:40',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'KARAİSALI',
                'city_id' => 1,
                'created_at' => '2021-03-20 08:10:40',
                'updated_at' => '2021-03-20 08:10:40',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'KARATAŞ',
                'city_id' => 1,
                'created_at' => '2021-03-20 08:10:41',
                'updated_at' => '2021-03-20 08:10:41',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'KOZAN',
                'city_id' => 1,
                'created_at' => '2021-03-20 08:10:42',
                'updated_at' => '2021-03-20 08:10:42',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'POZANTI',
                'city_id' => 1,
                'created_at' => '2021-03-20 08:10:44',
                'updated_at' => '2021-03-20 08:10:44',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'SAİMBEYLİ',
                'city_id' => 1,
                'created_at' => '2021-03-20 08:10:44',
                'updated_at' => '2021-03-20 08:10:44',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'SARIÇAM',
                'city_id' => 1,
                'created_at' => '2021-03-20 08:10:45',
                'updated_at' => '2021-03-20 08:10:45',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'SEYHAN',
                'city_id' => 1,
                'created_at' => '2021-03-20 08:10:45',
                'updated_at' => '2021-03-20 08:10:45',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'TUFANBEYLİ',
                'city_id' => 1,
                'created_at' => '2021-03-20 08:10:47',
                'updated_at' => '2021-03-20 08:10:47',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'YUMURTALIK',
                'city_id' => 1,
                'created_at' => '2021-03-20 08:10:47',
                'updated_at' => '2021-03-20 08:10:47',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'YÜREĞİR',
                'city_id' => 1,
                'created_at' => '2021-03-20 08:10:47',
                'updated_at' => '2021-03-20 08:10:47',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'BESNİ',
                'city_id' => 2,
                'created_at' => '2021-03-20 08:10:49',
                'updated_at' => '2021-03-20 08:10:49',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'ÇELİKHAN',
                'city_id' => 2,
                'created_at' => '2021-03-20 08:10:51',
                'updated_at' => '2021-03-20 08:10:51',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'GERGER',
                'city_id' => 2,
                'created_at' => '2021-03-20 08:10:52',
                'updated_at' => '2021-03-20 08:10:52',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'GÖLBAŞI',
                'city_id' => 2,
                'created_at' => '2021-03-20 08:10:54',
                'updated_at' => '2021-03-20 08:10:54',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'KAHTA',
                'city_id' => 2,
                'created_at' => '2021-03-20 08:10:55',
                'updated_at' => '2021-03-20 08:10:55',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'MERKEZ',
                'city_id' => 2,
                'created_at' => '2021-03-20 08:10:59',
                'updated_at' => '2021-03-20 08:10:59',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'SAMSAT',
                'city_id' => 2,
                'created_at' => '2021-03-20 08:11:03',
                'updated_at' => '2021-03-20 08:11:03',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'SİNCİK',
                'city_id' => 2,
                'created_at' => '2021-03-20 08:11:04',
                'updated_at' => '2021-03-20 08:11:04',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'TUT',
                'city_id' => 2,
                'created_at' => '2021-03-20 08:11:05',
                'updated_at' => '2021-03-20 08:11:05',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'BAŞMAKÇI',
                'city_id' => 3,
                'created_at' => '2021-03-20 08:11:06',
                'updated_at' => '2021-03-20 08:11:06',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'BAYAT',
                'city_id' => 3,
                'created_at' => '2021-03-20 08:11:06',
                'updated_at' => '2021-03-20 08:11:06',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'BOLVADİN',
                'city_id' => 3,
                'created_at' => '2021-03-20 08:11:06',
                'updated_at' => '2021-03-20 08:11:06',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'ÇAY',
                'city_id' => 3,
                'created_at' => '2021-03-20 08:11:08',
                'updated_at' => '2021-03-20 08:11:08',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'ÇOBANLAR',
                'city_id' => 3,
                'created_at' => '2021-03-20 08:11:08',
                'updated_at' => '2021-03-20 08:11:08',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'DAZKIRI',
                'city_id' => 3,
                'created_at' => '2021-03-20 08:11:09',
                'updated_at' => '2021-03-20 08:11:09',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'DİNAR',
                'city_id' => 3,
                'created_at' => '2021-03-20 08:11:09',
                'updated_at' => '2021-03-20 08:11:09',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'EMİRDAĞ',
                'city_id' => 3,
                'created_at' => '2021-03-20 08:11:11',
                'updated_at' => '2021-03-20 08:11:11',
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'EVCİLER',
                'city_id' => 3,
                'created_at' => '2021-03-20 08:11:13',
                'updated_at' => '2021-03-20 08:11:13',
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'HOCALAR',
                'city_id' => 3,
                'created_at' => '2021-03-20 08:11:13',
                'updated_at' => '2021-03-20 08:11:13',
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'İHSANİYE',
                'city_id' => 3,
                'created_at' => '2021-03-20 08:11:13',
                'updated_at' => '2021-03-20 08:11:13',
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'İSCEHİSAR',
                'city_id' => 3,
                'created_at' => '2021-03-20 08:11:14',
                'updated_at' => '2021-03-20 08:11:14',
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'KIZILÖREN',
                'city_id' => 3,
                'created_at' => '2021-03-20 08:11:15',
                'updated_at' => '2021-03-20 08:11:15',
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'MERKEZ',
                'city_id' => 3,
                'created_at' => '2021-03-20 08:11:15',
                'updated_at' => '2021-03-20 08:11:15',
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'SANDIKLI',
                'city_id' => 3,
                'created_at' => '2021-03-20 08:11:17',
                'updated_at' => '2021-03-20 08:11:17',
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'SİNANPAŞA',
                'city_id' => 3,
                'created_at' => '2021-03-20 08:11:18',
                'updated_at' => '2021-03-20 08:11:18',
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'SULTANDAĞI',
                'city_id' => 3,
                'created_at' => '2021-03-20 08:11:19',
                'updated_at' => '2021-03-20 08:11:19',
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'ŞUHUT',
                'city_id' => 3,
                'created_at' => '2021-03-20 08:11:20',
                'updated_at' => '2021-03-20 08:11:20',
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'DİYADİN',
                'city_id' => 4,
                'created_at' => '2021-03-20 08:11:21',
                'updated_at' => '2021-03-20 08:11:21',
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'DOĞUBAYAZIT',
                'city_id' => 4,
                'created_at' => '2021-03-20 08:11:23',
                'updated_at' => '2021-03-20 08:11:23',
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'ELEŞKİRT',
                'city_id' => 4,
                'created_at' => '2021-03-20 08:11:25',
                'updated_at' => '2021-03-20 08:11:25',
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'HAMUR',
                'city_id' => 4,
                'created_at' => '2021-03-20 08:11:25',
                'updated_at' => '2021-03-20 08:11:25',
            ),
            46 => 
            array (
                'id' => 47,
                'name' => 'MERKEZ',
                'city_id' => 4,
                'created_at' => '2021-03-20 08:11:27',
                'updated_at' => '2021-03-20 08:11:27',
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'PATNOS',
                'city_id' => 4,
                'created_at' => '2021-03-20 08:11:29',
                'updated_at' => '2021-03-20 08:11:29',
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'TAŞLIÇAY',
                'city_id' => 4,
                'created_at' => '2021-03-20 08:11:32',
                'updated_at' => '2021-03-20 08:11:32',
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'TUTAK',
                'city_id' => 4,
                'created_at' => '2021-03-20 08:11:32',
                'updated_at' => '2021-03-20 08:11:32',
            ),
            50 => 
            array (
                'id' => 51,
                'name' => 'AĞAÇÖREN',
                'city_id' => 5,
                'created_at' => '2021-03-20 08:11:34',
                'updated_at' => '2021-03-20 08:11:34',
            ),
            51 => 
            array (
                'id' => 52,
                'name' => 'ESKİL',
                'city_id' => 5,
                'created_at' => '2021-03-20 08:11:34',
                'updated_at' => '2021-03-20 08:11:34',
            ),
            52 => 
            array (
                'id' => 53,
                'name' => 'GÜLAĞAÇ',
                'city_id' => 5,
                'created_at' => '2021-03-20 08:11:34',
                'updated_at' => '2021-03-20 08:11:34',
            ),
            53 => 
            array (
                'id' => 54,
                'name' => 'GÜZELYURT',
                'city_id' => 5,
                'created_at' => '2021-03-20 08:11:35',
                'updated_at' => '2021-03-20 08:11:35',
            ),
            54 => 
            array (
                'id' => 55,
                'name' => 'MERKEZ',
                'city_id' => 5,
                'created_at' => '2021-03-20 08:11:35',
                'updated_at' => '2021-03-20 08:11:35',
            ),
            55 => 
            array (
                'id' => 56,
                'name' => 'ORTAKÖY',
                'city_id' => 5,
                'created_at' => '2021-03-20 08:11:37',
                'updated_at' => '2021-03-20 08:11:37',
            ),
            56 => 
            array (
                'id' => 57,
                'name' => 'SARIYAHŞİ',
                'city_id' => 5,
                'created_at' => '2021-03-20 08:11:38',
                'updated_at' => '2021-03-20 08:11:38',
            ),
            57 => 
            array (
                'id' => 58,
                'name' => 'SULTANHANI',
                'city_id' => 5,
                'created_at' => '2021-03-20 08:11:38',
                'updated_at' => '2021-03-20 08:11:38',
            ),
            58 => 
            array (
                'id' => 59,
                'name' => 'GÖYNÜCEK',
                'city_id' => 6,
                'created_at' => '2021-03-20 08:11:38',
                'updated_at' => '2021-03-20 08:11:38',
            ),
            59 => 
            array (
                'id' => 60,
                'name' => 'GÜMÜŞHACIKÖY',
                'city_id' => 6,
                'created_at' => '2021-03-20 08:11:39',
                'updated_at' => '2021-03-20 08:11:39',
            ),
            60 => 
            array (
                'id' => 61,
                'name' => 'HAMAMÖZÜ',
                'city_id' => 6,
                'created_at' => '2021-03-20 08:11:41',
                'updated_at' => '2021-03-20 08:11:41',
            ),
            61 => 
            array (
                'id' => 62,
                'name' => 'MERKEZ',
                'city_id' => 6,
                'created_at' => '2021-03-20 08:11:41',
                'updated_at' => '2021-03-20 08:11:41',
            ),
            62 => 
            array (
                'id' => 63,
                'name' => 'MERZİFON',
                'city_id' => 6,
                'created_at' => '2021-03-20 08:11:44',
                'updated_at' => '2021-03-20 08:11:44',
            ),
            63 => 
            array (
                'id' => 64,
                'name' => 'SULUOVA',
                'city_id' => 6,
                'created_at' => '2021-03-20 08:11:45',
                'updated_at' => '2021-03-20 08:11:45',
            ),
            64 => 
            array (
                'id' => 65,
                'name' => 'TAŞOVA',
                'city_id' => 6,
                'created_at' => '2021-03-20 08:11:46',
                'updated_at' => '2021-03-20 08:11:46',
            ),
            65 => 
            array (
                'id' => 66,
                'name' => 'AKYURT',
                'city_id' => 7,
                'created_at' => '2021-03-20 08:11:48',
                'updated_at' => '2021-03-20 08:11:48',
            ),
            66 => 
            array (
                'id' => 67,
                'name' => 'ALTINDAĞ',
                'city_id' => 7,
                'created_at' => '2021-03-20 08:11:48',
                'updated_at' => '2021-03-20 08:11:48',
            ),
            67 => 
            array (
                'id' => 68,
                'name' => 'AYAŞ',
                'city_id' => 7,
                'created_at' => '2021-03-20 08:11:49',
                'updated_at' => '2021-03-20 08:11:49',
            ),
            68 => 
            array (
                'id' => 69,
                'name' => 'BALA',
                'city_id' => 7,
                'created_at' => '2021-03-20 08:11:49',
                'updated_at' => '2021-03-20 08:11:49',
            ),
            69 => 
            array (
                'id' => 70,
                'name' => 'BEYPAZARI',
                'city_id' => 7,
                'created_at' => '2021-03-20 08:11:50',
                'updated_at' => '2021-03-20 08:11:50',
            ),
            70 => 
            array (
                'id' => 71,
                'name' => 'ÇAMLIDERE',
                'city_id' => 7,
                'created_at' => '2021-03-20 08:11:51',
                'updated_at' => '2021-03-20 08:11:51',
            ),
            71 => 
            array (
                'id' => 72,
                'name' => 'ÇANKAYA',
                'city_id' => 7,
                'created_at' => '2021-03-20 08:11:52',
                'updated_at' => '2021-03-20 08:11:52',
            ),
            72 => 
            array (
                'id' => 73,
                'name' => 'ÇUBUK',
                'city_id' => 7,
                'created_at' => '2021-03-20 08:11:53',
                'updated_at' => '2021-03-20 08:11:53',
            ),
            73 => 
            array (
                'id' => 74,
                'name' => 'ELMADAĞ',
                'city_id' => 7,
                'created_at' => '2021-03-20 08:11:54',
                'updated_at' => '2021-03-20 08:11:54',
            ),
            74 => 
            array (
                'id' => 75,
                'name' => 'ETİMESGUT',
                'city_id' => 7,
                'created_at' => '2021-03-20 08:11:55',
                'updated_at' => '2021-03-20 08:11:55',
            ),
            75 => 
            array (
                'id' => 76,
                'name' => 'EVREN',
                'city_id' => 7,
                'created_at' => '2021-03-20 08:11:55',
                'updated_at' => '2021-03-20 08:11:55',
            ),
            76 => 
            array (
                'id' => 77,
                'name' => 'GÖLBAŞI',
                'city_id' => 7,
                'created_at' => '2021-03-20 08:11:55',
                'updated_at' => '2021-03-20 08:11:55',
            ),
            77 => 
            array (
                'id' => 78,
                'name' => 'GÜDÜL',
                'city_id' => 7,
                'created_at' => '2021-03-20 08:11:56',
                'updated_at' => '2021-03-20 08:11:56',
            ),
            78 => 
            array (
                'id' => 79,
                'name' => 'HAYMANA',
                'city_id' => 7,
                'created_at' => '2021-03-20 08:11:57',
                'updated_at' => '2021-03-20 08:11:57',
            ),
            79 => 
            array (
                'id' => 80,
                'name' => 'KAHRAMANKAZAN',
                'city_id' => 7,
                'created_at' => '2021-03-20 08:11:58',
                'updated_at' => '2021-03-20 08:11:58',
            ),
            80 => 
            array (
                'id' => 81,
                'name' => 'KALECİK',
                'city_id' => 7,
                'created_at' => '2021-03-20 08:11:58',
                'updated_at' => '2021-03-20 08:11:58',
            ),
            81 => 
            array (
                'id' => 82,
                'name' => 'KEÇİÖREN',
                'city_id' => 7,
                'created_at' => '2021-03-20 08:11:59',
                'updated_at' => '2021-03-20 08:11:59',
            ),
            82 => 
            array (
                'id' => 83,
                'name' => 'KIZILCAHAMAM',
                'city_id' => 7,
                'created_at' => '2021-03-20 08:12:00',
                'updated_at' => '2021-03-20 08:12:00',
            ),
            83 => 
            array (
                'id' => 84,
                'name' => 'MAMAK',
                'city_id' => 7,
                'created_at' => '2021-03-20 08:12:01',
                'updated_at' => '2021-03-20 08:12:01',
            ),
            84 => 
            array (
                'id' => 85,
                'name' => 'NALLIHAN',
                'city_id' => 7,
                'created_at' => '2021-03-20 08:12:02',
                'updated_at' => '2021-03-20 08:12:02',
            ),
            85 => 
            array (
                'id' => 86,
                'name' => 'POLATLI',
                'city_id' => 7,
                'created_at' => '2021-03-20 08:12:03',
                'updated_at' => '2021-03-20 08:12:03',
            ),
            86 => 
            array (
                'id' => 87,
                'name' => 'PURSAKLAR',
                'city_id' => 7,
                'created_at' => '2021-03-20 08:12:05',
                'updated_at' => '2021-03-20 08:12:05',
            ),
            87 => 
            array (
                'id' => 88,
                'name' => 'SİNCAN',
                'city_id' => 7,
                'created_at' => '2021-03-20 08:12:05',
                'updated_at' => '2021-03-20 08:12:05',
            ),
            88 => 
            array (
                'id' => 89,
                'name' => 'ŞEREFLİKOÇHİSAR',
                'city_id' => 7,
                'created_at' => '2021-03-20 08:12:06',
                'updated_at' => '2021-03-20 08:12:06',
            ),
            89 => 
            array (
                'id' => 90,
                'name' => 'YENİMAHALLE',
                'city_id' => 7,
                'created_at' => '2021-03-20 08:12:07',
                'updated_at' => '2021-03-20 08:12:07',
            ),
            90 => 
            array (
                'id' => 91,
                'name' => 'AKSEKİ',
                'city_id' => 8,
                'created_at' => '2021-03-20 08:12:07',
                'updated_at' => '2021-03-20 08:12:07',
            ),
            91 => 
            array (
                'id' => 92,
                'name' => 'AKSU',
                'city_id' => 8,
                'created_at' => '2021-03-20 08:12:08',
                'updated_at' => '2021-03-20 08:12:08',
            ),
            92 => 
            array (
                'id' => 93,
                'name' => 'ALANYA',
                'city_id' => 8,
                'created_at' => '2021-03-20 08:12:09',
                'updated_at' => '2021-03-20 08:12:09',
            ),
            93 => 
            array (
                'id' => 94,
                'name' => 'DEMRE',
                'city_id' => 8,
                'created_at' => '2021-03-20 08:12:10',
                'updated_at' => '2021-03-20 08:12:10',
            ),
            94 => 
            array (
                'id' => 95,
                'name' => 'DÖŞEMEALTI',
                'city_id' => 8,
                'created_at' => '2021-03-20 08:12:10',
                'updated_at' => '2021-03-20 08:12:10',
            ),
            95 => 
            array (
                'id' => 96,
                'name' => 'ELMALI',
                'city_id' => 8,
                'created_at' => '2021-03-20 08:12:11',
                'updated_at' => '2021-03-20 08:12:11',
            ),
            96 => 
            array (
                'id' => 97,
                'name' => 'FİNİKE',
                'city_id' => 8,
                'created_at' => '2021-03-20 08:12:12',
                'updated_at' => '2021-03-20 08:12:12',
            ),
            97 => 
            array (
                'id' => 98,
                'name' => 'GAZİPAŞA',
                'city_id' => 8,
                'created_at' => '2021-03-20 08:12:12',
                'updated_at' => '2021-03-20 08:12:12',
            ),
            98 => 
            array (
                'id' => 99,
                'name' => 'GÜNDOĞMUŞ',
                'city_id' => 8,
                'created_at' => '2021-03-20 08:12:13',
                'updated_at' => '2021-03-20 08:12:13',
            ),
            99 => 
            array (
                'id' => 100,
                'name' => 'İBRADI',
                'city_id' => 8,
                'created_at' => '2021-03-20 08:12:13',
                'updated_at' => '2021-03-20 08:12:13',
            ),
            100 => 
            array (
                'id' => 101,
                'name' => 'KAŞ',
                'city_id' => 8,
                'created_at' => '2021-03-20 08:12:14',
                'updated_at' => '2021-03-20 08:12:14',
            ),
            101 => 
            array (
                'id' => 102,
                'name' => 'KEMER',
                'city_id' => 8,
                'created_at' => '2021-03-20 08:12:14',
                'updated_at' => '2021-03-20 08:12:14',
            ),
            102 => 
            array (
                'id' => 103,
                'name' => 'KEPEZ',
                'city_id' => 8,
                'created_at' => '2021-03-20 08:12:14',
                'updated_at' => '2021-03-20 08:12:14',
            ),
            103 => 
            array (
                'id' => 104,
                'name' => 'KONYAALTI',
                'city_id' => 8,
                'created_at' => '2021-03-20 08:12:15',
                'updated_at' => '2021-03-20 08:12:15',
            ),
            104 => 
            array (
                'id' => 105,
                'name' => 'KORKUTELİ',
                'city_id' => 8,
                'created_at' => '2021-03-20 08:12:16',
                'updated_at' => '2021-03-20 08:12:16',
            ),
            105 => 
            array (
                'id' => 106,
                'name' => 'KUMLUCA',
                'city_id' => 8,
                'created_at' => '2021-03-20 08:12:17',
                'updated_at' => '2021-03-20 08:12:17',
            ),
            106 => 
            array (
                'id' => 107,
                'name' => 'MANAVGAT',
                'city_id' => 8,
                'created_at' => '2021-03-20 08:12:17',
                'updated_at' => '2021-03-20 08:12:17',
            ),
            107 => 
            array (
                'id' => 108,
                'name' => 'MURATPAŞA',
                'city_id' => 8,
                'created_at' => '2021-03-20 08:12:19',
                'updated_at' => '2021-03-20 08:12:19',
            ),
            108 => 
            array (
                'id' => 109,
                'name' => 'SERİK',
                'city_id' => 8,
                'created_at' => '2021-03-20 08:12:20',
                'updated_at' => '2021-03-20 08:12:20',
            ),
            109 => 
            array (
                'id' => 110,
                'name' => 'ÇILDIR',
                'city_id' => 9,
                'created_at' => '2021-03-20 08:12:21',
                'updated_at' => '2021-03-20 08:12:21',
            ),
            110 => 
            array (
                'id' => 111,
                'name' => 'DAMAL',
                'city_id' => 9,
                'created_at' => '2021-03-20 08:12:22',
                'updated_at' => '2021-03-20 08:12:22',
            ),
            111 => 
            array (
                'id' => 112,
                'name' => 'GÖLE',
                'city_id' => 9,
                'created_at' => '2021-03-20 08:12:22',
                'updated_at' => '2021-03-20 08:12:22',
            ),
            112 => 
            array (
                'id' => 113,
                'name' => 'HANAK',
                'city_id' => 9,
                'created_at' => '2021-03-20 08:12:23',
                'updated_at' => '2021-03-20 08:12:23',
            ),
            113 => 
            array (
                'id' => 114,
                'name' => 'MERKEZ',
                'city_id' => 9,
                'created_at' => '2021-03-20 08:12:24',
                'updated_at' => '2021-03-20 08:12:24',
            ),
            114 => 
            array (
                'id' => 115,
                'name' => 'POSOF',
                'city_id' => 9,
                'created_at' => '2021-03-20 08:12:25',
                'updated_at' => '2021-03-20 08:12:25',
            ),
            115 => 
            array (
                'id' => 116,
                'name' => 'ARDANUÇ',
                'city_id' => 10,
                'created_at' => '2021-03-20 08:12:27',
                'updated_at' => '2021-03-20 08:12:27',
            ),
            116 => 
            array (
                'id' => 117,
                'name' => 'ARHAVİ',
                'city_id' => 10,
                'created_at' => '2021-03-20 08:12:29',
                'updated_at' => '2021-03-20 08:12:29',
            ),
            117 => 
            array (
                'id' => 118,
                'name' => 'BORÇKA',
                'city_id' => 10,
                'created_at' => '2021-03-20 08:12:30',
                'updated_at' => '2021-03-20 08:12:30',
            ),
            118 => 
            array (
                'id' => 119,
                'name' => 'HOPA',
                'city_id' => 10,
                'created_at' => '2021-03-20 08:12:32',
                'updated_at' => '2021-03-20 08:12:32',
            ),
            119 => 
            array (
                'id' => 120,
                'name' => 'KEMALPAŞA',
                'city_id' => 10,
                'created_at' => '2021-03-20 08:12:32',
                'updated_at' => '2021-03-20 08:12:32',
            ),
            120 => 
            array (
                'id' => 121,
                'name' => 'MERKEZ',
                'city_id' => 10,
                'created_at' => '2021-03-20 08:12:32',
                'updated_at' => '2021-03-20 08:12:32',
            ),
            121 => 
            array (
                'id' => 122,
                'name' => 'MURGUL',
                'city_id' => 10,
                'created_at' => '2021-03-20 08:12:37',
                'updated_at' => '2021-03-20 08:12:37',
            ),
            122 => 
            array (
                'id' => 123,
                'name' => 'ŞAVŞAT',
                'city_id' => 10,
                'created_at' => '2021-03-20 08:12:37',
                'updated_at' => '2021-03-20 08:12:37',
            ),
            123 => 
            array (
                'id' => 124,
                'name' => 'YUSUFELİ',
                'city_id' => 10,
                'created_at' => '2021-03-20 08:12:44',
                'updated_at' => '2021-03-20 08:12:44',
            ),
            124 => 
            array (
                'id' => 125,
                'name' => 'BOZDOĞAN',
                'city_id' => 11,
                'created_at' => '2021-03-20 08:12:54',
                'updated_at' => '2021-03-20 08:12:54',
            ),
            125 => 
            array (
                'id' => 126,
                'name' => 'BUHARKENT',
                'city_id' => 11,
                'created_at' => '2021-03-20 08:12:55',
                'updated_at' => '2021-03-20 08:12:55',
            ),
            126 => 
            array (
                'id' => 127,
                'name' => 'ÇİNE',
                'city_id' => 11,
                'created_at' => '2021-03-20 08:12:55',
                'updated_at' => '2021-03-20 08:12:55',
            ),
            127 => 
            array (
                'id' => 128,
                'name' => 'DİDİM',
                'city_id' => 11,
                'created_at' => '2021-03-20 08:12:56',
                'updated_at' => '2021-03-20 08:12:56',
            ),
            128 => 
            array (
                'id' => 129,
                'name' => 'EFELER',
                'city_id' => 11,
                'created_at' => '2021-03-20 08:12:56',
                'updated_at' => '2021-03-20 08:12:56',
            ),
            129 => 
            array (
                'id' => 130,
                'name' => 'GERMENCİK',
                'city_id' => 11,
                'created_at' => '2021-03-20 08:12:57',
                'updated_at' => '2021-03-20 08:12:57',
            ),
            130 => 
            array (
                'id' => 131,
                'name' => 'İNCİRLİOVA',
                'city_id' => 11,
                'created_at' => '2021-03-20 08:12:58',
                'updated_at' => '2021-03-20 08:12:58',
            ),
            131 => 
            array (
                'id' => 132,
                'name' => 'KARACASU',
                'city_id' => 11,
                'created_at' => '2021-03-20 08:12:58',
                'updated_at' => '2021-03-20 08:12:58',
            ),
            132 => 
            array (
                'id' => 133,
                'name' => 'KARPUZLU',
                'city_id' => 11,
                'created_at' => '2021-03-20 08:12:59',
                'updated_at' => '2021-03-20 08:12:59',
            ),
            133 => 
            array (
                'id' => 134,
                'name' => 'KOÇARLI',
                'city_id' => 11,
                'created_at' => '2021-03-20 08:12:59',
                'updated_at' => '2021-03-20 08:12:59',
            ),
            134 => 
            array (
                'id' => 135,
                'name' => 'KÖŞK',
                'city_id' => 11,
                'created_at' => '2021-03-20 08:13:00',
                'updated_at' => '2021-03-20 08:13:00',
            ),
            135 => 
            array (
                'id' => 136,
                'name' => 'KUŞADASI',
                'city_id' => 11,
                'created_at' => '2021-03-20 08:13:00',
                'updated_at' => '2021-03-20 08:13:00',
            ),
            136 => 
            array (
                'id' => 137,
                'name' => 'KUYUCAK',
                'city_id' => 11,
                'created_at' => '2021-03-20 08:13:00',
                'updated_at' => '2021-03-20 08:13:00',
            ),
            137 => 
            array (
                'id' => 138,
                'name' => 'NAZİLLİ',
                'city_id' => 11,
                'created_at' => '2021-03-20 08:13:01',
                'updated_at' => '2021-03-20 08:13:01',
            ),
            138 => 
            array (
                'id' => 139,
                'name' => 'SÖKE',
                'city_id' => 11,
                'created_at' => '2021-03-20 08:13:02',
                'updated_at' => '2021-03-20 08:13:02',
            ),
            139 => 
            array (
                'id' => 140,
                'name' => 'SULTANHİSAR',
                'city_id' => 11,
                'created_at' => '2021-03-20 08:13:03',
                'updated_at' => '2021-03-20 08:13:03',
            ),
            140 => 
            array (
                'id' => 141,
                'name' => 'YENİPAZAR',
                'city_id' => 11,
                'created_at' => '2021-03-20 08:13:03',
                'updated_at' => '2021-03-20 08:13:03',
            ),
            141 => 
            array (
                'id' => 142,
                'name' => 'ALTIEYLÜL',
                'city_id' => 12,
                'created_at' => '2021-03-20 08:13:04',
                'updated_at' => '2021-03-20 08:13:04',
            ),
            142 => 
            array (
                'id' => 143,
                'name' => 'AYVALIK',
                'city_id' => 12,
                'created_at' => '2021-03-20 08:13:05',
                'updated_at' => '2021-03-20 08:13:05',
            ),
            143 => 
            array (
                'id' => 144,
                'name' => 'BALYA',
                'city_id' => 12,
                'created_at' => '2021-03-20 08:13:05',
                'updated_at' => '2021-03-20 08:13:05',
            ),
            144 => 
            array (
                'id' => 145,
                'name' => 'BANDIRMA',
                'city_id' => 12,
                'created_at' => '2021-03-20 08:13:06',
                'updated_at' => '2021-03-20 08:13:06',
            ),
            145 => 
            array (
                'id' => 146,
                'name' => 'BİGADİÇ',
                'city_id' => 12,
                'created_at' => '2021-03-20 08:13:06',
                'updated_at' => '2021-03-20 08:13:06',
            ),
            146 => 
            array (
                'id' => 147,
                'name' => 'BURHANİYE',
                'city_id' => 12,
                'created_at' => '2021-03-20 08:13:08',
                'updated_at' => '2021-03-20 08:13:08',
            ),
            147 => 
            array (
                'id' => 148,
                'name' => 'DURSUNBEY',
                'city_id' => 12,
                'created_at' => '2021-03-20 08:13:08',
                'updated_at' => '2021-03-20 08:13:08',
            ),
            148 => 
            array (
                'id' => 149,
                'name' => 'EDREMİT',
                'city_id' => 12,
                'created_at' => '2021-03-20 08:13:10',
                'updated_at' => '2021-03-20 08:13:10',
            ),
            149 => 
            array (
                'id' => 150,
                'name' => 'ERDEK',
                'city_id' => 12,
                'created_at' => '2021-03-20 08:13:11',
                'updated_at' => '2021-03-20 08:13:11',
            ),
            150 => 
            array (
                'id' => 151,
                'name' => 'GÖMEÇ',
                'city_id' => 12,
                'created_at' => '2021-03-20 08:13:11',
                'updated_at' => '2021-03-20 08:13:11',
            ),
            151 => 
            array (
                'id' => 152,
                'name' => 'GÖNEN',
                'city_id' => 12,
                'created_at' => '2021-03-20 08:13:11',
                'updated_at' => '2021-03-20 08:13:11',
            ),
            152 => 
            array (
                'id' => 153,
                'name' => 'HAVRAN',
                'city_id' => 12,
                'created_at' => '2021-03-20 08:13:13',
                'updated_at' => '2021-03-20 08:13:13',
            ),
            153 => 
            array (
                'id' => 154,
                'name' => 'İVRİNDİ',
                'city_id' => 12,
                'created_at' => '2021-03-20 08:13:13',
                'updated_at' => '2021-03-20 08:13:13',
            ),
            154 => 
            array (
                'id' => 155,
                'name' => 'KARESİ',
                'city_id' => 12,
                'created_at' => '2021-03-20 08:13:14',
                'updated_at' => '2021-03-20 08:13:14',
            ),
            155 => 
            array (
                'id' => 156,
                'name' => 'KEPSUT',
                'city_id' => 12,
                'created_at' => '2021-03-20 08:13:16',
                'updated_at' => '2021-03-20 08:13:16',
            ),
            156 => 
            array (
                'id' => 157,
                'name' => 'MANYAS',
                'city_id' => 12,
                'created_at' => '2021-03-20 08:13:17',
                'updated_at' => '2021-03-20 08:13:17',
            ),
            157 => 
            array (
                'id' => 158,
                'name' => 'MARMARA',
                'city_id' => 12,
                'created_at' => '2021-03-20 08:13:17',
                'updated_at' => '2021-03-20 08:13:17',
            ),
            158 => 
            array (
                'id' => 159,
                'name' => 'SAVAŞTEPE',
                'city_id' => 12,
                'created_at' => '2021-03-20 08:13:18',
                'updated_at' => '2021-03-20 08:13:18',
            ),
            159 => 
            array (
                'id' => 160,
                'name' => 'SINDIRGI',
                'city_id' => 12,
                'created_at' => '2021-03-20 08:13:18',
                'updated_at' => '2021-03-20 08:13:18',
            ),
            160 => 
            array (
                'id' => 161,
                'name' => 'SUSURLUK',
                'city_id' => 12,
                'created_at' => '2021-03-20 08:13:19',
                'updated_at' => '2021-03-20 08:13:19',
            ),
            161 => 
            array (
                'id' => 162,
                'name' => 'AMASRA',
                'city_id' => 13,
                'created_at' => '2021-03-20 08:13:20',
                'updated_at' => '2021-03-20 08:13:20',
            ),
            162 => 
            array (
                'id' => 163,
                'name' => 'KURUCAŞİLE',
                'city_id' => 13,
                'created_at' => '2021-03-20 08:13:21',
                'updated_at' => '2021-03-20 08:13:21',
            ),
            163 => 
            array (
                'id' => 164,
                'name' => 'MERKEZ',
                'city_id' => 13,
                'created_at' => '2021-03-20 08:13:22',
                'updated_at' => '2021-03-20 08:13:22',
            ),
            164 => 
            array (
                'id' => 165,
                'name' => 'ULUS',
                'city_id' => 13,
                'created_at' => '2021-03-20 08:13:30',
                'updated_at' => '2021-03-20 08:13:30',
            ),
            165 => 
            array (
                'id' => 166,
                'name' => 'BEŞİRİ',
                'city_id' => 14,
                'created_at' => '2021-03-20 08:13:34',
                'updated_at' => '2021-03-20 08:13:34',
            ),
            166 => 
            array (
                'id' => 167,
                'name' => 'GERCÜŞ',
                'city_id' => 14,
                'created_at' => '2021-03-20 08:13:36',
                'updated_at' => '2021-03-20 08:13:36',
            ),
            167 => 
            array (
                'id' => 168,
                'name' => 'HASANKEYF',
                'city_id' => 14,
                'created_at' => '2021-03-20 08:13:37',
                'updated_at' => '2021-03-20 08:13:37',
            ),
            168 => 
            array (
                'id' => 169,
                'name' => 'KOZLUK',
                'city_id' => 14,
                'created_at' => '2021-03-20 08:13:37',
                'updated_at' => '2021-03-20 08:13:37',
            ),
            169 => 
            array (
                'id' => 170,
                'name' => 'MERKEZ',
                'city_id' => 14,
                'created_at' => '2021-03-20 08:13:41',
                'updated_at' => '2021-03-20 08:13:41',
            ),
            170 => 
            array (
                'id' => 171,
                'name' => 'SASON',
                'city_id' => 14,
                'created_at' => '2021-03-20 08:13:42',
                'updated_at' => '2021-03-20 08:13:42',
            ),
            171 => 
            array (
                'id' => 172,
                'name' => 'AYDINTEPE',
                'city_id' => 15,
                'created_at' => '2021-03-20 08:13:45',
                'updated_at' => '2021-03-20 08:13:45',
            ),
            172 => 
            array (
                'id' => 173,
                'name' => 'DEMİRÖZÜ',
                'city_id' => 15,
                'created_at' => '2021-03-20 08:13:45',
                'updated_at' => '2021-03-20 08:13:45',
            ),
            173 => 
            array (
                'id' => 174,
                'name' => 'MERKEZ',
                'city_id' => 15,
                'created_at' => '2021-03-20 08:13:45',
                'updated_at' => '2021-03-20 08:13:45',
            ),
            174 => 
            array (
                'id' => 175,
                'name' => 'BOZÜYÜK',
                'city_id' => 16,
                'created_at' => '2021-03-20 08:13:48',
                'updated_at' => '2021-03-20 08:13:48',
            ),
            175 => 
            array (
                'id' => 176,
                'name' => 'GÖLPAZARI',
                'city_id' => 16,
                'created_at' => '2021-03-20 08:13:49',
                'updated_at' => '2021-03-20 08:13:49',
            ),
            176 => 
            array (
                'id' => 177,
                'name' => 'İNHİSAR',
                'city_id' => 16,
                'created_at' => '2021-03-20 08:13:50',
                'updated_at' => '2021-03-20 08:13:50',
            ),
            177 => 
            array (
                'id' => 178,
                'name' => 'MERKEZ',
                'city_id' => 16,
                'created_at' => '2021-03-20 08:13:50',
                'updated_at' => '2021-03-20 08:13:50',
            ),
            178 => 
            array (
                'id' => 179,
                'name' => 'OSMANELİ',
                'city_id' => 16,
                'created_at' => '2021-03-20 08:13:51',
                'updated_at' => '2021-03-20 08:13:51',
            ),
            179 => 
            array (
                'id' => 180,
                'name' => 'PAZARYERİ',
                'city_id' => 16,
                'created_at' => '2021-03-20 08:13:52',
                'updated_at' => '2021-03-20 08:13:52',
            ),
            180 => 
            array (
                'id' => 181,
                'name' => 'SÖĞÜT',
                'city_id' => 16,
                'created_at' => '2021-03-20 08:13:52',
                'updated_at' => '2021-03-20 08:13:52',
            ),
            181 => 
            array (
                'id' => 182,
                'name' => 'YENİPAZAR',
                'city_id' => 16,
                'created_at' => '2021-03-20 08:13:53',
                'updated_at' => '2021-03-20 08:13:53',
            ),
            182 => 
            array (
                'id' => 183,
                'name' => 'ADAKLI',
                'city_id' => 17,
                'created_at' => '2021-03-20 08:13:53',
                'updated_at' => '2021-03-20 08:13:53',
            ),
            183 => 
            array (
                'id' => 184,
                'name' => 'GENÇ',
                'city_id' => 17,
                'created_at' => '2021-03-20 08:13:54',
                'updated_at' => '2021-03-20 08:13:54',
            ),
            184 => 
            array (
                'id' => 185,
                'name' => 'KARLIOVA',
                'city_id' => 17,
                'created_at' => '2021-03-20 08:13:58',
                'updated_at' => '2021-03-20 08:13:58',
            ),
            185 => 
            array (
                'id' => 186,
                'name' => 'KİĞI',
                'city_id' => 17,
                'created_at' => '2021-03-20 08:13:59',
                'updated_at' => '2021-03-20 08:13:59',
            ),
            186 => 
            array (
                'id' => 187,
                'name' => 'MERKEZ',
                'city_id' => 17,
                'created_at' => '2021-03-20 08:14:00',
                'updated_at' => '2021-03-20 08:14:00',
            ),
            187 => 
            array (
                'id' => 188,
                'name' => 'SOLHAN',
                'city_id' => 17,
                'created_at' => '2021-03-20 08:14:03',
                'updated_at' => '2021-03-20 08:14:03',
            ),
            188 => 
            array (
                'id' => 189,
                'name' => 'YAYLADERE',
                'city_id' => 17,
                'created_at' => '2021-03-20 08:14:06',
                'updated_at' => '2021-03-20 08:14:06',
            ),
            189 => 
            array (
                'id' => 190,
                'name' => 'YEDİSU',
                'city_id' => 17,
                'created_at' => '2021-03-20 08:14:07',
                'updated_at' => '2021-03-20 08:14:07',
            ),
            190 => 
            array (
                'id' => 191,
                'name' => 'ADİLCEVAZ',
                'city_id' => 18,
                'created_at' => '2021-03-20 08:14:07',
                'updated_at' => '2021-03-20 08:14:07',
            ),
            191 => 
            array (
                'id' => 192,
                'name' => 'AHLAT',
                'city_id' => 18,
                'created_at' => '2021-03-20 08:14:08',
                'updated_at' => '2021-03-20 08:14:08',
            ),
            192 => 
            array (
                'id' => 193,
                'name' => 'GÜROYMAK',
                'city_id' => 18,
                'created_at' => '2021-03-20 08:14:09',
                'updated_at' => '2021-03-20 08:14:09',
            ),
            193 => 
            array (
                'id' => 194,
                'name' => 'HİZAN',
                'city_id' => 18,
                'created_at' => '2021-03-20 08:14:10',
                'updated_at' => '2021-03-20 08:14:10',
            ),
            194 => 
            array (
                'id' => 195,
                'name' => 'MERKEZ',
                'city_id' => 18,
                'created_at' => '2021-03-20 08:14:13',
                'updated_at' => '2021-03-20 08:14:13',
            ),
            195 => 
            array (
                'id' => 196,
                'name' => 'MUTKİ',
                'city_id' => 18,
                'created_at' => '2021-03-20 08:14:14',
                'updated_at' => '2021-03-20 08:14:14',
            ),
            196 => 
            array (
                'id' => 197,
                'name' => 'TATVAN',
                'city_id' => 18,
                'created_at' => '2021-03-20 08:14:16',
                'updated_at' => '2021-03-20 08:14:16',
            ),
            197 => 
            array (
                'id' => 198,
                'name' => 'DÖRTDİVAN',
                'city_id' => 19,
                'created_at' => '2021-03-20 08:14:18',
                'updated_at' => '2021-03-20 08:14:18',
            ),
            198 => 
            array (
                'id' => 199,
                'name' => 'GEREDE',
                'city_id' => 19,
                'created_at' => '2021-03-20 08:14:19',
                'updated_at' => '2021-03-20 08:14:19',
            ),
            199 => 
            array (
                'id' => 200,
                'name' => 'GÖYNÜK',
                'city_id' => 19,
                'created_at' => '2021-03-20 08:14:23',
                'updated_at' => '2021-03-20 08:14:23',
            ),
            200 => 
            array (
                'id' => 201,
                'name' => 'KIBRISCIK',
                'city_id' => 19,
                'created_at' => '2021-03-20 08:14:25',
                'updated_at' => '2021-03-20 08:14:25',
            ),
            201 => 
            array (
                'id' => 202,
                'name' => 'MENGEN',
                'city_id' => 19,
                'created_at' => '2021-03-20 08:14:26',
                'updated_at' => '2021-03-20 08:14:26',
            ),
            202 => 
            array (
                'id' => 203,
                'name' => 'MERKEZ',
                'city_id' => 19,
                'created_at' => '2021-03-20 08:14:31',
                'updated_at' => '2021-03-20 08:14:31',
            ),
            203 => 
            array (
                'id' => 204,
                'name' => 'MUDURNU',
                'city_id' => 19,
                'created_at' => '2021-03-20 08:14:36',
                'updated_at' => '2021-03-20 08:14:36',
            ),
            204 => 
            array (
                'id' => 205,
                'name' => 'SEBEN',
                'city_id' => 19,
                'created_at' => '2021-03-20 08:14:38',
                'updated_at' => '2021-03-20 08:14:38',
            ),
            205 => 
            array (
                'id' => 206,
                'name' => 'YENİÇAĞA',
                'city_id' => 19,
                'created_at' => '2021-03-20 08:14:40',
                'updated_at' => '2021-03-20 08:14:40',
            ),
            206 => 
            array (
                'id' => 207,
                'name' => 'AĞLASUN',
                'city_id' => 20,
                'created_at' => '2021-03-20 08:14:41',
                'updated_at' => '2021-03-20 08:14:41',
            ),
            207 => 
            array (
                'id' => 208,
                'name' => 'ALTINYAYLA',
                'city_id' => 20,
                'created_at' => '2021-03-20 08:14:41',
                'updated_at' => '2021-03-20 08:14:41',
            ),
            208 => 
            array (
                'id' => 209,
                'name' => 'BUCAK',
                'city_id' => 20,
                'created_at' => '2021-03-20 08:14:41',
                'updated_at' => '2021-03-20 08:14:41',
            ),
            209 => 
            array (
                'id' => 210,
                'name' => 'ÇAVDIR',
                'city_id' => 20,
                'created_at' => '2021-03-20 08:14:43',
                'updated_at' => '2021-03-20 08:14:43',
            ),
            210 => 
            array (
                'id' => 211,
                'name' => 'ÇELTİKÇİ',
                'city_id' => 20,
                'created_at' => '2021-03-20 08:14:43',
                'updated_at' => '2021-03-20 08:14:43',
            ),
            211 => 
            array (
                'id' => 212,
                'name' => 'GÖLHİSAR',
                'city_id' => 20,
                'created_at' => '2021-03-20 08:14:43',
                'updated_at' => '2021-03-20 08:14:43',
            ),
            212 => 
            array (
                'id' => 213,
                'name' => 'KARAMANLI',
                'city_id' => 20,
                'created_at' => '2021-03-20 08:14:44',
                'updated_at' => '2021-03-20 08:14:44',
            ),
            213 => 
            array (
                'id' => 214,
                'name' => 'KEMER',
                'city_id' => 20,
                'created_at' => '2021-03-20 08:14:45',
                'updated_at' => '2021-03-20 08:14:45',
            ),
            214 => 
            array (
                'id' => 215,
                'name' => 'MERKEZ',
                'city_id' => 20,
                'created_at' => '2021-03-20 08:14:45',
                'updated_at' => '2021-03-20 08:14:45',
            ),
            215 => 
            array (
                'id' => 216,
                'name' => 'TEFENNİ',
                'city_id' => 20,
                'created_at' => '2021-03-20 08:14:47',
                'updated_at' => '2021-03-20 08:14:47',
            ),
            216 => 
            array (
                'id' => 217,
                'name' => 'YEŞİLOVA',
                'city_id' => 20,
                'created_at' => '2021-03-20 08:14:47',
                'updated_at' => '2021-03-20 08:14:47',
            ),
            217 => 
            array (
                'id' => 218,
                'name' => 'BÜYÜKORHAN',
                'city_id' => 21,
                'created_at' => '2021-03-20 08:14:48',
                'updated_at' => '2021-03-20 08:14:48',
            ),
            218 => 
            array (
                'id' => 219,
                'name' => 'GEMLİK',
                'city_id' => 21,
                'created_at' => '2021-03-20 08:14:49',
                'updated_at' => '2021-03-20 08:14:49',
            ),
            219 => 
            array (
                'id' => 220,
                'name' => 'GÜRSU',
                'city_id' => 21,
                'created_at' => '2021-03-20 08:14:49',
                'updated_at' => '2021-03-20 08:14:49',
            ),
            220 => 
            array (
                'id' => 221,
                'name' => 'HARMANCIK',
                'city_id' => 21,
                'created_at' => '2021-03-20 08:14:50',
                'updated_at' => '2021-03-20 08:14:50',
            ),
            221 => 
            array (
                'id' => 222,
                'name' => 'İNEGÖL',
                'city_id' => 21,
                'created_at' => '2021-03-20 08:14:50',
                'updated_at' => '2021-03-20 08:14:50',
            ),
            222 => 
            array (
                'id' => 223,
                'name' => 'İZNİK',
                'city_id' => 21,
                'created_at' => '2021-03-20 08:14:52',
                'updated_at' => '2021-03-20 08:14:52',
            ),
            223 => 
            array (
                'id' => 224,
                'name' => 'KARACABEY',
                'city_id' => 21,
                'created_at' => '2021-03-20 08:14:53',
                'updated_at' => '2021-03-20 08:14:53',
            ),
            224 => 
            array (
                'id' => 225,
                'name' => 'KELES',
                'city_id' => 21,
                'created_at' => '2021-03-20 08:14:54',
                'updated_at' => '2021-03-20 08:14:54',
            ),
            225 => 
            array (
                'id' => 226,
                'name' => 'KESTEL',
                'city_id' => 21,
                'created_at' => '2021-03-20 08:14:55',
                'updated_at' => '2021-03-20 08:14:55',
            ),
            226 => 
            array (
                'id' => 227,
                'name' => 'MUDANYA',
                'city_id' => 21,
                'created_at' => '2021-03-20 08:14:55',
                'updated_at' => '2021-03-20 08:14:55',
            ),
            227 => 
            array (
                'id' => 228,
                'name' => 'MUSTAFAKEMALPAŞA',
                'city_id' => 21,
                'created_at' => '2021-03-20 08:14:56',
                'updated_at' => '2021-03-20 08:14:56',
            ),
            228 => 
            array (
                'id' => 229,
                'name' => 'NİLÜFER',
                'city_id' => 21,
                'created_at' => '2021-03-20 08:14:58',
                'updated_at' => '2021-03-20 08:14:58',
            ),
            229 => 
            array (
                'id' => 230,
                'name' => 'ORHANELİ',
                'city_id' => 21,
                'created_at' => '2021-03-20 08:14:59',
                'updated_at' => '2021-03-20 08:14:59',
            ),
            230 => 
            array (
                'id' => 231,
                'name' => 'ORHANGAZİ',
                'city_id' => 21,
                'created_at' => '2021-03-20 08:15:00',
                'updated_at' => '2021-03-20 08:15:00',
            ),
            231 => 
            array (
                'id' => 232,
                'name' => 'OSMANGAZİ',
                'city_id' => 21,
                'created_at' => '2021-03-20 08:15:00',
                'updated_at' => '2021-03-20 08:15:00',
            ),
            232 => 
            array (
                'id' => 233,
                'name' => 'YENİŞEHİR',
                'city_id' => 21,
                'created_at' => '2021-03-20 08:15:02',
                'updated_at' => '2021-03-20 08:15:02',
            ),
            233 => 
            array (
                'id' => 234,
                'name' => 'YILDIRIM',
                'city_id' => 21,
                'created_at' => '2021-03-20 08:15:03',
                'updated_at' => '2021-03-20 08:15:03',
            ),
            234 => 
            array (
                'id' => 235,
                'name' => 'AYVACIK',
                'city_id' => 22,
                'created_at' => '2021-03-20 08:15:04',
                'updated_at' => '2021-03-20 08:15:04',
            ),
            235 => 
            array (
                'id' => 236,
                'name' => 'BAYRAMİÇ',
                'city_id' => 22,
                'created_at' => '2021-03-20 08:15:07',
                'updated_at' => '2021-03-20 08:15:07',
            ),
            236 => 
            array (
                'id' => 237,
                'name' => 'BİGA',
                'city_id' => 22,
                'created_at' => '2021-03-20 08:15:08',
                'updated_at' => '2021-03-20 08:15:08',
            ),
            237 => 
            array (
                'id' => 238,
                'name' => 'BOZCAADA',
                'city_id' => 22,
                'created_at' => '2021-03-20 08:15:10',
                'updated_at' => '2021-03-20 08:15:10',
            ),
            238 => 
            array (
                'id' => 239,
                'name' => 'ÇAN',
                'city_id' => 22,
                'created_at' => '2021-03-20 08:15:10',
                'updated_at' => '2021-03-20 08:15:10',
            ),
            239 => 
            array (
                'id' => 240,
                'name' => 'ECEABAT',
                'city_id' => 22,
                'created_at' => '2021-03-20 08:15:11',
                'updated_at' => '2021-03-20 08:15:11',
            ),
            240 => 
            array (
                'id' => 241,
                'name' => 'EZİNE',
                'city_id' => 22,
                'created_at' => '2021-03-20 08:15:12',
                'updated_at' => '2021-03-20 08:15:12',
            ),
            241 => 
            array (
                'id' => 242,
                'name' => 'GELİBOLU',
                'city_id' => 22,
                'created_at' => '2021-03-20 08:15:13',
                'updated_at' => '2021-03-20 08:15:13',
            ),
            242 => 
            array (
                'id' => 243,
                'name' => 'GÖKÇEADA',
                'city_id' => 22,
                'created_at' => '2021-03-20 08:15:14',
                'updated_at' => '2021-03-20 08:15:14',
            ),
            243 => 
            array (
                'id' => 244,
                'name' => 'LAPSEKİ',
                'city_id' => 22,
                'created_at' => '2021-03-20 08:15:14',
                'updated_at' => '2021-03-20 08:15:14',
            ),
            244 => 
            array (
                'id' => 245,
                'name' => 'MERKEZ',
                'city_id' => 22,
                'created_at' => '2021-03-20 08:15:15',
                'updated_at' => '2021-03-20 08:15:15',
            ),
            245 => 
            array (
                'id' => 246,
                'name' => 'YENİCE',
                'city_id' => 22,
                'created_at' => '2021-03-20 08:15:16',
                'updated_at' => '2021-03-20 08:15:16',
            ),
            246 => 
            array (
                'id' => 247,
                'name' => 'ATKARACALAR',
                'city_id' => 23,
                'created_at' => '2021-03-20 08:15:18',
                'updated_at' => '2021-03-20 08:15:18',
            ),
            247 => 
            array (
                'id' => 248,
                'name' => 'BAYRAMÖREN',
                'city_id' => 23,
                'created_at' => '2021-03-20 08:15:18',
                'updated_at' => '2021-03-20 08:15:18',
            ),
            248 => 
            array (
                'id' => 249,
                'name' => 'ÇERKEŞ',
                'city_id' => 23,
                'created_at' => '2021-03-20 08:15:19',
                'updated_at' => '2021-03-20 08:15:19',
            ),
            249 => 
            array (
                'id' => 250,
                'name' => 'ELDİVAN',
                'city_id' => 23,
                'created_at' => '2021-03-20 08:15:20',
                'updated_at' => '2021-03-20 08:15:20',
            ),
        ));
        \DB::table('districts')->insert(array (
            0 => 
            array (
                'id' => 251,
                'name' => 'ILGAZ',
                'city_id' => 23,
                'created_at' => '2021-03-20 08:15:20',
                'updated_at' => '2021-03-20 08:15:20',
            ),
            1 => 
            array (
                'id' => 252,
                'name' => 'KIZILIRMAK',
                'city_id' => 23,
                'created_at' => '2021-03-20 08:15:21',
                'updated_at' => '2021-03-20 08:15:21',
            ),
            2 => 
            array (
                'id' => 253,
                'name' => 'KORGUN',
                'city_id' => 23,
                'created_at' => '2021-03-20 08:15:21',
                'updated_at' => '2021-03-20 08:15:21',
            ),
            3 => 
            array (
                'id' => 254,
                'name' => 'KURŞUNLU',
                'city_id' => 23,
                'created_at' => '2021-03-20 08:15:22',
                'updated_at' => '2021-03-20 08:15:22',
            ),
            4 => 
            array (
                'id' => 255,
                'name' => 'MERKEZ',
                'city_id' => 23,
                'created_at' => '2021-03-20 08:15:22',
                'updated_at' => '2021-03-20 08:15:22',
            ),
            5 => 
            array (
                'id' => 256,
                'name' => 'ORTA',
                'city_id' => 23,
                'created_at' => '2021-03-20 08:15:23',
                'updated_at' => '2021-03-20 08:15:23',
            ),
            6 => 
            array (
                'id' => 257,
                'name' => 'ŞABANÖZÜ',
                'city_id' => 23,
                'created_at' => '2021-03-20 08:15:23',
                'updated_at' => '2021-03-20 08:15:23',
            ),
            7 => 
            array (
                'id' => 258,
                'name' => 'YAPRAKLI',
                'city_id' => 23,
                'created_at' => '2021-03-20 08:15:23',
                'updated_at' => '2021-03-20 08:15:23',
            ),
            8 => 
            array (
                'id' => 259,
                'name' => 'ALACA',
                'city_id' => 24,
                'created_at' => '2021-03-20 08:15:24',
                'updated_at' => '2021-03-20 08:15:24',
            ),
            9 => 
            array (
                'id' => 260,
                'name' => 'BAYAT',
                'city_id' => 24,
                'created_at' => '2021-03-20 08:15:25',
                'updated_at' => '2021-03-20 08:15:25',
            ),
            10 => 
            array (
                'id' => 261,
                'name' => 'BOĞAZKALE',
                'city_id' => 24,
                'created_at' => '2021-03-20 08:15:26',
                'updated_at' => '2021-03-20 08:15:26',
            ),
            11 => 
            array (
                'id' => 262,
                'name' => 'DODURGA',
                'city_id' => 24,
                'created_at' => '2021-03-20 08:15:27',
                'updated_at' => '2021-03-20 08:15:27',
            ),
            12 => 
            array (
                'id' => 263,
                'name' => 'İSKİLİP',
                'city_id' => 24,
                'created_at' => '2021-03-20 08:15:27',
                'updated_at' => '2021-03-20 08:15:27',
            ),
            13 => 
            array (
                'id' => 264,
                'name' => 'KARGI',
                'city_id' => 24,
                'created_at' => '2021-03-20 08:15:30',
                'updated_at' => '2021-03-20 08:15:30',
            ),
            14 => 
            array (
                'id' => 265,
                'name' => 'LAÇİN',
                'city_id' => 24,
                'created_at' => '2021-03-20 08:15:34',
                'updated_at' => '2021-03-20 08:15:34',
            ),
            15 => 
            array (
                'id' => 266,
                'name' => 'MECİTÖZÜ',
                'city_id' => 24,
                'created_at' => '2021-03-20 08:15:34',
                'updated_at' => '2021-03-20 08:15:34',
            ),
            16 => 
            array (
                'id' => 267,
                'name' => 'MERKEZ',
                'city_id' => 24,
                'created_at' => '2021-03-20 08:15:35',
                'updated_at' => '2021-03-20 08:15:35',
            ),
            17 => 
            array (
                'id' => 268,
                'name' => 'OĞUZLAR',
                'city_id' => 24,
                'created_at' => '2021-03-20 08:15:40',
                'updated_at' => '2021-03-20 08:15:40',
            ),
            18 => 
            array (
                'id' => 269,
                'name' => 'ORTAKÖY',
                'city_id' => 24,
                'created_at' => '2021-03-20 08:15:41',
                'updated_at' => '2021-03-20 08:15:41',
            ),
            19 => 
            array (
                'id' => 270,
                'name' => 'OSMANCIK',
                'city_id' => 24,
                'created_at' => '2021-03-20 08:15:41',
                'updated_at' => '2021-03-20 08:15:41',
            ),
            20 => 
            array (
                'id' => 271,
                'name' => 'SUNGURLU',
                'city_id' => 24,
                'created_at' => '2021-03-20 08:15:44',
                'updated_at' => '2021-03-20 08:15:44',
            ),
            21 => 
            array (
                'id' => 272,
                'name' => 'UĞURLUDAĞ',
                'city_id' => 24,
                'created_at' => '2021-03-20 08:15:46',
                'updated_at' => '2021-03-20 08:15:46',
            ),
            22 => 
            array (
                'id' => 273,
                'name' => 'ACIPAYAM',
                'city_id' => 25,
                'created_at' => '2021-03-20 08:15:47',
                'updated_at' => '2021-03-20 08:15:47',
            ),
            23 => 
            array (
                'id' => 274,
                'name' => 'BABADAĞ',
                'city_id' => 25,
                'created_at' => '2021-03-20 08:15:47',
                'updated_at' => '2021-03-20 08:15:47',
            ),
            24 => 
            array (
                'id' => 275,
                'name' => 'BAKLAN',
                'city_id' => 25,
                'created_at' => '2021-03-20 08:15:48',
                'updated_at' => '2021-03-20 08:15:48',
            ),
            25 => 
            array (
                'id' => 276,
                'name' => 'BEKİLLİ',
                'city_id' => 25,
                'created_at' => '2021-03-20 08:15:48',
                'updated_at' => '2021-03-20 08:15:48',
            ),
            26 => 
            array (
                'id' => 277,
                'name' => 'BEYAĞAÇ',
                'city_id' => 25,
                'created_at' => '2021-03-20 08:15:48',
                'updated_at' => '2021-03-20 08:15:48',
            ),
            27 => 
            array (
                'id' => 278,
                'name' => 'BOZKURT',
                'city_id' => 25,
                'created_at' => '2021-03-20 08:15:48',
                'updated_at' => '2021-03-20 08:15:48',
            ),
            28 => 
            array (
                'id' => 279,
                'name' => 'BULDAN',
                'city_id' => 25,
                'created_at' => '2021-03-20 08:15:49',
                'updated_at' => '2021-03-20 08:15:49',
            ),
            29 => 
            array (
                'id' => 280,
                'name' => 'ÇAL',
                'city_id' => 25,
                'created_at' => '2021-03-20 08:15:50',
                'updated_at' => '2021-03-20 08:15:50',
            ),
            30 => 
            array (
                'id' => 281,
                'name' => 'ÇAMELİ',
                'city_id' => 25,
                'created_at' => '2021-03-20 08:15:50',
                'updated_at' => '2021-03-20 08:15:50',
            ),
            31 => 
            array (
                'id' => 282,
                'name' => 'ÇARDAK',
                'city_id' => 25,
                'created_at' => '2021-03-20 08:15:51',
                'updated_at' => '2021-03-20 08:15:51',
            ),
            32 => 
            array (
                'id' => 283,
                'name' => 'ÇİVRİL',
                'city_id' => 25,
                'created_at' => '2021-03-20 08:15:51',
                'updated_at' => '2021-03-20 08:15:51',
            ),
            33 => 
            array (
                'id' => 284,
                'name' => 'GÜNEY',
                'city_id' => 25,
                'created_at' => '2021-03-20 08:15:52',
                'updated_at' => '2021-03-20 08:15:52',
            ),
            34 => 
            array (
                'id' => 285,
                'name' => 'HONAZ',
                'city_id' => 25,
                'created_at' => '2021-03-20 08:15:53',
                'updated_at' => '2021-03-20 08:15:53',
            ),
            35 => 
            array (
                'id' => 286,
                'name' => 'KALE',
                'city_id' => 25,
                'created_at' => '2021-03-20 08:15:53',
                'updated_at' => '2021-03-20 08:15:53',
            ),
            36 => 
            array (
                'id' => 287,
                'name' => 'MERKEZEFENDİ',
                'city_id' => 25,
                'created_at' => '2021-03-20 08:15:54',
                'updated_at' => '2021-03-20 08:15:54',
            ),
            37 => 
            array (
                'id' => 288,
                'name' => 'PAMUKKALE',
                'city_id' => 25,
                'created_at' => '2021-03-20 08:15:54',
                'updated_at' => '2021-03-20 08:15:54',
            ),
            38 => 
            array (
                'id' => 289,
                'name' => 'SARAYKÖY',
                'city_id' => 25,
                'created_at' => '2021-03-20 08:15:55',
                'updated_at' => '2021-03-20 08:15:55',
            ),
            39 => 
            array (
                'id' => 290,
                'name' => 'SERİNHİSAR',
                'city_id' => 25,
                'created_at' => '2021-03-20 08:15:56',
                'updated_at' => '2021-03-20 08:15:56',
            ),
            40 => 
            array (
                'id' => 291,
                'name' => 'TAVAS',
                'city_id' => 25,
                'created_at' => '2021-03-20 08:15:56',
                'updated_at' => '2021-03-20 08:15:56',
            ),
            41 => 
            array (
                'id' => 292,
                'name' => 'BAĞLAR',
                'city_id' => 26,
                'created_at' => '2021-03-20 08:15:57',
                'updated_at' => '2021-03-20 08:15:57',
            ),
            42 => 
            array (
                'id' => 293,
                'name' => 'BİSMİL',
                'city_id' => 26,
                'created_at' => '2021-03-20 08:15:58',
                'updated_at' => '2021-03-20 08:15:58',
            ),
            43 => 
            array (
                'id' => 294,
                'name' => 'ÇERMİK',
                'city_id' => 26,
                'created_at' => '2021-03-20 08:16:00',
                'updated_at' => '2021-03-20 08:16:00',
            ),
            44 => 
            array (
                'id' => 295,
                'name' => 'ÇINAR',
                'city_id' => 26,
                'created_at' => '2021-03-20 08:16:01',
                'updated_at' => '2021-03-20 08:16:01',
            ),
            45 => 
            array (
                'id' => 296,
                'name' => 'ÇÜNGÜŞ',
                'city_id' => 26,
                'created_at' => '2021-03-20 08:16:03',
                'updated_at' => '2021-03-20 08:16:03',
            ),
            46 => 
            array (
                'id' => 297,
                'name' => 'DİCLE',
                'city_id' => 26,
                'created_at' => '2021-03-20 08:16:03',
                'updated_at' => '2021-03-20 08:16:03',
            ),
            47 => 
            array (
                'id' => 298,
                'name' => 'EĞİL',
                'city_id' => 26,
                'created_at' => '2021-03-20 08:16:04',
                'updated_at' => '2021-03-20 08:16:04',
            ),
            48 => 
            array (
                'id' => 299,
                'name' => 'ERGANİ',
                'city_id' => 26,
                'created_at' => '2021-03-20 08:16:05',
                'updated_at' => '2021-03-20 08:16:05',
            ),
            49 => 
            array (
                'id' => 300,
                'name' => 'HANİ',
                'city_id' => 26,
                'created_at' => '2021-03-20 08:16:06',
                'updated_at' => '2021-03-20 08:16:06',
            ),
            50 => 
            array (
                'id' => 301,
                'name' => 'HAZRO',
                'city_id' => 26,
                'created_at' => '2021-03-20 08:16:07',
                'updated_at' => '2021-03-20 08:16:07',
            ),
            51 => 
            array (
                'id' => 302,
                'name' => 'KAYAPINAR',
                'city_id' => 26,
                'created_at' => '2021-03-20 08:16:07',
                'updated_at' => '2021-03-20 08:16:07',
            ),
            52 => 
            array (
                'id' => 303,
                'name' => 'KOCAKÖY',
                'city_id' => 26,
                'created_at' => '2021-03-20 08:16:08',
                'updated_at' => '2021-03-20 08:16:08',
            ),
            53 => 
            array (
                'id' => 304,
                'name' => 'KULP',
                'city_id' => 26,
                'created_at' => '2021-03-20 08:16:08',
                'updated_at' => '2021-03-20 08:16:08',
            ),
            54 => 
            array (
                'id' => 305,
                'name' => 'LİCE',
                'city_id' => 26,
                'created_at' => '2021-03-20 08:16:09',
                'updated_at' => '2021-03-20 08:16:09',
            ),
            55 => 
            array (
                'id' => 306,
                'name' => 'SİLVAN',
                'city_id' => 26,
                'created_at' => '2021-03-20 08:16:10',
                'updated_at' => '2021-03-20 08:16:10',
            ),
            56 => 
            array (
                'id' => 307,
                'name' => 'SUR',
                'city_id' => 26,
                'created_at' => '2021-03-20 08:16:12',
                'updated_at' => '2021-03-20 08:16:12',
            ),
            57 => 
            array (
                'id' => 308,
                'name' => 'YENİŞEHİR',
                'city_id' => 26,
                'created_at' => '2021-03-20 08:16:14',
                'updated_at' => '2021-03-20 08:16:14',
            ),
            58 => 
            array (
                'id' => 309,
                'name' => 'AKÇAKOCA',
                'city_id' => 27,
                'created_at' => '2021-03-20 08:16:14',
                'updated_at' => '2021-03-20 08:16:14',
            ),
            59 => 
            array (
                'id' => 310,
                'name' => 'CUMAYERİ',
                'city_id' => 27,
                'created_at' => '2021-03-20 08:16:15',
                'updated_at' => '2021-03-20 08:16:15',
            ),
            60 => 
            array (
                'id' => 311,
                'name' => 'ÇİLİMLİ',
                'city_id' => 27,
                'created_at' => '2021-03-20 08:16:16',
                'updated_at' => '2021-03-20 08:16:16',
            ),
            61 => 
            array (
                'id' => 312,
                'name' => 'GÖLYAKA',
                'city_id' => 27,
                'created_at' => '2021-03-20 08:16:17',
                'updated_at' => '2021-03-20 08:16:17',
            ),
            62 => 
            array (
                'id' => 313,
                'name' => 'GÜMÜŞOVA',
                'city_id' => 27,
                'created_at' => '2021-03-20 08:16:18',
                'updated_at' => '2021-03-20 08:16:18',
            ),
            63 => 
            array (
                'id' => 314,
                'name' => 'KAYNAŞLI',
                'city_id' => 27,
                'created_at' => '2021-03-20 08:16:19',
                'updated_at' => '2021-03-20 08:16:19',
            ),
            64 => 
            array (
                'id' => 315,
                'name' => 'MERKEZ',
                'city_id' => 27,
                'created_at' => '2021-03-20 08:16:20',
                'updated_at' => '2021-03-20 08:16:20',
            ),
            65 => 
            array (
                'id' => 316,
                'name' => 'YIĞILCA',
                'city_id' => 27,
                'created_at' => '2021-03-20 08:16:25',
                'updated_at' => '2021-03-20 08:16:25',
            ),
            66 => 
            array (
                'id' => 317,
                'name' => 'ENEZ',
                'city_id' => 28,
                'created_at' => '2021-03-20 08:16:26',
                'updated_at' => '2021-03-20 08:16:26',
            ),
            67 => 
            array (
                'id' => 318,
                'name' => 'HAVSA',
                'city_id' => 28,
                'created_at' => '2021-03-20 08:16:26',
                'updated_at' => '2021-03-20 08:16:26',
            ),
            68 => 
            array (
                'id' => 319,
                'name' => 'İPSALA',
                'city_id' => 28,
                'created_at' => '2021-03-20 08:16:27',
                'updated_at' => '2021-03-20 08:16:27',
            ),
            69 => 
            array (
                'id' => 320,
                'name' => 'KEŞAN',
                'city_id' => 28,
                'created_at' => '2021-03-20 08:16:27',
                'updated_at' => '2021-03-20 08:16:27',
            ),
            70 => 
            array (
                'id' => 321,
                'name' => 'LALAPAŞA',
                'city_id' => 28,
                'created_at' => '2021-03-20 08:16:29',
                'updated_at' => '2021-03-20 08:16:29',
            ),
            71 => 
            array (
                'id' => 322,
                'name' => 'MERİÇ',
                'city_id' => 28,
                'created_at' => '2021-03-20 08:16:29',
                'updated_at' => '2021-03-20 08:16:29',
            ),
            72 => 
            array (
                'id' => 323,
                'name' => 'MERKEZ',
                'city_id' => 28,
                'created_at' => '2021-03-20 08:16:29',
                'updated_at' => '2021-03-20 08:16:29',
            ),
            73 => 
            array (
                'id' => 324,
                'name' => 'SÜLOĞLU',
                'city_id' => 28,
                'created_at' => '2021-03-20 08:16:30',
                'updated_at' => '2021-03-20 08:16:30',
            ),
            74 => 
            array (
                'id' => 325,
                'name' => 'UZUNKÖPRÜ',
                'city_id' => 28,
                'created_at' => '2021-03-20 08:16:31',
                'updated_at' => '2021-03-20 08:16:31',
            ),
            75 => 
            array (
                'id' => 326,
                'name' => 'AĞIN',
                'city_id' => 29,
                'created_at' => '2021-03-20 08:16:32',
                'updated_at' => '2021-03-20 08:16:32',
            ),
            76 => 
            array (
                'id' => 327,
                'name' => 'ALACAKAYA',
                'city_id' => 29,
                'created_at' => '2021-03-20 08:16:33',
                'updated_at' => '2021-03-20 08:16:33',
            ),
            77 => 
            array (
                'id' => 328,
                'name' => 'ARICAK',
                'city_id' => 29,
                'created_at' => '2021-03-20 08:16:33',
                'updated_at' => '2021-03-20 08:16:33',
            ),
            78 => 
            array (
                'id' => 329,
                'name' => 'BASKİL',
                'city_id' => 29,
                'created_at' => '2021-03-20 08:16:33',
                'updated_at' => '2021-03-20 08:16:33',
            ),
            79 => 
            array (
                'id' => 330,
                'name' => 'KARAKOÇAN',
                'city_id' => 29,
                'created_at' => '2021-03-20 08:16:38',
                'updated_at' => '2021-03-20 08:16:38',
            ),
            80 => 
            array (
                'id' => 331,
                'name' => 'KEBAN',
                'city_id' => 29,
                'created_at' => '2021-03-20 08:16:41',
                'updated_at' => '2021-03-20 08:16:41',
            ),
            81 => 
            array (
                'id' => 332,
                'name' => 'KOVANCILAR',
                'city_id' => 29,
                'created_at' => '2021-03-20 08:16:42',
                'updated_at' => '2021-03-20 08:16:42',
            ),
            82 => 
            array (
                'id' => 333,
                'name' => 'MADEN',
                'city_id' => 29,
                'created_at' => '2021-03-20 08:16:45',
                'updated_at' => '2021-03-20 08:16:45',
            ),
            83 => 
            array (
                'id' => 334,
                'name' => 'MERKEZ',
                'city_id' => 29,
                'created_at' => '2021-03-20 08:16:47',
                'updated_at' => '2021-03-20 08:16:47',
            ),
            84 => 
            array (
                'id' => 335,
                'name' => 'PALU',
                'city_id' => 29,
                'created_at' => '2021-03-20 08:16:52',
                'updated_at' => '2021-03-20 08:16:52',
            ),
            85 => 
            array (
                'id' => 336,
                'name' => 'SİVRİCE',
                'city_id' => 29,
                'created_at' => '2021-03-20 08:16:53',
                'updated_at' => '2021-03-20 08:16:53',
            ),
            86 => 
            array (
                'id' => 337,
                'name' => 'ÇAYIRLI',
                'city_id' => 30,
                'created_at' => '2021-03-20 08:16:56',
                'updated_at' => '2021-03-20 08:16:56',
            ),
            87 => 
            array (
                'id' => 338,
                'name' => 'İLİÇ',
                'city_id' => 30,
                'created_at' => '2021-03-20 08:16:57',
                'updated_at' => '2021-03-20 08:16:57',
            ),
            88 => 
            array (
                'id' => 339,
                'name' => 'KEMAH',
                'city_id' => 30,
                'created_at' => '2021-03-20 08:16:58',
                'updated_at' => '2021-03-20 08:16:58',
            ),
            89 => 
            array (
                'id' => 340,
                'name' => 'KEMALİYE',
                'city_id' => 30,
                'created_at' => '2021-03-20 08:17:01',
                'updated_at' => '2021-03-20 08:17:01',
            ),
            90 => 
            array (
                'id' => 341,
                'name' => 'MERKEZ',
                'city_id' => 30,
                'created_at' => '2021-03-20 08:17:02',
                'updated_at' => '2021-03-20 08:17:02',
            ),
            91 => 
            array (
                'id' => 342,
                'name' => 'OTLUKBELİ',
                'city_id' => 30,
                'created_at' => '2021-03-20 08:17:05',
                'updated_at' => '2021-03-20 08:17:05',
            ),
            92 => 
            array (
                'id' => 343,
                'name' => 'REFAHİYE',
                'city_id' => 30,
                'created_at' => '2021-03-20 08:17:05',
                'updated_at' => '2021-03-20 08:17:05',
            ),
            93 => 
            array (
                'id' => 344,
                'name' => 'TERCAN',
                'city_id' => 30,
                'created_at' => '2021-03-20 08:17:08',
                'updated_at' => '2021-03-20 08:17:08',
            ),
            94 => 
            array (
                'id' => 345,
                'name' => 'ÜZÜMLÜ',
                'city_id' => 30,
                'created_at' => '2021-03-20 08:17:11',
                'updated_at' => '2021-03-20 08:17:11',
            ),
            95 => 
            array (
                'id' => 346,
                'name' => 'AŞKALE',
                'city_id' => 31,
                'created_at' => '2021-03-20 08:17:12',
                'updated_at' => '2021-03-20 08:17:12',
            ),
            96 => 
            array (
                'id' => 347,
                'name' => 'AZİZİYE',
                'city_id' => 31,
                'created_at' => '2021-03-20 08:17:14',
                'updated_at' => '2021-03-20 08:17:14',
            ),
            97 => 
            array (
                'id' => 348,
                'name' => 'ÇAT',
                'city_id' => 31,
                'created_at' => '2021-03-20 08:17:15',
                'updated_at' => '2021-03-20 08:17:15',
            ),
            98 => 
            array (
                'id' => 349,
                'name' => 'HINIS',
                'city_id' => 31,
                'created_at' => '2021-03-20 08:17:16',
                'updated_at' => '2021-03-20 08:17:16',
            ),
            99 => 
            array (
                'id' => 350,
                'name' => 'HORASAN',
                'city_id' => 31,
                'created_at' => '2021-03-20 08:17:17',
                'updated_at' => '2021-03-20 08:17:17',
            ),
            100 => 
            array (
                'id' => 351,
                'name' => 'İSPİR',
                'city_id' => 31,
                'created_at' => '2021-03-20 08:17:19',
                'updated_at' => '2021-03-20 08:17:19',
            ),
            101 => 
            array (
                'id' => 352,
                'name' => 'KARAÇOBAN',
                'city_id' => 31,
                'created_at' => '2021-03-20 08:17:20',
                'updated_at' => '2021-03-20 08:17:20',
            ),
            102 => 
            array (
                'id' => 353,
                'name' => 'KARAYAZI',
                'city_id' => 31,
                'created_at' => '2021-03-20 08:17:21',
                'updated_at' => '2021-03-20 08:17:21',
            ),
            103 => 
            array (
                'id' => 354,
                'name' => 'KÖPRÜKÖY',
                'city_id' => 31,
                'created_at' => '2021-03-20 08:17:22',
                'updated_at' => '2021-03-20 08:17:22',
            ),
            104 => 
            array (
                'id' => 355,
                'name' => 'NARMAN',
                'city_id' => 31,
                'created_at' => '2021-03-20 08:17:23',
                'updated_at' => '2021-03-20 08:17:23',
            ),
            105 => 
            array (
                'id' => 356,
                'name' => 'OLTU',
                'city_id' => 31,
                'created_at' => '2021-03-20 08:17:24',
                'updated_at' => '2021-03-20 08:17:24',
            ),
            106 => 
            array (
                'id' => 357,
                'name' => 'OLUR',
                'city_id' => 31,
                'created_at' => '2021-03-20 08:17:25',
                'updated_at' => '2021-03-20 08:17:25',
            ),
            107 => 
            array (
                'id' => 358,
                'name' => 'PALANDÖKEN',
                'city_id' => 31,
                'created_at' => '2021-03-20 08:17:25',
                'updated_at' => '2021-03-20 08:17:25',
            ),
            108 => 
            array (
                'id' => 359,
                'name' => 'PASİNLER',
                'city_id' => 31,
                'created_at' => '2021-03-20 08:17:26',
                'updated_at' => '2021-03-20 08:17:26',
            ),
            109 => 
            array (
                'id' => 360,
                'name' => 'PAZARYOLU',
                'city_id' => 31,
                'created_at' => '2021-03-20 08:17:27',
                'updated_at' => '2021-03-20 08:17:27',
            ),
            110 => 
            array (
                'id' => 361,
                'name' => 'ŞENKAYA',
                'city_id' => 31,
                'created_at' => '2021-03-20 08:17:28',
                'updated_at' => '2021-03-20 08:17:28',
            ),
            111 => 
            array (
                'id' => 362,
                'name' => 'TEKMAN',
                'city_id' => 31,
                'created_at' => '2021-03-20 08:17:29',
                'updated_at' => '2021-03-20 08:17:29',
            ),
            112 => 
            array (
                'id' => 363,
                'name' => 'TORTUM',
                'city_id' => 31,
                'created_at' => '2021-03-20 08:17:30',
                'updated_at' => '2021-03-20 08:17:30',
            ),
            113 => 
            array (
                'id' => 364,
                'name' => 'UZUNDERE',
                'city_id' => 31,
                'created_at' => '2021-03-20 08:17:31',
                'updated_at' => '2021-03-20 08:17:31',
            ),
            114 => 
            array (
                'id' => 365,
                'name' => 'YAKUTİYE',
                'city_id' => 31,
                'created_at' => '2021-03-20 08:17:32',
                'updated_at' => '2021-03-20 08:17:32',
            ),
            115 => 
            array (
                'id' => 366,
                'name' => 'ALPU',
                'city_id' => 32,
                'created_at' => '2021-03-20 08:17:32',
                'updated_at' => '2021-03-20 08:17:32',
            ),
            116 => 
            array (
                'id' => 367,
                'name' => 'BEYLİKOVA',
                'city_id' => 32,
                'created_at' => '2021-03-20 08:17:33',
                'updated_at' => '2021-03-20 08:17:33',
            ),
            117 => 
            array (
                'id' => 368,
                'name' => 'ÇİFTELER',
                'city_id' => 32,
                'created_at' => '2021-03-20 08:17:33',
                'updated_at' => '2021-03-20 08:17:33',
            ),
            118 => 
            array (
                'id' => 369,
                'name' => 'GÜNYÜZÜ',
                'city_id' => 32,
                'created_at' => '2021-03-20 08:17:34',
                'updated_at' => '2021-03-20 08:17:34',
            ),
            119 => 
            array (
                'id' => 370,
                'name' => 'HAN',
                'city_id' => 32,
                'created_at' => '2021-03-20 08:17:34',
                'updated_at' => '2021-03-20 08:17:34',
            ),
            120 => 
            array (
                'id' => 371,
                'name' => 'İNÖNÜ',
                'city_id' => 32,
                'created_at' => '2021-03-20 08:17:34',
                'updated_at' => '2021-03-20 08:17:34',
            ),
            121 => 
            array (
                'id' => 372,
                'name' => 'MAHMUDİYE',
                'city_id' => 32,
                'created_at' => '2021-03-20 08:17:35',
                'updated_at' => '2021-03-20 08:17:35',
            ),
            122 => 
            array (
                'id' => 373,
                'name' => 'MİHALGAZİ',
                'city_id' => 32,
                'created_at' => '2021-03-20 08:17:35',
                'updated_at' => '2021-03-20 08:17:35',
            ),
            123 => 
            array (
                'id' => 374,
                'name' => 'MİHALIÇÇIK',
                'city_id' => 32,
                'created_at' => '2021-03-20 08:17:35',
                'updated_at' => '2021-03-20 08:17:35',
            ),
            124 => 
            array (
                'id' => 375,
                'name' => 'ODUNPAZARI',
                'city_id' => 32,
                'created_at' => '2021-03-20 08:17:36',
                'updated_at' => '2021-03-20 08:17:36',
            ),
            125 => 
            array (
                'id' => 376,
                'name' => 'SARICAKAYA',
                'city_id' => 32,
                'created_at' => '2021-03-20 08:17:37',
                'updated_at' => '2021-03-20 08:17:37',
            ),
            126 => 
            array (
                'id' => 377,
                'name' => 'SEYİTGAZİ',
                'city_id' => 32,
                'created_at' => '2021-03-20 08:17:38',
                'updated_at' => '2021-03-20 08:17:38',
            ),
            127 => 
            array (
                'id' => 378,
                'name' => 'SİVRİHİSAR',
                'city_id' => 32,
                'created_at' => '2021-03-20 08:17:39',
                'updated_at' => '2021-03-20 08:17:39',
            ),
            128 => 
            array (
                'id' => 379,
                'name' => 'TEPEBAŞI',
                'city_id' => 32,
                'created_at' => '2021-03-20 08:17:40',
                'updated_at' => '2021-03-20 08:17:40',
            ),
            129 => 
            array (
                'id' => 380,
                'name' => 'ARABAN',
                'city_id' => 33,
                'created_at' => '2021-03-20 08:17:41',
                'updated_at' => '2021-03-20 08:17:41',
            ),
            130 => 
            array (
                'id' => 381,
                'name' => 'İSLAHİYE',
                'city_id' => 33,
                'created_at' => '2021-03-20 08:17:42',
                'updated_at' => '2021-03-20 08:17:42',
            ),
            131 => 
            array (
                'id' => 382,
                'name' => 'KARKAMIŞ',
                'city_id' => 33,
                'created_at' => '2021-03-20 08:17:43',
                'updated_at' => '2021-03-20 08:17:43',
            ),
            132 => 
            array (
                'id' => 383,
                'name' => 'NİZİP',
                'city_id' => 33,
                'created_at' => '2021-03-20 08:17:44',
                'updated_at' => '2021-03-20 08:17:44',
            ),
            133 => 
            array (
                'id' => 384,
                'name' => 'NURDAĞI',
                'city_id' => 33,
                'created_at' => '2021-03-20 08:17:46',
                'updated_at' => '2021-03-20 08:17:46',
            ),
            134 => 
            array (
                'id' => 385,
                'name' => 'OĞUZELİ',
                'city_id' => 33,
                'created_at' => '2021-03-20 08:17:47',
                'updated_at' => '2021-03-20 08:17:47',
            ),
            135 => 
            array (
                'id' => 386,
                'name' => 'ŞAHİNBEY',
                'city_id' => 33,
                'created_at' => '2021-03-20 08:17:48',
                'updated_at' => '2021-03-20 08:17:48',
            ),
            136 => 
            array (
                'id' => 387,
                'name' => 'ŞEHİTKAMİL',
                'city_id' => 33,
                'created_at' => '2021-03-20 08:17:51',
                'updated_at' => '2021-03-20 08:17:51',
            ),
            137 => 
            array (
                'id' => 388,
                'name' => 'YAVUZELİ',
                'city_id' => 33,
                'created_at' => '2021-03-20 08:17:54',
                'updated_at' => '2021-03-20 08:17:54',
            ),
            138 => 
            array (
                'id' => 389,
                'name' => 'ALUCRA',
                'city_id' => 34,
                'created_at' => '2021-03-20 08:17:54',
                'updated_at' => '2021-03-20 08:17:54',
            ),
            139 => 
            array (
                'id' => 390,
                'name' => 'BULANCAK',
                'city_id' => 34,
                'created_at' => '2021-03-20 08:17:56',
                'updated_at' => '2021-03-20 08:17:56',
            ),
            140 => 
            array (
                'id' => 391,
                'name' => 'ÇAMOLUK',
                'city_id' => 34,
                'created_at' => '2021-03-20 08:18:01',
                'updated_at' => '2021-03-20 08:18:01',
            ),
            141 => 
            array (
                'id' => 392,
                'name' => 'ÇANAKÇI',
                'city_id' => 34,
                'created_at' => '2021-03-20 08:18:01',
                'updated_at' => '2021-03-20 08:18:01',
            ),
            142 => 
            array (
                'id' => 393,
                'name' => 'DERELİ',
                'city_id' => 34,
                'created_at' => '2021-03-20 08:18:02',
                'updated_at' => '2021-03-20 08:18:02',
            ),
            143 => 
            array (
                'id' => 394,
                'name' => 'DOĞANKENT',
                'city_id' => 34,
                'created_at' => '2021-03-20 08:18:07',
                'updated_at' => '2021-03-20 08:18:07',
            ),
            144 => 
            array (
                'id' => 395,
                'name' => 'ESPİYE',
                'city_id' => 34,
                'created_at' => '2021-03-20 08:18:08',
                'updated_at' => '2021-03-20 08:18:08',
            ),
            145 => 
            array (
                'id' => 396,
                'name' => 'EYNESİL',
                'city_id' => 34,
                'created_at' => '2021-03-20 08:18:10',
                'updated_at' => '2021-03-20 08:18:10',
            ),
            146 => 
            array (
                'id' => 397,
                'name' => 'GÖRELE',
                'city_id' => 34,
                'created_at' => '2021-03-20 08:18:11',
                'updated_at' => '2021-03-20 08:18:11',
            ),
            147 => 
            array (
                'id' => 398,
                'name' => 'GÜCE',
                'city_id' => 34,
                'created_at' => '2021-03-20 08:18:15',
                'updated_at' => '2021-03-20 08:18:15',
            ),
            148 => 
            array (
                'id' => 399,
                'name' => 'KEŞAP',
                'city_id' => 34,
                'created_at' => '2021-03-20 08:18:17',
                'updated_at' => '2021-03-20 08:18:17',
            ),
            149 => 
            array (
                'id' => 400,
                'name' => 'MERKEZ',
                'city_id' => 34,
                'created_at' => '2021-03-20 08:18:21',
                'updated_at' => '2021-03-20 08:18:21',
            ),
            150 => 
            array (
                'id' => 401,
                'name' => 'PİRAZİZ',
                'city_id' => 34,
                'created_at' => '2021-03-20 08:18:27',
                'updated_at' => '2021-03-20 08:18:27',
            ),
            151 => 
            array (
                'id' => 402,
                'name' => 'ŞEBİNKARAHİSAR',
                'city_id' => 34,
                'created_at' => '2021-03-20 08:18:28',
                'updated_at' => '2021-03-20 08:18:28',
            ),
            152 => 
            array (
                'id' => 403,
                'name' => 'TİREBOLU',
                'city_id' => 34,
                'created_at' => '2021-03-20 08:18:30',
                'updated_at' => '2021-03-20 08:18:30',
            ),
            153 => 
            array (
                'id' => 404,
                'name' => 'YAĞLIDERE',
                'city_id' => 34,
                'created_at' => '2021-03-20 08:18:35',
                'updated_at' => '2021-03-20 08:18:35',
            ),
            154 => 
            array (
                'id' => 405,
                'name' => 'KELKİT',
                'city_id' => 35,
                'created_at' => '2021-03-20 08:18:39',
                'updated_at' => '2021-03-20 08:18:39',
            ),
            155 => 
            array (
                'id' => 406,
                'name' => 'KÖSE',
                'city_id' => 35,
                'created_at' => '2021-03-20 08:18:40',
                'updated_at' => '2021-03-20 08:18:40',
            ),
            156 => 
            array (
                'id' => 407,
                'name' => 'KÜRTÜN',
                'city_id' => 35,
                'created_at' => '2021-03-20 08:18:41',
                'updated_at' => '2021-03-20 08:18:41',
            ),
            157 => 
            array (
                'id' => 408,
                'name' => 'MERKEZ',
                'city_id' => 35,
                'created_at' => '2021-03-20 08:18:44',
                'updated_at' => '2021-03-20 08:18:44',
            ),
            158 => 
            array (
                'id' => 409,
                'name' => 'ŞİRAN',
                'city_id' => 35,
                'created_at' => '2021-03-20 08:18:51',
                'updated_at' => '2021-03-20 08:18:51',
            ),
            159 => 
            array (
                'id' => 410,
                'name' => 'TORUL',
                'city_id' => 35,
                'created_at' => '2021-03-20 08:18:53',
                'updated_at' => '2021-03-20 08:18:53',
            ),
            160 => 
            array (
                'id' => 411,
                'name' => 'ÇUKURCA',
                'city_id' => 36,
                'created_at' => '2021-03-20 08:18:57',
                'updated_at' => '2021-03-20 08:18:57',
            ),
            161 => 
            array (
                'id' => 412,
                'name' => 'DERECİK',
                'city_id' => 36,
                'created_at' => '2021-03-20 08:18:57',
                'updated_at' => '2021-03-20 08:18:57',
            ),
            162 => 
            array (
                'id' => 413,
                'name' => 'MERKEZ',
                'city_id' => 36,
                'created_at' => '2021-03-20 08:18:58',
                'updated_at' => '2021-03-20 08:18:58',
            ),
            163 => 
            array (
                'id' => 414,
                'name' => 'ŞEMDİNLİ',
                'city_id' => 36,
                'created_at' => '2021-03-20 08:19:00',
                'updated_at' => '2021-03-20 08:19:00',
            ),
            164 => 
            array (
                'id' => 415,
                'name' => 'YÜKSEKOVA',
                'city_id' => 36,
                'created_at' => '2021-03-20 08:19:01',
                'updated_at' => '2021-03-20 08:19:01',
            ),
            165 => 
            array (
                'id' => 416,
                'name' => 'ALTINÖZÜ',
                'city_id' => 37,
                'created_at' => '2021-03-20 08:19:04',
                'updated_at' => '2021-03-20 08:19:04',
            ),
            166 => 
            array (
                'id' => 417,
                'name' => 'ANTAKYA',
                'city_id' => 37,
                'created_at' => '2021-03-20 08:19:05',
                'updated_at' => '2021-03-20 08:19:05',
            ),
            167 => 
            array (
                'id' => 418,
                'name' => 'ARSUZ',
                'city_id' => 37,
                'created_at' => '2021-03-20 08:19:06',
                'updated_at' => '2021-03-20 08:19:06',
            ),
            168 => 
            array (
                'id' => 419,
                'name' => 'BELEN',
                'city_id' => 37,
                'created_at' => '2021-03-20 08:19:07',
                'updated_at' => '2021-03-20 08:19:07',
            ),
            169 => 
            array (
                'id' => 420,
                'name' => 'DEFNE',
                'city_id' => 37,
                'created_at' => '2021-03-20 08:19:07',
                'updated_at' => '2021-03-20 08:19:07',
            ),
            170 => 
            array (
                'id' => 421,
                'name' => 'DÖRTYOL',
                'city_id' => 37,
                'created_at' => '2021-03-20 08:19:08',
                'updated_at' => '2021-03-20 08:19:08',
            ),
            171 => 
            array (
                'id' => 422,
                'name' => 'ERZİN',
                'city_id' => 37,
                'created_at' => '2021-03-20 08:19:08',
                'updated_at' => '2021-03-20 08:19:08',
            ),
            172 => 
            array (
                'id' => 423,
                'name' => 'HASSA',
                'city_id' => 37,
                'created_at' => '2021-03-20 08:19:08',
                'updated_at' => '2021-03-20 08:19:08',
            ),
            173 => 
            array (
                'id' => 424,
                'name' => 'İSKENDERUN',
                'city_id' => 37,
                'created_at' => '2021-03-20 08:19:09',
                'updated_at' => '2021-03-20 08:19:09',
            ),
            174 => 
            array (
                'id' => 425,
                'name' => 'KIRIKHAN',
                'city_id' => 37,
                'created_at' => '2021-03-20 08:19:10',
                'updated_at' => '2021-03-20 08:19:10',
            ),
            175 => 
            array (
                'id' => 426,
                'name' => 'KUMLU',
                'city_id' => 37,
                'created_at' => '2021-03-20 08:19:11',
                'updated_at' => '2021-03-20 08:19:11',
            ),
            176 => 
            array (
                'id' => 427,
                'name' => 'PAYAS',
                'city_id' => 37,
                'created_at' => '2021-03-20 08:19:11',
                'updated_at' => '2021-03-20 08:19:11',
            ),
            177 => 
            array (
                'id' => 428,
                'name' => 'REYHANLI',
                'city_id' => 37,
                'created_at' => '2021-03-20 08:19:12',
                'updated_at' => '2021-03-20 08:19:12',
            ),
            178 => 
            array (
                'id' => 429,
                'name' => 'SAMANDAĞ',
                'city_id' => 37,
                'created_at' => '2021-03-20 08:19:12',
                'updated_at' => '2021-03-20 08:19:12',
            ),
            179 => 
            array (
                'id' => 430,
                'name' => 'YAYLADAĞI',
                'city_id' => 37,
                'created_at' => '2021-03-20 08:19:13',
                'updated_at' => '2021-03-20 08:19:13',
            ),
            180 => 
            array (
                'id' => 431,
                'name' => 'ARALIK',
                'city_id' => 38,
                'created_at' => '2021-03-20 08:19:14',
                'updated_at' => '2021-03-20 08:19:14',
            ),
            181 => 
            array (
                'id' => 432,
                'name' => 'KARAKOYUNLU',
                'city_id' => 38,
                'created_at' => '2021-03-20 08:19:15',
                'updated_at' => '2021-03-20 08:19:15',
            ),
            182 => 
            array (
                'id' => 433,
                'name' => 'MERKEZ',
                'city_id' => 38,
                'created_at' => '2021-03-20 08:19:15',
                'updated_at' => '2021-03-20 08:19:15',
            ),
            183 => 
            array (
                'id' => 434,
                'name' => 'TUZLUCA',
                'city_id' => 38,
                'created_at' => '2021-03-20 08:19:16',
                'updated_at' => '2021-03-20 08:19:16',
            ),
            184 => 
            array (
                'id' => 435,
                'name' => 'AKSU',
                'city_id' => 39,
                'created_at' => '2021-03-20 08:19:18',
                'updated_at' => '2021-03-20 08:19:18',
            ),
            185 => 
            array (
                'id' => 436,
                'name' => 'ATABEY',
                'city_id' => 39,
                'created_at' => '2021-03-20 08:19:18',
                'updated_at' => '2021-03-20 08:19:18',
            ),
            186 => 
            array (
                'id' => 437,
                'name' => 'EĞİRDİR',
                'city_id' => 39,
                'created_at' => '2021-03-20 08:19:19',
                'updated_at' => '2021-03-20 08:19:19',
            ),
            187 => 
            array (
                'id' => 438,
                'name' => 'GELENDOST',
                'city_id' => 39,
                'created_at' => '2021-03-20 08:19:20',
                'updated_at' => '2021-03-20 08:19:20',
            ),
            188 => 
            array (
                'id' => 439,
                'name' => 'GÖNEN',
                'city_id' => 39,
                'created_at' => '2021-03-20 08:19:21',
                'updated_at' => '2021-03-20 08:19:21',
            ),
            189 => 
            array (
                'id' => 440,
                'name' => 'KEÇİBORLU',
                'city_id' => 39,
                'created_at' => '2021-03-20 08:19:21',
                'updated_at' => '2021-03-20 08:19:21',
            ),
            190 => 
            array (
                'id' => 441,
                'name' => 'MERKEZ',
                'city_id' => 39,
                'created_at' => '2021-03-20 08:19:21',
                'updated_at' => '2021-03-20 08:19:21',
            ),
            191 => 
            array (
                'id' => 442,
                'name' => 'SENİRKENT',
                'city_id' => 39,
                'created_at' => '2021-03-20 08:19:23',
                'updated_at' => '2021-03-20 08:19:23',
            ),
            192 => 
            array (
                'id' => 443,
                'name' => 'SÜTÇÜLER',
                'city_id' => 39,
                'created_at' => '2021-03-20 08:19:24',
                'updated_at' => '2021-03-20 08:19:24',
            ),
            193 => 
            array (
                'id' => 444,
                'name' => 'ŞARKİKARAAĞAÇ',
                'city_id' => 39,
                'created_at' => '2021-03-20 08:19:24',
                'updated_at' => '2021-03-20 08:19:24',
            ),
            194 => 
            array (
                'id' => 445,
                'name' => 'ULUBORLU',
                'city_id' => 39,
                'created_at' => '2021-03-20 08:19:25',
                'updated_at' => '2021-03-20 08:19:25',
            ),
            195 => 
            array (
                'id' => 446,
                'name' => 'YALVAÇ',
                'city_id' => 39,
                'created_at' => '2021-03-20 08:19:25',
                'updated_at' => '2021-03-20 08:19:25',
            ),
            196 => 
            array (
                'id' => 447,
                'name' => 'YENİŞARBADEMLİ',
                'city_id' => 39,
                'created_at' => '2021-03-20 08:19:27',
                'updated_at' => '2021-03-20 08:19:27',
            ),
            197 => 
            array (
                'id' => 448,
                'name' => 'ADALAR',
                'city_id' => 40,
                'created_at' => '2021-03-20 08:19:28',
                'updated_at' => '2021-03-20 08:19:28',
            ),
            198 => 
            array (
                'id' => 449,
                'name' => 'ARNAVUTKÖY',
                'city_id' => 40,
                'created_at' => '2021-03-20 08:19:28',
                'updated_at' => '2021-03-20 08:19:28',
            ),
            199 => 
            array (
                'id' => 450,
                'name' => 'ATAŞEHİR',
                'city_id' => 40,
                'created_at' => '2021-03-20 08:19:28',
                'updated_at' => '2021-03-20 08:19:28',
            ),
            200 => 
            array (
                'id' => 451,
                'name' => 'AVCILAR',
                'city_id' => 40,
                'created_at' => '2021-03-20 08:19:29',
                'updated_at' => '2021-03-20 08:19:29',
            ),
            201 => 
            array (
                'id' => 452,
                'name' => 'BAĞCILAR',
                'city_id' => 40,
                'created_at' => '2021-03-20 08:19:29',
                'updated_at' => '2021-03-20 08:19:29',
            ),
            202 => 
            array (
                'id' => 453,
                'name' => 'BAHÇELİEVLER',
                'city_id' => 40,
                'created_at' => '2021-03-20 08:19:29',
                'updated_at' => '2021-03-20 08:19:29',
            ),
            203 => 
            array (
                'id' => 454,
                'name' => 'BAKIRKÖY',
                'city_id' => 40,
                'created_at' => '2021-03-20 08:19:29',
                'updated_at' => '2021-03-20 08:19:29',
            ),
            204 => 
            array (
                'id' => 455,
                'name' => 'BAŞAKŞEHİR',
                'city_id' => 40,
                'created_at' => '2021-03-20 08:19:30',
                'updated_at' => '2021-03-20 08:19:30',
            ),
            205 => 
            array (
                'id' => 456,
                'name' => 'BAYRAMPAŞA',
                'city_id' => 40,
                'created_at' => '2021-03-20 08:19:30',
                'updated_at' => '2021-03-20 08:19:30',
            ),
            206 => 
            array (
                'id' => 457,
                'name' => 'BEŞİKTAŞ',
                'city_id' => 40,
                'created_at' => '2021-03-20 08:19:30',
                'updated_at' => '2021-03-20 08:19:30',
            ),
            207 => 
            array (
                'id' => 458,
                'name' => 'BEYKOZ',
                'city_id' => 40,
                'created_at' => '2021-03-20 08:19:30',
                'updated_at' => '2021-03-20 08:19:30',
            ),
            208 => 
            array (
                'id' => 459,
                'name' => 'BEYLİKDÜZÜ',
                'city_id' => 40,
                'created_at' => '2021-03-20 08:19:31',
                'updated_at' => '2021-03-20 08:19:31',
            ),
            209 => 
            array (
                'id' => 460,
                'name' => 'BEYOĞLU',
                'city_id' => 40,
                'created_at' => '2021-03-20 08:19:31',
                'updated_at' => '2021-03-20 08:19:31',
            ),
            210 => 
            array (
                'id' => 461,
                'name' => 'BÜYÜKÇEKMECE',
                'city_id' => 40,
                'created_at' => '2021-03-20 08:19:32',
                'updated_at' => '2021-03-20 08:19:32',
            ),
            211 => 
            array (
                'id' => 462,
                'name' => 'ÇATALCA',
                'city_id' => 40,
                'created_at' => '2021-03-20 08:19:33',
                'updated_at' => '2021-03-20 08:19:33',
            ),
            212 => 
            array (
                'id' => 463,
                'name' => 'ÇEKMEKÖY',
                'city_id' => 40,
                'created_at' => '2021-03-20 08:19:33',
                'updated_at' => '2021-03-20 08:19:33',
            ),
            213 => 
            array (
                'id' => 464,
                'name' => 'ESENLER',
                'city_id' => 40,
                'created_at' => '2021-03-20 08:19:33',
                'updated_at' => '2021-03-20 08:19:33',
            ),
            214 => 
            array (
                'id' => 465,
                'name' => 'ESENYURT',
                'city_id' => 40,
                'created_at' => '2021-03-20 08:19:34',
                'updated_at' => '2021-03-20 08:19:34',
            ),
            215 => 
            array (
                'id' => 466,
                'name' => 'EYÜPSULTAN',
                'city_id' => 40,
                'created_at' => '2021-03-20 08:19:34',
                'updated_at' => '2021-03-20 08:19:34',
            ),
            216 => 
            array (
                'id' => 467,
                'name' => 'FATİH',
                'city_id' => 40,
                'created_at' => '2021-03-20 08:19:35',
                'updated_at' => '2021-03-20 08:19:35',
            ),
            217 => 
            array (
                'id' => 468,
                'name' => 'GAZİOSMANPAŞA',
                'city_id' => 40,
                'created_at' => '2021-03-20 08:19:36',
                'updated_at' => '2021-03-20 08:19:36',
            ),
            218 => 
            array (
                'id' => 469,
                'name' => 'GÜNGÖREN',
                'city_id' => 40,
                'created_at' => '2021-03-20 08:19:36',
                'updated_at' => '2021-03-20 08:19:36',
            ),
            219 => 
            array (
                'id' => 470,
                'name' => 'KADIKÖY',
                'city_id' => 40,
                'created_at' => '2021-03-20 08:19:36',
                'updated_at' => '2021-03-20 08:19:36',
            ),
            220 => 
            array (
                'id' => 471,
                'name' => 'KAĞITHANE',
                'city_id' => 40,
                'created_at' => '2021-03-20 08:19:37',
                'updated_at' => '2021-03-20 08:19:37',
            ),
            221 => 
            array (
                'id' => 472,
                'name' => 'KARTAL',
                'city_id' => 40,
                'created_at' => '2021-03-20 08:19:37',
                'updated_at' => '2021-03-20 08:19:37',
            ),
            222 => 
            array (
                'id' => 473,
                'name' => 'KÜÇÜKÇEKMECE',
                'city_id' => 40,
                'created_at' => '2021-03-20 08:19:38',
                'updated_at' => '2021-03-20 08:19:38',
            ),
            223 => 
            array (
                'id' => 474,
                'name' => 'MALTEPE',
                'city_id' => 40,
                'created_at' => '2021-03-20 08:19:38',
                'updated_at' => '2021-03-20 08:19:38',
            ),
            224 => 
            array (
                'id' => 475,
                'name' => 'PENDİK',
                'city_id' => 40,
                'created_at' => '2021-03-20 08:19:38',
                'updated_at' => '2021-03-20 08:19:38',
            ),
            225 => 
            array (
                'id' => 476,
                'name' => 'SANCAKTEPE',
                'city_id' => 40,
                'created_at' => '2021-03-20 08:19:39',
                'updated_at' => '2021-03-20 08:19:39',
            ),
            226 => 
            array (
                'id' => 477,
                'name' => 'SARIYER',
                'city_id' => 40,
                'created_at' => '2021-03-20 08:19:39',
                'updated_at' => '2021-03-20 08:19:39',
            ),
            227 => 
            array (
                'id' => 478,
                'name' => 'SİLİVRİ',
                'city_id' => 40,
                'created_at' => '2021-03-20 08:19:40',
                'updated_at' => '2021-03-20 08:19:40',
            ),
            228 => 
            array (
                'id' => 479,
                'name' => 'SULTANBEYLİ',
                'city_id' => 40,
                'created_at' => '2021-03-20 08:19:40',
                'updated_at' => '2021-03-20 08:19:40',
            ),
            229 => 
            array (
                'id' => 480,
                'name' => 'SULTANGAZİ',
                'city_id' => 40,
                'created_at' => '2021-03-20 08:19:41',
                'updated_at' => '2021-03-20 08:19:41',
            ),
            230 => 
            array (
                'id' => 481,
                'name' => 'ŞİLE',
                'city_id' => 40,
                'created_at' => '2021-03-20 08:19:41',
                'updated_at' => '2021-03-20 08:19:41',
            ),
            231 => 
            array (
                'id' => 482,
                'name' => 'ŞİŞLİ',
                'city_id' => 40,
                'created_at' => '2021-03-20 08:19:42',
                'updated_at' => '2021-03-20 08:19:42',
            ),
            232 => 
            array (
                'id' => 483,
                'name' => 'TUZLA',
                'city_id' => 40,
                'created_at' => '2021-03-20 08:19:42',
                'updated_at' => '2021-03-20 08:19:42',
            ),
            233 => 
            array (
                'id' => 484,
                'name' => 'ÜMRANİYE',
                'city_id' => 40,
                'created_at' => '2021-03-20 08:19:43',
                'updated_at' => '2021-03-20 08:19:43',
            ),
            234 => 
            array (
                'id' => 485,
                'name' => 'ÜSKÜDAR',
                'city_id' => 40,
                'created_at' => '2021-03-20 08:19:43',
                'updated_at' => '2021-03-20 08:19:43',
            ),
            235 => 
            array (
                'id' => 486,
                'name' => 'ZEYTİNBURNU',
                'city_id' => 40,
                'created_at' => '2021-03-20 08:19:44',
                'updated_at' => '2021-03-20 08:19:44',
            ),
            236 => 
            array (
                'id' => 487,
                'name' => 'ALİAĞA',
                'city_id' => 41,
                'created_at' => '2021-03-20 08:19:44',
                'updated_at' => '2021-03-20 08:19:44',
            ),
            237 => 
            array (
                'id' => 488,
                'name' => 'BALÇOVA',
                'city_id' => 41,
                'created_at' => '2021-03-20 08:19:45',
                'updated_at' => '2021-03-20 08:19:45',
            ),
            238 => 
            array (
                'id' => 489,
                'name' => 'BAYINDIR',
                'city_id' => 41,
                'created_at' => '2021-03-20 08:19:45',
                'updated_at' => '2021-03-20 08:19:45',
            ),
            239 => 
            array (
                'id' => 490,
                'name' => 'BAYRAKLI',
                'city_id' => 41,
                'created_at' => '2021-03-20 08:19:46',
                'updated_at' => '2021-03-20 08:19:46',
            ),
            240 => 
            array (
                'id' => 491,
                'name' => 'BERGAMA',
                'city_id' => 41,
                'created_at' => '2021-03-20 08:19:46',
                'updated_at' => '2021-03-20 08:19:46',
            ),
            241 => 
            array (
                'id' => 492,
                'name' => 'BEYDAĞ',
                'city_id' => 41,
                'created_at' => '2021-03-20 08:19:49',
                'updated_at' => '2021-03-20 08:19:49',
            ),
            242 => 
            array (
                'id' => 493,
                'name' => 'BORNOVA',
                'city_id' => 41,
                'created_at' => '2021-03-20 08:19:49',
                'updated_at' => '2021-03-20 08:19:49',
            ),
            243 => 
            array (
                'id' => 494,
                'name' => 'BUCA',
                'city_id' => 41,
                'created_at' => '2021-03-20 08:19:50',
                'updated_at' => '2021-03-20 08:19:50',
            ),
            244 => 
            array (
                'id' => 495,
                'name' => 'ÇEŞME',
                'city_id' => 41,
                'created_at' => '2021-03-20 08:19:50',
                'updated_at' => '2021-03-20 08:19:50',
            ),
            245 => 
            array (
                'id' => 496,
                'name' => 'ÇİĞLİ',
                'city_id' => 41,
                'created_at' => '2021-03-20 08:19:51',
                'updated_at' => '2021-03-20 08:19:51',
            ),
            246 => 
            array (
                'id' => 497,
                'name' => 'DİKİLİ',
                'city_id' => 41,
                'created_at' => '2021-03-20 08:19:51',
                'updated_at' => '2021-03-20 08:19:51',
            ),
            247 => 
            array (
                'id' => 498,
                'name' => 'FOÇA',
                'city_id' => 41,
                'created_at' => '2021-03-20 08:19:52',
                'updated_at' => '2021-03-20 08:19:52',
            ),
            248 => 
            array (
                'id' => 499,
                'name' => 'GAZİEMİR',
                'city_id' => 41,
                'created_at' => '2021-03-20 08:19:52',
                'updated_at' => '2021-03-20 08:19:52',
            ),
            249 => 
            array (
                'id' => 500,
                'name' => 'GÜZELBAHÇE',
                'city_id' => 41,
                'created_at' => '2021-03-20 08:19:53',
                'updated_at' => '2021-03-20 08:19:53',
            ),
        ));
        \DB::table('districts')->insert(array (
            0 => 
            array (
                'id' => 501,
                'name' => 'KARABAĞLAR',
                'city_id' => 41,
                'created_at' => '2021-03-20 08:19:53',
                'updated_at' => '2021-03-20 08:19:53',
            ),
            1 => 
            array (
                'id' => 502,
                'name' => 'KARABURUN',
                'city_id' => 41,
                'created_at' => '2021-03-20 08:19:54',
                'updated_at' => '2021-03-20 08:19:54',
            ),
            2 => 
            array (
                'id' => 503,
                'name' => 'KARŞIYAKA',
                'city_id' => 41,
                'created_at' => '2021-03-20 08:19:54',
                'updated_at' => '2021-03-20 08:19:54',
            ),
            3 => 
            array (
                'id' => 504,
                'name' => 'KEMALPAŞA',
                'city_id' => 41,
                'created_at' => '2021-03-20 08:19:54',
                'updated_at' => '2021-03-20 08:19:54',
            ),
            4 => 
            array (
                'id' => 505,
                'name' => 'KINIK',
                'city_id' => 41,
                'created_at' => '2021-03-20 08:19:55',
                'updated_at' => '2021-03-20 08:19:55',
            ),
            5 => 
            array (
                'id' => 506,
                'name' => 'KİRAZ',
                'city_id' => 41,
                'created_at' => '2021-03-20 08:19:56',
                'updated_at' => '2021-03-20 08:19:56',
            ),
            6 => 
            array (
                'id' => 507,
                'name' => 'KONAK',
                'city_id' => 41,
                'created_at' => '2021-03-20 08:19:57',
                'updated_at' => '2021-03-20 08:19:57',
            ),
            7 => 
            array (
                'id' => 508,
                'name' => 'MENDERES',
                'city_id' => 41,
                'created_at' => '2021-03-20 08:19:59',
                'updated_at' => '2021-03-20 08:19:59',
            ),
            8 => 
            array (
                'id' => 509,
                'name' => 'MENEMEN',
                'city_id' => 41,
                'created_at' => '2021-03-20 08:20:00',
                'updated_at' => '2021-03-20 08:20:00',
            ),
            9 => 
            array (
                'id' => 510,
                'name' => 'NARLIDERE',
                'city_id' => 41,
                'created_at' => '2021-03-20 08:20:01',
                'updated_at' => '2021-03-20 08:20:01',
            ),
            10 => 
            array (
                'id' => 511,
                'name' => 'ÖDEMİŞ',
                'city_id' => 41,
                'created_at' => '2021-03-20 08:20:01',
                'updated_at' => '2021-03-20 08:20:01',
            ),
            11 => 
            array (
                'id' => 512,
                'name' => 'SEFERİHİSAR',
                'city_id' => 41,
                'created_at' => '2021-03-20 08:20:02',
                'updated_at' => '2021-03-20 08:20:02',
            ),
            12 => 
            array (
                'id' => 513,
                'name' => 'SELÇUK',
                'city_id' => 41,
                'created_at' => '2021-03-20 08:20:03',
                'updated_at' => '2021-03-20 08:20:03',
            ),
            13 => 
            array (
                'id' => 514,
                'name' => 'TİRE',
                'city_id' => 41,
                'created_at' => '2021-03-20 08:20:03',
                'updated_at' => '2021-03-20 08:20:03',
            ),
            14 => 
            array (
                'id' => 515,
                'name' => 'TORBALI',
                'city_id' => 41,
                'created_at' => '2021-03-20 08:20:05',
                'updated_at' => '2021-03-20 08:20:05',
            ),
            15 => 
            array (
                'id' => 516,
                'name' => 'URLA',
                'city_id' => 41,
                'created_at' => '2021-03-20 08:20:06',
                'updated_at' => '2021-03-20 08:20:06',
            ),
            16 => 
            array (
                'id' => 517,
                'name' => 'AFŞİN',
                'city_id' => 42,
                'created_at' => '2021-03-20 08:20:06',
                'updated_at' => '2021-03-20 08:20:06',
            ),
            17 => 
            array (
                'id' => 518,
                'name' => 'ANDIRIN',
                'city_id' => 42,
                'created_at' => '2021-03-20 08:20:07',
                'updated_at' => '2021-03-20 08:20:07',
            ),
            18 => 
            array (
                'id' => 519,
                'name' => 'ÇAĞLAYANCERİT',
                'city_id' => 42,
                'created_at' => '2021-03-20 08:20:08',
                'updated_at' => '2021-03-20 08:20:08',
            ),
            19 => 
            array (
                'id' => 520,
                'name' => 'DULKADİROĞLU',
                'city_id' => 42,
                'created_at' => '2021-03-20 08:20:09',
                'updated_at' => '2021-03-20 08:20:09',
            ),
            20 => 
            array (
                'id' => 521,
                'name' => 'EKİNÖZÜ',
                'city_id' => 42,
                'created_at' => '2021-03-20 08:20:10',
                'updated_at' => '2021-03-20 08:20:10',
            ),
            21 => 
            array (
                'id' => 522,
                'name' => 'ELBİSTAN',
                'city_id' => 42,
                'created_at' => '2021-03-20 08:20:11',
                'updated_at' => '2021-03-20 08:20:11',
            ),
            22 => 
            array (
                'id' => 523,
                'name' => 'GÖKSUN',
                'city_id' => 42,
                'created_at' => '2021-03-20 08:20:12',
                'updated_at' => '2021-03-20 08:20:12',
            ),
            23 => 
            array (
                'id' => 524,
                'name' => 'NURHAK',
                'city_id' => 42,
                'created_at' => '2021-03-20 08:20:14',
                'updated_at' => '2021-03-20 08:20:14',
            ),
            24 => 
            array (
                'id' => 525,
                'name' => 'ONİKİŞUBAT',
                'city_id' => 42,
                'created_at' => '2021-03-20 08:20:14',
                'updated_at' => '2021-03-20 08:20:14',
            ),
            25 => 
            array (
                'id' => 526,
                'name' => 'PAZARCIK',
                'city_id' => 42,
                'created_at' => '2021-03-20 08:20:16',
                'updated_at' => '2021-03-20 08:20:16',
            ),
            26 => 
            array (
                'id' => 527,
                'name' => 'TÜRKOĞLU',
                'city_id' => 42,
                'created_at' => '2021-03-20 08:20:18',
                'updated_at' => '2021-03-20 08:20:18',
            ),
            27 => 
            array (
                'id' => 528,
                'name' => 'EFLANİ',
                'city_id' => 43,
                'created_at' => '2021-03-20 08:20:18',
                'updated_at' => '2021-03-20 08:20:18',
            ),
            28 => 
            array (
                'id' => 529,
                'name' => 'ESKİPAZAR',
                'city_id' => 43,
                'created_at' => '2021-03-20 08:20:22',
                'updated_at' => '2021-03-20 08:20:22',
            ),
            29 => 
            array (
                'id' => 530,
                'name' => 'MERKEZ',
                'city_id' => 43,
                'created_at' => '2021-03-20 08:20:25',
                'updated_at' => '2021-03-20 08:20:25',
            ),
            30 => 
            array (
                'id' => 531,
                'name' => 'OVACIK',
                'city_id' => 43,
                'created_at' => '2021-03-20 08:20:28',
                'updated_at' => '2021-03-20 08:20:28',
            ),
            31 => 
            array (
                'id' => 532,
                'name' => 'SAFRANBOLU',
                'city_id' => 43,
                'created_at' => '2021-03-20 08:20:30',
                'updated_at' => '2021-03-20 08:20:30',
            ),
            32 => 
            array (
                'id' => 533,
                'name' => 'YENİCE',
                'city_id' => 43,
                'created_at' => '2021-03-20 08:20:34',
                'updated_at' => '2021-03-20 08:20:34',
            ),
            33 => 
            array (
                'id' => 534,
                'name' => 'AYRANCI',
                'city_id' => 44,
                'created_at' => '2021-03-20 08:20:37',
                'updated_at' => '2021-03-20 08:20:37',
            ),
            34 => 
            array (
                'id' => 535,
                'name' => 'BAŞYAYLA',
                'city_id' => 44,
                'created_at' => '2021-03-20 08:20:37',
                'updated_at' => '2021-03-20 08:20:37',
            ),
            35 => 
            array (
                'id' => 536,
                'name' => 'ERMENEK',
                'city_id' => 44,
                'created_at' => '2021-03-20 08:20:37',
                'updated_at' => '2021-03-20 08:20:37',
            ),
            36 => 
            array (
                'id' => 537,
                'name' => 'KAZIMKARABEKİR',
                'city_id' => 44,
                'created_at' => '2021-03-20 08:20:39',
                'updated_at' => '2021-03-20 08:20:39',
            ),
            37 => 
            array (
                'id' => 538,
                'name' => 'MERKEZ',
                'city_id' => 44,
                'created_at' => '2021-03-20 08:20:39',
                'updated_at' => '2021-03-20 08:20:39',
            ),
            38 => 
            array (
                'id' => 539,
                'name' => 'SARIVELİLER',
                'city_id' => 44,
                'created_at' => '2021-03-20 08:20:43',
                'updated_at' => '2021-03-20 08:20:43',
            ),
            39 => 
            array (
                'id' => 540,
                'name' => 'AKYAKA',
                'city_id' => 45,
                'created_at' => '2021-03-20 08:20:44',
                'updated_at' => '2021-03-20 08:20:44',
            ),
            40 => 
            array (
                'id' => 541,
                'name' => 'ARPAÇAY',
                'city_id' => 45,
                'created_at' => '2021-03-20 08:20:44',
                'updated_at' => '2021-03-20 08:20:44',
            ),
            41 => 
            array (
                'id' => 542,
                'name' => 'DİGOR',
                'city_id' => 45,
                'created_at' => '2021-03-20 08:20:45',
                'updated_at' => '2021-03-20 08:20:45',
            ),
            42 => 
            array (
                'id' => 543,
                'name' => 'KAĞIZMAN',
                'city_id' => 45,
                'created_at' => '2021-03-20 08:20:46',
                'updated_at' => '2021-03-20 08:20:46',
            ),
            43 => 
            array (
                'id' => 544,
                'name' => 'MERKEZ',
                'city_id' => 45,
                'created_at' => '2021-03-20 08:20:48',
                'updated_at' => '2021-03-20 08:20:48',
            ),
            44 => 
            array (
                'id' => 545,
                'name' => 'SARIKAMIŞ',
                'city_id' => 45,
                'created_at' => '2021-03-20 08:20:49',
                'updated_at' => '2021-03-20 08:20:49',
            ),
            45 => 
            array (
                'id' => 546,
                'name' => 'SELİM',
                'city_id' => 45,
                'created_at' => '2021-03-20 08:20:50',
                'updated_at' => '2021-03-20 08:20:50',
            ),
            46 => 
            array (
                'id' => 547,
                'name' => 'SUSUZ',
                'city_id' => 45,
                'created_at' => '2021-03-20 08:20:52',
                'updated_at' => '2021-03-20 08:20:52',
            ),
            47 => 
            array (
                'id' => 548,
                'name' => 'ABANA',
                'city_id' => 46,
                'created_at' => '2021-03-20 08:20:52',
                'updated_at' => '2021-03-20 08:20:52',
            ),
            48 => 
            array (
                'id' => 549,
                'name' => 'AĞLI',
                'city_id' => 46,
                'created_at' => '2021-03-20 08:20:53',
                'updated_at' => '2021-03-20 08:20:53',
            ),
            49 => 
            array (
                'id' => 550,
                'name' => 'ARAÇ',
                'city_id' => 46,
                'created_at' => '2021-03-20 08:20:54',
                'updated_at' => '2021-03-20 08:20:54',
            ),
            50 => 
            array (
                'id' => 551,
                'name' => 'AZDAVAY',
                'city_id' => 46,
                'created_at' => '2021-03-20 08:21:01',
                'updated_at' => '2021-03-20 08:21:01',
            ),
            51 => 
            array (
                'id' => 552,
                'name' => 'BOZKURT',
                'city_id' => 46,
                'created_at' => '2021-03-20 08:21:06',
                'updated_at' => '2021-03-20 08:21:06',
            ),
            52 => 
            array (
                'id' => 553,
                'name' => 'CİDE',
                'city_id' => 46,
                'created_at' => '2021-03-20 08:21:09',
                'updated_at' => '2021-03-20 08:21:09',
            ),
            53 => 
            array (
                'id' => 554,
                'name' => 'ÇATALZEYTİN',
                'city_id' => 46,
                'created_at' => '2021-03-20 08:21:14',
                'updated_at' => '2021-03-20 08:21:14',
            ),
            54 => 
            array (
                'id' => 555,
                'name' => 'DADAY',
                'city_id' => 46,
                'created_at' => '2021-03-20 08:21:17',
                'updated_at' => '2021-03-20 08:21:17',
            ),
            55 => 
            array (
                'id' => 556,
                'name' => 'DEVREKANİ',
                'city_id' => 46,
                'created_at' => '2021-03-20 08:21:22',
                'updated_at' => '2021-03-20 08:21:22',
            ),
            56 => 
            array (
                'id' => 557,
                'name' => 'DOĞANYURT',
                'city_id' => 46,
                'created_at' => '2021-03-20 08:21:26',
                'updated_at' => '2021-03-20 08:21:26',
            ),
            57 => 
            array (
                'id' => 558,
                'name' => 'HANÖNÜ',
                'city_id' => 46,
                'created_at' => '2021-03-20 08:21:27',
                'updated_at' => '2021-03-20 08:21:27',
            ),
            58 => 
            array (
                'id' => 559,
                'name' => 'İHSANGAZİ',
                'city_id' => 46,
                'created_at' => '2021-03-20 08:21:30',
                'updated_at' => '2021-03-20 08:21:30',
            ),
            59 => 
            array (
                'id' => 560,
                'name' => 'İNEBOLU',
                'city_id' => 46,
                'created_at' => '2021-03-20 08:21:32',
                'updated_at' => '2021-03-20 08:21:32',
            ),
            60 => 
            array (
                'id' => 561,
                'name' => 'KÜRE',
                'city_id' => 46,
                'created_at' => '2021-03-20 08:21:35',
                'updated_at' => '2021-03-20 08:21:35',
            ),
            61 => 
            array (
                'id' => 562,
                'name' => 'MERKEZ',
                'city_id' => 46,
                'created_at' => '2021-03-20 08:21:38',
                'updated_at' => '2021-03-20 08:21:38',
            ),
            62 => 
            array (
                'id' => 563,
                'name' => 'PINARBAŞI',
                'city_id' => 46,
                'created_at' => '2021-03-20 08:21:48',
                'updated_at' => '2021-03-20 08:21:48',
            ),
            63 => 
            array (
                'id' => 564,
                'name' => 'SEYDİLER',
                'city_id' => 46,
                'created_at' => '2021-03-20 08:21:51',
                'updated_at' => '2021-03-20 08:21:51',
            ),
            64 => 
            array (
                'id' => 565,
                'name' => 'ŞENPAZAR',
                'city_id' => 46,
                'created_at' => '2021-03-20 08:21:52',
                'updated_at' => '2021-03-20 08:21:52',
            ),
            65 => 
            array (
                'id' => 566,
                'name' => 'TAŞKÖPRÜ',
                'city_id' => 46,
                'created_at' => '2021-03-20 08:21:54',
                'updated_at' => '2021-03-20 08:21:54',
            ),
            66 => 
            array (
                'id' => 567,
                'name' => 'TOSYA',
                'city_id' => 46,
                'created_at' => '2021-03-20 08:22:01',
                'updated_at' => '2021-03-20 08:22:01',
            ),
            67 => 
            array (
                'id' => 568,
                'name' => 'AKKIŞLA',
                'city_id' => 47,
                'created_at' => '2021-03-20 08:22:04',
                'updated_at' => '2021-03-20 08:22:04',
            ),
            68 => 
            array (
                'id' => 569,
                'name' => 'BÜNYAN',
                'city_id' => 47,
                'created_at' => '2021-03-20 08:22:04',
                'updated_at' => '2021-03-20 08:22:04',
            ),
            69 => 
            array (
                'id' => 570,
                'name' => 'DEVELİ',
                'city_id' => 47,
                'created_at' => '2021-03-20 08:22:05',
                'updated_at' => '2021-03-20 08:22:05',
            ),
            70 => 
            array (
                'id' => 571,
                'name' => 'FELAHİYE',
                'city_id' => 47,
                'created_at' => '2021-03-20 08:22:06',
                'updated_at' => '2021-03-20 08:22:06',
            ),
            71 => 
            array (
                'id' => 572,
                'name' => 'HACILAR',
                'city_id' => 47,
                'created_at' => '2021-03-20 08:22:06',
                'updated_at' => '2021-03-20 08:22:06',
            ),
            72 => 
            array (
                'id' => 573,
                'name' => 'İNCESU',
                'city_id' => 47,
                'created_at' => '2021-03-20 08:22:07',
                'updated_at' => '2021-03-20 08:22:07',
            ),
            73 => 
            array (
                'id' => 574,
                'name' => 'KOCASİNAN',
                'city_id' => 47,
                'created_at' => '2021-03-20 08:22:07',
                'updated_at' => '2021-03-20 08:22:07',
            ),
            74 => 
            array (
                'id' => 575,
                'name' => 'MELİKGAZİ',
                'city_id' => 47,
                'created_at' => '2021-03-20 08:22:09',
                'updated_at' => '2021-03-20 08:22:09',
            ),
            75 => 
            array (
                'id' => 576,
                'name' => 'ÖZVATAN',
                'city_id' => 47,
                'created_at' => '2021-03-20 08:22:10',
                'updated_at' => '2021-03-20 08:22:10',
            ),
            76 => 
            array (
                'id' => 577,
                'name' => 'PINARBAŞI',
                'city_id' => 47,
                'created_at' => '2021-03-20 08:22:10',
                'updated_at' => '2021-03-20 08:22:10',
            ),
            77 => 
            array (
                'id' => 578,
                'name' => 'SARIOĞLAN',
                'city_id' => 47,
                'created_at' => '2021-03-20 08:22:12',
                'updated_at' => '2021-03-20 08:22:12',
            ),
            78 => 
            array (
                'id' => 579,
                'name' => 'SARIZ',
                'city_id' => 47,
                'created_at' => '2021-03-20 08:22:12',
                'updated_at' => '2021-03-20 08:22:12',
            ),
            79 => 
            array (
                'id' => 580,
                'name' => 'TALAS',
                'city_id' => 47,
                'created_at' => '2021-03-20 08:22:13',
                'updated_at' => '2021-03-20 08:22:13',
            ),
            80 => 
            array (
                'id' => 581,
                'name' => 'TOMARZA',
                'city_id' => 47,
                'created_at' => '2021-03-20 08:22:13',
                'updated_at' => '2021-03-20 08:22:13',
            ),
            81 => 
            array (
                'id' => 582,
                'name' => 'YAHYALI',
                'city_id' => 47,
                'created_at' => '2021-03-20 08:22:14',
                'updated_at' => '2021-03-20 08:22:14',
            ),
            82 => 
            array (
                'id' => 583,
                'name' => 'YEŞİLHİSAR',
                'city_id' => 47,
                'created_at' => '2021-03-20 08:22:15',
                'updated_at' => '2021-03-20 08:22:15',
            ),
            83 => 
            array (
                'id' => 584,
                'name' => 'BAHŞILI',
                'city_id' => 48,
                'created_at' => '2021-03-20 08:22:15',
                'updated_at' => '2021-03-20 08:22:15',
            ),
            84 => 
            array (
                'id' => 585,
                'name' => 'BALIŞEYH',
                'city_id' => 48,
                'created_at' => '2021-03-20 08:22:15',
                'updated_at' => '2021-03-20 08:22:15',
            ),
            85 => 
            array (
                'id' => 586,
                'name' => 'ÇELEBİ',
                'city_id' => 48,
                'created_at' => '2021-03-20 08:22:16',
                'updated_at' => '2021-03-20 08:22:16',
            ),
            86 => 
            array (
                'id' => 587,
                'name' => 'DELİCE',
                'city_id' => 48,
                'created_at' => '2021-03-20 08:22:16',
                'updated_at' => '2021-03-20 08:22:16',
            ),
            87 => 
            array (
                'id' => 588,
                'name' => 'KARAKEÇİLİ',
                'city_id' => 48,
                'created_at' => '2021-03-20 08:22:17',
                'updated_at' => '2021-03-20 08:22:17',
            ),
            88 => 
            array (
                'id' => 589,
                'name' => 'KESKİN',
                'city_id' => 48,
                'created_at' => '2021-03-20 08:22:18',
                'updated_at' => '2021-03-20 08:22:18',
            ),
            89 => 
            array (
                'id' => 590,
                'name' => 'MERKEZ',
                'city_id' => 48,
                'created_at' => '2021-03-20 08:22:19',
                'updated_at' => '2021-03-20 08:22:19',
            ),
            90 => 
            array (
                'id' => 591,
                'name' => 'SULAKYURT',
                'city_id' => 48,
                'created_at' => '2021-03-20 08:22:20',
                'updated_at' => '2021-03-20 08:22:20',
            ),
            91 => 
            array (
                'id' => 592,
                'name' => 'YAHŞİHAN',
                'city_id' => 48,
                'created_at' => '2021-03-20 08:22:20',
                'updated_at' => '2021-03-20 08:22:20',
            ),
            92 => 
            array (
                'id' => 593,
                'name' => 'BABAESKİ',
                'city_id' => 49,
                'created_at' => '2021-03-20 08:22:21',
                'updated_at' => '2021-03-20 08:22:21',
            ),
            93 => 
            array (
                'id' => 594,
                'name' => 'DEMİRKÖY',
                'city_id' => 49,
                'created_at' => '2021-03-20 08:22:22',
                'updated_at' => '2021-03-20 08:22:22',
            ),
            94 => 
            array (
                'id' => 595,
                'name' => 'KOFÇAZ',
                'city_id' => 49,
                'created_at' => '2021-03-20 08:22:22',
                'updated_at' => '2021-03-20 08:22:22',
            ),
            95 => 
            array (
                'id' => 596,
                'name' => 'LÜLEBURGAZ',
                'city_id' => 49,
                'created_at' => '2021-03-20 08:22:23',
                'updated_at' => '2021-03-20 08:22:23',
            ),
            96 => 
            array (
                'id' => 597,
                'name' => 'MERKEZ',
                'city_id' => 49,
                'created_at' => '2021-03-20 08:22:24',
                'updated_at' => '2021-03-20 08:22:24',
            ),
            97 => 
            array (
                'id' => 598,
                'name' => 'PEHLİVANKÖY',
                'city_id' => 49,
                'created_at' => '2021-03-20 08:22:25',
                'updated_at' => '2021-03-20 08:22:25',
            ),
            98 => 
            array (
                'id' => 599,
                'name' => 'PINARHİSAR',
                'city_id' => 49,
                'created_at' => '2021-03-20 08:22:25',
                'updated_at' => '2021-03-20 08:22:25',
            ),
            99 => 
            array (
                'id' => 600,
                'name' => 'VİZE',
                'city_id' => 49,
                'created_at' => '2021-03-20 08:22:25',
                'updated_at' => '2021-03-20 08:22:25',
            ),
            100 => 
            array (
                'id' => 601,
                'name' => 'AKÇAKENT',
                'city_id' => 50,
                'created_at' => '2021-03-20 08:22:26',
                'updated_at' => '2021-03-20 08:22:26',
            ),
            101 => 
            array (
                'id' => 602,
                'name' => 'AKPINAR',
                'city_id' => 50,
                'created_at' => '2021-03-20 08:22:27',
                'updated_at' => '2021-03-20 08:22:27',
            ),
            102 => 
            array (
                'id' => 603,
                'name' => 'BOZTEPE',
                'city_id' => 50,
                'created_at' => '2021-03-20 08:22:27',
                'updated_at' => '2021-03-20 08:22:27',
            ),
            103 => 
            array (
                'id' => 604,
                'name' => 'ÇİÇEKDAĞI',
                'city_id' => 50,
                'created_at' => '2021-03-20 08:22:28',
                'updated_at' => '2021-03-20 08:22:28',
            ),
            104 => 
            array (
                'id' => 605,
                'name' => 'KAMAN',
                'city_id' => 50,
                'created_at' => '2021-03-20 08:22:29',
                'updated_at' => '2021-03-20 08:22:29',
            ),
            105 => 
            array (
                'id' => 606,
                'name' => 'MERKEZ',
                'city_id' => 50,
                'created_at' => '2021-03-20 08:22:31',
                'updated_at' => '2021-03-20 08:22:31',
            ),
            106 => 
            array (
                'id' => 607,
                'name' => 'MUCUR',
                'city_id' => 50,
                'created_at' => '2021-03-20 08:22:32',
                'updated_at' => '2021-03-20 08:22:32',
            ),
            107 => 
            array (
                'id' => 608,
                'name' => 'ELBEYLİ',
                'city_id' => 51,
                'created_at' => '2021-03-20 08:22:33',
                'updated_at' => '2021-03-20 08:22:33',
            ),
            108 => 
            array (
                'id' => 609,
                'name' => 'MERKEZ',
                'city_id' => 51,
                'created_at' => '2021-03-20 08:22:34',
                'updated_at' => '2021-03-20 08:22:34',
            ),
            109 => 
            array (
                'id' => 610,
                'name' => 'MUSABEYLİ',
                'city_id' => 51,
                'created_at' => '2021-03-20 08:22:37',
                'updated_at' => '2021-03-20 08:22:37',
            ),
            110 => 
            array (
                'id' => 611,
                'name' => 'POLATELİ',
                'city_id' => 51,
                'created_at' => '2021-03-20 08:22:38',
                'updated_at' => '2021-03-20 08:22:38',
            ),
            111 => 
            array (
                'id' => 612,
                'name' => 'BAŞİSKELE',
                'city_id' => 52,
                'created_at' => '2021-03-20 08:22:38',
                'updated_at' => '2021-03-20 08:22:38',
            ),
            112 => 
            array (
                'id' => 613,
                'name' => 'ÇAYIROVA',
                'city_id' => 52,
                'created_at' => '2021-03-20 08:22:39',
                'updated_at' => '2021-03-20 08:22:39',
            ),
            113 => 
            array (
                'id' => 614,
                'name' => 'DARICA',
                'city_id' => 52,
                'created_at' => '2021-03-20 08:22:39',
                'updated_at' => '2021-03-20 08:22:39',
            ),
            114 => 
            array (
                'id' => 615,
                'name' => 'DERİNCE',
                'city_id' => 52,
                'created_at' => '2021-03-20 08:22:40',
                'updated_at' => '2021-03-20 08:22:40',
            ),
            115 => 
            array (
                'id' => 616,
                'name' => 'DİLOVASI',
                'city_id' => 52,
                'created_at' => '2021-03-20 08:22:40',
                'updated_at' => '2021-03-20 08:22:40',
            ),
            116 => 
            array (
                'id' => 617,
                'name' => 'GEBZE',
                'city_id' => 52,
                'created_at' => '2021-03-20 08:22:40',
                'updated_at' => '2021-03-20 08:22:40',
            ),
            117 => 
            array (
                'id' => 618,
                'name' => 'GÖLCÜK',
                'city_id' => 52,
                'created_at' => '2021-03-20 08:22:41',
                'updated_at' => '2021-03-20 08:22:41',
            ),
            118 => 
            array (
                'id' => 619,
                'name' => 'İZMİT',
                'city_id' => 52,
                'created_at' => '2021-03-20 08:22:42',
                'updated_at' => '2021-03-20 08:22:42',
            ),
            119 => 
            array (
                'id' => 620,
                'name' => 'KANDIRA',
                'city_id' => 52,
                'created_at' => '2021-03-20 08:22:43',
                'updated_at' => '2021-03-20 08:22:43',
            ),
            120 => 
            array (
                'id' => 621,
                'name' => 'KARAMÜRSEL',
                'city_id' => 52,
                'created_at' => '2021-03-20 08:22:45',
                'updated_at' => '2021-03-20 08:22:45',
            ),
            121 => 
            array (
                'id' => 622,
                'name' => 'KARTEPE',
                'city_id' => 52,
                'created_at' => '2021-03-20 08:22:46',
                'updated_at' => '2021-03-20 08:22:46',
            ),
            122 => 
            array (
                'id' => 623,
                'name' => 'KÖRFEZ',
                'city_id' => 52,
                'created_at' => '2021-03-20 08:22:46',
                'updated_at' => '2021-03-20 08:22:46',
            ),
            123 => 
            array (
                'id' => 624,
                'name' => 'AHIRLI',
                'city_id' => 53,
                'created_at' => '2021-03-20 08:22:47',
                'updated_at' => '2021-03-20 08:22:47',
            ),
            124 => 
            array (
                'id' => 625,
                'name' => 'AKÖREN',
                'city_id' => 53,
                'created_at' => '2021-03-20 08:22:47',
                'updated_at' => '2021-03-20 08:22:47',
            ),
            125 => 
            array (
                'id' => 626,
                'name' => 'AKŞEHİR',
                'city_id' => 53,
                'created_at' => '2021-03-20 08:22:47',
                'updated_at' => '2021-03-20 08:22:47',
            ),
            126 => 
            array (
                'id' => 627,
                'name' => 'ALTINEKİN',
                'city_id' => 53,
                'created_at' => '2021-03-20 08:22:48',
                'updated_at' => '2021-03-20 08:22:48',
            ),
            127 => 
            array (
                'id' => 628,
                'name' => 'BEYŞEHİR',
                'city_id' => 53,
                'created_at' => '2021-03-20 08:22:49',
                'updated_at' => '2021-03-20 08:22:49',
            ),
            128 => 
            array (
                'id' => 629,
                'name' => 'BOZKIR',
                'city_id' => 53,
                'created_at' => '2021-03-20 08:22:50',
                'updated_at' => '2021-03-20 08:22:50',
            ),
            129 => 
            array (
                'id' => 630,
                'name' => 'CİHANBEYLİ',
                'city_id' => 53,
                'created_at' => '2021-03-20 08:22:51',
                'updated_at' => '2021-03-20 08:22:51',
            ),
            130 => 
            array (
                'id' => 631,
                'name' => 'ÇELTİK',
                'city_id' => 53,
                'created_at' => '2021-03-20 08:22:51',
                'updated_at' => '2021-03-20 08:22:51',
            ),
            131 => 
            array (
                'id' => 632,
                'name' => 'ÇUMRA',
                'city_id' => 53,
                'created_at' => '2021-03-20 08:22:52',
                'updated_at' => '2021-03-20 08:22:52',
            ),
            132 => 
            array (
                'id' => 633,
                'name' => 'DERBENT',
                'city_id' => 53,
                'created_at' => '2021-03-20 08:22:53',
                'updated_at' => '2021-03-20 08:22:53',
            ),
            133 => 
            array (
                'id' => 634,
                'name' => 'DEREBUCAK',
                'city_id' => 53,
                'created_at' => '2021-03-20 08:22:53',
                'updated_at' => '2021-03-20 08:22:53',
            ),
            134 => 
            array (
                'id' => 635,
                'name' => 'DOĞANHİSAR',
                'city_id' => 53,
                'created_at' => '2021-03-20 08:22:53',
                'updated_at' => '2021-03-20 08:22:53',
            ),
            135 => 
            array (
                'id' => 636,
                'name' => 'EMİRGAZİ',
                'city_id' => 53,
                'created_at' => '2021-03-20 08:22:54',
                'updated_at' => '2021-03-20 08:22:54',
            ),
            136 => 
            array (
                'id' => 637,
                'name' => 'EREĞLİ',
                'city_id' => 53,
                'created_at' => '2021-03-20 08:22:54',
                'updated_at' => '2021-03-20 08:22:54',
            ),
            137 => 
            array (
                'id' => 638,
                'name' => 'GÜNEYSINIR',
                'city_id' => 53,
                'created_at' => '2021-03-20 08:22:55',
                'updated_at' => '2021-03-20 08:22:55',
            ),
            138 => 
            array (
                'id' => 639,
                'name' => 'HADİM',
                'city_id' => 53,
                'created_at' => '2021-03-20 08:22:56',
                'updated_at' => '2021-03-20 08:22:56',
            ),
            139 => 
            array (
                'id' => 640,
                'name' => 'HALKAPINAR',
                'city_id' => 53,
                'created_at' => '2021-03-20 08:22:56',
                'updated_at' => '2021-03-20 08:22:56',
            ),
            140 => 
            array (
                'id' => 641,
                'name' => 'HÜYÜK',
                'city_id' => 53,
                'created_at' => '2021-03-20 08:22:57',
                'updated_at' => '2021-03-20 08:22:57',
            ),
            141 => 
            array (
                'id' => 642,
                'name' => 'ILGIN',
                'city_id' => 53,
                'created_at' => '2021-03-20 08:22:57',
                'updated_at' => '2021-03-20 08:22:57',
            ),
            142 => 
            array (
                'id' => 643,
                'name' => 'KADINHANI',
                'city_id' => 53,
                'created_at' => '2021-03-20 08:22:58',
                'updated_at' => '2021-03-20 08:22:58',
            ),
            143 => 
            array (
                'id' => 644,
                'name' => 'KARAPINAR',
                'city_id' => 53,
                'created_at' => '2021-03-20 08:22:59',
                'updated_at' => '2021-03-20 08:22:59',
            ),
            144 => 
            array (
                'id' => 645,
                'name' => 'KARATAY',
                'city_id' => 53,
                'created_at' => '2021-03-20 08:23:00',
                'updated_at' => '2021-03-20 08:23:00',
            ),
            145 => 
            array (
                'id' => 646,
                'name' => 'KULU',
                'city_id' => 53,
                'created_at' => '2021-03-20 08:23:01',
                'updated_at' => '2021-03-20 08:23:01',
            ),
            146 => 
            array (
                'id' => 647,
                'name' => 'MERAM',
                'city_id' => 53,
                'created_at' => '2021-03-20 08:23:02',
                'updated_at' => '2021-03-20 08:23:02',
            ),
            147 => 
            array (
                'id' => 648,
                'name' => 'SARAYÖNÜ',
                'city_id' => 53,
                'created_at' => '2021-03-20 08:23:03',
                'updated_at' => '2021-03-20 08:23:03',
            ),
            148 => 
            array (
                'id' => 649,
                'name' => 'SELÇUKLU',
                'city_id' => 53,
                'created_at' => '2021-03-20 08:23:03',
                'updated_at' => '2021-03-20 08:23:03',
            ),
            149 => 
            array (
                'id' => 650,
                'name' => 'SEYDİŞEHİR',
                'city_id' => 53,
                'created_at' => '2021-03-20 08:23:05',
                'updated_at' => '2021-03-20 08:23:05',
            ),
            150 => 
            array (
                'id' => 651,
                'name' => 'TAŞKENT',
                'city_id' => 53,
                'created_at' => '2021-03-20 08:23:05',
                'updated_at' => '2021-03-20 08:23:05',
            ),
            151 => 
            array (
                'id' => 652,
                'name' => 'TUZLUKÇU',
                'city_id' => 53,
                'created_at' => '2021-03-20 08:23:06',
                'updated_at' => '2021-03-20 08:23:06',
            ),
            152 => 
            array (
                'id' => 653,
                'name' => 'YALIHÜYÜK',
                'city_id' => 53,
                'created_at' => '2021-03-20 08:23:06',
                'updated_at' => '2021-03-20 08:23:06',
            ),
            153 => 
            array (
                'id' => 654,
                'name' => 'YUNAK',
                'city_id' => 53,
                'created_at' => '2021-03-20 08:23:06',
                'updated_at' => '2021-03-20 08:23:06',
            ),
            154 => 
            array (
                'id' => 655,
                'name' => 'ALTINTAŞ',
                'city_id' => 54,
                'created_at' => '2021-03-20 08:23:07',
                'updated_at' => '2021-03-20 08:23:07',
            ),
            155 => 
            array (
                'id' => 656,
                'name' => 'ASLANAPA',
                'city_id' => 54,
                'created_at' => '2021-03-20 08:23:08',
                'updated_at' => '2021-03-20 08:23:08',
            ),
            156 => 
            array (
                'id' => 657,
                'name' => 'ÇAVDARHİSAR',
                'city_id' => 54,
                'created_at' => '2021-03-20 08:23:08',
                'updated_at' => '2021-03-20 08:23:08',
            ),
            157 => 
            array (
                'id' => 658,
                'name' => 'DOMANİÇ',
                'city_id' => 54,
                'created_at' => '2021-03-20 08:23:09',
                'updated_at' => '2021-03-20 08:23:09',
            ),
            158 => 
            array (
                'id' => 659,
                'name' => 'DUMLUPINAR',
                'city_id' => 54,
                'created_at' => '2021-03-20 08:23:09',
                'updated_at' => '2021-03-20 08:23:09',
            ),
            159 => 
            array (
                'id' => 660,
                'name' => 'EMET',
                'city_id' => 54,
                'created_at' => '2021-03-20 08:23:10',
                'updated_at' => '2021-03-20 08:23:10',
            ),
            160 => 
            array (
                'id' => 661,
                'name' => 'GEDİZ',
                'city_id' => 54,
                'created_at' => '2021-03-20 08:23:10',
                'updated_at' => '2021-03-20 08:23:10',
            ),
            161 => 
            array (
                'id' => 662,
                'name' => 'HİSARCIK',
                'city_id' => 54,
                'created_at' => '2021-03-20 08:23:12',
                'updated_at' => '2021-03-20 08:23:12',
            ),
            162 => 
            array (
                'id' => 663,
                'name' => 'MERKEZ',
                'city_id' => 54,
                'created_at' => '2021-03-20 08:23:13',
                'updated_at' => '2021-03-20 08:23:13',
            ),
            163 => 
            array (
                'id' => 664,
                'name' => 'PAZARLAR',
                'city_id' => 54,
                'created_at' => '2021-03-20 08:23:16',
                'updated_at' => '2021-03-20 08:23:16',
            ),
            164 => 
            array (
                'id' => 665,
                'name' => 'SİMAV',
                'city_id' => 54,
                'created_at' => '2021-03-20 08:23:16',
                'updated_at' => '2021-03-20 08:23:16',
            ),
            165 => 
            array (
                'id' => 666,
                'name' => 'ŞAPHANE',
                'city_id' => 54,
                'created_at' => '2021-03-20 08:23:19',
                'updated_at' => '2021-03-20 08:23:19',
            ),
            166 => 
            array (
                'id' => 667,
                'name' => 'TAVŞANLI',
                'city_id' => 54,
                'created_at' => '2021-03-20 08:23:20',
                'updated_at' => '2021-03-20 08:23:20',
            ),
            167 => 
            array (
                'id' => 668,
                'name' => 'AKÇADAĞ',
                'city_id' => 55,
                'created_at' => '2021-03-20 08:23:22',
                'updated_at' => '2021-03-20 08:23:22',
            ),
            168 => 
            array (
                'id' => 669,
                'name' => 'ARAPGİR',
                'city_id' => 55,
                'created_at' => '2021-03-20 08:23:23',
                'updated_at' => '2021-03-20 08:23:23',
            ),
            169 => 
            array (
                'id' => 670,
                'name' => 'ARGUVAN',
                'city_id' => 55,
                'created_at' => '2021-03-20 08:23:25',
                'updated_at' => '2021-03-20 08:23:25',
            ),
            170 => 
            array (
                'id' => 671,
                'name' => 'BATTALGAZİ',
                'city_id' => 55,
                'created_at' => '2021-03-20 08:23:25',
                'updated_at' => '2021-03-20 08:23:25',
            ),
            171 => 
            array (
                'id' => 672,
                'name' => 'DARENDE',
                'city_id' => 55,
                'created_at' => '2021-03-20 08:23:27',
                'updated_at' => '2021-03-20 08:23:27',
            ),
            172 => 
            array (
                'id' => 673,
                'name' => 'DOĞANŞEHİR',
                'city_id' => 55,
                'created_at' => '2021-03-20 08:23:28',
                'updated_at' => '2021-03-20 08:23:28',
            ),
            173 => 
            array (
                'id' => 674,
                'name' => 'DOĞANYOL',
                'city_id' => 55,
                'created_at' => '2021-03-20 08:23:29',
                'updated_at' => '2021-03-20 08:23:29',
            ),
            174 => 
            array (
                'id' => 675,
                'name' => 'HEKİMHAN',
                'city_id' => 55,
                'created_at' => '2021-03-20 08:23:29',
                'updated_at' => '2021-03-20 08:23:29',
            ),
            175 => 
            array (
                'id' => 676,
                'name' => 'KALE',
                'city_id' => 55,
                'created_at' => '2021-03-20 08:23:30',
                'updated_at' => '2021-03-20 08:23:30',
            ),
            176 => 
            array (
                'id' => 677,
                'name' => 'KULUNCAK',
                'city_id' => 55,
                'created_at' => '2021-03-20 08:23:31',
                'updated_at' => '2021-03-20 08:23:31',
            ),
            177 => 
            array (
                'id' => 678,
                'name' => 'PÜTÜRGE',
                'city_id' => 55,
                'created_at' => '2021-03-20 08:23:31',
                'updated_at' => '2021-03-20 08:23:31',
            ),
            178 => 
            array (
                'id' => 679,
                'name' => 'YAZIHAN',
                'city_id' => 55,
                'created_at' => '2021-03-20 08:23:33',
                'updated_at' => '2021-03-20 08:23:33',
            ),
            179 => 
            array (
                'id' => 680,
                'name' => 'YEŞİLYURT',
                'city_id' => 55,
                'created_at' => '2021-03-20 08:23:33',
                'updated_at' => '2021-03-20 08:23:33',
            ),
            180 => 
            array (
                'id' => 681,
                'name' => 'AHMETLİ',
                'city_id' => 56,
                'created_at' => '2021-03-20 08:23:34',
                'updated_at' => '2021-03-20 08:23:34',
            ),
            181 => 
            array (
                'id' => 682,
                'name' => 'AKHİSAR',
                'city_id' => 56,
                'created_at' => '2021-03-20 08:23:35',
                'updated_at' => '2021-03-20 08:23:35',
            ),
            182 => 
            array (
                'id' => 683,
                'name' => 'ALAŞEHİR',
                'city_id' => 56,
                'created_at' => '2021-03-20 08:23:37',
                'updated_at' => '2021-03-20 08:23:37',
            ),
            183 => 
            array (
                'id' => 684,
                'name' => 'DEMİRCİ',
                'city_id' => 56,
                'created_at' => '2021-03-20 08:23:38',
                'updated_at' => '2021-03-20 08:23:38',
            ),
            184 => 
            array (
                'id' => 685,
                'name' => 'GÖLMARMARA',
                'city_id' => 56,
                'created_at' => '2021-03-20 08:23:40',
                'updated_at' => '2021-03-20 08:23:40',
            ),
            185 => 
            array (
                'id' => 686,
                'name' => 'GÖRDES',
                'city_id' => 56,
                'created_at' => '2021-03-20 08:23:40',
                'updated_at' => '2021-03-20 08:23:40',
            ),
            186 => 
            array (
                'id' => 687,
                'name' => 'KIRKAĞAÇ',
                'city_id' => 56,
                'created_at' => '2021-03-20 08:23:41',
                'updated_at' => '2021-03-20 08:23:41',
            ),
            187 => 
            array (
                'id' => 688,
                'name' => 'KÖPRÜBAŞI',
                'city_id' => 56,
                'created_at' => '2021-03-20 08:23:42',
                'updated_at' => '2021-03-20 08:23:42',
            ),
            188 => 
            array (
                'id' => 689,
                'name' => 'KULA',
                'city_id' => 56,
                'created_at' => '2021-03-20 08:23:43',
                'updated_at' => '2021-03-20 08:23:43',
            ),
            189 => 
            array (
                'id' => 690,
                'name' => 'SALİHLİ',
                'city_id' => 56,
                'created_at' => '2021-03-20 08:23:44',
                'updated_at' => '2021-03-20 08:23:44',
            ),
            190 => 
            array (
                'id' => 691,
                'name' => 'SARIGÖL',
                'city_id' => 56,
                'created_at' => '2021-03-20 08:23:46',
                'updated_at' => '2021-03-20 08:23:46',
            ),
            191 => 
            array (
                'id' => 692,
                'name' => 'SARUHANLI',
                'city_id' => 56,
                'created_at' => '2021-03-20 08:23:46',
                'updated_at' => '2021-03-20 08:23:46',
            ),
            192 => 
            array (
                'id' => 693,
                'name' => 'SELENDİ',
                'city_id' => 56,
                'created_at' => '2021-03-20 08:23:47',
                'updated_at' => '2021-03-20 08:23:47',
            ),
            193 => 
            array (
                'id' => 694,
                'name' => 'SOMA',
                'city_id' => 56,
                'created_at' => '2021-03-20 08:23:48',
                'updated_at' => '2021-03-20 08:23:48',
            ),
            194 => 
            array (
                'id' => 695,
                'name' => 'ŞEHZADELER',
                'city_id' => 56,
                'created_at' => '2021-03-20 08:23:49',
                'updated_at' => '2021-03-20 08:23:49',
            ),
            195 => 
            array (
                'id' => 696,
                'name' => 'TURGUTLU',
                'city_id' => 56,
                'created_at' => '2021-03-20 08:23:50',
                'updated_at' => '2021-03-20 08:23:50',
            ),
            196 => 
            array (
                'id' => 697,
                'name' => 'YUNUSEMRE',
                'city_id' => 56,
                'created_at' => '2021-03-20 08:23:51',
                'updated_at' => '2021-03-20 08:23:51',
            ),
            197 => 
            array (
                'id' => 698,
                'name' => 'ARTUKLU',
                'city_id' => 57,
                'created_at' => '2021-03-20 08:23:53',
                'updated_at' => '2021-03-20 08:23:53',
            ),
            198 => 
            array (
                'id' => 699,
                'name' => 'DARGEÇİT',
                'city_id' => 57,
                'created_at' => '2021-03-20 08:23:54',
                'updated_at' => '2021-03-20 08:23:54',
            ),
            199 => 
            array (
                'id' => 700,
                'name' => 'DERİK',
                'city_id' => 57,
                'created_at' => '2021-03-20 08:23:55',
                'updated_at' => '2021-03-20 08:23:55',
            ),
            200 => 
            array (
                'id' => 701,
                'name' => 'KIZILTEPE',
                'city_id' => 57,
                'created_at' => '2021-03-20 08:23:56',
                'updated_at' => '2021-03-20 08:23:56',
            ),
            201 => 
            array (
                'id' => 702,
                'name' => 'MAZIDAĞI',
                'city_id' => 57,
                'created_at' => '2021-03-20 08:23:59',
                'updated_at' => '2021-03-20 08:23:59',
            ),
            202 => 
            array (
                'id' => 703,
                'name' => 'MİDYAT',
                'city_id' => 57,
                'created_at' => '2021-03-20 08:24:00',
                'updated_at' => '2021-03-20 08:24:00',
            ),
            203 => 
            array (
                'id' => 704,
                'name' => 'NUSAYBİN',
                'city_id' => 57,
                'created_at' => '2021-03-20 08:24:01',
                'updated_at' => '2021-03-20 08:24:01',
            ),
            204 => 
            array (
                'id' => 705,
                'name' => 'ÖMERLİ',
                'city_id' => 57,
                'created_at' => '2021-03-20 08:24:03',
                'updated_at' => '2021-03-20 08:24:03',
            ),
            205 => 
            array (
                'id' => 706,
                'name' => 'SAVUR',
                'city_id' => 57,
                'created_at' => '2021-03-20 08:24:04',
                'updated_at' => '2021-03-20 08:24:04',
            ),
            206 => 
            array (
                'id' => 707,
                'name' => 'YEŞİLLİ',
                'city_id' => 57,
                'created_at' => '2021-03-20 08:24:04',
                'updated_at' => '2021-03-20 08:24:04',
            ),
            207 => 
            array (
                'id' => 708,
                'name' => 'AKDENİZ',
                'city_id' => 58,
                'created_at' => '2021-03-20 08:24:05',
                'updated_at' => '2021-03-20 08:24:05',
            ),
            208 => 
            array (
                'id' => 709,
                'name' => 'ANAMUR',
                'city_id' => 58,
                'created_at' => '2021-03-20 08:24:06',
                'updated_at' => '2021-03-20 08:24:06',
            ),
            209 => 
            array (
                'id' => 710,
                'name' => 'AYDINCIK',
                'city_id' => 58,
                'created_at' => '2021-03-20 08:24:07',
                'updated_at' => '2021-03-20 08:24:07',
            ),
            210 => 
            array (
                'id' => 711,
                'name' => 'BOZYAZI',
                'city_id' => 58,
                'created_at' => '2021-03-20 08:24:07',
                'updated_at' => '2021-03-20 08:24:07',
            ),
            211 => 
            array (
                'id' => 712,
                'name' => 'ÇAMLIYAYLA',
                'city_id' => 58,
                'created_at' => '2021-03-20 08:24:07',
                'updated_at' => '2021-03-20 08:24:07',
            ),
            212 => 
            array (
                'id' => 713,
                'name' => 'ERDEMLİ',
                'city_id' => 58,
                'created_at' => '2021-03-20 08:24:08',
                'updated_at' => '2021-03-20 08:24:08',
            ),
            213 => 
            array (
                'id' => 714,
                'name' => 'GÜLNAR',
                'city_id' => 58,
                'created_at' => '2021-03-20 08:24:09',
                'updated_at' => '2021-03-20 08:24:09',
            ),
            214 => 
            array (
                'id' => 715,
                'name' => 'MEZİTLİ',
                'city_id' => 58,
                'created_at' => '2021-03-20 08:24:10',
                'updated_at' => '2021-03-20 08:24:10',
            ),
            215 => 
            array (
                'id' => 716,
                'name' => 'MUT',
                'city_id' => 58,
                'created_at' => '2021-03-20 08:24:10',
                'updated_at' => '2021-03-20 08:24:10',
            ),
            216 => 
            array (
                'id' => 717,
                'name' => 'SİLİFKE',
                'city_id' => 58,
                'created_at' => '2021-03-20 08:24:12',
                'updated_at' => '2021-03-20 08:24:12',
            ),
            217 => 
            array (
                'id' => 718,
                'name' => 'TARSUS',
                'city_id' => 58,
                'created_at' => '2021-03-20 08:24:13',
                'updated_at' => '2021-03-20 08:24:13',
            ),
            218 => 
            array (
                'id' => 719,
                'name' => 'TOROSLAR',
                'city_id' => 58,
                'created_at' => '2021-03-20 08:24:16',
                'updated_at' => '2021-03-20 08:24:16',
            ),
            219 => 
            array (
                'id' => 720,
                'name' => 'YENİŞEHİR',
                'city_id' => 58,
                'created_at' => '2021-03-20 08:24:17',
                'updated_at' => '2021-03-20 08:24:17',
            ),
            220 => 
            array (
                'id' => 721,
                'name' => 'BODRUM',
                'city_id' => 59,
                'created_at' => '2021-03-20 08:24:18',
                'updated_at' => '2021-03-20 08:24:18',
            ),
            221 => 
            array (
                'id' => 722,
                'name' => 'DALAMAN',
                'city_id' => 59,
                'created_at' => '2021-03-20 08:24:19',
                'updated_at' => '2021-03-20 08:24:19',
            ),
            222 => 
            array (
                'id' => 723,
                'name' => 'DATÇA',
                'city_id' => 59,
                'created_at' => '2021-03-20 08:24:19',
                'updated_at' => '2021-03-20 08:24:19',
            ),
            223 => 
            array (
                'id' => 724,
                'name' => 'FETHİYE',
                'city_id' => 59,
                'created_at' => '2021-03-20 08:24:20',
                'updated_at' => '2021-03-20 08:24:20',
            ),
            224 => 
            array (
                'id' => 725,
                'name' => 'KAVAKLIDERE',
                'city_id' => 59,
                'created_at' => '2021-03-20 08:24:20',
                'updated_at' => '2021-03-20 08:24:20',
            ),
            225 => 
            array (
                'id' => 726,
                'name' => 'KÖYCEĞİZ',
                'city_id' => 59,
                'created_at' => '2021-03-20 08:24:21',
                'updated_at' => '2021-03-20 08:24:21',
            ),
            226 => 
            array (
                'id' => 727,
                'name' => 'MARMARİS',
                'city_id' => 59,
                'created_at' => '2021-03-20 08:24:21',
                'updated_at' => '2021-03-20 08:24:21',
            ),
            227 => 
            array (
                'id' => 728,
                'name' => 'MENTEŞE',
                'city_id' => 59,
                'created_at' => '2021-03-20 08:24:21',
                'updated_at' => '2021-03-20 08:24:21',
            ),
            228 => 
            array (
                'id' => 729,
                'name' => 'MİLAS',
                'city_id' => 59,
                'created_at' => '2021-03-20 08:24:23',
                'updated_at' => '2021-03-20 08:24:23',
            ),
            229 => 
            array (
                'id' => 730,
                'name' => 'ORTACA',
                'city_id' => 59,
                'created_at' => '2021-03-20 08:24:25',
                'updated_at' => '2021-03-20 08:24:25',
            ),
            230 => 
            array (
                'id' => 731,
                'name' => 'SEYDİKEMER',
                'city_id' => 59,
                'created_at' => '2021-03-20 08:24:25',
                'updated_at' => '2021-03-20 08:24:25',
            ),
            231 => 
            array (
                'id' => 732,
                'name' => 'ULA',
                'city_id' => 59,
                'created_at' => '2021-03-20 08:24:26',
                'updated_at' => '2021-03-20 08:24:26',
            ),
            232 => 
            array (
                'id' => 733,
                'name' => 'YATAĞAN',
                'city_id' => 59,
                'created_at' => '2021-03-20 08:24:27',
                'updated_at' => '2021-03-20 08:24:27',
            ),
            233 => 
            array (
                'id' => 734,
                'name' => 'BULANIK',
                'city_id' => 60,
                'created_at' => '2021-03-20 08:24:28',
                'updated_at' => '2021-03-20 08:24:28',
            ),
            234 => 
            array (
                'id' => 735,
                'name' => 'HASKÖY',
                'city_id' => 60,
                'created_at' => '2021-03-20 08:24:30',
                'updated_at' => '2021-03-20 08:24:30',
            ),
            235 => 
            array (
                'id' => 736,
                'name' => 'KORKUT',
                'city_id' => 60,
                'created_at' => '2021-03-20 08:24:30',
                'updated_at' => '2021-03-20 08:24:30',
            ),
            236 => 
            array (
                'id' => 737,
                'name' => 'MALAZGİRT',
                'city_id' => 60,
                'created_at' => '2021-03-20 08:24:31',
                'updated_at' => '2021-03-20 08:24:31',
            ),
            237 => 
            array (
                'id' => 738,
                'name' => 'MERKEZ',
                'city_id' => 60,
                'created_at' => '2021-03-20 08:24:33',
                'updated_at' => '2021-03-20 08:24:33',
            ),
            238 => 
            array (
                'id' => 739,
                'name' => 'VARTO',
                'city_id' => 60,
                'created_at' => '2021-03-20 08:24:36',
                'updated_at' => '2021-03-20 08:24:36',
            ),
            239 => 
            array (
                'id' => 740,
                'name' => 'ACIGÖL',
                'city_id' => 61,
                'created_at' => '2021-03-20 08:24:38',
                'updated_at' => '2021-03-20 08:24:38',
            ),
            240 => 
            array (
                'id' => 741,
                'name' => 'AVANOS',
                'city_id' => 61,
                'created_at' => '2021-03-20 08:24:38',
                'updated_at' => '2021-03-20 08:24:38',
            ),
            241 => 
            array (
                'id' => 742,
                'name' => 'DERİNKUYU',
                'city_id' => 61,
                'created_at' => '2021-03-20 08:24:39',
                'updated_at' => '2021-03-20 08:24:39',
            ),
            242 => 
            array (
                'id' => 743,
                'name' => 'GÜLŞEHİR',
                'city_id' => 61,
                'created_at' => '2021-03-20 08:24:40',
                'updated_at' => '2021-03-20 08:24:40',
            ),
            243 => 
            array (
                'id' => 744,
                'name' => 'HACIBEKTAŞ',
                'city_id' => 61,
                'created_at' => '2021-03-20 08:24:41',
                'updated_at' => '2021-03-20 08:24:41',
            ),
            244 => 
            array (
                'id' => 745,
                'name' => 'KOZAKLI',
                'city_id' => 61,
                'created_at' => '2021-03-20 08:24:42',
                'updated_at' => '2021-03-20 08:24:42',
            ),
            245 => 
            array (
                'id' => 746,
                'name' => 'MERKEZ',
                'city_id' => 61,
                'created_at' => '2021-03-20 08:24:43',
                'updated_at' => '2021-03-20 08:24:43',
            ),
            246 => 
            array (
                'id' => 747,
                'name' => 'ÜRGÜP',
                'city_id' => 61,
                'created_at' => '2021-03-20 08:24:44',
                'updated_at' => '2021-03-20 08:24:44',
            ),
            247 => 
            array (
                'id' => 748,
                'name' => 'ALTUNHİSAR',
                'city_id' => 62,
                'created_at' => '2021-03-20 08:24:45',
                'updated_at' => '2021-03-20 08:24:45',
            ),
            248 => 
            array (
                'id' => 749,
                'name' => 'BOR',
                'city_id' => 62,
                'created_at' => '2021-03-20 08:24:45',
                'updated_at' => '2021-03-20 08:24:45',
            ),
            249 => 
            array (
                'id' => 750,
                'name' => 'ÇAMARDI',
                'city_id' => 62,
                'created_at' => '2021-03-20 08:24:46',
                'updated_at' => '2021-03-20 08:24:46',
            ),
        ));
        \DB::table('districts')->insert(array (
            0 => 
            array (
                'id' => 751,
                'name' => 'ÇİFTLİK',
                'city_id' => 62,
                'created_at' => '2021-03-20 08:24:47',
                'updated_at' => '2021-03-20 08:24:47',
            ),
            1 => 
            array (
                'id' => 752,
                'name' => 'MERKEZ',
                'city_id' => 62,
                'created_at' => '2021-03-20 08:24:47',
                'updated_at' => '2021-03-20 08:24:47',
            ),
            2 => 
            array (
                'id' => 753,
                'name' => 'ULUKIŞLA',
                'city_id' => 62,
                'created_at' => '2021-03-20 08:24:49',
                'updated_at' => '2021-03-20 08:24:49',
            ),
            3 => 
            array (
                'id' => 754,
                'name' => 'AKKUŞ',
                'city_id' => 63,
                'created_at' => '2021-03-20 08:24:51',
                'updated_at' => '2021-03-20 08:24:51',
            ),
            4 => 
            array (
                'id' => 755,
                'name' => 'ALTINORDU',
                'city_id' => 63,
                'created_at' => '2021-03-20 08:24:52',
                'updated_at' => '2021-03-20 08:24:52',
            ),
            5 => 
            array (
                'id' => 756,
                'name' => 'AYBASTI',
                'city_id' => 63,
                'created_at' => '2021-03-20 08:24:53',
                'updated_at' => '2021-03-20 08:24:53',
            ),
            6 => 
            array (
                'id' => 757,
                'name' => 'ÇAMAŞ',
                'city_id' => 63,
                'created_at' => '2021-03-20 08:24:54',
                'updated_at' => '2021-03-20 08:24:54',
            ),
            7 => 
            array (
                'id' => 758,
                'name' => 'ÇATALPINAR',
                'city_id' => 63,
                'created_at' => '2021-03-20 08:24:54',
                'updated_at' => '2021-03-20 08:24:54',
            ),
            8 => 
            array (
                'id' => 759,
                'name' => 'ÇAYBAŞI',
                'city_id' => 63,
                'created_at' => '2021-03-20 08:24:54',
                'updated_at' => '2021-03-20 08:24:54',
            ),
            9 => 
            array (
                'id' => 760,
                'name' => 'FATSA',
                'city_id' => 63,
                'created_at' => '2021-03-20 08:24:55',
                'updated_at' => '2021-03-20 08:24:55',
            ),
            10 => 
            array (
                'id' => 761,
                'name' => 'GÖLKÖY',
                'city_id' => 63,
                'created_at' => '2021-03-20 08:24:56',
                'updated_at' => '2021-03-20 08:24:56',
            ),
            11 => 
            array (
                'id' => 762,
                'name' => 'GÜLYALI',
                'city_id' => 63,
                'created_at' => '2021-03-20 08:24:57',
                'updated_at' => '2021-03-20 08:24:57',
            ),
            12 => 
            array (
                'id' => 763,
                'name' => 'GÜRGENTEPE',
                'city_id' => 63,
                'created_at' => '2021-03-20 08:24:57',
                'updated_at' => '2021-03-20 08:24:57',
            ),
            13 => 
            array (
                'id' => 764,
                'name' => 'İKİZCE',
                'city_id' => 63,
                'created_at' => '2021-03-20 08:24:58',
                'updated_at' => '2021-03-20 08:24:58',
            ),
            14 => 
            array (
                'id' => 765,
                'name' => 'KABADÜZ',
                'city_id' => 63,
                'created_at' => '2021-03-20 08:24:58',
                'updated_at' => '2021-03-20 08:24:58',
            ),
            15 => 
            array (
                'id' => 766,
                'name' => 'KABATAŞ',
                'city_id' => 63,
                'created_at' => '2021-03-20 08:24:59',
                'updated_at' => '2021-03-20 08:24:59',
            ),
            16 => 
            array (
                'id' => 767,
                'name' => 'KORGAN',
                'city_id' => 63,
                'created_at' => '2021-03-20 08:24:59',
                'updated_at' => '2021-03-20 08:24:59',
            ),
            17 => 
            array (
                'id' => 768,
                'name' => 'KUMRU',
                'city_id' => 63,
                'created_at' => '2021-03-20 08:24:59',
                'updated_at' => '2021-03-20 08:24:59',
            ),
            18 => 
            array (
                'id' => 769,
                'name' => 'MESUDİYE',
                'city_id' => 63,
                'created_at' => '2021-03-20 08:25:00',
                'updated_at' => '2021-03-20 08:25:00',
            ),
            19 => 
            array (
                'id' => 770,
                'name' => 'PERŞEMBE',
                'city_id' => 63,
                'created_at' => '2021-03-20 08:25:01',
                'updated_at' => '2021-03-20 08:25:01',
            ),
            20 => 
            array (
                'id' => 771,
                'name' => 'ULUBEY',
                'city_id' => 63,
                'created_at' => '2021-03-20 08:25:02',
                'updated_at' => '2021-03-20 08:25:02',
            ),
            21 => 
            array (
                'id' => 772,
                'name' => 'ÜNYE',
                'city_id' => 63,
                'created_at' => '2021-03-20 08:25:03',
                'updated_at' => '2021-03-20 08:25:03',
            ),
            22 => 
            array (
                'id' => 773,
                'name' => 'BAHÇE',
                'city_id' => 64,
                'created_at' => '2021-03-20 08:25:04',
                'updated_at' => '2021-03-20 08:25:04',
            ),
            23 => 
            array (
                'id' => 774,
                'name' => 'DÜZİÇİ',
                'city_id' => 64,
                'created_at' => '2021-03-20 08:25:05',
                'updated_at' => '2021-03-20 08:25:05',
            ),
            24 => 
            array (
                'id' => 775,
                'name' => 'HASANBEYLİ',
                'city_id' => 64,
                'created_at' => '2021-03-20 08:25:07',
                'updated_at' => '2021-03-20 08:25:07',
            ),
            25 => 
            array (
                'id' => 776,
                'name' => 'KADİRLİ',
                'city_id' => 64,
                'created_at' => '2021-03-20 08:25:08',
                'updated_at' => '2021-03-20 08:25:08',
            ),
            26 => 
            array (
                'id' => 777,
                'name' => 'MERKEZ',
                'city_id' => 64,
                'created_at' => '2021-03-20 08:25:11',
                'updated_at' => '2021-03-20 08:25:11',
            ),
            27 => 
            array (
                'id' => 778,
                'name' => 'SUMBAS',
                'city_id' => 64,
                'created_at' => '2021-03-20 08:25:13',
                'updated_at' => '2021-03-20 08:25:13',
            ),
            28 => 
            array (
                'id' => 779,
                'name' => 'TOPRAKKALE',
                'city_id' => 64,
                'created_at' => '2021-03-20 08:25:14',
                'updated_at' => '2021-03-20 08:25:14',
            ),
            29 => 
            array (
                'id' => 780,
                'name' => 'ARDEŞEN',
                'city_id' => 65,
                'created_at' => '2021-03-20 08:25:14',
                'updated_at' => '2021-03-20 08:25:14',
            ),
            30 => 
            array (
                'id' => 781,
                'name' => 'ÇAMLIHEMŞİN',
                'city_id' => 65,
                'created_at' => '2021-03-20 08:25:17',
                'updated_at' => '2021-03-20 08:25:17',
            ),
            31 => 
            array (
                'id' => 782,
                'name' => 'ÇAYELİ',
                'city_id' => 65,
                'created_at' => '2021-03-20 08:25:18',
                'updated_at' => '2021-03-20 08:25:18',
            ),
            32 => 
            array (
                'id' => 783,
                'name' => 'DEREPAZARI',
                'city_id' => 65,
                'created_at' => '2021-03-20 08:25:24',
                'updated_at' => '2021-03-20 08:25:24',
            ),
            33 => 
            array (
                'id' => 784,
                'name' => 'FINDIKLI',
                'city_id' => 65,
                'created_at' => '2021-03-20 08:25:24',
                'updated_at' => '2021-03-20 08:25:24',
            ),
            34 => 
            array (
                'id' => 785,
                'name' => 'GÜNEYSU',
                'city_id' => 65,
                'created_at' => '2021-03-20 08:25:26',
                'updated_at' => '2021-03-20 08:25:26',
            ),
            35 => 
            array (
                'id' => 786,
                'name' => 'HEMŞİN',
                'city_id' => 65,
                'created_at' => '2021-03-20 08:25:27',
                'updated_at' => '2021-03-20 08:25:27',
            ),
            36 => 
            array (
                'id' => 787,
                'name' => 'İKİZDERE',
                'city_id' => 65,
                'created_at' => '2021-03-20 08:25:27',
                'updated_at' => '2021-03-20 08:25:27',
            ),
            37 => 
            array (
                'id' => 788,
                'name' => 'İYİDERE',
                'city_id' => 65,
                'created_at' => '2021-03-20 08:25:28',
                'updated_at' => '2021-03-20 08:25:28',
            ),
            38 => 
            array (
                'id' => 789,
                'name' => 'KALKANDERE',
                'city_id' => 65,
                'created_at' => '2021-03-20 08:25:29',
                'updated_at' => '2021-03-20 08:25:29',
            ),
            39 => 
            array (
                'id' => 790,
                'name' => 'MERKEZ',
                'city_id' => 65,
                'created_at' => '2021-03-20 08:25:30',
                'updated_at' => '2021-03-20 08:25:30',
            ),
            40 => 
            array (
                'id' => 791,
                'name' => 'PAZAR',
                'city_id' => 65,
                'created_at' => '2021-03-20 08:25:34',
                'updated_at' => '2021-03-20 08:25:34',
            ),
            41 => 
            array (
                'id' => 792,
                'name' => 'ADAPAZARI',
                'city_id' => 66,
                'created_at' => '2021-03-20 08:25:36',
                'updated_at' => '2021-03-20 08:25:36',
            ),
            42 => 
            array (
                'id' => 793,
                'name' => 'AKYAZI',
                'city_id' => 66,
                'created_at' => '2021-03-20 08:25:38',
                'updated_at' => '2021-03-20 08:25:38',
            ),
            43 => 
            array (
                'id' => 794,
                'name' => 'ARİFİYE',
                'city_id' => 66,
                'created_at' => '2021-03-20 08:25:39',
                'updated_at' => '2021-03-20 08:25:39',
            ),
            44 => 
            array (
                'id' => 795,
                'name' => 'ERENLER',
                'city_id' => 66,
                'created_at' => '2021-03-20 08:25:39',
                'updated_at' => '2021-03-20 08:25:39',
            ),
            45 => 
            array (
                'id' => 796,
                'name' => 'FERİZLİ',
                'city_id' => 66,
                'created_at' => '2021-03-20 08:25:40',
                'updated_at' => '2021-03-20 08:25:40',
            ),
            46 => 
            array (
                'id' => 797,
                'name' => 'GEYVE',
                'city_id' => 66,
                'created_at' => '2021-03-20 08:25:40',
                'updated_at' => '2021-03-20 08:25:40',
            ),
            47 => 
            array (
                'id' => 798,
                'name' => 'HENDEK',
                'city_id' => 66,
                'created_at' => '2021-03-20 08:25:41',
                'updated_at' => '2021-03-20 08:25:41',
            ),
            48 => 
            array (
                'id' => 799,
                'name' => 'KARAPÜRÇEK',
                'city_id' => 66,
                'created_at' => '2021-03-20 08:25:43',
                'updated_at' => '2021-03-20 08:25:43',
            ),
            49 => 
            array (
                'id' => 800,
                'name' => 'KARASU',
                'city_id' => 66,
                'created_at' => '2021-03-20 08:25:43',
                'updated_at' => '2021-03-20 08:25:43',
            ),
            50 => 
            array (
                'id' => 801,
                'name' => 'KAYNARCA',
                'city_id' => 66,
                'created_at' => '2021-03-20 08:25:44',
                'updated_at' => '2021-03-20 08:25:44',
            ),
            51 => 
            array (
                'id' => 802,
                'name' => 'KOCAALİ',
                'city_id' => 66,
                'created_at' => '2021-03-20 08:25:45',
                'updated_at' => '2021-03-20 08:25:45',
            ),
            52 => 
            array (
                'id' => 803,
                'name' => 'PAMUKOVA',
                'city_id' => 66,
                'created_at' => '2021-03-20 08:25:45',
                'updated_at' => '2021-03-20 08:25:45',
            ),
            53 => 
            array (
                'id' => 804,
                'name' => 'SAPANCA',
                'city_id' => 66,
                'created_at' => '2021-03-20 08:25:46',
                'updated_at' => '2021-03-20 08:25:46',
            ),
            54 => 
            array (
                'id' => 805,
                'name' => 'SERDİVAN',
                'city_id' => 66,
                'created_at' => '2021-03-20 08:25:46',
                'updated_at' => '2021-03-20 08:25:46',
            ),
            55 => 
            array (
                'id' => 806,
                'name' => 'SÖĞÜTLÜ',
                'city_id' => 66,
                'created_at' => '2021-03-20 08:25:47',
                'updated_at' => '2021-03-20 08:25:47',
            ),
            56 => 
            array (
                'id' => 807,
                'name' => 'TARAKLI',
                'city_id' => 66,
                'created_at' => '2021-03-20 08:25:47',
                'updated_at' => '2021-03-20 08:25:47',
            ),
            57 => 
            array (
                'id' => 808,
                'name' => '19 MAYIS',
                'city_id' => 67,
                'created_at' => '2021-03-20 08:25:48',
                'updated_at' => '2021-03-20 08:25:48',
            ),
            58 => 
            array (
                'id' => 809,
                'name' => 'ALAÇAM',
                'city_id' => 67,
                'created_at' => '2021-03-20 08:25:48',
                'updated_at' => '2021-03-20 08:25:48',
            ),
            59 => 
            array (
                'id' => 810,
                'name' => 'ASARCIK',
                'city_id' => 67,
                'created_at' => '2021-03-20 08:25:49',
                'updated_at' => '2021-03-20 08:25:49',
            ),
            60 => 
            array (
                'id' => 811,
                'name' => 'ATAKUM',
                'city_id' => 67,
                'created_at' => '2021-03-20 08:25:50',
                'updated_at' => '2021-03-20 08:25:50',
            ),
            61 => 
            array (
                'id' => 812,
                'name' => 'AYVACIK',
                'city_id' => 67,
                'created_at' => '2021-03-20 08:25:51',
                'updated_at' => '2021-03-20 08:25:51',
            ),
            62 => 
            array (
                'id' => 813,
                'name' => 'BAFRA',
                'city_id' => 67,
                'created_at' => '2021-03-20 08:25:52',
                'updated_at' => '2021-03-20 08:25:52',
            ),
            63 => 
            array (
                'id' => 814,
                'name' => 'CANİK',
                'city_id' => 67,
                'created_at' => '2021-03-20 08:25:54',
                'updated_at' => '2021-03-20 08:25:54',
            ),
            64 => 
            array (
                'id' => 815,
                'name' => 'ÇARŞAMBA',
                'city_id' => 67,
                'created_at' => '2021-03-20 08:25:55',
                'updated_at' => '2021-03-20 08:25:55',
            ),
            65 => 
            array (
                'id' => 816,
                'name' => 'HAVZA',
                'city_id' => 67,
                'created_at' => '2021-03-20 08:25:57',
                'updated_at' => '2021-03-20 08:25:57',
            ),
            66 => 
            array (
                'id' => 817,
                'name' => 'İLKADIM',
                'city_id' => 67,
                'created_at' => '2021-03-20 08:25:59',
                'updated_at' => '2021-03-20 08:25:59',
            ),
            67 => 
            array (
                'id' => 818,
                'name' => 'KAVAK',
                'city_id' => 67,
                'created_at' => '2021-03-20 08:26:00',
                'updated_at' => '2021-03-20 08:26:00',
            ),
            68 => 
            array (
                'id' => 819,
                'name' => 'LADİK',
                'city_id' => 67,
                'created_at' => '2021-03-20 08:26:01',
                'updated_at' => '2021-03-20 08:26:01',
            ),
            69 => 
            array (
                'id' => 820,
                'name' => 'SALIPAZARI',
                'city_id' => 67,
                'created_at' => '2021-03-20 08:26:03',
                'updated_at' => '2021-03-20 08:26:03',
            ),
            70 => 
            array (
                'id' => 821,
                'name' => 'TEKKEKÖY',
                'city_id' => 67,
                'created_at' => '2021-03-20 08:26:03',
                'updated_at' => '2021-03-20 08:26:03',
            ),
            71 => 
            array (
                'id' => 822,
                'name' => 'TERME',
                'city_id' => 67,
                'created_at' => '2021-03-20 08:26:05',
                'updated_at' => '2021-03-20 08:26:05',
            ),
            72 => 
            array (
                'id' => 823,
                'name' => 'VEZİRKÖPRÜ',
                'city_id' => 67,
                'created_at' => '2021-03-20 08:26:06',
                'updated_at' => '2021-03-20 08:26:06',
            ),
            73 => 
            array (
                'id' => 824,
                'name' => 'YAKAKENT',
                'city_id' => 67,
                'created_at' => '2021-03-20 08:26:09',
                'updated_at' => '2021-03-20 08:26:09',
            ),
            74 => 
            array (
                'id' => 825,
                'name' => 'BAYKAN',
                'city_id' => 68,
                'created_at' => '2021-03-20 08:26:09',
                'updated_at' => '2021-03-20 08:26:09',
            ),
            75 => 
            array (
                'id' => 826,
                'name' => 'ERUH',
                'city_id' => 68,
                'created_at' => '2021-03-20 08:26:10',
                'updated_at' => '2021-03-20 08:26:10',
            ),
            76 => 
            array (
                'id' => 827,
                'name' => 'KURTALAN',
                'city_id' => 68,
                'created_at' => '2021-03-20 08:26:11',
                'updated_at' => '2021-03-20 08:26:11',
            ),
            77 => 
            array (
                'id' => 828,
                'name' => 'MERKEZ',
                'city_id' => 68,
                'created_at' => '2021-03-20 08:26:13',
                'updated_at' => '2021-03-20 08:26:13',
            ),
            78 => 
            array (
                'id' => 829,
                'name' => 'PERVARİ',
                'city_id' => 68,
                'created_at' => '2021-03-20 08:26:14',
                'updated_at' => '2021-03-20 08:26:14',
            ),
            79 => 
            array (
                'id' => 830,
                'name' => 'ŞİRVAN',
                'city_id' => 68,
                'created_at' => '2021-03-20 08:26:16',
                'updated_at' => '2021-03-20 08:26:16',
            ),
            80 => 
            array (
                'id' => 831,
                'name' => 'TİLLO',
                'city_id' => 68,
                'created_at' => '2021-03-20 08:26:17',
                'updated_at' => '2021-03-20 08:26:17',
            ),
            81 => 
            array (
                'id' => 832,
                'name' => 'AYANCIK',
                'city_id' => 69,
                'created_at' => '2021-03-20 08:26:18',
                'updated_at' => '2021-03-20 08:26:18',
            ),
            82 => 
            array (
                'id' => 833,
                'name' => 'BOYABAT',
                'city_id' => 69,
                'created_at' => '2021-03-20 08:26:23',
                'updated_at' => '2021-03-20 08:26:23',
            ),
            83 => 
            array (
                'id' => 834,
                'name' => 'DİKMEN',
                'city_id' => 69,
                'created_at' => '2021-03-20 08:26:28',
                'updated_at' => '2021-03-20 08:26:28',
            ),
            84 => 
            array (
                'id' => 835,
                'name' => 'DURAĞAN',
                'city_id' => 69,
                'created_at' => '2021-03-20 08:26:30',
                'updated_at' => '2021-03-20 08:26:30',
            ),
            85 => 
            array (
                'id' => 836,
                'name' => 'ERFELEK',
                'city_id' => 69,
                'created_at' => '2021-03-20 08:26:33',
                'updated_at' => '2021-03-20 08:26:33',
            ),
            86 => 
            array (
                'id' => 837,
                'name' => 'GERZE',
                'city_id' => 69,
                'created_at' => '2021-03-20 08:26:37',
                'updated_at' => '2021-03-20 08:26:37',
            ),
            87 => 
            array (
                'id' => 838,
                'name' => 'MERKEZ',
                'city_id' => 69,
                'created_at' => '2021-03-20 08:26:42',
                'updated_at' => '2021-03-20 08:26:42',
            ),
            88 => 
            array (
                'id' => 839,
                'name' => 'SARAYDÜZÜ',
                'city_id' => 69,
                'created_at' => '2021-03-20 08:26:46',
                'updated_at' => '2021-03-20 08:26:46',
            ),
            89 => 
            array (
                'id' => 840,
                'name' => 'TÜRKELİ',
                'city_id' => 69,
                'created_at' => '2021-03-20 08:26:47',
                'updated_at' => '2021-03-20 08:26:47',
            ),
            90 => 
            array (
                'id' => 841,
                'name' => 'AKINCILAR',
                'city_id' => 70,
                'created_at' => '2021-03-20 08:26:50',
                'updated_at' => '2021-03-20 08:26:50',
            ),
            91 => 
            array (
                'id' => 842,
                'name' => 'ALTINYAYLA',
                'city_id' => 70,
                'created_at' => '2021-03-20 08:26:51',
                'updated_at' => '2021-03-20 08:26:51',
            ),
            92 => 
            array (
                'id' => 843,
                'name' => 'DİVRİĞİ',
                'city_id' => 70,
                'created_at' => '2021-03-20 08:26:51',
                'updated_at' => '2021-03-20 08:26:51',
            ),
            93 => 
            array (
                'id' => 844,
                'name' => 'DOĞANŞAR',
                'city_id' => 70,
                'created_at' => '2021-03-20 08:26:55',
                'updated_at' => '2021-03-20 08:26:55',
            ),
            94 => 
            array (
                'id' => 845,
                'name' => 'GEMEREK',
                'city_id' => 70,
                'created_at' => '2021-03-20 08:26:55',
                'updated_at' => '2021-03-20 08:26:55',
            ),
            95 => 
            array (
                'id' => 846,
                'name' => 'GÖLOVA',
                'city_id' => 70,
                'created_at' => '2021-03-20 08:26:57',
                'updated_at' => '2021-03-20 08:26:57',
            ),
            96 => 
            array (
                'id' => 847,
                'name' => 'GÜRÜN',
                'city_id' => 70,
                'created_at' => '2021-03-20 08:26:57',
                'updated_at' => '2021-03-20 08:26:57',
            ),
            97 => 
            array (
                'id' => 848,
                'name' => 'HAFİK',
                'city_id' => 70,
                'created_at' => '2021-03-20 08:27:00',
                'updated_at' => '2021-03-20 08:27:00',
            ),
            98 => 
            array (
                'id' => 849,
                'name' => 'İMRANLI',
                'city_id' => 70,
                'created_at' => '2021-03-20 08:27:02',
                'updated_at' => '2021-03-20 08:27:02',
            ),
            99 => 
            array (
                'id' => 850,
                'name' => 'KANGAL',
                'city_id' => 70,
                'created_at' => '2021-03-20 08:27:04',
                'updated_at' => '2021-03-20 08:27:04',
            ),
            100 => 
            array (
                'id' => 851,
                'name' => 'KOYULHİSAR',
                'city_id' => 70,
                'created_at' => '2021-03-20 08:27:07',
                'updated_at' => '2021-03-20 08:27:07',
            ),
            101 => 
            array (
                'id' => 852,
                'name' => 'MERKEZ',
                'city_id' => 70,
                'created_at' => '2021-03-20 08:27:10',
                'updated_at' => '2021-03-20 08:27:10',
            ),
            102 => 
            array (
                'id' => 853,
                'name' => 'SUŞEHRİ',
                'city_id' => 70,
                'created_at' => '2021-03-20 08:27:15',
                'updated_at' => '2021-03-20 08:27:15',
            ),
            103 => 
            array (
                'id' => 854,
                'name' => 'ŞARKIŞLA',
                'city_id' => 70,
                'created_at' => '2021-03-20 08:27:17',
                'updated_at' => '2021-03-20 08:27:17',
            ),
            104 => 
            array (
                'id' => 855,
                'name' => 'ULAŞ',
                'city_id' => 70,
                'created_at' => '2021-03-20 08:27:19',
                'updated_at' => '2021-03-20 08:27:19',
            ),
            105 => 
            array (
                'id' => 856,
                'name' => 'YILDIZELİ',
                'city_id' => 70,
                'created_at' => '2021-03-20 08:27:20',
                'updated_at' => '2021-03-20 08:27:20',
            ),
            106 => 
            array (
                'id' => 857,
                'name' => 'ZARA',
                'city_id' => 70,
                'created_at' => '2021-03-20 08:27:22',
                'updated_at' => '2021-03-20 08:27:22',
            ),
            107 => 
            array (
                'id' => 858,
                'name' => 'AKÇAKALE',
                'city_id' => 71,
                'created_at' => '2021-03-20 08:27:28',
                'updated_at' => '2021-03-20 08:27:28',
            ),
            108 => 
            array (
                'id' => 859,
                'name' => 'BİRECİK',
                'city_id' => 71,
                'created_at' => '2021-03-20 08:27:31',
                'updated_at' => '2021-03-20 08:27:31',
            ),
            109 => 
            array (
                'id' => 860,
                'name' => 'BOZOVA',
                'city_id' => 71,
                'created_at' => '2021-03-20 08:27:32',
                'updated_at' => '2021-03-20 08:27:32',
            ),
            110 => 
            array (
                'id' => 861,
                'name' => 'CEYLANPINAR',
                'city_id' => 71,
                'created_at' => '2021-03-20 08:27:33',
                'updated_at' => '2021-03-20 08:27:33',
            ),
            111 => 
            array (
                'id' => 862,
                'name' => 'EYYÜBİYE',
                'city_id' => 71,
                'created_at' => '2021-03-20 08:27:34',
                'updated_at' => '2021-03-20 08:27:34',
            ),
            112 => 
            array (
                'id' => 863,
                'name' => 'HALFETİ',
                'city_id' => 71,
                'created_at' => '2021-03-20 08:27:37',
                'updated_at' => '2021-03-20 08:27:37',
            ),
            113 => 
            array (
                'id' => 864,
                'name' => 'HALİLİYE',
                'city_id' => 71,
                'created_at' => '2021-03-20 08:27:38',
                'updated_at' => '2021-03-20 08:27:38',
            ),
            114 => 
            array (
                'id' => 865,
                'name' => 'HARRAN',
                'city_id' => 71,
                'created_at' => '2021-03-20 08:27:40',
                'updated_at' => '2021-03-20 08:27:40',
            ),
            115 => 
            array (
                'id' => 866,
                'name' => 'HİLVAN',
                'city_id' => 71,
                'created_at' => '2021-03-20 08:27:43',
                'updated_at' => '2021-03-20 08:27:43',
            ),
            116 => 
            array (
                'id' => 867,
                'name' => 'KARAKÖPRÜ',
                'city_id' => 71,
                'created_at' => '2021-03-20 08:27:44',
                'updated_at' => '2021-03-20 08:27:44',
            ),
            117 => 
            array (
                'id' => 868,
                'name' => 'SİVEREK',
                'city_id' => 71,
                'created_at' => '2021-03-20 08:27:46',
                'updated_at' => '2021-03-20 08:27:46',
            ),
            118 => 
            array (
                'id' => 869,
                'name' => 'SURUÇ',
                'city_id' => 71,
                'created_at' => '2021-03-20 08:27:49',
                'updated_at' => '2021-03-20 08:27:49',
            ),
            119 => 
            array (
                'id' => 870,
                'name' => 'VİRANŞEHİR',
                'city_id' => 71,
                'created_at' => '2021-03-20 08:27:50',
                'updated_at' => '2021-03-20 08:27:50',
            ),
            120 => 
            array (
                'id' => 871,
                'name' => 'BEYTÜŞŞEBAP',
                'city_id' => 72,
                'created_at' => '2021-03-20 08:27:52',
                'updated_at' => '2021-03-20 08:27:52',
            ),
            121 => 
            array (
                'id' => 872,
                'name' => 'CİZRE',
                'city_id' => 72,
                'created_at' => '2021-03-20 08:27:53',
                'updated_at' => '2021-03-20 08:27:53',
            ),
            122 => 
            array (
                'id' => 873,
                'name' => 'GÜÇLÜKONAK',
                'city_id' => 72,
                'created_at' => '2021-03-20 08:27:54',
                'updated_at' => '2021-03-20 08:27:54',
            ),
            123 => 
            array (
                'id' => 874,
                'name' => 'İDİL',
                'city_id' => 72,
                'created_at' => '2021-03-20 08:27:54',
                'updated_at' => '2021-03-20 08:27:54',
            ),
            124 => 
            array (
                'id' => 875,
                'name' => 'MERKEZ',
                'city_id' => 72,
                'created_at' => '2021-03-20 08:27:56',
                'updated_at' => '2021-03-20 08:27:56',
            ),
            125 => 
            array (
                'id' => 876,
                'name' => 'SİLOPİ',
                'city_id' => 72,
                'created_at' => '2021-03-20 08:27:57',
                'updated_at' => '2021-03-20 08:27:57',
            ),
            126 => 
            array (
                'id' => 877,
                'name' => 'ULUDERE',
                'city_id' => 72,
                'created_at' => '2021-03-20 08:27:58',
                'updated_at' => '2021-03-20 08:27:58',
            ),
            127 => 
            array (
                'id' => 878,
                'name' => 'ÇERKEZKÖY',
                'city_id' => 73,
                'created_at' => '2021-03-20 08:27:58',
                'updated_at' => '2021-03-20 08:27:58',
            ),
            128 => 
            array (
                'id' => 879,
                'name' => 'ÇORLU',
                'city_id' => 73,
                'created_at' => '2021-03-20 08:27:59',
                'updated_at' => '2021-03-20 08:27:59',
            ),
            129 => 
            array (
                'id' => 880,
                'name' => 'ERGENE',
                'city_id' => 73,
                'created_at' => '2021-03-20 08:27:59',
                'updated_at' => '2021-03-20 08:27:59',
            ),
            130 => 
            array (
                'id' => 881,
                'name' => 'HAYRABOLU',
                'city_id' => 73,
                'created_at' => '2021-03-20 08:27:59',
                'updated_at' => '2021-03-20 08:27:59',
            ),
            131 => 
            array (
                'id' => 882,
                'name' => 'KAPAKLI',
                'city_id' => 73,
                'created_at' => '2021-03-20 08:28:00',
                'updated_at' => '2021-03-20 08:28:00',
            ),
            132 => 
            array (
                'id' => 883,
                'name' => 'MALKARA',
                'city_id' => 73,
                'created_at' => '2021-03-20 08:28:01',
                'updated_at' => '2021-03-20 08:28:01',
            ),
            133 => 
            array (
                'id' => 884,
                'name' => 'MARMARAEREĞLİSİ',
                'city_id' => 73,
                'created_at' => '2021-03-20 08:28:02',
                'updated_at' => '2021-03-20 08:28:02',
            ),
            134 => 
            array (
                'id' => 885,
                'name' => 'MURATLI',
                'city_id' => 73,
                'created_at' => '2021-03-20 08:28:02',
                'updated_at' => '2021-03-20 08:28:02',
            ),
            135 => 
            array (
                'id' => 886,
                'name' => 'SARAY',
                'city_id' => 73,
                'created_at' => '2021-03-20 08:28:02',
                'updated_at' => '2021-03-20 08:28:02',
            ),
            136 => 
            array (
                'id' => 887,
                'name' => 'SÜLEYMANPAŞA',
                'city_id' => 73,
                'created_at' => '2021-03-20 08:28:02',
                'updated_at' => '2021-03-20 08:28:02',
            ),
            137 => 
            array (
                'id' => 888,
                'name' => 'ŞARKÖY',
                'city_id' => 73,
                'created_at' => '2021-03-20 08:28:04',
                'updated_at' => '2021-03-20 08:28:04',
            ),
            138 => 
            array (
                'id' => 889,
                'name' => 'ALMUS',
                'city_id' => 74,
                'created_at' => '2021-03-20 08:28:04',
                'updated_at' => '2021-03-20 08:28:04',
            ),
            139 => 
            array (
                'id' => 890,
                'name' => 'ARTOVA',
                'city_id' => 74,
                'created_at' => '2021-03-20 08:28:07',
                'updated_at' => '2021-03-20 08:28:07',
            ),
            140 => 
            array (
                'id' => 891,
                'name' => 'BAŞÇİFTLİK',
                'city_id' => 74,
                'created_at' => '2021-03-20 08:28:07',
                'updated_at' => '2021-03-20 08:28:07',
            ),
            141 => 
            array (
                'id' => 892,
                'name' => 'ERBAA',
                'city_id' => 74,
                'created_at' => '2021-03-20 08:28:08',
                'updated_at' => '2021-03-20 08:28:08',
            ),
            142 => 
            array (
                'id' => 893,
                'name' => 'MERKEZ',
                'city_id' => 74,
                'created_at' => '2021-03-20 08:28:12',
                'updated_at' => '2021-03-20 08:28:12',
            ),
            143 => 
            array (
                'id' => 894,
                'name' => 'NİKSAR',
                'city_id' => 74,
                'created_at' => '2021-03-20 08:28:16',
                'updated_at' => '2021-03-20 08:28:16',
            ),
            144 => 
            array (
                'id' => 895,
                'name' => 'PAZAR',
                'city_id' => 74,
                'created_at' => '2021-03-20 08:28:19',
                'updated_at' => '2021-03-20 08:28:19',
            ),
            145 => 
            array (
                'id' => 896,
                'name' => 'REŞADİYE',
                'city_id' => 74,
                'created_at' => '2021-03-20 08:28:19',
                'updated_at' => '2021-03-20 08:28:19',
            ),
            146 => 
            array (
                'id' => 897,
                'name' => 'SULUSARAY',
                'city_id' => 74,
                'created_at' => '2021-03-20 08:28:23',
                'updated_at' => '2021-03-20 08:28:23',
            ),
            147 => 
            array (
                'id' => 898,
                'name' => 'TURHAL',
                'city_id' => 74,
                'created_at' => '2021-03-20 08:28:23',
                'updated_at' => '2021-03-20 08:28:23',
            ),
            148 => 
            array (
                'id' => 899,
                'name' => 'YEŞİLYURT',
                'city_id' => 74,
                'created_at' => '2021-03-20 08:28:26',
                'updated_at' => '2021-03-20 08:28:26',
            ),
            149 => 
            array (
                'id' => 900,
                'name' => 'ZİLE',
                'city_id' => 74,
                'created_at' => '2021-03-20 08:28:26',
                'updated_at' => '2021-03-20 08:28:26',
            ),
            150 => 
            array (
                'id' => 901,
                'name' => 'AKÇAABAT',
                'city_id' => 75,
                'created_at' => '2021-03-20 08:28:29',
                'updated_at' => '2021-03-20 08:28:29',
            ),
            151 => 
            array (
                'id' => 902,
                'name' => 'ARAKLI',
                'city_id' => 75,
                'created_at' => '2021-03-20 08:28:30',
                'updated_at' => '2021-03-20 08:28:30',
            ),
            152 => 
            array (
                'id' => 903,
                'name' => 'ARSİN',
                'city_id' => 75,
                'created_at' => '2021-03-20 08:28:31',
                'updated_at' => '2021-03-20 08:28:31',
            ),
            153 => 
            array (
                'id' => 904,
                'name' => 'BEŞİKDÜZÜ',
                'city_id' => 75,
                'created_at' => '2021-03-20 08:28:31',
                'updated_at' => '2021-03-20 08:28:31',
            ),
            154 => 
            array (
                'id' => 905,
                'name' => 'ÇARŞIBAŞI',
                'city_id' => 75,
                'created_at' => '2021-03-20 08:28:32',
                'updated_at' => '2021-03-20 08:28:32',
            ),
            155 => 
            array (
                'id' => 906,
                'name' => 'ÇAYKARA',
                'city_id' => 75,
                'created_at' => '2021-03-20 08:28:32',
                'updated_at' => '2021-03-20 08:28:32',
            ),
            156 => 
            array (
                'id' => 907,
                'name' => 'DERNEKPAZARI',
                'city_id' => 75,
                'created_at' => '2021-03-20 08:28:33',
                'updated_at' => '2021-03-20 08:28:33',
            ),
            157 => 
            array (
                'id' => 908,
                'name' => 'DÜZKÖY',
                'city_id' => 75,
                'created_at' => '2021-03-20 08:28:33',
                'updated_at' => '2021-03-20 08:28:33',
            ),
            158 => 
            array (
                'id' => 909,
                'name' => 'HAYRAT',
                'city_id' => 75,
                'created_at' => '2021-03-20 08:28:33',
                'updated_at' => '2021-03-20 08:28:33',
            ),
            159 => 
            array (
                'id' => 910,
                'name' => 'KÖPRÜBAŞI',
                'city_id' => 75,
                'created_at' => '2021-03-20 08:28:34',
                'updated_at' => '2021-03-20 08:28:34',
            ),
            160 => 
            array (
                'id' => 911,
                'name' => 'MAÇKA',
                'city_id' => 75,
                'created_at' => '2021-03-20 08:28:34',
                'updated_at' => '2021-03-20 08:28:34',
            ),
            161 => 
            array (
                'id' => 912,
                'name' => 'OF',
                'city_id' => 75,
                'created_at' => '2021-03-20 08:28:35',
                'updated_at' => '2021-03-20 08:28:35',
            ),
            162 => 
            array (
                'id' => 913,
                'name' => 'ORTAHİSAR',
                'city_id' => 75,
                'created_at' => '2021-03-20 08:28:37',
                'updated_at' => '2021-03-20 08:28:37',
            ),
            163 => 
            array (
                'id' => 914,
                'name' => 'SÜRMENE',
                'city_id' => 75,
                'created_at' => '2021-03-20 08:28:38',
                'updated_at' => '2021-03-20 08:28:38',
            ),
            164 => 
            array (
                'id' => 915,
                'name' => 'ŞALPAZARI',
                'city_id' => 75,
                'created_at' => '2021-03-20 08:28:39',
                'updated_at' => '2021-03-20 08:28:39',
            ),
            165 => 
            array (
                'id' => 916,
                'name' => 'TONYA',
                'city_id' => 75,
                'created_at' => '2021-03-20 08:28:39',
                'updated_at' => '2021-03-20 08:28:39',
            ),
            166 => 
            array (
                'id' => 917,
                'name' => 'VAKFIKEBİR',
                'city_id' => 75,
                'created_at' => '2021-03-20 08:28:40',
                'updated_at' => '2021-03-20 08:28:40',
            ),
            167 => 
            array (
                'id' => 918,
                'name' => 'YOMRA',
                'city_id' => 75,
                'created_at' => '2021-03-20 08:28:40',
                'updated_at' => '2021-03-20 08:28:40',
            ),
            168 => 
            array (
                'id' => 919,
                'name' => 'ÇEMİŞGEZEK',
                'city_id' => 76,
                'created_at' => '2021-03-20 08:28:41',
                'updated_at' => '2021-03-20 08:28:41',
            ),
            169 => 
            array (
                'id' => 920,
                'name' => 'HOZAT',
                'city_id' => 76,
                'created_at' => '2021-03-20 08:28:42',
                'updated_at' => '2021-03-20 08:28:42',
            ),
            170 => 
            array (
                'id' => 921,
                'name' => 'MAZGİRT',
                'city_id' => 76,
                'created_at' => '2021-03-20 08:28:44',
                'updated_at' => '2021-03-20 08:28:44',
            ),
            171 => 
            array (
                'id' => 922,
                'name' => 'MERKEZ',
                'city_id' => 76,
                'created_at' => '2021-03-20 08:28:46',
                'updated_at' => '2021-03-20 08:28:46',
            ),
            172 => 
            array (
                'id' => 923,
                'name' => 'NAZIMİYE',
                'city_id' => 76,
                'created_at' => '2021-03-20 08:28:50',
                'updated_at' => '2021-03-20 08:28:50',
            ),
            173 => 
            array (
                'id' => 924,
                'name' => 'OVACIK',
                'city_id' => 76,
                'created_at' => '2021-03-20 08:28:52',
                'updated_at' => '2021-03-20 08:28:52',
            ),
            174 => 
            array (
                'id' => 925,
                'name' => 'PERTEK',
                'city_id' => 76,
                'created_at' => '2021-03-20 08:28:54',
                'updated_at' => '2021-03-20 08:28:54',
            ),
            175 => 
            array (
                'id' => 926,
                'name' => 'PÜLÜMÜR',
                'city_id' => 76,
                'created_at' => '2021-03-20 08:28:56',
                'updated_at' => '2021-03-20 08:28:56',
            ),
            176 => 
            array (
                'id' => 927,
                'name' => 'BANAZ',
                'city_id' => 77,
                'created_at' => '2021-03-20 08:28:58',
                'updated_at' => '2021-03-20 08:28:58',
            ),
            177 => 
            array (
                'id' => 928,
                'name' => 'EŞME',
                'city_id' => 77,
                'created_at' => '2021-03-20 08:28:59',
                'updated_at' => '2021-03-20 08:28:59',
            ),
            178 => 
            array (
                'id' => 929,
                'name' => 'KARAHALLI',
                'city_id' => 77,
                'created_at' => '2021-03-20 08:29:03',
                'updated_at' => '2021-03-20 08:29:03',
            ),
            179 => 
            array (
                'id' => 930,
                'name' => 'MERKEZ',
                'city_id' => 77,
                'created_at' => '2021-03-20 08:29:03',
                'updated_at' => '2021-03-20 08:29:03',
            ),
            180 => 
            array (
                'id' => 931,
                'name' => 'SİVASLI',
                'city_id' => 77,
                'created_at' => '2021-03-20 08:29:08',
                'updated_at' => '2021-03-20 08:29:08',
            ),
            181 => 
            array (
                'id' => 932,
                'name' => 'ULUBEY',
                'city_id' => 77,
                'created_at' => '2021-03-20 08:29:08',
                'updated_at' => '2021-03-20 08:29:08',
            ),
            182 => 
            array (
                'id' => 933,
                'name' => 'BAHÇESARAY',
                'city_id' => 78,
                'created_at' => '2021-03-20 08:29:09',
                'updated_at' => '2021-03-20 08:29:09',
            ),
            183 => 
            array (
                'id' => 934,
                'name' => 'BAŞKALE',
                'city_id' => 78,
                'created_at' => '2021-03-20 08:29:10',
                'updated_at' => '2021-03-20 08:29:10',
            ),
            184 => 
            array (
                'id' => 935,
                'name' => 'ÇALDIRAN',
                'city_id' => 78,
                'created_at' => '2021-03-20 08:29:11',
                'updated_at' => '2021-03-20 08:29:11',
            ),
            185 => 
            array (
                'id' => 936,
                'name' => 'ÇATAK',
                'city_id' => 78,
                'created_at' => '2021-03-20 08:29:12',
                'updated_at' => '2021-03-20 08:29:12',
            ),
            186 => 
            array (
                'id' => 937,
                'name' => 'EDREMİT',
                'city_id' => 78,
                'created_at' => '2021-03-20 08:29:12',
                'updated_at' => '2021-03-20 08:29:12',
            ),
            187 => 
            array (
                'id' => 938,
                'name' => 'ERCİŞ',
                'city_id' => 78,
                'created_at' => '2021-03-20 08:29:13',
                'updated_at' => '2021-03-20 08:29:13',
            ),
            188 => 
            array (
                'id' => 939,
                'name' => 'GEVAŞ',
                'city_id' => 78,
                'created_at' => '2021-03-20 08:29:15',
                'updated_at' => '2021-03-20 08:29:15',
            ),
            189 => 
            array (
                'id' => 940,
                'name' => 'GÜRPINAR',
                'city_id' => 78,
                'created_at' => '2021-03-20 08:29:15',
                'updated_at' => '2021-03-20 08:29:15',
            ),
            190 => 
            array (
                'id' => 941,
                'name' => 'İPEKYOLU',
                'city_id' => 78,
                'created_at' => '2021-03-20 08:29:17',
                'updated_at' => '2021-03-20 08:29:17',
            ),
            191 => 
            array (
                'id' => 942,
                'name' => 'MURADİYE',
                'city_id' => 78,
                'created_at' => '2021-03-20 08:29:18',
                'updated_at' => '2021-03-20 08:29:18',
            ),
            192 => 
            array (
                'id' => 943,
                'name' => 'ÖZALP',
                'city_id' => 78,
                'created_at' => '2021-03-20 08:29:18',
                'updated_at' => '2021-03-20 08:29:18',
            ),
            193 => 
            array (
                'id' => 944,
                'name' => 'SARAY',
                'city_id' => 78,
                'created_at' => '2021-03-20 08:29:20',
                'updated_at' => '2021-03-20 08:29:20',
            ),
            194 => 
            array (
                'id' => 945,
                'name' => 'TUŞBA',
                'city_id' => 78,
                'created_at' => '2021-03-20 08:29:20',
                'updated_at' => '2021-03-20 08:29:20',
            ),
            195 => 
            array (
                'id' => 946,
                'name' => 'ALTINOVA',
                'city_id' => 79,
                'created_at' => '2021-03-20 08:29:21',
                'updated_at' => '2021-03-20 08:29:21',
            ),
            196 => 
            array (
                'id' => 947,
                'name' => 'ARMUTLU',
                'city_id' => 79,
                'created_at' => '2021-03-20 08:29:22',
                'updated_at' => '2021-03-20 08:29:22',
            ),
            197 => 
            array (
                'id' => 948,
                'name' => 'ÇINARCIK',
                'city_id' => 79,
                'created_at' => '2021-03-20 08:29:22',
                'updated_at' => '2021-03-20 08:29:22',
            ),
            198 => 
            array (
                'id' => 949,
                'name' => 'ÇİFTLİKKÖY',
                'city_id' => 79,
                'created_at' => '2021-03-20 08:29:22',
                'updated_at' => '2021-03-20 08:29:22',
            ),
            199 => 
            array (
                'id' => 950,
                'name' => 'MERKEZ',
                'city_id' => 79,
                'created_at' => '2021-03-20 08:29:23',
                'updated_at' => '2021-03-20 08:29:23',
            ),
            200 => 
            array (
                'id' => 951,
                'name' => 'TERMAL',
                'city_id' => 79,
                'created_at' => '2021-03-20 08:29:23',
                'updated_at' => '2021-03-20 08:29:23',
            ),
            201 => 
            array (
                'id' => 952,
                'name' => 'AKDAĞMADENİ',
                'city_id' => 80,
                'created_at' => '2021-03-20 08:29:23',
                'updated_at' => '2021-03-20 08:29:23',
            ),
            202 => 
            array (
                'id' => 953,
                'name' => 'AYDINCIK',
                'city_id' => 80,
                'created_at' => '2021-03-20 08:29:25',
                'updated_at' => '2021-03-20 08:29:25',
            ),
            203 => 
            array (
                'id' => 954,
                'name' => 'BOĞAZLIYAN',
                'city_id' => 80,
                'created_at' => '2021-03-20 08:29:25',
                'updated_at' => '2021-03-20 08:29:25',
            ),
            204 => 
            array (
                'id' => 955,
                'name' => 'ÇANDIR',
                'city_id' => 80,
                'created_at' => '2021-03-20 08:29:26',
                'updated_at' => '2021-03-20 08:29:26',
            ),
            205 => 
            array (
                'id' => 956,
                'name' => 'ÇAYIRALAN',
                'city_id' => 80,
                'created_at' => '2021-03-20 08:29:26',
                'updated_at' => '2021-03-20 08:29:26',
            ),
            206 => 
            array (
                'id' => 957,
                'name' => 'ÇEKEREK',
                'city_id' => 80,
                'created_at' => '2021-03-20 08:29:27',
                'updated_at' => '2021-03-20 08:29:27',
            ),
            207 => 
            array (
                'id' => 958,
                'name' => 'KADIŞEHRİ',
                'city_id' => 80,
                'created_at' => '2021-03-20 08:29:28',
                'updated_at' => '2021-03-20 08:29:28',
            ),
            208 => 
            array (
                'id' => 959,
                'name' => 'MERKEZ',
                'city_id' => 80,
                'created_at' => '2021-03-20 08:29:28',
                'updated_at' => '2021-03-20 08:29:28',
            ),
            209 => 
            array (
                'id' => 960,
                'name' => 'SARAYKENT',
                'city_id' => 80,
                'created_at' => '2021-03-20 08:29:31',
                'updated_at' => '2021-03-20 08:29:31',
            ),
            210 => 
            array (
                'id' => 961,
                'name' => 'SARIKAYA',
                'city_id' => 80,
                'created_at' => '2021-03-20 08:29:31',
                'updated_at' => '2021-03-20 08:29:31',
            ),
            211 => 
            array (
                'id' => 962,
                'name' => 'SORGUN',
                'city_id' => 80,
                'created_at' => '2021-03-20 08:29:33',
                'updated_at' => '2021-03-20 08:29:33',
            ),
            212 => 
            array (
                'id' => 963,
                'name' => 'ŞEFAATLİ',
                'city_id' => 80,
                'created_at' => '2021-03-20 08:29:35',
                'updated_at' => '2021-03-20 08:29:35',
            ),
            213 => 
            array (
                'id' => 964,
                'name' => 'YENİFAKILI',
                'city_id' => 80,
                'created_at' => '2021-03-20 08:29:36',
                'updated_at' => '2021-03-20 08:29:36',
            ),
            214 => 
            array (
                'id' => 965,
                'name' => 'YERKÖY',
                'city_id' => 80,
                'created_at' => '2021-03-20 08:29:36',
                'updated_at' => '2021-03-20 08:29:36',
            ),
            215 => 
            array (
                'id' => 966,
                'name' => 'ALAPLI',
                'city_id' => 81,
                'created_at' => '2021-03-20 08:29:37',
                'updated_at' => '2021-03-20 08:29:37',
            ),
            216 => 
            array (
                'id' => 967,
                'name' => 'ÇAYCUMA',
                'city_id' => 81,
                'created_at' => '2021-03-20 08:29:39',
                'updated_at' => '2021-03-20 08:29:39',
            ),
            217 => 
            array (
                'id' => 968,
                'name' => 'DEVREK',
                'city_id' => 81,
                'created_at' => '2021-03-20 08:29:44',
                'updated_at' => '2021-03-20 08:29:44',
            ),
            218 => 
            array (
                'id' => 969,
                'name' => 'EREĞLİ',
                'city_id' => 81,
                'created_at' => '2021-03-20 08:29:52',
                'updated_at' => '2021-03-20 08:29:52',
            ),
            219 => 
            array (
                'id' => 970,
                'name' => 'GÖKÇEBEY',
                'city_id' => 81,
                'created_at' => '2021-03-20 08:29:57',
                'updated_at' => '2021-03-20 08:29:57',
            ),
            220 => 
            array (
                'id' => 971,
                'name' => 'KİLİMLİ',
                'city_id' => 81,
                'created_at' => '2021-03-20 08:29:58',
                'updated_at' => '2021-03-20 08:29:58',
            ),
            221 => 
            array (
                'id' => 972,
                'name' => 'KOZLU',
                'city_id' => 81,
                'created_at' => '2021-03-20 08:29:59',
                'updated_at' => '2021-03-20 08:29:59',
            ),
            222 => 
            array (
                'id' => 973,
                'name' => 'MERKEZ',
                'city_id' => 81,
                'created_at' => '2021-03-20 08:30:00',
                'updated_at' => '2021-03-20 08:30:00',
            ),
        ));
        
        
    }
}