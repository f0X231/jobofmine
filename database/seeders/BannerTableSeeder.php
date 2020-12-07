<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BannerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banner')->insert([
            [
                'order_no'      => 1,
                'title'         => 'ปัญหาวัยรุ่นว้าวุ่นใจ',
                'page'          => 'services',
                'page_id'       => 2,
                'typefile'      => 'IMG',
                'sourcefile'    => 'a:2:{s:2:\"th\";s:36:\"/images/banner/banner_service_02.jpg\";s:2:\"en\";s:36:\"/images/banner/banner_service_02.jpg\";}',
                'link'          => null,
                'start_date'    => null,
                'end_date'      => null,
                'is_active'     => 'Y',
                'is_delete'     => 'N',
                'create_date'   => date('Y-m-d H:i:s'),
                'create_by'     => 'admin',
                'update_date'   => null,
                'update_by'     => null
            ],
            [
                'order_no' => 2,
                'title' => 'ปัญหาในวัยทำงาน',
                'page' => 'services',
                'page_id' => 1,
                'typefile' => 'IMG',
                'sourcefile' => 'a:2:{s:2:\"th\";s:36:\"/images/banner/banner_service_01.jpg\";s:2:\"en\";s:36:\"/images/banner/banner_service_01.jpg\";}',
                'link' => null,
                'start_date'    => null,
                'end_date'      => null,
                'is_active'     => 'Y',
                'is_delete'     => 'N',
                'create_date'   => date('Y-m-d H:i:s'),
                'create_by'     => 'admin',
                'update_date'   => null,
                'update_by'     => null
            ],
            [
                'order_no' => 1,
                'title' => 'doctor profile',
                'page' => 'doctor',
                'page_id' => 1,
                'typefile' => 'IMG',
                'sourcefile' => 'a:2:{s:2:\"th\";s:35:\"/images/banner/banner_doctor_01.jpg\";s:2:\"en\";s:35:\"/images/banner/banner_doctor_01.jpg\";}',
                'link' => null,
                'start_date'    => null,
                'end_date'      => null,
                'is_active'     => 'Y',
                'is_delete'     => 'N',
                'create_date'   => date('Y-m-d H:i:s'),
                'create_by'     => 'admin',
                'update_date'   => null,
                'update_by'     => null
            ],
            [
                'order_no' => 1,
                'title' => 'about us',
                'page' => 'aboutus',
                'page_id' => 1,
                'typefile' => 'IMG',
                'sourcefile' => 'a:2:{s:2:\"th\";s:36:\"/images/banner/banner_aboutus_01.jpg\";s:2:\"en\";s:36:\"/images/banner/banner_aboutus_01.jpg\";}',
                'link' => null,
                'start_date'    => null,
                'end_date'      => null,
                'is_active'     => 'Y',
                'is_delete'     => 'N',
                'create_date'   => date('Y-m-d H:i:s'),
                'create_by'     => 'admin',
                'update_date'   => null,
                'update_by'     => null
            ],
            [
                'order_no' => 1,
                'title' => 'services main page',
                'page' => 'services',
                'page_id' => 0,
                'typefile' => 'IMG',
                'sourcefile' => 'a:2:{s:2:\"th\";s:36:\"/images/banner/service_page-1-01.jpg\";s:2:\"en\";s:36:\"/images/banner/service_page-1-01.jpg\";}',
                'link' => null,
                'start_date'    => null,
                'end_date'      => null,
                'is_active'     => 'Y',
                'is_delete'     => 'N',
                'create_date'   => date('Y-m-d H:i:s'),
                'create_by'     => 'admin',
                'update_date'   => null,
                'update_by'     => null
            ],
            [
                'order_no' => 1,
                'title' => 'home joy of mindes',
                'page' => 'home',
                'page_id' => 1,
                'typefile' => 'IMG',
                'sourcefile' => 'a:2:{s:2:\"th\";s:33:\"/images/banner/banner_home_01.jpg\";s:2:\"en\";s:33:\"/images/banner/banner_home_01.jpg\";}',
                'link' => null,
                'start_date'    => null,
                'end_date'      => null,
                'is_active'     => 'Y',
                'is_delete'     => 'N',
                'create_date'   => date('Y-m-d H:i:s'),
                'create_by'     => 'admin',
                'update_date'   => null,
                'update_by'     => null
            ],
            [
                'order_no' => 1,
                'title' => 'โรคซึมเศร้าเรารักษาได้',
                'page' => 'article',
                'page_id' => 3,
                'typefile' => 'IMG',
                'sourcefile' => 'a:2:{s:2:\"th\";s:36:\"/images/banner/banner_article_01.jpg\";s:2:\"en\";s:36:\"/images/banner/banner_article_01.jpg\";}',
                'link' => null,
                'start_date'    => null,
                'end_date'      => null,
                'is_active'     => 'Y',
                'is_delete'     => 'N',
                'create_date'   => date('Y-m-d H:i:s'),
                'create_by'     => 'admin',
                'update_date'   => null,
                'update_by'     => null
            ],
            [
                'order_no' => 1,
                'title' => 'วิธีจัดการความโกรธ',
                'page' => 'article',
                'page_id' => 5,
                'typefile' => 'IMG',
                'sourcefile' => 'a:2:{s:2:\"th\";s:36:\"/images/banner/banner_article_02.jpg\";s:2:\"en\";s:36:\"/images/banner/banner_article_02.jpg\";}',
                'link' => null,
                'start_date'    => null,
                'end_date'      => null,
                'is_active'     => 'Y',
                'is_delete'     => 'N',
                'create_date'   => date('Y-m-d H:i:s'),
                'create_by'     => 'admin',
                'update_date'   => null,
                'update_by'     => null
            ],
            [
                'order_no' => 1,
                'title' => 'คุณวิตกกังวลมากไปหรือป่าว',
                'page' => 'article',
                'page_id' => 6,
                'typefile' => 'IMG',
                'sourcefile' => 'a:2:{s:2:\"th\";s:36:\"/images/banner/banner_article_03.jpg\";s:2:\"en\";s:36:\"/images/banner/banner_article_03.jpg\";}',
                'link' => null,
                'start_date'    => null,
                'end_date'      => null,
                'is_active'     => 'Y',
                'is_delete'     => 'N',
                'create_date'   => date('Y-m-d H:i:s'),
                'create_by'     => 'admin',
                'update_date'   => null,
                'update_by'     => null
            ],
            [
                'order_no' => 1,
                'title' => 'คนใกล้ตัวมีแนวโน้มฆ่าตัวตาย-จะรับมืออย่างไร',
                'page' => 'article',
                'page_id' => 1,
                'typefile' => 'IMG',
                'sourcefile' => 'a:2:{s:2:\"th\";s:36:\"/images/banner/banner_article_04.jpg\";s:2:\"en\";s:36:\"/images/banner/banner_article_04.jpg\";}',
                'link' => null,
                'start_date'    => null,
                'end_date'      => null,
                'is_active'     => 'Y',
                'is_delete'     => 'N',
                'create_date'   => date('Y-m-d H:i:s'),
                'create_by'     => 'admin',
                'update_date'   => null,
                'update_by'     => null
            ],
            [
                'order_no' => 1,
                'title' => 'ทำอย่างไรเมื่อเด็กมีปัญหาการเรียน',
                'page' => 'article',
                'page_id' => 2,
                'typefile' => 'IMG',
                'sourcefile' => 'a:2:{s:2:\"th\";s:36:\"/images/banner/banner_article_05.jpg\";s:2:\"en\";s:36:\"/images/banner/banner_article_05.jpg\";}',
                'link' => null,
                'start_date'    => null,
                'end_date'      => null,
                'is_active'     => 'Y',
                'is_delete'     => 'N',
                'create_date'   => date('Y-m-d H:i:s'),
                'create_by'     => 'admin',
                'update_date'   => null,
                'update_by'     => null
            ],
            [
                'order_no' => 1,
                'title' => 'ลูกเราสมาธิสั้นหรือเปล่า',
                'page' => 'article',
                'page_id' => 4,
                'typefile' => 'IMG',
                'sourcefile' => 'a:2:{s:2:\"th\";s:36:\"/images/banner/banner_article_06.jpg\";s:2:\"en\";s:36:\"/images/banner/banner_article_06.jpg\";}',
                'link' => null,
                'start_date'    => null,
                'end_date'      => null,
                'is_active'     => 'Y',
                'is_delete'     => 'N',
                'create_date'   => date('Y-m-d H:i:s'),
                'create_by'     => 'admin',
                'update_date'   => null,
                'update_by'     => null
            ]
        ]);
    }
}
