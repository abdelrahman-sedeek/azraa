<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SuppliersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('suppliers')->delete();
        
        \DB::table('suppliers')->insert(array (
            0 => 
            array (
                'id' => 87,
                'name' => 'ابو وليد',
                'image' => 'admin/assets/images/profile.jpg',
                'mobile' => '01008050190',
                'balance' => 0.0,
                'created_at' => '2023-03-29 22:41:46',
                'updated_at' => '2023-09-23 12:37:04',
            ),
            1 => 
            array (
                'id' => 171,
                'name' => 'بيبسى شركه',
                'image' => 'admin/assets/images/profile.jpg',
                'mobile' => '01112981144',
                'balance' => 0.0,
                'created_at' => '2023-04-03 16:44:56',
                'updated_at' => '2023-04-03 16:44:56',
            ),
            2 => 
            array (
                'id' => 172,
                'name' => 'سارى ابلكيشن',
                'image' => 'admin/assets/images/profile.jpg',
                'mobile' => '01011111111',
                'balance' => 0.0,
                'created_at' => '2023-04-03 16:59:31',
                'updated_at' => '2023-04-03 16:59:31',
            ),
            3 => 
            array (
                'id' => 175,
                'name' => 'جمله النور عم جار',
                'image' => 'admin/assets/images/profile.jpg',
                'mobile' => '01008942125',
                'balance' => 0.0,
                'created_at' => '2023-04-04 00:44:25',
                'updated_at' => '2023-06-07 15:23:23',
            ),
            4 => 
            array (
                'id' => 242,
                'name' => 'احمد نجاح',
                'image' => 'admin/assets/images/profile.jpg',
                'mobile' => '01028281255',
                'balance' => 0.0,
                'created_at' => '2023-04-09 16:32:51',
                'updated_at' => '2023-04-09 16:32:52',
            ),
            5 => 
            array (
                'id' => 245,
                'name' => 'جالكسي شركه',
                'image' => 'admin/assets/images/profile.jpg',
                'mobile' => '01000267741',
                'balance' => 0.0,
                'created_at' => '2023-04-09 21:36:29',
                'updated_at' => '2023-04-09 21:36:30',
            ),
            6 => 
            array (
                'id' => 293,
                'name' => 'مكسب',
                'image' => 'admin/assets/images/profile.jpg',
                'mobile' => '01000015425',
                'balance' => 0.0,
                'created_at' => '2023-04-16 22:25:18',
                'updated_at' => '2023-04-16 22:25:19',
            ),
            7 => 
            array (
                'id' => 299,
                'name' => 'نجلاء بسيوني',
                'image' => 'admin/assets/images/profile.jpg',
                'mobile' => '01223991243',
                'balance' => 0.0,
                'created_at' => '2023-04-17 21:22:06',
                'updated_at' => '2023-04-17 21:22:06',
            ),
            8 => 
            array (
                'id' => 300,
                'name' => 'منظفات العدوي',
                'image' => 'admin/assets/images/profile.jpg',
                'mobile' => '01286776668',
                'balance' => 0.0,
                'created_at' => '2023-04-17 22:09:45',
                'updated_at' => '2023-04-17 22:09:45',
            ),
            9 => 
            array (
                'id' => 302,
                'name' => 'جمله الراجحي',
                'image' => 'admin/assets/images/profile.jpg',
                'mobile' => '01153929084',
                'balance' => 0.0,
                'created_at' => '2023-04-18 16:12:20',
                'updated_at' => '2023-04-18 16:12:20',
            ),
            10 => 
            array (
                'id' => 379,
                'name' => 'كريستال ارما',
                'image' => 'admin/assets/images/profile.jpg',
                'mobile' => '01000524447',
                'balance' => 0.0,
                'created_at' => '2023-05-04 20:41:12',
                'updated_at' => '2023-05-04 20:41:12',
            ),
            11 => 
            array (
                'id' => 390,
                'name' => 'جمله اولاد سعد',
                'image' => 'admin/assets/images/profile.jpg',
                'mobile' => '01118187595',
                'balance' => 0.0,
                'created_at' => '2023-05-06 16:36:40',
                'updated_at' => '2023-05-06 16:36:41',
            ),
            12 => 
            array (
                'id' => 475,
                'name' => 'جمله التقوى',
                'image' => 'admin/assets/images/profile.jpg',
                'mobile' => '01220753333',
                'balance' => 0.0,
                'created_at' => '2023-05-13 17:08:47',
                'updated_at' => '2023-05-13 17:08:47',
            ),
            13 => 
            array (
                'id' => 485,
                'name' => 'جمله شامندي',
                'image' => 'admin/assets/images/profile.jpg',
                'mobile' => '01001234569',
                'balance' => 0.0,
                'created_at' => '2023-05-14 19:11:45',
                'updated_at' => '2023-05-14 19:11:45',
            ),
            14 => 
            array (
                'id' => 511,
                'name' => 'جمله النحاس',
                'image' => 'admin/assets/images/profile.jpg',
                'mobile' => '11111111111',
                'balance' => 0.0,
                'created_at' => '2023-05-16 18:06:45',
                'updated_at' => '2023-05-16 18:06:45',
            ),
            15 => 
            array (
                'id' => 631,
                'name' => 'شركه حلوه وعافيه',
                'image' => 'admin/assets/images/profile.jpg',
                'mobile' => '01000000012',
                'balance' => 0.0,
                'created_at' => '2023-06-01 16:57:03',
                'updated_at' => '2023-06-01 16:57:03',
            ),
            16 => 
            array (
                'id' => 692,
                'name' => 'ابو اليزيد',
                'image' => 'admin/assets/images/profile.jpg',
                'mobile' => '01025369857',
                'balance' => 0.0,
                'created_at' => '2023-06-07 16:38:37',
                'updated_at' => '2023-06-07 16:38:37',
            ),
            17 => 
            array (
                'id' => 693,
                'name' => 'جمله اولاد الشيخ',
                'image' => 'admin/assets/images/profile.jpg',
                'mobile' => '01526538526',
                'balance' => 0.0,
                'created_at' => '2023-06-07 18:04:02',
                'updated_at' => '2023-06-07 18:04:02',
            ),
            18 => 
            array (
                'id' => 804,
                'name' => 'شركه لمار',
                'image' => 'admin/assets/images/profile.jpg',
                'mobile' => '01118084242',
                'balance' => 0.0,
                'created_at' => '2023-06-19 19:26:27',
                'updated_at' => '2023-06-19 19:26:27',
            ),
            19 => 
            array (
                'id' => 806,
                'name' => 'دى اند سي فاتوره',
                'image' => 'admin/assets/images/profile.jpg',
                'mobile' => '01003752129',
                'balance' => 0.0,
                'created_at' => '2023-06-19 19:39:32',
                'updated_at' => '2023-06-19 19:39:32',
            ),
            20 => 
            array (
                'id' => 814,
                'name' => 'اندمي شركه',
                'image' => 'admin/assets/images/profile.jpg',
                'mobile' => '01150292060',
                'balance' => 0.0,
                'created_at' => '2023-06-20 18:40:38',
                'updated_at' => '2023-06-20 18:40:38',
            ),
            21 => 
            array (
                'id' => 821,
                'name' => 'عبده الصينى للمنظفات',
                'image' => 'admin/assets/images/profile.jpg',
                'mobile' => '01028309153',
                'balance' => 0.0,
                'created_at' => '2023-06-21 18:22:55',
                'updated_at' => '2023-06-21 18:22:55',
            ),
            22 => 
            array (
                'id' => 829,
                'name' => 'موردين كرتونه',
                'image' => 'admin/assets/images/profile.jpg',
                'mobile' => '01000000000',
                'balance' => 0.0,
                'created_at' => '2023-06-22 20:20:00',
                'updated_at' => '2023-06-22 20:20:00',
            ),
            23 => 
            array (
                'id' => 1057,
                'name' => 'محمد نسكافيه',
                'image' => 'admin/assets/images/profile.jpg',
                'mobile' => '01022211133',
                'balance' => 0.0,
                'created_at' => '2023-07-18 16:35:10',
                'updated_at' => '2023-07-18 16:35:10',
            ),
            24 => 
            array (
                'id' => 1597,
                'name' => 'جمله ابو طالب',
                'image' => 'admin/assets/images/profile.jpg',
                'mobile' => '01090435493',
                'balance' => 0.0,
                'created_at' => '2023-09-19 20:36:27',
                'updated_at' => '2023-09-19 20:36:36',
            ),
            25 => 
            array (
                'id' => 1612,
                'name' => 'جمله الوكيل',
                'image' => 'admin/assets/images/profile.jpg',
                'mobile' => '01110151025',
                'balance' => 0.0,
                'created_at' => '2023-09-20 17:50:22',
                'updated_at' => '2023-09-20 17:50:22',
            ),
            26 => 
            array (
                'id' => 1680,
                'name' => 'مورد العروسه',
                'image' => 'admin/assets/images/profile.jpg',
                'mobile' => '01111111111',
                'balance' => 0.0,
                'created_at' => '2023-09-25 05:24:22',
                'updated_at' => '2023-09-25 05:24:22',
            ),
            27 => 
            array (
                'id' => 1697,
                'name' => 'جمله الا خلف',
                'image' => 'admin/assets/images/profile.jpg',
                'mobile' => '01019499309',
                'balance' => 0.0,
                'created_at' => '2023-09-26 20:17:52',
                'updated_at' => '2023-09-26 20:17:52',
            ),
            28 => 
            array (
                'id' => 1753,
                'name' => 'جمله الاقصي',
                'image' => 'admin/assets/images/profile.jpg',
                'mobile' => '01023018952',
                'balance' => 0.0,
                'created_at' => '2023-10-01 17:37:47',
                'updated_at' => '2023-10-01 17:38:49',
            ),
            29 => 
            array (
                'id' => 1799,
                'name' => 'شركه ملح الخير',
                'image' => 'admin/assets/images/profile.jpg',
                'mobile' => '01118401200',
                'balance' => 0.0,
                'created_at' => '2023-10-05 15:00:05',
                'updated_at' => '2023-10-05 15:00:05',
            ),
            30 => 
            array (
                'id' => 1824,
                'name' => 'ارز المضمون احمد الهواري',
                'image' => 'admin/assets/images/profile.jpg',
                'mobile' => '01008852667',
                'balance' => 0.0,
                'created_at' => '2023-10-07 23:07:04',
                'updated_at' => '2023-10-07 23:14:45',
            ),
            31 => 
            array (
                'id' => 1889,
                'name' => 'تجار متنوعه',
                'image' => 'admin/img/upload/suppliers/1697392217.jpg',
                'mobile' => '01101605552',
                'balance' => 0.0,
                'created_at' => '2023-10-15 20:50:17',
                'updated_at' => '2023-11-09 02:52:14',
            ),
            32 => 
            array (
                'id' => 1890,
                'name' => 'شركه الاهرام اوسيم',
                'image' => 'admin/img/upload/suppliers/1697902836.jpg',
                'mobile' => '01095603275',
                'balance' => 0.0,
                'created_at' => '2023-10-21 18:40:36',
                'updated_at' => '2023-10-21 18:40:36',
            ),
            33 => 
            array (
                'id' => 1891,
                'name' => 'شركه ليفر مرقه وصلصه',
                'image' => 'admin/img/upload/suppliers/1698099621.jpg',
                'mobile' => '01025770029',
                'balance' => 0.0,
                'created_at' => '2023-10-24 01:20:21',
                'updated_at' => '2023-10-24 01:20:21',
            ),
            34 => 
            array (
                'id' => 1892,
                'name' => 'بن ابو عوف / حسن',
                'image' => 'admin/img/upload/suppliers/1699136587.jpg',
                'mobile' => '01090428221',
                'balance' => 0.0,
                'created_at' => '2023-11-05 01:23:07',
                'updated_at' => '2023-11-05 01:23:07',
            ),
            35 => 
            array (
                'id' => 1893,
                'name' => 'الوجد جروب  هاينز',
                'image' => 'admin/img/upload/suppliers/1699820904.jpg',
                'mobile' => '16889',
                'balance' => 0.0,
                'created_at' => '2023-11-12 23:28:24',
                'updated_at' => '2023-11-12 23:28:24',
            ),
            36 => 
            array (
                'id' => 1894,
                'name' => 'شركه بن سلمان',
                'image' => 'admin/img/upload/suppliers/1699985213.jpg',
                'mobile' => '01125132322',
                'balance' => 0.0,
                'created_at' => '2023-11-14 21:06:53',
                'updated_at' => '2023-11-14 21:06:53',
            ),
            37 => 
            array (
                'id' => 1895,
                'name' => 'شركه ليبتون',
                'image' => 'admin/img/upload/suppliers/1700310384.jpg',
                'mobile' => '01116763749',
                'balance' => 0.0,
                'created_at' => '2023-11-18 15:26:24',
                'updated_at' => '2023-11-18 15:26:24',
            ),
            38 => 
            array (
                'id' => 1896,
                'name' => 'شركه ازيس',
                'image' => 'admin/img/upload/suppliers/1700503840.jpg',
                'mobile' => '01111111111',
                'balance' => 0.0,
                'created_at' => '2023-11-20 21:10:40',
                'updated_at' => '2023-11-20 21:10:40',
            ),
            39 => 
            array (
                'id' => 1897,
                'name' => 'كوكس تاج الملوك /محمد',
                'image' => 'admin/img/upload/suppliers/1701294852.jpg',
                'mobile' => '01126406888',
                'balance' => 0.0,
                'created_at' => '2023-11-30 00:54:12',
                'updated_at' => '2023-11-30 00:54:12',
            ),
        ));
        
        
    }
}