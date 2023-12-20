<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SubcategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('subcategories')->delete();
        
        \DB::table('subcategories')->insert(array (
            0 => 
            array (
                'id' => 9,
                'name' => 'ابو عوف',
                'image' => 'admin/img/upload/1692285567.jpg',
                'created_at' => '2023-03-11 08:37:13',
                'updated_at' => '2023-08-17 18:19:27',
                'id_category' => '118',
            ),
            1 => 
            array (
                'id' => 10,
                'name' => 'اثمار والطاووس',
                'image' => 'upload/images/9007-2022-07-10.jpg',
                'created_at' => '2023-03-11 08:37:13',
                'updated_at' => '2023-03-28 19:02:45',
                'id_category' => '89',
            ),
            2 => 
            array (
                'id' => 11,
            'name' => 'اريال (1)',
                'image' => 'upload/images/9030-2022-07-10.png',
                'created_at' => '2023-03-11 08:37:13',
                'updated_at' => '2023-10-21 04:17:58',
                'id_category' => '126',
            ),
            3 => 
            array (
                'id' => 112,
                'name' => 'اوكسي',
                'image' => 'admin/img/upload/1685808389.jpg',
                'created_at' => '2023-06-03 19:06:29',
                'updated_at' => '2023-06-03 19:06:29',
                'id_category' => '130',
            ),
            4 => 
            array (
                'id' => 13,
                'name' => 'البوادي',
                'image' => 'admin/img/upload/1692287517.jpg',
                'created_at' => '2023-03-11 08:37:13',
                'updated_at' => '2023-08-17 18:51:57',
                'id_category' => '90,92,93',
            ),
            5 => 
            array (
                'id' => 14,
                'name' => 'رشيدي الميزان',
                'image' => 'admin/img/upload/1692287555.jpg',
                'created_at' => '2023-03-11 08:37:13',
                'updated_at' => '2023-08-17 18:52:35',
                'id_category' => '90,92,93,95',
            ),
            6 => 
            array (
                'id' => 15,
                'name' => 'الساعة',
                'image' => 'upload/images/0710-2022-07-10.jpg',
                'created_at' => '2023-03-11 08:37:13',
                'updated_at' => '2023-03-28 19:04:21',
                'id_category' => '96',
            ),
            7 => 
            array (
                'id' => 16,
                'name' => 'الشمعدان',
                'image' => 'upload/images/2665-2022-07-10.jpg',
                'created_at' => '2023-03-11 08:37:13',
                'updated_at' => '2023-03-29 01:37:03',
                'id_category' => '100,108',
            ),
            8 => 
            array (
                'id' => 17,
                'name' => 'الضحى',
                'image' => 'upload/images/7380-2022-07-10.jpeg',
                'created_at' => '2023-03-11 08:37:13',
                'updated_at' => '2023-03-28 19:04:52',
                'id_category' => '96,97',
            ),
            9 => 
            array (
                'id' => 18,
                'name' => 'الطاهية',
                'image' => 'upload/images/9486-2022-07-10.png',
                'created_at' => '2023-03-11 08:37:13',
                'updated_at' => '2023-03-28 19:05:00',
                'id_category' => '103',
            ),
            10 => 
            array (
                'id' => 19,
                'name' => 'العروسة',
                'image' => 'upload/images/9636-2022-07-10.jpg',
                'created_at' => '2023-03-11 08:37:13',
                'updated_at' => '2023-03-28 19:05:21',
                'id_category' => '104,111,136',
            ),
            11 => 
            array (
                'id' => 111,
            'name' => 'كنور (1)',
                'image' => 'admin/img/upload/1685735555.png',
                'created_at' => '2023-06-02 22:52:35',
                'updated_at' => '2023-10-21 04:17:02',
                'id_category' => '121',
            ),
            12 => 
            array (
                'id' => 21,
                'name' => 'المراعي',
                'image' => 'upload/images/1207-2022-07-10.jpg',
                'created_at' => '2023-03-11 08:37:13',
                'updated_at' => '2023-03-28 19:06:23',
                'id_category' => '109,125',
            ),
            13 => 
            array (
                'id' => 22,
                'name' => 'الملكة',
                'image' => 'admin/img/upload/1694579109.jpg',
                'created_at' => '2023-03-11 08:37:13',
                'updated_at' => '2023-09-13 07:25:09',
                'id_category' => '105',
            ),
            14 => 
            array (
                'id' => 23,
                'name' => 'امتنان',
                'image' => 'admin/img/upload/1694578709.jpg',
                'created_at' => '2023-03-11 08:37:13',
                'updated_at' => '2023-09-13 07:18:29',
                'id_category' => '93',
            ),
            15 => 
            array (
                'id' => 24,
                'name' => 'امريكانا',
                'image' => 'admin/img/upload/1692287384.jpg',
                'created_at' => '2023-03-11 08:37:13',
                'updated_at' => '2023-08-17 18:49:44',
                'id_category' => '101,115,134',
            ),
            16 => 
            array (
                'id' => 25,
                'name' => 'اندومي',
                'image' => 'upload/images/0483-2022-07-10.png',
                'created_at' => '2023-03-11 08:37:13',
                'updated_at' => '2023-03-28 19:07:22',
                'id_category' => '106',
            ),
            17 => 
            array (
                'id' => 26,
            'name' => 'اوريو وكادبوري (1)',
                'image' => 'admin/img/upload/1692284114.jpg',
                'created_at' => '2023-03-11 08:37:13',
                'updated_at' => '2023-10-21 04:17:52',
                'id_category' => '139,100,107,108,111',
            ),
            18 => 
            array (
                'id' => 27,
                'name' => 'اوكسي',
                'image' => 'upload/images/5987-2022-07-10.png',
                'created_at' => '2023-03-11 08:37:13',
                'updated_at' => '2023-03-28 19:08:23',
                'id_category' => '126',
            ),
            19 => 
            array (
                'id' => 28,
                'name' => 'اولكر',
                'image' => 'upload/images/8101-2022-07-10.png',
                'created_at' => '2023-03-11 08:37:13',
                'updated_at' => '2023-03-28 19:08:32',
                'id_category' => '100',
            ),
            20 => 
            array (
                'id' => 29,
                'name' => 'ايديتا',
                'image' => 'upload/images/0729-2022-07-10.jpg',
                'created_at' => '2023-03-11 08:37:13',
                'updated_at' => '2023-03-29 07:12:26',
                'id_category' => '100,107,110,133',
            ),
            21 => 
            array (
                'id' => 30,
                'name' => 'ايزيس',
                'image' => 'upload/images/3997-2022-07-10.jpg',
                'created_at' => '2023-03-11 08:37:13',
                'updated_at' => '2023-03-28 19:09:13',
                'id_category' => '111',
            ),
            22 => 
            array (
                'id' => 110,
                'name' => 'توليدو',
                'image' => 'admin/img/upload/1692287636.jpg',
                'created_at' => '2023-04-16 22:03:15',
                'updated_at' => '2023-08-17 18:53:56',
                'id_category' => '103',
            ),
            23 => 
            array (
                'id' => 32,
            'name' => 'برسيل (1)',
                'image' => 'upload/images/8260-2022-07-10.jpg',
                'created_at' => '2023-03-11 08:37:13',
                'updated_at' => '2023-10-21 04:17:45',
                'id_category' => '124,126,130',
            ),
            24 => 
            array (
                'id' => 33,
                'name' => 'بريزيدون',
                'image' => 'upload/images/0486-2022-07-10.jpg',
                'created_at' => '2023-03-11 08:37:13',
                'updated_at' => '2023-03-28 19:10:01',
                'id_category' => '113',
            ),
            25 => 
            array (
                'id' => 109,
                'name' => 'دريا',
                'image' => 'admin/img/upload/1683583776.jpg',
                'created_at' => '2023-03-29 07:26:41',
                'updated_at' => '2023-05-09 01:09:36',
                'id_category' => '96',
            ),
            26 => 
            array (
                'id' => 35,
            'name' => 'بيبسي (1)',
                'image' => 'upload/images/7379-2022-07-10.jpg',
                'created_at' => '2023-03-11 08:37:13',
                'updated_at' => '2023-10-21 04:17:48',
                'id_category' => '123,135',
            ),
            27 => 
            array (
                'id' => 36,
                'name' => 'بيسكو مصر',
                'image' => 'upload/images/4054-2022-07-10.png',
                'created_at' => '2023-03-11 08:37:13',
                'updated_at' => '2023-03-28 19:10:37',
                'id_category' => '100',
            ),
            28 => 
            array (
                'id' => 37,
                'name' => 'تاو تاو',
                'image' => 'upload/images/3553-2022-07-10.jpg',
                'created_at' => '2023-03-11 08:37:13',
                'updated_at' => '2023-03-28 19:10:50',
                'id_category' => '100,110',
            ),
            29 => 
            array (
                'id' => 108,
                'name' => 'فريده',
                'image' => 'admin/img/upload/1692389008.jpg',
                'created_at' => '2023-03-29 05:43:21',
                'updated_at' => '2023-08-18 23:03:28',
                'id_category' => '127',
            ),
            30 => 
            array (
                'id' => 40,
                'name' => 'تيميز',
                'image' => 'upload/images/0887-2022-07-10.jpg',
                'created_at' => '2023-03-11 08:37:13',
                'updated_at' => '2023-03-28 19:11:33',
                'id_category' => '114',
            ),
            31 => 
            array (
                'id' => 41,
                'name' => 'جهينة',
                'image' => 'upload/images/3789-2022-07-10.png',
                'created_at' => '2023-03-11 08:37:13',
                'updated_at' => '2023-03-28 19:11:48',
                'id_category' => '109,125',
            ),
            32 => 
            array (
                'id' => 43,
                'name' => 'جلاكسي',
                'image' => 'admin/img/upload/1692285159.jpg',
                'created_at' => '2023-03-11 08:37:13',
                'updated_at' => '2023-08-17 18:12:39',
                'id_category' => '108',
            ),
            33 => 
            array (
                'id' => 44,
                'name' => 'حواء',
                'image' => 'upload/images/5627-2022-07-10.jpg',
                'created_at' => '2023-03-11 08:37:13',
                'updated_at' => '2023-03-28 19:12:24',
                'id_category' => '105',
            ),
            34 => 
            array (
                'id' => 45,
                'name' => 'دريم',
                'image' => 'upload/images/0096-2022-07-10.jpg',
                'created_at' => '2023-03-11 08:37:13',
                'updated_at' => '2023-03-29 00:17:44',
                'id_category' => '120,122',
            ),
            35 => 
            array (
                'id' => 46,
                'name' => 'دولفين',
                'image' => 'upload/images/8944-2022-07-10.jpg',
                'created_at' => '2023-03-11 08:37:13',
                'updated_at' => '2023-03-28 19:12:51',
                'id_category' => '115',
            ),
            36 => 
            array (
                'id' => 47,
                'name' => 'دومتي',
                'image' => 'admin/img/upload/1692285684.jpg',
                'created_at' => '2023-03-11 08:37:13',
                'updated_at' => '2023-08-17 18:21:24',
                'id_category' => '113',
            ),
            37 => 
            array (
                'id' => 48,
                'name' => 'راني',
                'image' => 'upload/images/3413-2022-07-10.jpg',
                'created_at' => '2023-03-11 08:37:13',
                'updated_at' => '2023-03-28 19:13:12',
                'id_category' => '109',
            ),
            38 => 
            array (
                'id' => 49,
                'name' => 'ريد',
                'image' => 'upload/images/8565-2022-07-10.jpg',
                'created_at' => '2023-03-11 08:37:13',
                'updated_at' => '2023-03-28 19:15:08',
                'id_category' => '128',
            ),
            39 => 
            array (
                'id' => 50,
                'name' => 'روجينا',
                'image' => 'upload/images/9989-2022-07-10.png',
                'created_at' => '2023-03-11 08:37:13',
                'updated_at' => '2023-03-28 19:15:16',
                'id_category' => '105',
            ),
            40 => 
            array (
                'id' => 51,
                'name' => 'رودس',
                'image' => 'upload/images/1043-2022-07-10.jpg',
                'created_at' => '2023-03-11 08:37:13',
                'updated_at' => '2023-03-28 19:15:26',
                'id_category' => '113',
            ),
            41 => 
            array (
                'id' => 52,
            'name' => 'ريدبول وباور (1)',
                'image' => 'upload/images/3571-2022-07-10.jpg',
                'created_at' => '2023-03-11 08:37:13',
                'updated_at' => '2023-10-21 04:17:40',
                'id_category' => '135',
            ),
            42 => 
            array (
                'id' => 53,
                'name' => 'ام القرى',
                'image' => 'admin/img/upload/1694579653.jpg',
                'created_at' => '2023-03-11 08:37:13',
                'updated_at' => '2023-09-13 07:34:13',
                'id_category' => '97,98',
            ),
            43 => 
            array (
                'id' => 54,
                'name' => 'سن توب',
                'image' => 'upload/images/5296-2022-07-10.jpg',
                'created_at' => '2023-03-11 08:37:13',
                'updated_at' => '2023-03-28 19:16:22',
                'id_category' => '109',
            ),
            44 => 
            array (
                'id' => 55,
                'name' => 'شاتو وشورتي',
                'image' => 'upload/images/9162-2022-07-10.jpg',
                'created_at' => '2023-03-11 08:37:13',
                'updated_at' => '2023-03-28 19:16:31',
                'id_category' => '100',
            ),
            45 => 
            array (
                'id' => 56,
            'name' => 'شويبس (1)',
                'image' => 'upload/images/0434-2022-07-10.jpg',
                'created_at' => '2023-03-11 08:37:13',
                'updated_at' => '2023-10-21 04:17:32',
                'id_category' => '135',
            ),
            46 => 
            array (
                'id' => 57,
            'name' => 'صن شاين (1)',
                'image' => 'admin/img/upload/1692287403.jpg',
                'created_at' => '2023-03-11 08:37:13',
                'updated_at' => '2023-10-21 04:17:36',
                'id_category' => '115',
            ),
            47 => 
            array (
                'id' => 58,
                'name' => 'صني وفيرن',
                'image' => 'upload/images/9284-2022-07-10.jpg',
                'created_at' => '2023-03-11 08:37:13',
                'updated_at' => '2023-03-28 19:17:07',
                'id_category' => '116,117',
            ),
            48 => 
            array (
                'id' => 59,
                'name' => 'عافية وحلوة',
                'image' => 'upload/images/5280-2022-07-10.jpg',
                'created_at' => '2023-03-11 08:37:13',
                'updated_at' => '2023-03-28 23:55:43',
                'id_category' => '116,117',
            ),
            49 => 
            array (
                'id' => 60,
                'name' => 'عبد المعبود',
                'image' => 'upload/images/2050-2022-07-10.jpg',
                'created_at' => '2023-03-11 08:37:13',
                'updated_at' => '2023-03-28 19:17:40',
                'id_category' => '118',
            ),
            50 => 
            array (
                'id' => 61,
                'name' => 'عبور لاند',
                'image' => 'upload/images/2884-2022-07-10.png',
                'created_at' => '2023-03-11 08:37:13',
                'updated_at' => '2023-03-28 19:17:56',
                'id_category' => '113',
            ),
            51 => 
            array (
                'id' => 62,
                'name' => 'غالية ولمتنا',
                'image' => 'admin/img/upload/1694579252.jpg',
                'created_at' => '2023-03-11 08:37:13',
                'updated_at' => '2023-09-13 07:27:32',
                'id_category' => '105',
            ),
            52 => 
            array (
                'id' => 63,
                'name' => 'فاين',
                'image' => 'upload/images/8583-2022-07-10.png',
                'created_at' => '2023-03-11 08:37:13',
                'updated_at' => '2023-03-28 19:19:07',
                'id_category' => '138,124',
            ),
            53 => 
            array (
                'id' => 65,
                'name' => 'فيبا',
                'image' => 'upload/images/5388-2022-07-10.png',
                'created_at' => '2023-03-11 08:37:13',
                'updated_at' => '2023-03-28 19:19:23',
                'id_category' => '124',
            ),
            54 => 
            array (
                'id' => 66,
                'name' => 'فيتراك',
                'image' => 'admin/img/upload/1692287754.jpg',
                'created_at' => '2023-03-11 08:37:13',
                'updated_at' => '2023-08-17 18:55:54',
                'id_category' => '95,119',
            ),
            55 => 
            array (
                'id' => 67,
            'name' => 'فيروز (1)',
                'image' => 'upload/images/8136-2022-07-10.jpg',
                'created_at' => '2023-03-11 08:37:13',
                'updated_at' => '2023-10-21 21:32:39',
                'id_category' => '135',
            ),
            56 => 
            array (
                'id' => 68,
                'name' => 'قلية',
                'image' => 'upload/images/6910-2022-07-10.jpg',
                'created_at' => '2023-03-11 08:37:13',
                'updated_at' => '2023-03-28 19:20:01',
                'id_category' => '116',
            ),
            57 => 
            array (
                'id' => 69,
                'name' => 'كريستال',
                'image' => 'admin/img/upload/1692285937.jpg',
                'created_at' => '2023-03-11 08:37:13',
                'updated_at' => '2023-08-17 18:25:37',
                'id_category' => '116,117',
            ),
            58 => 
            array (
                'id' => 70,
                'name' => 'كلوركس',
                'image' => 'upload/images/2721-2022-07-10.jpg',
                'created_at' => '2023-03-11 08:37:13',
                'updated_at' => '2023-03-28 19:22:19',
                'id_category' => '124',
            ),
            59 => 
            array (
                'id' => 72,
                'name' => 'كورونا',
                'image' => 'upload/images/7678-2022-07-10.jpg',
                'created_at' => '2023-03-11 08:37:13',
                'updated_at' => '2023-03-28 22:23:04',
                'id_category' => '100,108,111',
            ),
            60 => 
            array (
                'id' => 73,
                'name' => 'كوكس',
                'image' => 'upload/images/3724-2022-07-10.jpg',
                'created_at' => '2023-03-11 08:37:13',
                'updated_at' => '2023-03-29 00:19:12',
                'id_category' => '99,102,120,122',
            ),
            61 => 
            array (
                'id' => 74,
            'name' => 'كولا ودساني (1)',
                'image' => 'upload/images/2675-2022-07-10.jpg',
                'created_at' => '2023-03-11 08:37:13',
                'updated_at' => '2023-10-21 04:17:22',
                'id_category' => '123,135',
            ),
            62 => 
            array (
                'id' => 75,
            'name' => 'كيت كات (1)',
                'image' => 'upload/images/9963-2022-07-10.png',
                'created_at' => '2023-03-11 08:37:13',
                'updated_at' => '2023-10-21 04:17:28',
                'id_category' => '108',
            ),
            63 => 
            array (
                'id' => 76,
                'name' => 'لافاشكري',
                'image' => 'upload/images/4141-2022-07-10.png',
                'created_at' => '2023-03-11 08:37:13',
                'updated_at' => '2023-03-28 19:21:00',
                'id_category' => '113',
            ),
            64 => 
            array (
                'id' => 77,
                'name' => 'لمار',
                'image' => 'upload/images/4035-2022-07-10.jpg',
                'created_at' => '2023-03-11 08:37:13',
                'updated_at' => '2023-03-28 19:20:51',
                'id_category' => '109,125',
            ),
            65 => 
            array (
                'id' => 78,
                'name' => 'لمبادا',
                'image' => 'upload/images/0190-2022-07-10.jpg',
                'created_at' => '2023-03-11 08:37:13',
                'updated_at' => '2023-03-28 19:20:23',
                'id_category' => '100',
            ),
            66 => 
            array (
                'id' => 79,
            'name' => 'لوكس وكامي (1)',
                'image' => 'upload/images/0557-2022-07-10.jpg',
                'created_at' => '2023-03-11 08:37:13',
                'updated_at' => '2023-10-21 04:17:10',
                'id_category' => '130',
            ),
            67 => 
            array (
                'id' => 80,
            'name' => 'ليبتون (1)',
                'image' => 'upload/images/6589-2022-07-10.png',
                'created_at' => '2023-03-11 08:37:13',
                'updated_at' => '2023-10-21 04:17:15',
                'id_category' => '104,121,122',
            ),
            68 => 
            array (
                'id' => 81,
                'name' => 'ماربيلا',
                'image' => 'upload/images/6106-2022-07-10.png',
                'created_at' => '2023-03-11 08:37:13',
                'updated_at' => '2023-03-28 19:31:51',
                'id_category' => '107',
            ),
            69 => 
            array (
                'id' => 82,
                'name' => 'ماكستلا',
                'image' => 'upload/images/4421-2022-07-10.jpg',
                'created_at' => '2023-03-11 08:37:13',
                'updated_at' => '2023-03-28 19:31:43',
                'id_category' => '108',
            ),
            70 => 
            array (
                'id' => 83,
                'name' => 'مصرية',
                'image' => 'upload/images/3623-2022-07-10.jpg',
                'created_at' => '2023-03-11 08:37:13',
                'updated_at' => '2023-03-28 19:31:33',
                'id_category' => '105',
            ),
            71 => 
            array (
                'id' => 107,
                'name' => 'بليدج',
                'image' => 'admin/img/upload/1692389033.jpg',
                'created_at' => '2023-03-29 00:55:51',
                'updated_at' => '2023-08-18 23:03:53',
                'id_category' => '127',
            ),
            72 => 
            array (
                'id' => 85,
                'name' => 'نسلة',
                'image' => 'admin/img/upload/1692285358.jpg',
                'created_at' => '2023-03-11 08:37:13',
                'updated_at' => '2023-08-17 18:15:58',
                'id_category' => '111,114,121,122,123,125',
            ),
            73 => 
            array (
                'id' => 86,
                'name' => 'نوتيلا',
                'image' => 'upload/images/4960-2022-07-10.jpg',
                'created_at' => '2023-03-11 08:37:13',
                'updated_at' => '2023-03-28 19:29:33',
                'id_category' => '108',
            ),
            74 => 
            array (
                'id' => 87,
            'name' => 'هاينز (1)',
                'image' => 'admin/img/upload/1692287114.jpg',
                'created_at' => '2023-03-11 08:37:13',
                'updated_at' => '2023-10-21 04:17:19',
                'id_category' => '89,91',
            ),
            75 => 
            array (
                'id' => 89,
                'name' => 'بيج كولا وفولت',
                'image' => 'admin/img/upload/1692283793.jpg',
                'created_at' => '2023-03-11 08:37:13',
                'updated_at' => '2023-08-17 17:49:53',
                'id_category' => '135',
            ),
            76 => 
            array (
                'id' => 91,
                'name' => 'شاهين',
                'image' => 'admin/img/upload/1692285544.jpg',
                'created_at' => '2023-03-11 08:37:13',
                'updated_at' => '2023-08-17 18:19:04',
                'id_category' => '118',
            ),
            77 => 
            array (
                'id' => 92,
                'name' => 'بيبي جوي',
                'image' => 'upload/images/0008-2022-10-06.jpg',
                'created_at' => '2023-03-11 08:37:13',
                'updated_at' => '2023-03-28 19:33:21',
                'id_category' => '138,136',
            ),
            78 => 
            array (
                'id' => 93,
                'name' => 'زينة',
                'image' => 'admin/img/upload/1692388849.jpg',
                'created_at' => '2023-03-11 08:37:13',
                'updated_at' => '2023-08-18 23:00:49',
                'id_category' => '124',
            ),
            79 => 
            array (
                'id' => 106,
            'name' => 'شيبسي (1)',
                'image' => 'admin/img/upload/1694578975.jpg',
                'created_at' => '2023-03-29 00:48:36',
                'updated_at' => '2023-10-21 04:16:58',
                'id_category' => '133',
            ),
            80 => 
            array (
                'id' => 95,
                'name' => 'بيتي',
                'image' => 'admin/img/upload/1692283877.jpg',
                'created_at' => '2023-03-11 08:37:13',
                'updated_at' => '2023-08-17 17:51:17',
                'id_category' => '109',
            ),
            81 => 
            array (
                'id' => 96,
                'name' => 'ايطاليانو',
                'image' => 'admin/img/upload/1694579193.jpg',
                'created_at' => '2023-03-11 08:37:13',
                'updated_at' => '2023-09-13 07:26:33',
                'id_category' => '105',
            ),
            82 => 
            array (
                'id' => 97,
                'name' => 'ديري',
                'image' => 'admin/img/upload/1692285759.jpg',
                'created_at' => '2023-03-11 08:37:13',
                'updated_at' => '2023-08-17 18:22:39',
                'id_category' => '113',
            ),
            83 => 
            array (
                'id' => 98,
                'name' => 'بو نجورنو',
                'image' => 'admin/img/upload/1692285384.jpg',
                'created_at' => '2023-03-11 08:37:13',
                'updated_at' => '2023-08-17 18:16:24',
                'id_category' => '111',
            ),
            84 => 
            array (
                'id' => 99,
                'name' => 'اندومي كوري',
                'image' => 'upload/images/6708-2023-03-07.jpg',
                'created_at' => '2023-03-11 08:37:13',
                'updated_at' => '2023-03-28 19:32:12',
                'id_category' => '136',
            ),
            85 => 
            array (
                'id' => 100,
                'name' => 'اهلاوي',
                'image' => 'admin/img/upload/1692284209.jpg',
                'created_at' => '2023-03-11 08:37:13',
                'updated_at' => '2023-08-17 17:56:49',
                'id_category' => '100',
            ),
            86 => 
            array (
                'id' => 101,
                'name' => 'كل يوم',
                'image' => 'admin/img/upload/1694578875.jpg',
                'created_at' => '2023-03-11 08:37:13',
                'updated_at' => '2023-09-13 07:21:15',
                'id_category' => '109',
            ),
            87 => 
            array (
                'id' => 102,
                'name' => 'حلوالشام',
                'image' => 'admin/img/upload/1692285409.jpg',
                'created_at' => '2023-03-11 08:37:13',
                'updated_at' => '2023-08-17 18:16:49',
                'id_category' => '111,122',
            ),
            88 => 
            array (
                'id' => 116,
                'name' => 'سردين انواع',
                'image' => 'admin/img/upload/1693164185.jpg',
                'created_at' => '2023-08-27 22:23:05',
                'updated_at' => '2023-08-27 22:23:05',
                'id_category' => '103',
            ),
            89 => 
            array (
                'id' => 113,
                'name' => 'بست',
                'image' => 'admin/img/upload/1685982332.jpg',
                'created_at' => '2023-06-05 19:25:32',
                'updated_at' => '2023-06-05 19:25:32',
                'id_category' => '109',
            ),
            90 => 
            array (
                'id' => 114,
            'name' => 'اريال (1)',
                'image' => 'admin/img/upload/1689095442.jpg',
                'created_at' => '2023-07-11 20:10:42',
                'updated_at' => '2023-10-21 04:17:06',
                'id_category' => '130',
            ),
            91 => 
            array (
                'id' => 115,
                'name' => 'سلك مواعين',
                'image' => 'admin/img/upload/1690225771.jpg',
                'created_at' => '2023-07-24 22:09:31',
                'updated_at' => '2023-07-24 22:09:31',
                'id_category' => '124',
            ),
            92 => 
            array (
                'id' => 117,
                'name' => 'الضحي',
                'image' => 'admin/img/upload/1694219358.jpg',
                'created_at' => '2023-09-09 03:29:18',
                'updated_at' => '2023-09-09 03:29:18',
                'id_category' => '101',
            ),
            93 => 
            array (
                'id' => 118,
                'name' => 'تانج',
                'image' => 'admin/img/upload/1694219710.jpg',
                'created_at' => '2023-09-09 03:35:10',
                'updated_at' => '2023-09-09 03:35:10',
                'id_category' => '139',
            ),
            94 => 
            array (
                'id' => 119,
            'name' => 'كلورتس (1)',
                'image' => 'admin/img/upload/1694219937.jpg',
                'created_at' => '2023-09-09 03:38:57',
                'updated_at' => '2023-10-21 04:16:54',
                'id_category' => '107',
            ),
            95 => 
            array (
                'id' => 120,
                'name' => 'موسي',
                'image' => 'admin/img/upload/1694293835.jpg',
                'created_at' => '2023-09-10 00:10:35',
                'updated_at' => '2023-09-10 00:10:35',
                'id_category' => '135',
            ),
            96 => 
            array (
                'id' => 121,
                'name' => 'ايفريدي.حجارة',
                'image' => 'admin/img/upload/1694577590.jpg',
                'created_at' => '2023-09-13 06:59:50',
                'updated_at' => '2023-10-20 03:30:22',
                'id_category' => '136',
            ),
            97 => 
            array (
                'id' => 122,
                'name' => 'امريكانا',
                'image' => 'admin/img/upload/1694578558.jpg',
                'created_at' => '2023-09-13 07:15:58',
                'updated_at' => '2023-09-13 07:15:58',
                'id_category' => '103',
            ),
            98 => 
            array (
                'id' => 123,
                'name' => 'دقيق السلطان',
                'image' => 'admin/img/upload/1694579413.jpg',
                'created_at' => '2023-09-13 07:30:13',
                'updated_at' => '2023-09-13 07:30:13',
                'id_category' => '97',
            ),
            99 => 
            array (
                'id' => 124,
                'name' => 'اندومي ماربيلا',
                'image' => 'admin/img/upload/1694579824.jpg',
                'created_at' => '2023-09-13 07:37:04',
                'updated_at' => '2023-09-13 07:37:04',
                'id_category' => '106',
            ),
            100 => 
            array (
                'id' => 125,
                'name' => 'جيليت',
                'image' => 'admin/img/upload/1695607289.jpg',
                'created_at' => '2023-09-25 05:01:29',
                'updated_at' => '2023-09-25 05:01:29',
                'id_category' => '130',
            ),
            101 => 
            array (
                'id' => 126,
                'name' => 'جبنه المصرين',
                'image' => 'admin/img/upload/1696358217.jpg',
                'created_at' => '2023-10-03 21:36:57',
                'updated_at' => '2023-10-03 21:36:57',
                'id_category' => '113',
            ),
            102 => 
            array (
                'id' => 127,
            'name' => 'ترايدنت (1)',
                'image' => 'admin/img/upload/1696473050.jpg',
                'created_at' => '2023-10-05 05:30:50',
                'updated_at' => '2023-10-21 04:16:50',
                'id_category' => '107',
            ),
            103 => 
            array (
                'id' => 130,
                'name' => 'برسيل.أشهر منتجاتها مساحيق الغسيل',
                'image' => 'admin/img/upload/1697831719.jpg',
                'created_at' => '2023-10-20 22:55:19',
                'updated_at' => '2023-10-20 22:55:19',
                'id_category' => '146',
            ),
            104 => 
            array (
                'id' => 128,
                'name' => 'ماكدونالدز.أشهر منتجاتها الوجبات السريعة',
                'image' => 'admin/img/upload/1697769003.png',
                'created_at' => '2023-10-20 05:30:03',
                'updated_at' => '2023-10-20 22:44:03',
                'id_category' => '146',
            ),
            105 => 
            array (
                'id' => 129,
                'name' => 'بيبسي.أشهر منتجاتها المياه الغازية',
                'image' => 'admin/img/upload/1697769305.jpg',
                'created_at' => '2023-10-20 05:35:05',
                'updated_at' => '2023-10-20 22:43:43',
                'id_category' => '146',
            ),
            106 => 
            array (
                'id' => 131,
                'name' => 'بريل.أشهر منتجاتها بريل المواعين',
                'image' => 'admin/img/upload/1697831742.png',
                'created_at' => '2023-10-20 22:55:42',
                'updated_at' => '2023-10-20 22:55:42',
                'id_category' => '146',
            ),
            107 => 
            array (
                'id' => 132,
                'name' => 'بيك رولز.أشهر منتجاتها المقرمشات والتسالي',
                'image' => 'admin/img/upload/1697831768.png',
                'created_at' => '2023-10-20 22:56:08',
                'updated_at' => '2023-10-20 22:56:08',
                'id_category' => '146',
            ),
            108 => 
            array (
                'id' => 133,
                'name' => 'تايد.أشهر منتجاتها مساحيق الغسيل',
                'image' => 'admin/img/upload/1697831790.png',
                'created_at' => '2023-10-20 22:56:30',
                'updated_at' => '2023-10-20 22:56:30',
                'id_category' => '146',
            ),
            109 => 
            array (
                'id' => 134,
                'name' => 'ترايدنت.أشهر منتجاتها اللبان والحلوى',
                'image' => 'admin/img/upload/1697831823.png',
                'created_at' => '2023-10-20 22:57:03',
                'updated_at' => '2023-10-20 22:57:03',
                'id_category' => '146',
            ),
            110 => 
            array (
                'id' => 135,
                'name' => 'تشكلتس.أشهر منتجاتها اللبان والحلوى',
                'image' => 'admin/img/upload/1697831854.jpeg',
                'created_at' => '2023-10-20 22:57:34',
                'updated_at' => '2023-10-20 22:57:34',
                'id_category' => '146',
            ),
            111 => 
            array (
                'id' => 136,
                'name' => 'دانون.أشهر منتجاتها الزبادي ومنتجات الألبان',
                'image' => 'admin/img/upload/1697831904.jpg',
                'created_at' => '2023-10-20 22:58:24',
                'updated_at' => '2023-10-20 22:58:24',
                'id_category' => '146',
            ),
            112 => 
            array (
                'id' => 137,
                'name' => 'داوني.أشهر منتجاتها معطرات الجو',
                'image' => 'admin/img/upload/1697831955.jpg',
                'created_at' => '2023-10-20 22:59:15',
                'updated_at' => '2023-10-20 22:59:15',
                'id_category' => '146',
            ),
            113 => 
            array (
                'id' => 138,
                'name' => 'دوريتوس.أشهر منتجاتها المقرمشات والتسالي',
                'image' => 'admin/img/upload/1697832020.png',
                'created_at' => '2023-10-20 23:00:20',
                'updated_at' => '2023-10-20 23:00:20',
                'id_category' => '146',
            ),
            114 => 
            array (
                'id' => 139,
                'name' => 'سيريلاك.أشهر منتجاتها اللبن المجفف',
                'image' => 'admin/img/upload/1697832048.jpg',
                'created_at' => '2023-10-20 23:00:48',
                'updated_at' => '2023-10-20 23:00:48',
                'id_category' => '146',
            ),
            115 => 
            array (
                'id' => 140,
                'name' => 'ليز.أشهر منتجاتها المقرمشات والتسالي',
                'image' => 'admin/img/upload/1697832081.png',
                'created_at' => '2023-10-20 23:01:21',
                'updated_at' => '2023-10-20 23:01:21',
                'id_category' => '146',
            ),
            116 => 
            array (
                'id' => 141,
                'name' => 'شيبسي.أشهر منتجاتها المقرمشات والتسالي',
                'image' => 'admin/img/upload/1697832134.jpeg',
                'created_at' => '2023-10-20 23:02:14',
                'updated_at' => '2023-10-20 23:02:14',
                'id_category' => '146',
            ),
            117 => 
            array (
                'id' => 142,
                'name' => 'شيتوس.أشهر منتجاتها المقرمشات والتسالي',
                'image' => 'admin/img/upload/1697832198.jpg',
                'created_at' => '2023-10-20 23:03:18',
                'updated_at' => '2023-10-20 23:03:18',
                'id_category' => '146',
            ),
            118 => 
            array (
                'id' => 143,
                'name' => 'صن بايتس.أشهر منتجاتها المقرمشات والتسالي',
                'image' => 'admin/img/upload/1697832227.jpg',
                'created_at' => '2023-10-20 23:03:47',
                'updated_at' => '2023-10-20 23:03:47',
                'id_category' => '146',
            ),
            119 => 
            array (
                'id' => 144,
                'name' => 'فيري.أشهر منتجاتها منظف المواعين',
                'image' => 'admin/img/upload/1697832252.png',
                'created_at' => '2023-10-20 23:04:12',
                'updated_at' => '2023-10-20 23:04:12',
                'id_category' => '146',
            ),
            120 => 
            array (
                'id' => 145,
                'name' => 'كادبوري.أشهر منتجاتها الشيكولاتة',
                'image' => 'admin/img/upload/1697832274.jpg',
                'created_at' => '2023-10-20 23:04:34',
                'updated_at' => '2023-10-20 23:04:34',
                'id_category' => '146',
            ),
            121 => 
            array (
                'id' => 146,
                'name' => 'كارفور.مركز تسوق',
                'image' => 'admin/img/upload/1697832292.png',
                'created_at' => '2023-10-20 23:04:52',
                'updated_at' => '2023-10-20 23:04:52',
                'id_category' => '146',
            ),
            122 => 
            array (
                'id' => 147,
                'name' => 'كلورتس.أشهر منتجاتها اللبان والحلوى',
                'image' => 'admin/img/upload/1697832325.png',
                'created_at' => '2023-10-20 23:05:25',
                'updated_at' => '2023-10-20 23:05:25',
                'id_category' => '146',
            ),
            123 => 
            array (
                'id' => 148,
                'name' => 'كنور.أشهر منتجاتها الأعشاب والتوابل',
                'image' => 'admin/img/upload/1697832355.png',
                'created_at' => '2023-10-20 23:05:55',
                'updated_at' => '2023-10-20 23:05:55',
                'id_category' => '146',
            ),
            124 => 
            array (
                'id' => 149,
                'name' => 'كوميلي.أشهر منتجاتها شامبو الشعر',
                'image' => 'admin/img/upload/1697832388.jpg',
                'created_at' => '2023-10-20 23:06:28',
                'updated_at' => '2023-10-20 23:06:28',
                'id_category' => '146',
            ),
            125 => 
            array (
                'id' => 150,
                'name' => 'ليبتون.أشهر منتجاتها الشاي',
                'image' => 'admin/img/upload/1697832409.png',
                'created_at' => '2023-10-20 23:06:49',
                'updated_at' => '2023-10-20 23:06:49',
                'id_category' => '146',
            ),
            126 => 
            array (
                'id' => 151,
                'name' => 'نسكافية.أشهر منتجاتها النسكافية المشروب الساخن',
                'image' => 'admin/img/upload/1697832442.jpg',
                'created_at' => '2023-10-20 23:07:22',
                'updated_at' => '2023-10-20 23:07:22',
                'id_category' => '146',
            ),
            127 => 
            array (
                'id' => 152,
                'name' => 'نسكويك.أشهر منتجاتها اللبن المجفف',
                'image' => 'admin/img/upload/1697832468.png',
                'created_at' => '2023-10-20 23:07:48',
                'updated_at' => '2023-10-20 23:07:48',
                'id_category' => '146',
            ),
            128 => 
            array (
                'id' => 153,
                'name' => 'بامبرز.أشهر منتجاتها حفاضات الأطفال',
                'image' => 'admin/img/upload/1697832490.png',
                'created_at' => '2023-10-20 23:08:10',
                'updated_at' => '2023-10-20 23:08:10',
                'id_category' => '146',
            ),
            129 => 
            array (
                'id' => 154,
                'name' => 'اريال.أشهر منتجاتها مساحيق الغسيل',
                'image' => 'admin/img/upload/1697832513.png',
                'created_at' => '2023-10-20 23:08:33',
                'updated_at' => '2023-10-20 23:08:33',
                'id_category' => '146',
            ),
            130 => 
            array (
                'id' => 155,
                'name' => 'بوما.أشهر منتجاتها الأحذية',
                'image' => 'admin/img/upload/1697834245.png',
                'created_at' => '2023-10-20 23:37:25',
                'updated_at' => '2023-10-20 23:37:25',
                'id_category' => '146',
            ),
            131 => 
            array (
                'id' => 156,
                'name' => 'بيتزا هوت.أشهر منتجاتها البيتزا والوجبا السريعة',
                'image' => 'admin/img/upload/1697834272.png',
                'created_at' => '2023-10-20 23:37:52',
                'updated_at' => '2023-10-20 23:37:52',
                'id_category' => '146',
            ),
            132 => 
            array (
                'id' => 157,
                'name' => 'دساني.أشهر منتجاتها المياه المعدنية',
                'image' => 'admin/img/upload/1697834296.png',
                'created_at' => '2023-10-20 23:38:16',
                'updated_at' => '2023-10-20 23:38:16',
                'id_category' => '146',
            ),
            133 => 
            array (
                'id' => 158,
                'name' => 'ديزني.أشهر منتجاتها مسلسلات وأفلام الأطفال',
                'image' => 'admin/img/upload/1697834325.png',
                'created_at' => '2023-10-20 23:38:45',
                'updated_at' => '2023-10-20 23:38:45',
                'id_category' => '146',
            ),
            134 => 
            array (
                'id' => 159,
                'name' => 'سبرايت.أشهر منتجاتها المياه الغازية',
                'image' => 'admin/img/upload/1697834349.png',
                'created_at' => '2023-10-20 23:39:09',
                'updated_at' => '2023-10-20 23:39:09',
                'id_category' => '146',
            ),
            135 => 
            array (
                'id' => 160,
                'name' => 'شويبس.أشهر منتجاتها المياه الغازية',
                'image' => 'admin/img/upload/1697834373.jpeg',
                'created_at' => '2023-10-20 23:39:33',
                'updated_at' => '2023-10-20 23:39:33',
                'id_category' => '146',
            ),
            136 => 
            array (
                'id' => 161,
                'name' => 'كامي.أشهر منتجاتها الصابون',
                'image' => 'admin/img/upload/1697834395.jpg',
                'created_at' => '2023-10-20 23:39:55',
                'updated_at' => '2023-10-20 23:39:55',
                'id_category' => '146',
            ),
            137 => 
            array (
                'id' => 162,
                'name' => 'كوكاكولا.أشهر منتجاتها المياه الغازية',
                'image' => 'admin/img/upload/1697834423.png',
                'created_at' => '2023-10-20 23:40:23',
                'updated_at' => '2023-10-20 23:40:23',
                'id_category' => '146',
            ),
            138 => 
            array (
                'id' => 163,
                'name' => 'لوكس.أشهر منتجاتها الصابون',
                'image' => 'admin/img/upload/1697834450.jpeg',
                'created_at' => '2023-10-20 23:40:50',
                'updated_at' => '2023-10-20 23:40:50',
                'id_category' => '146',
            ),
            139 => 
            array (
                'id' => 164,
                'name' => 'مارلابولو.أشهر منتجاتها السجائر',
                'image' => 'admin/img/upload/1697834472.jpg',
                'created_at' => '2023-10-20 23:41:12',
                'updated_at' => '2023-10-20 23:41:12',
                'id_category' => '146',
            ),
            140 => 
            array (
                'id' => 165,
                'name' => 'نتفلكس.شركة إنتاج أفلام ومسلسلات',
                'image' => 'admin/img/upload/1697834498.jpg',
                'created_at' => '2023-10-20 23:41:38',
                'updated_at' => '2023-10-20 23:41:38',
                'id_category' => '146',
            ),
            141 => 
            array (
                'id' => 166,
                'name' => 'هاينز.أشهر منتجاتها الصلصة والكاتشب',
                'image' => 'admin/img/upload/1697834528.png',
                'created_at' => '2023-10-20 23:42:08',
                'updated_at' => '2023-10-20 23:42:08',
                'id_category' => '146',
            ),
            142 => 
            array (
                'id' => 167,
                'name' => 'اتش بي.أشهر منتجاتها أجهزة الكمبيوتر واللاب توب',
                'image' => 'admin/img/upload/1697834576.jpg',
                'created_at' => '2023-10-20 23:42:56',
                'updated_at' => '2023-10-20 23:42:56',
                'id_category' => '146',
            ),
            143 => 
            array (
                'id' => 168,
                'name' => 'اوريو.أشهر منتجاتها البسكوت والشيكولاتة',
                'image' => 'admin/img/upload/1697834605.png',
                'created_at' => '2023-10-20 23:43:25',
                'updated_at' => '2023-10-20 23:43:25',
                'id_category' => '146',
            ),
            144 => 
            array (
                'id' => 169,
                'name' => 'بيرجر كينج.أشهر منتجاتها الوجبا السريعة',
                'image' => 'admin/img/upload/1697834638.png',
                'created_at' => '2023-10-20 23:43:58',
                'updated_at' => '2023-10-20 23:43:58',
                'id_category' => '146',
            ),
            145 => 
            array (
                'id' => 170,
                'name' => 'ستاربكس.مركز مشروبات',
                'image' => 'admin/img/upload/1697834684.png',
                'created_at' => '2023-10-20 23:44:44',
                'updated_at' => '2023-10-20 23:44:44',
                'id_category' => '146',
            ),
            146 => 
            array (
                'id' => 171,
                'name' => 'سفن اب.أشهر منتجاتها المياه الغازية',
                'image' => 'admin/img/upload/1697834709.png',
                'created_at' => '2023-10-20 23:45:09',
                'updated_at' => '2023-10-20 23:45:09',
                'id_category' => '146',
            ),
            147 => 
            array (
                'id' => 172,
                'name' => 'فانتا.أشهر منتجاتها المياه الغازية',
                'image' => 'admin/img/upload/1697834732.png',
                'created_at' => '2023-10-20 23:45:32',
                'updated_at' => '2023-10-20 23:45:32',
                'id_category' => '146',
            ),
            148 => 
            array (
                'id' => 173,
                'name' => 'كنتاكي.أشهر منتجاتها الوجبات السريعة',
                'image' => 'admin/img/upload/1697834754.png',
                'created_at' => '2023-10-20 23:45:54',
                'updated_at' => '2023-10-20 23:45:54',
                'id_category' => '146',
            ),
            149 => 
            array (
                'id' => 174,
                'name' => 'هيونداي.متخصصه في إنتاج السيارات',
                'image' => 'admin/img/upload/1697834810.jpg',
                'created_at' => '2023-10-20 23:46:50',
                'updated_at' => '2023-10-20 23:46:50',
                'id_category' => '146',
            ),
            150 => 
            array (
                'id' => 175,
                'name' => 'مياه امازون',
                'image' => 'admin/img/upload/1699118546.jpg',
                'created_at' => '2023-11-04 20:22:26',
                'updated_at' => '2023-11-04 20:22:26',
                'id_category' => '123',
            ),
            151 => 
            array (
                'id' => 176,
                'name' => 'شركات مصريه',
                'image' => 'admin/img/upload/1699460477.jpg',
                'created_at' => '2023-11-08 19:21:17',
                'updated_at' => '2023-11-08 19:21:17',
                'id_category' => '135',
            ),
            152 => 
            array (
                'id' => 177,
                'name' => 'هارفرست',
                'image' => 'admin/img/upload/1699488062.jpg',
                'created_at' => '2023-11-09 03:01:02',
                'updated_at' => '2023-11-09 03:01:02',
                'id_category' => '91',
            ),
            153 => 
            array (
                'id' => 178,
                'name' => 'سبيرو سباتس',
                'image' => 'admin/img/upload/1699921534.jpg',
                'created_at' => '2023-11-14 03:25:34',
                'updated_at' => '2023-11-14 03:25:34',
                'id_category' => '135',
            ),
        ));
        
        
    }
}