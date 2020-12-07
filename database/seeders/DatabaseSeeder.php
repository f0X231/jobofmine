<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ArticlesTableSeeder::class);
        $this->call(ServicesTableSeeder::class);
        $this->call(BannerTableSeeder::class);
        $this->call(GalleryTableSeeder::class);
        $this->call(DoctorsTableSeeder::class);
    }
}
