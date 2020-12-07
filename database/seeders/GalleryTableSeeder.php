<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GalleryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gallery')->insert([
            [
                'page'          => 'services',
                'page_id'       => 1,
                'order_no'      => 1,
                'picture'       => 'service_1_01.jpg',
                'description'   => null,
                'is_active'     => 'Y',
                'is_delete'     => 'N',
                'create_date'   => date('Y-m-d H:i:s'),
                'create_by'     => 'admin',
                'update_date'   => null,
                'update_by'     => null
            ],
            [
                'page'          => 'services',
                'page_id'       => 1,
                'order_no'      => 2,
                'picture'       => 'service_1_02.jpg',
                'description'   => null,
                'is_active'     => 'Y',
                'is_delete'     => 'N',
                'create_date'   => date('Y-m-d H:i:s'),
                'create_by'     => 'admin',
                'update_date'   => null,
                'update_by'     => null
            ],
            [
                'page'          => 'services',
                'page_id'       => 1,
                'order_no'      => 3,
                'picture'       => 'service_1_03.jpg',
                'description'   => null,
                'is_active'     => 'Y',
                'is_delete'     => 'N',
                'create_date'   => date('Y-m-d H:i:s'),
                'create_by'     => 'admin',
                'update_date'   => null,
                'update_by'     => null
            ],
            [
                'page'          => 'services',
                'page_id'       => 1,
                'order_no'      => 4,
                'picture'       => 'service_1_04.jpg',
                'description'   => null,
                'is_active'     => 'Y',
                'is_delete'     => 'N',
                'create_date'   => date('Y-m-d H:i:s'),
                'create_by'     => 'admin',
                'update_date'   => null,
                'update_by'     => null
            ],
            [
                'page'          => 'services',
                'page_id'       => 2,
                'order_no'      => 1,
                'picture'       => 'service_2_01.jpg',
                'description'   => null,
                'is_active'     => 'Y',
                'is_delete'     => 'N',
                'create_date'   => date('Y-m-d H:i:s'),
                'create_by'     => 'admin',
                'update_date'   => null,
                'update_by'     => null
            ],
            [
                'page'          => 'services',
                'page_id'       => 2,
                'order_no'      => 2,
                'picture'       => 'service_2_02.jpg',
                'description'   => null,
                'is_active'     => 'Y',
                'is_delete'     => 'N',
                'create_date'   => date('Y-m-d H:i:s'),
                'create_by'     => 'admin',
                'update_date'   => null,
                'update_by'     => null
            ],
            [
                'page'          => 'services',
                'page_id'       => 2,
                'order_no'      => 3,
                'picture'       => 'service_2_03.jpg',
                'description'   => null,
                'is_active'     => 'Y',
                'is_delete'     => 'N',
                'create_date'   => date('Y-m-d H:i:s'),
                'create_by'     => 'admin',
                'update_date'   => null,
                'update_by'     => null
            ],
            [
                'page'          => 'services',
                'page_id'       => 2,
                'order_no'      => 4,
                'picture'       => 'service_2_04.jpg',
                'description'   => null,
                'is_active'     => 'Y',
                'is_delete'     => 'N',
                'create_date'   => date('Y-m-d H:i:s'),
                'create_by'     => 'admin',
                'update_date'   => null,
                'update_by'     => null
            ],
            [
                'page'          => 'aboutus',
                'page_id'       => 1,
                'order_no'      => 1,
                'picture'       => 'gallery_01.jpg',
                'description'   => null,
                'is_active'     => 'Y',
                'is_delete'     => 'N',
                'create_date'   => date('Y-m-d H:i:s'),
                'create_by'     => 'admin',
                'update_date'   => null,
                'update_by'     => null
            ],
            [
                'page'          => 'aboutus',
                'page_id'       => 1,
                'order_no'      => 2,
                'picture'       => 'gallery_02.jpg',
                'description'   => null,
                'is_active'     => 'Y',
                'is_delete'     => 'N',
                'create_date'   => date('Y-m-d H:i:s'),
                'create_by'     => 'admin',
                'update_date'   => null,
                'update_by'     => null
            ],
            [
                'page'          => 'aboutus',
                'page_id'       => 1,
                'order_no'      => 3,
                'picture'       => 'gallery_03.jpg',
                'description'   => null,
                'is_active'     => 'Y',
                'is_delete'     => 'N',
                'create_date'   => date('Y-m-d H:i:s'),
                'create_by'     => 'admin',
                'update_date'   => null,
                'update_by'     => null
            ],
            [
                'page'          => 'aboutus',
                'page_id'       => 1,
                'order_no'      => 4,
                'picture'       => 'gallery_04.jpg',
                'description'   => null,
                'is_active'     => 'Y',
                'is_delete'     => 'N',
                'create_date'   => date('Y-m-d H:i:s'),
                'create_by'     => 'admin',
                'update_date'   => null,
                'update_by'     => null
            ],
            [
                'page'          => 'aboutus',
                'page_id'       => 1,
                'order_no'      => 5,
                'picture'       => 'gallery_05.jpg',
                'description'   => null,
                'is_active'     => 'Y',
                'is_delete'     => 'N',
                'create_date'   => date('Y-m-d H:i:s'),
                'create_by'     => 'admin',
                'update_date'   => null,
                'update_by'     => null
            ],
            [
                'page'          => 'aboutus',
                'page_id'       => 1,
                'order_no'      => 6,
                'picture'       => 'gallery_06.jpg',
                'description'   => null,
                'is_active'     => 'Y',
                'is_delete'     => 'N',
                'create_date'   => date('Y-m-d H:i:s'),
                'create_by'     => 'admin',
                'update_date'   => null,
                'update_by'     => null
            ],
            [
                'page'          => 'aboutus',
                'page_id'       => 1,
                'order_no'      => 7,
                'picture'       => 'gallery_07.jpg',
                'description'   => null,
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
