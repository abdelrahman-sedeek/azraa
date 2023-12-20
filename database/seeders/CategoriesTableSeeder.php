<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 138,
                'name' => '44- العناية بالطفل',
                'image' => 'admin/img/upload/1697762480.png',
                'created_at' => '2023-02-19 08:56:38',
                'updated_at' => '2023-10-20 03:41:20',
            ),
            1 => 
            array (
                'id' => 139,
                'name' => '14-عصائر بودرة',
                'image' => 'admin/img/upload/1697762470.png',
                'created_at' => '2023-02-19 08:56:38',
                'updated_at' => '2023-10-20 03:41:10',
            ),
            2 => 
            array (
                'id' => 89,
                'name' => '41-خل',
                'image' => 'admin/img/upload/1697763669.png',
                'created_at' => '2023-02-19 08:56:38',
                'updated_at' => '2023-10-20 04:01:09',
            ),
            3 => 
            array (
                'id' => 90,
                'name' => '23-حلاوة طحينية',
                'image' => 'admin/img/upload/1697763678.png',
                'created_at' => '2023-02-19 08:56:38',
                'updated_at' => '2023-10-20 04:01:18',
            ),
            4 => 
            array (
                'id' => 91,
                'name' => '17-صلصه وكاتشب',
                'image' => 'admin/img/upload/1697763686.png',
                'created_at' => '2023-02-19 08:56:38',
                'updated_at' => '2023-10-20 04:01:26',
            ),
            5 => 
            array (
                'id' => 92,
                'name' => '24-طحينة',
                'image' => 'admin/img/upload/1697763695.png',
                'created_at' => '2023-02-19 08:56:38',
                'updated_at' => '2023-10-20 04:01:35',
            ),
            6 => 
            array (
                'id' => 93,
                'name' => '29-عسل',
                'image' => 'admin/img/upload/1697763703.png',
                'created_at' => '2023-02-19 08:56:38',
                'updated_at' => '2023-10-20 04:01:43',
            ),
            7 => 
            array (
                'id' => 95,
                'name' => '28-مربى',
                'image' => 'admin/img/upload/1697763712.png',
                'created_at' => '2023-02-19 08:56:38',
                'updated_at' => '2023-10-20 04:01:52',
            ),
            8 => 
            array (
                'id' => 96,
                'name' => '21-أرز',
                'image' => 'admin/img/upload/1697763721.png',
                'created_at' => '2023-02-19 08:56:38',
                'updated_at' => '2023-10-20 04:02:01',
            ),
            9 => 
            array (
                'id' => 97,
                'name' => '19-دقيق',
                'image' => 'admin/img/upload/1697763730.png',
                'created_at' => '2023-02-19 08:56:38',
                'updated_at' => '2023-10-20 04:02:10',
            ),
            10 => 
            array (
                'id' => 98,
                'name' => '20-سكر',
                'image' => 'admin/img/upload/1697763662.png',
                'created_at' => '2023-02-19 08:56:38',
                'updated_at' => '2023-10-20 04:01:02',
            ),
            11 => 
            array (
                'id' => 99,
                'name' => '30-ملح',
                'image' => 'admin/img/upload/1697763654.png',
                'created_at' => '2023-02-19 08:56:38',
                'updated_at' => '2023-10-20 04:00:54',
            ),
            12 => 
            array (
                'id' => 100,
                'name' => '4-بسكوت',
                'image' => 'admin/img/upload/1697763646.png',
                'created_at' => '2023-02-19 08:56:38',
                'updated_at' => '2023-10-20 04:00:46',
            ),
            13 => 
            array (
                'id' => 101,
                'name' => '34-بقوليات',
                'image' => 'admin/img/upload/1697763636.png',
                'created_at' => '2023-02-19 08:56:38',
                'updated_at' => '2023-10-20 04:00:36',
            ),
            14 => 
            array (
                'id' => 102,
                'name' => '33-توابل',
                'image' => 'admin/img/upload/1697763628.png',
                'created_at' => '2023-02-19 08:56:38',
                'updated_at' => '2023-10-20 04:00:28',
            ),
            15 => 
            array (
                'id' => 103,
                'name' => '27-معلبات',
                'image' => 'admin/img/upload/1697763616.png',
                'created_at' => '2023-02-19 08:56:38',
                'updated_at' => '2023-10-20 04:00:16',
            ),
            16 => 
            array (
                'id' => 104,
                'name' => '9-شاي',
                'image' => 'admin/img/upload/1697763604.png',
                'created_at' => '2023-02-19 08:56:38',
                'updated_at' => '2023-10-20 04:00:04',
            ),
            17 => 
            array (
                'id' => 105,
                'name' => '18-مكرونة',
                'image' => 'admin/img/upload/1697763596.png',
                'created_at' => '2023-02-19 08:56:38',
                'updated_at' => '2023-10-20 03:59:56',
            ),
            18 => 
            array (
                'id' => 106,
                'name' => '26-اندومي',
                'image' => 'admin/img/upload/1697763586.png',
                'created_at' => '2023-02-19 08:56:38',
                'updated_at' => '2023-10-20 03:59:46',
            ),
            19 => 
            array (
                'id' => 107,
                'name' => '3-حلوى و لبان',
                'image' => 'admin/img/upload/1697763578.png',
                'created_at' => '2023-02-19 08:56:38',
                'updated_at' => '2023-10-20 03:59:38',
            ),
            20 => 
            array (
                'id' => 108,
                'name' => '6-شيكولاته',
                'image' => 'admin/img/upload/1697763568.png',
                'created_at' => '2023-02-19 08:56:38',
                'updated_at' => '2023-10-20 03:59:28',
            ),
            21 => 
            array (
                'id' => 109,
                'name' => '2-عصائر',
                'image' => 'admin/img/upload/1697763561.png',
                'created_at' => '2023-02-19 08:56:38',
                'updated_at' => '2023-10-20 03:59:21',
            ),
            22 => 
            array (
                'id' => 110,
                'name' => '7-كيك ومولتو',
                'image' => 'admin/img/upload/1697763552.png',
                'created_at' => '2023-02-19 08:56:38',
                'updated_at' => '2023-10-20 03:59:12',
            ),
            23 => 
            array (
                'id' => 111,
                'name' => '10-مشروبات ساخنة',
                'image' => 'admin/img/upload/1697763526.png',
                'created_at' => '2023-02-19 08:56:38',
                'updated_at' => '2023-10-20 03:58:46',
            ),
            24 => 
            array (
                'id' => 146,
                'name' => '61-شركات المقاطعة',
                'image' => 'admin/img/upload/1697768811.png',
                'created_at' => '2023-10-20 05:26:51',
                'updated_at' => '2023-10-20 05:26:51',
            ),
            25 => 
            array (
                'id' => 113,
                'name' => '13-جبنة',
                'image' => 'admin/img/upload/1697763507.png',
                'created_at' => '2023-02-19 08:56:38',
                'updated_at' => '2023-10-20 03:58:27',
            ),
            26 => 
            array (
                'id' => 114,
                'name' => '39-كورن فلكيس',
                'image' => 'admin/img/upload/1697763498.png',
                'created_at' => '2023-02-19 08:56:38',
                'updated_at' => '2023-10-20 03:58:18',
            ),
            27 => 
            array (
                'id' => 115,
                'name' => '22-تونة',
                'image' => 'admin/img/upload/1697763488.png',
                'created_at' => '2023-02-19 08:56:38',
                'updated_at' => '2023-10-20 03:58:08',
            ),
            28 => 
            array (
                'id' => 116,
                'name' => '15-زيت',
                'image' => 'admin/img/upload/1697763479.png',
                'created_at' => '2023-02-19 08:56:38',
                'updated_at' => '2023-10-20 03:57:59',
            ),
            29 => 
            array (
                'id' => 117,
                'name' => '16-سمنة',
                'image' => 'admin/img/upload/1697763470.png',
                'created_at' => '2023-02-19 08:56:38',
                'updated_at' => '2023-10-20 03:57:50',
            ),
            30 => 
            array (
                'id' => 118,
                'name' => '11-بن',
                'image' => 'admin/img/upload/1697763414.png',
                'created_at' => '2023-02-19 08:56:38',
                'updated_at' => '2023-10-20 03:56:54',
            ),
            31 => 
            array (
                'id' => 119,
                'name' => '38-شربات',
                'image' => 'admin/img/upload/1697763403.png',
                'created_at' => '2023-02-19 08:56:38',
                'updated_at' => '2023-10-20 03:56:43',
            ),
            32 => 
            array (
                'id' => 120,
                'name' => '5-جيلي',
                'image' => 'admin/img/upload/1697763396.png',
                'created_at' => '2023-02-19 08:56:38',
                'updated_at' => '2023-10-20 03:56:36',
            ),
            33 => 
            array (
                'id' => 121,
                'name' => '31- مرقة دجاج',
                'image' => 'admin/img/upload/1697763387.png',
                'created_at' => '2023-02-19 08:56:38',
                'updated_at' => '2023-10-20 03:56:27',
            ),
            34 => 
            array (
                'id' => 122,
                'name' => '32-خلطات وخميرة',
                'image' => 'admin/img/upload/1697763378.png',
                'created_at' => '2023-02-19 08:56:38',
                'updated_at' => '2023-10-20 03:56:18',
            ),
            35 => 
            array (
                'id' => 123,
                'name' => '43-مياه',
                'image' => 'admin/img/upload/1697763362.png',
                'created_at' => '2023-02-19 08:56:38',
                'updated_at' => '2023-10-20 03:56:02',
            ),
            36 => 
            array (
                'id' => 124,
                'name' => '35- منظفات ومناديل',
                'image' => 'admin/img/upload/1697763352.png',
                'created_at' => '2023-02-19 08:56:38',
                'updated_at' => '2023-10-20 03:55:52',
            ),
            37 => 
            array (
                'id' => 125,
                'name' => '12- لبن ومشتقاته',
                'image' => 'admin/img/upload/1697763338.png',
                'created_at' => '2023-02-19 08:56:38',
                'updated_at' => '2023-10-20 03:55:38',
            ),
            38 => 
            array (
                'id' => 126,
                'name' => '37-مسحوق غسيل',
                'image' => 'admin/img/upload/1697763321.png',
                'created_at' => '2023-02-19 08:56:38',
                'updated_at' => '2023-10-20 03:55:21',
            ),
            39 => 
            array (
                'id' => 127,
                'name' => '42- معطرات جو',
                'image' => 'admin/img/upload/1697763310.png',
                'created_at' => '2023-02-19 08:56:38',
                'updated_at' => '2023-10-20 03:55:10',
            ),
            40 => 
            array (
                'id' => 128,
                'name' => '36- مبيدات حشرية',
                'image' => 'admin/img/upload/1697762559.png',
                'created_at' => '2023-02-19 08:56:38',
                'updated_at' => '2023-10-20 03:42:39',
            ),
            41 => 
            array (
                'id' => 129,
                'name' => '47- العناية النسائية',
                'image' => 'admin/img/upload/1697762541.png',
                'created_at' => '2023-02-19 08:56:38',
                'updated_at' => '2023-10-20 03:42:21',
            ),
            42 => 
            array (
                'id' => 130,
                'name' => '46- العناية بالجسم',
                'image' => 'admin/img/upload/1697762532.png',
                'created_at' => '2023-02-19 08:56:38',
                'updated_at' => '2023-10-20 03:42:12',
            ),
            43 => 
            array (
                'id' => 132,
                'name' => '45- العناية بالفم',
                'image' => 'admin/img/upload/1697762527.png',
                'created_at' => '2023-02-19 08:56:38',
                'updated_at' => '2023-10-20 03:42:07',
            ),
            44 => 
            array (
                'id' => 133,
                'name' => '8- مقرمشات وبطاطس',
                'image' => 'admin/img/upload/1697762514.png',
                'created_at' => '2023-02-19 08:56:38',
                'updated_at' => '2023-10-20 03:41:54',
            ),
            45 => 
            array (
                'id' => 134,
                'name' => '25- لحوم معلبة',
                'image' => 'admin/img/upload/1697762504.png',
                'created_at' => '2023-02-19 08:56:38',
                'updated_at' => '2023-10-20 03:41:44',
            ),
            46 => 
            array (
                'id' => 135,
                'name' => '1-مياه غازيه',
                'image' => 'admin/img/upload/1697762494.png',
                'created_at' => '2023-02-19 08:56:38',
                'updated_at' => '2023-10-20 03:41:34',
            ),
            47 => 
            array (
                'id' => 136,
                'name' => '60-حجارة وكبريت',
                'image' => 'admin/img/upload/1697762488.png',
                'created_at' => '2023-02-19 08:56:38',
                'updated_at' => '2023-10-20 03:41:28',
            ),
        ));
        
        
    }
}