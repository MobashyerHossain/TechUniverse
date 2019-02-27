<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $defaults = array(
            'default_image.jpg',
            'default_profile_pic.jpg',
            'default_laptop.jpg',
            'default_smart_phone.jpg',
            'default_head_phone.jpg',
            'default_smart_watch.jpg',
        );

        foreach ($defaults as $default) {
          DB::table('images')->insert([
              'type' => 'default',
              'path' => 'storage/images/default/'.$default,
          ]);
        }

        $banners = array(
            'banner_1.jpg',
            'banner_2.jpg',
            'banner_3.jpg',
            'banner_4.jpg',
            'banner_5.jpg',
        );

        foreach ($banners as $banner) {
          DB::table('images')->insert([
              'type' => 'banner',
              'path' => 'storage/images/banner/'.$banner,
          ]);
        }
    }
}
