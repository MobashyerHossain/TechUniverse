<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Other\Image;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = array(
            array(            //Brand array     //HP
                array(        //Series array    //Pavilion
                    array(    //Product array   //product_id = 1
                        'name' => 'HP Pavilion 15 39.6 cm (15.6) Notebook (black)',
                        'buying_price' => 379.99,
                        'series_id' => 1,
                    ),

                    array(    //Product array   //product_id = 2
                        'name' => 'HP Pavilion 17 43.9 cm (17.3) Notebook (black)',
                        'buying_price' => 439.99,
                        'series_id' => 1,
                    ),

                    array(    //Product array   //product_id = 3
                        'name' => 'HP Pavilion Gaming Laptop - 15t Hexa Core w/ 2GB Discrete',
                        'buying_price' => 819.99,
                        'series_id' => 1,
                    ),
                ),

                array(        //Series array    //Specter
                    array(    //Product array   //product_id = 4
                        'name' => 'HP Specter 15 39.6 cm (15.6) Notebook (silver)',
                        'buying_price' => 1379.99,
                        'series_id' => 2,
                    ),

                    array(    //Product array   //product_id = 5
                        'name' => 'HP Spectre x360 Laptop - 15t touch',
                        'buying_price' => 1219.99,
                        'series_id' => 2,
                    ),

                    array(    //Product array   //product_id = 6
                        'name' => 'HP Spectre Folio - 13',
                        'buying_price' => 1229.99,
                        'series_id' => 2,
                    ),
                ),

                array(        //Series array    //EliteBook
                    array(    //Product array   //product_id = 7
                        'name' => 'HP EliteBook 840 G5  35.6 cm (14.0) Notebook Notebook (silver)',
                        'buying_price' => 2645,
                        'series_id' => 3,
                    ),

                     array(    //Product array   //product_id = 8
                        'name' => 'HP EliteBook 840 G5 Notebook PC - Customizable',
                        'buying_price' => 1231.62,
                        'series_id' => 3,
                    ),

                    array(    //Product array   //product_id = 9
                        'name' => 'HP EliteBook 1030 G1 Notebook PC (ENERGY STAR)',
                        'buying_price' => 1399.99,
                        'series_id' => 3,
                    ),
               ),

               array(        //Series array    //Envy
                   array(    //Product array   //product_id = 10
                        'name' => 'HP ENVY 13 33.8 cm (13.3) Notebook Notebook (silver)',
                        'buying_price' => 979.99,
                        'series_id' => 4,
                   ),

                  array(    //Product array   //product_id = 11
                        'name' => 'HP ENVY x2 - 12',
                        'buying_price' => 929.99,
                        'series_id' => 4,
                    ),

                   array(    //Product array   //product_id = 12
                        'name' => 'HP ENVY Laptop - 17t Touch',
                        'buying_price' => 899.99,
                        'series_id' => 4,
                   ),
               ),
            ),
        );

        foreach ($products as $productbrand) {
            foreach ($productbrand as $productseries) {
                foreach ($productseries as $product) {
                    DB::table('products')->insert([
                        'name' => $product['name'],
                        'buying_price' => round(($product['buying_price']), 2),
                        'selling_price' => round(($product['buying_price']*1.2), 2),
                        'max_possible_discount' => .20,
                        'current_discount' => round(((rand(50,150)/10)/100), 2),
                        'series_id' => $product['series_id'],
                    ]);
                }
            }
        }
    }
}
