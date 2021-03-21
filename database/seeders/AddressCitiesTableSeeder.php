<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AddressCitiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cities')->delete();
        
        \DB::table('cities')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'ADANA',
                'created_at' => '2021-03-20 07:11:45',
                'updated_at' => '2021-03-20 07:11:45',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'ADIYAMAN',
                'created_at' => '2021-03-20 07:11:57',
                'updated_at' => '2021-03-20 07:11:57',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'AFYONKARAHİSAR',
                'created_at' => '2021-03-20 07:12:13',
                'updated_at' => '2021-03-20 07:12:13',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'AĞRI',
                'created_at' => '2021-03-20 07:12:27',
                'updated_at' => '2021-03-20 07:12:27',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'AKSARAY',
                'created_at' => '2021-03-20 07:12:39',
                'updated_at' => '2021-03-20 07:12:39',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'AMASYA',
                'created_at' => '2021-03-20 07:12:45',
                'updated_at' => '2021-03-20 07:12:45',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'ANKARA',
                'created_at' => '2021-03-20 07:12:53',
                'updated_at' => '2021-03-20 07:12:53',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'ANTALYA',
                'created_at' => '2021-03-20 07:13:12',
                'updated_at' => '2021-03-20 07:13:12',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'ARDAHAN',
                'created_at' => '2021-03-20 07:13:24',
                'updated_at' => '2021-03-20 07:13:24',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'ARTVİN',
                'created_at' => '2021-03-20 07:13:29',
                'updated_at' => '2021-03-20 07:13:29',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'AYDIN',
                'created_at' => '2021-03-20 07:13:53',
                'updated_at' => '2021-03-20 07:13:53',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'BALIKESİR',
                'created_at' => '2021-03-20 07:14:03',
                'updated_at' => '2021-03-20 07:14:03',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'BARTIN',
                'created_at' => '2021-03-20 07:14:18',
                'updated_at' => '2021-03-20 07:14:18',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'BATMAN',
                'created_at' => '2021-03-20 07:14:32',
                'updated_at' => '2021-03-20 07:14:32',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'BAYBURT',
                'created_at' => '2021-03-20 07:14:42',
                'updated_at' => '2021-03-20 07:14:42',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'BİLECİK',
                'created_at' => '2021-03-20 07:14:45',
                'updated_at' => '2021-03-20 07:14:45',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'BİNGÖL',
                'created_at' => '2021-03-20 07:14:50',
                'updated_at' => '2021-03-20 07:14:50',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'BİTLİS',
                'created_at' => '2021-03-20 07:15:05',
                'updated_at' => '2021-03-20 07:15:05',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'BOLU',
                'created_at' => '2021-03-20 07:15:16',
                'updated_at' => '2021-03-20 07:15:16',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'BURDUR',
                'created_at' => '2021-03-20 07:15:38',
                'updated_at' => '2021-03-20 07:15:38',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'BURSA',
                'created_at' => '2021-03-20 07:15:46',
                'updated_at' => '2021-03-20 07:15:46',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'ÇANAKKALE',
                'created_at' => '2021-03-20 07:16:00',
                'updated_at' => '2021-03-20 07:16:00',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'ÇANKIRI',
                'created_at' => '2021-03-20 07:16:13',
                'updated_at' => '2021-03-20 07:16:13',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'ÇORUM',
                'created_at' => '2021-03-20 07:16:21',
                'updated_at' => '2021-03-20 07:16:21',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'DENİZLİ',
                'created_at' => '2021-03-20 07:16:41',
                'updated_at' => '2021-03-20 07:16:41',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'DİYARBAKIR',
                'created_at' => '2021-03-20 07:16:50',
                'updated_at' => '2021-03-20 07:16:50',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'DÜZCE',
                'created_at' => '2021-03-20 07:17:04',
                'updated_at' => '2021-03-20 07:17:04',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'EDİRNE',
                'created_at' => '2021-03-20 07:17:14',
                'updated_at' => '2021-03-20 07:17:14',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'ELAZIĞ',
                'created_at' => '2021-03-20 07:17:19',
                'updated_at' => '2021-03-20 07:17:19',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'ERZİNCAN',
                'created_at' => '2021-03-20 07:17:39',
                'updated_at' => '2021-03-20 07:17:39',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'ERZURUM',
                'created_at' => '2021-03-20 07:17:54',
                'updated_at' => '2021-03-20 07:17:54',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'ESKİŞEHİR',
                'created_at' => '2021-03-20 07:18:11',
                'updated_at' => '2021-03-20 07:18:11',
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'GAZİANTEP',
                'created_at' => '2021-03-20 07:18:18',
                'updated_at' => '2021-03-20 07:18:18',
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'GİRESUN',
                'created_at' => '2021-03-20 07:18:29',
                'updated_at' => '2021-03-20 07:18:29',
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'GÜMÜŞHANE',
                'created_at' => '2021-03-20 07:19:06',
                'updated_at' => '2021-03-20 07:19:06',
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'HAKKARİ',
                'created_at' => '2021-03-20 07:19:22',
                'updated_at' => '2021-03-20 07:19:22',
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'HATAY',
                'created_at' => '2021-03-20 07:19:28',
                'updated_at' => '2021-03-20 07:19:28',
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'IĞDIR',
                'created_at' => '2021-03-20 07:19:36',
                'updated_at' => '2021-03-20 07:19:36',
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'ISPARTA',
                'created_at' => '2021-03-20 07:19:40',
                'updated_at' => '2021-03-20 07:19:40',
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'İSTANBUL',
                'created_at' => '2021-03-20 07:19:48',
                'updated_at' => '2021-03-20 07:19:48',
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'İZMİR',
                'created_at' => '2021-03-20 07:20:02',
                'updated_at' => '2021-03-20 07:20:02',
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'KAHRAMANMARAŞ',
                'created_at' => '2021-03-20 07:20:21',
                'updated_at' => '2021-03-20 07:20:21',
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'KARABÜK',
                'created_at' => '2021-03-20 07:20:30',
                'updated_at' => '2021-03-20 07:20:30',
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'KARAMAN',
                'created_at' => '2021-03-20 07:20:46',
                'updated_at' => '2021-03-20 07:20:46',
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'KARS',
                'created_at' => '2021-03-20 07:20:52',
                'updated_at' => '2021-03-20 07:20:52',
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'KASTAMONU',
                'created_at' => '2021-03-20 07:20:59',
                'updated_at' => '2021-03-20 07:20:59',
            ),
            46 => 
            array (
                'id' => 47,
                'name' => 'KAYSERİ',
                'created_at' => '2021-03-20 07:21:59',
                'updated_at' => '2021-03-20 07:21:59',
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'KIRIKKALE',
                'created_at' => '2021-03-20 07:22:09',
                'updated_at' => '2021-03-20 07:22:09',
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'KIRKLARELİ',
                'created_at' => '2021-03-20 07:22:14',
                'updated_at' => '2021-03-20 07:22:14',
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'KIRŞEHİR',
                'created_at' => '2021-03-20 07:22:18',
                'updated_at' => '2021-03-20 07:22:18',
            ),
            50 => 
            array (
                'id' => 51,
                'name' => 'KİLİS',
                'created_at' => '2021-03-20 07:22:23',
                'updated_at' => '2021-03-20 07:22:23',
            ),
            51 => 
            array (
                'id' => 52,
                'name' => 'KOCAELİ',
                'created_at' => '2021-03-20 07:22:27',
                'updated_at' => '2021-03-20 07:22:27',
            ),
            52 => 
            array (
                'id' => 53,
                'name' => 'KONYA',
                'created_at' => '2021-03-20 07:22:33',
                'updated_at' => '2021-03-20 07:22:33',
            ),
            53 => 
            array (
                'id' => 54,
                'name' => 'KÜTAHYA',
                'created_at' => '2021-03-20 07:22:48',
                'updated_at' => '2021-03-20 07:22:48',
            ),
            54 => 
            array (
                'id' => 55,
                'name' => 'MALATYA',
                'created_at' => '2021-03-20 07:22:59',
                'updated_at' => '2021-03-20 07:22:59',
            ),
            55 => 
            array (
                'id' => 56,
                'name' => 'MANİSA',
                'created_at' => '2021-03-20 07:23:08',
                'updated_at' => '2021-03-20 07:23:08',
            ),
            56 => 
            array (
                'id' => 57,
                'name' => 'MARDİN',
                'created_at' => '2021-03-20 07:23:20',
                'updated_at' => '2021-03-20 07:23:20',
            ),
            57 => 
            array (
                'id' => 58,
                'name' => 'MERSİN',
                'created_at' => '2021-03-20 07:23:28',
                'updated_at' => '2021-03-20 07:23:28',
            ),
            58 => 
            array (
                'id' => 59,
                'name' => 'MUĞLA',
                'created_at' => '2021-03-20 07:23:37',
                'updated_at' => '2021-03-20 07:23:37',
            ),
            59 => 
            array (
                'id' => 60,
                'name' => 'MUŞ',
                'created_at' => '2021-03-20 07:23:44',
                'updated_at' => '2021-03-20 07:23:44',
            ),
            60 => 
            array (
                'id' => 61,
                'name' => 'NEVŞEHİR',
                'created_at' => '2021-03-20 07:23:54',
                'updated_at' => '2021-03-20 07:23:54',
            ),
            61 => 
            array (
                'id' => 62,
                'name' => 'NİĞDE',
                'created_at' => '2021-03-20 07:23:59',
                'updated_at' => '2021-03-20 07:23:59',
            ),
            62 => 
            array (
                'id' => 63,
                'name' => 'ORDU',
                'created_at' => '2021-03-20 07:24:04',
                'updated_at' => '2021-03-20 07:24:04',
            ),
            63 => 
            array (
                'id' => 64,
                'name' => 'OSMANİYE',
                'created_at' => '2021-03-20 07:24:15',
                'updated_at' => '2021-03-20 07:24:15',
            ),
            64 => 
            array (
                'id' => 65,
                'name' => 'RİZE',
                'created_at' => '2021-03-20 07:24:24',
                'updated_at' => '2021-03-20 07:24:24',
            ),
            65 => 
            array (
                'id' => 66,
                'name' => 'SAKARYA',
                'created_at' => '2021-03-20 07:24:44',
                'updated_at' => '2021-03-20 07:24:44',
            ),
            66 => 
            array (
                'id' => 67,
                'name' => 'SAMSUN',
                'created_at' => '2021-03-20 07:24:54',
                'updated_at' => '2021-03-20 07:24:54',
            ),
            67 => 
            array (
                'id' => 68,
                'name' => 'SİİRT',
                'created_at' => '2021-03-20 07:25:12',
                'updated_at' => '2021-03-20 07:25:12',
            ),
            68 => 
            array (
                'id' => 69,
                'name' => 'SİNOP',
                'created_at' => '2021-03-20 07:25:19',
                'updated_at' => '2021-03-20 07:25:19',
            ),
            69 => 
            array (
                'id' => 70,
                'name' => 'SİVAS',
                'created_at' => '2021-03-20 07:25:48',
                'updated_at' => '2021-03-20 07:25:48',
            ),
            70 => 
            array (
                'id' => 71,
                'name' => 'ŞANLIURFA',
                'created_at' => '2021-03-20 07:26:21',
                'updated_at' => '2021-03-20 07:26:21',
            ),
            71 => 
            array (
                'id' => 72,
                'name' => 'ŞIRNAK',
                'created_at' => '2021-03-20 07:26:42',
                'updated_at' => '2021-03-20 07:26:42',
            ),
            72 => 
            array (
                'id' => 73,
                'name' => 'TEKİRDAĞ',
                'created_at' => '2021-03-20 07:26:47',
                'updated_at' => '2021-03-20 07:26:47',
            ),
            73 => 
            array (
                'id' => 74,
                'name' => 'TOKAT',
                'created_at' => '2021-03-20 07:26:52',
                'updated_at' => '2021-03-20 07:26:52',
            ),
            74 => 
            array (
                'id' => 75,
                'name' => 'TRABZON',
                'created_at' => '2021-03-20 07:27:13',
                'updated_at' => '2021-03-20 07:27:13',
            ),
            75 => 
            array (
                'id' => 76,
                'name' => 'TUNCELİ',
                'created_at' => '2021-03-20 07:27:24',
                'updated_at' => '2021-03-20 07:27:24',
            ),
            76 => 
            array (
                'id' => 77,
                'name' => 'UŞAK',
                'created_at' => '2021-03-20 07:27:38',
                'updated_at' => '2021-03-20 07:27:38',
            ),
            77 => 
            array (
                'id' => 78,
                'name' => 'VAN',
                'created_at' => '2021-03-20 07:27:47',
                'updated_at' => '2021-03-20 07:27:47',
            ),
            78 => 
            array (
                'id' => 79,
                'name' => 'YALOVA',
                'created_at' => '2021-03-20 07:27:58',
                'updated_at' => '2021-03-20 07:27:58',
            ),
            79 => 
            array (
                'id' => 80,
                'name' => 'YOZGAT',
                'created_at' => '2021-03-20 07:27:59',
                'updated_at' => '2021-03-20 07:27:59',
            ),
            80 => 
            array (
                'id' => 81,
                'name' => 'ZONGULDAK',
                'created_at' => '2021-03-20 07:28:12',
                'updated_at' => '2021-03-20 07:28:12',
            ),
        ));
        
        
    }
}