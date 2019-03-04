<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Other\Image;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = array(
            'Laptop',
            'Smart Phone',
            'Head Phone',
            'Smart Watch',
        );

        $img = 4;
        foreach ($categories as $category) {
            DB::table('categories')->insert([
                'name' => $category,
                'image_id' => $img,
            ]);
            $img++;
        }
    }
}
