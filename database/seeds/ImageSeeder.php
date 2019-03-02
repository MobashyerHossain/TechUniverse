<?pHP

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
        //default images
        $defaults = array(
            'default_image.jpg',
            'default_profile_pic.jpg',
            'default_logo.png',
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

        //banner images
        for ($i=1; $i < 6; $i++) {
          DB::table('images')->insert([
              'type' => 'banner',
              'path' => 'storage/images/banner/banner_'.$i.'.jpg',
          ]);
        }

        //logo images
        $logos = array(
            'HP',
            'ASUS',
            'MSI',
            'LENOVO',
            'ACER',
            'APPLE',
            'SAMSUNG',
            'HUAWEI',
            'OPPO',
            'VIVO',
            'ONE PLUS',
            'XIAOMI',
        );

        foreach ($logos as $logo) {
          DB::table('images')->insert([
              'type' => 'brand_logo',
              'path' => 'storage/images/logo/'.$logo.'.png',
          ]);
        }
    }
}
