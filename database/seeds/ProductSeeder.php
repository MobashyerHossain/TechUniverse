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
        $laptops = array(
            array(            //Brand array     //HP
                array(        //Series array    //Pavilion
                    array(    //Product array   //product_id = 1
                        'name' => 'HP Pavilion 15 39.6 cm (15.6 inch) Notebook (black)',
                        'buying_price' => 379.99,
                        'series_id' => 1,
                    ),

                    array(    //Product array   //product_id = 2
                        'name' => 'HP Pavilion 17 43.9 cm (17.3 inch) Notebook (black)',
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
                        'name' => 'HP Spectre x360 13-ae001ng 33.8 cm (13.3 inch) Convertible-Notebook (black)',
                        'buying_price' => 1139.99,
                        'series_id' => 2,
                    ),

                    array(    //Product array   //product_id = 5
                        'name' => 'HP Spectre x360 15-ch010ng 4UK65EA 39.6 cm (15.6 inch) Convertible-Notebook (anthracite)',
                        'buying_price' => 1899.99,
                        'series_id' => 2,
                    ),

                    array(    //Product array   //product_id = 6
                        'name' => 'HP Spectre Folio 13-ak0020ng 33.8 cm (13.3 inch) Notebook (brown)',
                        'buying_price' => 1994.99,
                        'series_id' => 2,
                    ),
                ),

                array(        //Series array    //EliteBook
                    array(    //Product array   //product_id = 7
                        'name' => 'HP EliteBook 840 G5 3JZ30AW 35.6 cm (14.0 inch) Notebook (silver)',
                        'buying_price' => 1822.41,
                        'series_id' => 3,
                    ),

                    array(    //Product array   //product_id = 8
                        'name' => 'HP EliteBook 840 G5 3JX61EA 35.6 cm (14.0 inch) Notebook (silver)',
                        'buying_price' => 2582,
                        'series_id' => 3,
                    ),

                    array(    //Product array   //product_id = 9
                        'name' => 'HP EliteBook x360 1030 G3 4QY25EA 33.8 cm (13.3 inch) Convertible-Notebook (silver)',
                        'buying_price' => 2045,
                        'series_id' => 3,
                    ),
                ),

                array(        //Series array    //Envy
                    array(    //Product array   //product_id = 10
                        'name' => 'HP ENVY 13 33.8 cm (13.3 inch) Notebook (silver)',
                        'buying_price' => 1199.99,
                        'series_id' => 4,
                    ),

                    array(    //Product array   //product_id = 11
                        'name' => 'HP Envy x360 13-ag0003ng 33.8 cm (13.3 inch) Convertible-Notebook (anthracite)',
                        'buying_price' => 744.99,
                        'series_id' => 4,
                    ),

                    array(    //Product array   //product_id = 12
                        'name' => 'HP Envy 17-bw0003ng 4AU92EA 43.9 cm (17.3 inch) Notebook (silver)',
                        'buying_price' => 1499.99,
                        'series_id' => 4,
                    ),
                ),
            ),

            array(            //Brand array     //ASUS
                array(        //Series array    //ROG
                    array(    //Product array   //product_id = 13
                        'name' => 'ASUS ROG Strix GL503VM-ED092T Scar Edition 39.6 cm (15.6 inch) Notebook (black)',
                        'buying_price' => 1599.55,
                        'series_id' => 5,
                    ),

                    array(    //Product array   //product_id = 14
                        'name' => 'ASUS ROG FX705GE-EW074T 43.9 cm (17.3 inch) Notebook (black)',
                        'buying_price' => 1099.50,
                        'series_id' => 5,
                    ),

                    array(    //Product array   //product_id = 15
                        'name' => 'ASUS ROG GL502VS-GZ224T 39.6 cm (15.6 inch) Notebook (black)',
                        'buying_price' => 1379.30,
                        'series_id' => 5,
                    ),

                    array(    //Product array   //product_id = 16
                        'name' => 'ASUS ROG GL702ZC-GC098T 43.9 cm (17.3 inch) Notebook (black)',
                        'buying_price' => 1820.41,
                        'series_id' => 5,
                    ),
                ),

                array(        //Series array    //VivoBook
                    array(    //Product array   //product_id = 17
                        'name' => 'ASUS VivoBook S406UA-BV023T M01230 35.6 cm (14.0 inch) Notebook (gray)',
                        'buying_price' => 699.50,
                        'series_id' => 6,
                    ),

                    array(    //Product array   //product_id = 18
                        'name' => 'ASUS VivoBook X540UA-DM1130T 39.6 cm (15.6 inch) Notebook (anthracite)',
                        'buying_price' => 460.64,
                        'series_id' => 6,
                    ),

                    array(    //Product array   //product_id = 19
                        'name' => 'ASUS Vivobook X542UN-DM055T 39.6 cm (15.6 inch) Notebook (silver)',
                        'buying_price' => 836.50,
                        'series_id' => 6,
                    ),

                    array(    //Product array   //product_id = 20
                        'name' => 'ASUS VivoBook E12 X207NA-FD049 29.5 cm (11.6 inch) Notebook (gray)',
                        'buying_price' => 219.99,
                        'series_id' => 6,
                    ),
                ),

                array(        //Series array    //TUF
                    array(    //Product array   //product_id = 21
                        'name' => 'ASUS TUF FX504GD-DM932T 39.6 cm (15.6 inch) Notebook (black)',
                        'buying_price' => 939.38,
                        'series_id' => 7,
                    ),

                    array(    //Product array   //product_id = 22
                        'name' => 'ASUS TUF FX504GM-E4326T 39.6 cm (15.6 inch) Notebook (black)',
                        'buying_price' => 1243.20,
                        'series_id' => 7,
                    ),

                    array(    //Product array   //product_id = 23
                        'name' => 'ASUS TUF FX565GM-ES206T 39.6 cm (15.6 inch) Notebook (black)',
                        'buying_price' => 1544.90,
                        'series_id' => 7,
                    ),

                    array(    //Product array   //product_id = 24
                        'name' => 'ASUS TUF FX705GE-EW077 43.9 cm (17.3 inch) Notebook (black)',
                        'buying_price' => 1140.99,
                        'series_id' => 7,
                    ),
                ),

                array(        //Series array    //ZenBook
                    array(    //Product array   //product_id = 25
                        'name' => 'ASUS ZenBook 3 Deluxe 90NB0EI1-M02700 35.6 cm (14.0 inch) Notebook (black)',
                        'buying_price' => 1599.50,
                        'series_id' => 8,
                    ),

                    array(    //Product array   //product_id = 26
                        'name' => 'ASUS ZenBook Pro UX480FD-BE055T 35.6 cm (14.0 inch) Notebook (black / blue)',
                        'buying_price' => 1557.77,
                        'series_id' => 8,
                    ),

                    array(    //Product array   //product_id = 27
                        'name' => 'ASUS ZenBook 13 UX331UA 33.8 cm (13.3 inch) Notebook (blue)',
                        'buying_price' => 999.90,
                        'series_id' => 8,
                    ),
                ),
            ),

            array(            //Brand array     //MSI
                array(        //Series array    //GL
                    array(    //Product array   //product_id = 28
                        'name' => 'MSI GL63 8RD-012 39.6 cm (15.6 inch) Notebook (black)',
                        'buying_price' => 1099.99,
                        'series_id' => 9,
                    ),

                    array(    //Product array   //product_id = 29
                        'name' => 'MSI GL73 8RC-018 43.9 cm (17.3 inch) Notebook (black)',
                        'buying_price' => 1199.99,
                        'series_id' => 9,
                    ),
                ),

                array(        //Series array    //GE
                    array(    //Product array   //product_id = 30
                        'name' => 'MSI GE73 8RF-008 Raider RGB 43.9 cm (17.3 inch) Notebook (black)',
                        'buying_price' => 2149.99,
                        'series_id' => 10,
                    ),

                    array(    //Product array   //product_id = 31
                        'name' => 'MSI GE73 8RE-010 Raider RGB 43.9 cm (17.3 inch) Notebook (black)',
                        'buying_price' => 1124.99,
                        'series_id' => 10,
                    ),

                    array(    //Product array   //product_id = 32
                        'name' => 'MSI GE63 8RF-008 Raider RGB 39.6 cm (15.6 inch) Notebook (black)',
                        'buying_price' => 2288.99,
                        'series_id' => 10,
                    ),
                ),

                array(        //Series array    //GS
                    array(    //Product array   //product_id = 33
                        'name' => 'MSI GS73 8RF-011 Stealth Pro 43.9 cm (17.3 inch) Notebook (black)',
                        'buying_price' => 1479.99,
                        'series_id' => 11,
                    ),

                    array(    //Product array   //product_id = 34
                        'name' => 'MSI GS65 8SE-060 Stealth 39.6 cm (15.6 inch) Notebook(black)',
                        'buying_price' => 1800.00,
                        'series_id' => 11,
                    ),

                    array(    //Product array   //product_id = 35
                        'name' => 'MSI GS75 Stealth 8SE 43.9 cm (17.3 inch) Notebook (black)',
                        'buying_price' => 2099.00,
                        'series_id' => 11,
                    ),
                ),
            ),

            array(            //Brand array     //LENOVO
                array(        //Series array    //ThinkPad
                    array(    //Product array   //product_id = 36
                        'name' => 'Lenovo ThinkPad X280 20KF001QGE 31.8 cm (12.5 inch) Notebook (black)',
                        'buying_price' => 1686.99,
                        'series_id' => 12,
                    ),

                    array(    //Product array   //product_id = 37
                        'name' => 'Lenovo ThinkPad E485 20KU000NGE 35.6 cm (14.0 inch) Notebook (black)',
                        'buying_price' => 853.99,
                        'series_id' => 12,
                    ),

                    array(    //Product array   //product_id = 38
                        'name' => 'Lenovo ThinkPad E580 20KS001JGE 39.6 cm (15.6 inch) Notebook (black)',
                        'buying_price' => 2099.99,
                        'series_id' => 12,
                    ),
                    array(    //Product array   //product_id = 39
                        'name' => 'Lenovo ThinkPad T580 20L90026GE 39.6 cm (15.6 inch) Notebook (black)',
                        'buying_price' => 2279.99,
                        'series_id' => 12,
                    ),
                ),

                array(        //Series array    //IdeaPad
                    array(    //Product array   //product_id = 40
                        'name' => 'Lenovo IdeaPad 720S-13ARR 81BR000XGE 33.8 cm (13.3 inch) Notebook (silver)',
                        'buying_price' => 915.99,
                        'series_id' => 13,
                    ),

                    array(    //Product array   //product_id = 41
                        'name' => 'Lenovo IdeaPad MIIX 630 31.2 cm (12.3 inch) Notebook',
                        'buying_price' => 449.99,
                        'series_id' => 13,
                    ),

                    array(    //Product array   //product_id = 42
                        'name' => 'Lenovo IdeaPad 330-17IKB 81DK0040GE 43.9 cm (17.3 inch) Notebook (silver)',
                        'buying_price' => 375.25,
                        'series_id' => 13,
                    ),

                    array(    //Product array   //product_id = 43
                        'name' => 'Lenovo IdeaPad V145-15 A4-9125 39.6 cm (15.6 inch) Notebook (black)',
                        'buying_price' => 327.23,
                        'series_id' => 13,
                    ),
                ),

                array(        //Series array    //Legion
                    array(    //Product array   //product_id = 44
                        'name' => 'Lenovo Legion Y740-17ICHg 81HH002BGE 43.9 cm (17.3 inch) Notebook (black)',
                        'buying_price' => 1999.99,
                        'series_id' => 14,
                    ),

                    array(    //Product array   //product_id = 45
                        'name' => 'Lenovo Legion Y720-15IKB 80VR00A8GE 39.6 cm (15.6 inch) Notebook (black)',
                        'buying_price' => 1478.99,
                        'series_id' => 14,
                    ),

                    array(    //Product array   //product_id = 46
                        'name' => 'Lenovo Legion Y730-17ICH 81HG0021GE 43.9 cm (17.3 inch) Notebook(black)',
                        'buying_price' => 1360.49,
                        'series_id' => 14,
                    ),
                    array(    //Product array   //product_id = 47
                        'name' => 'Lenovo Legion Y530-15ICH 81FV00KYGE 39.6 cm (15.6 inch) Notebook(black)',
                        'buying_price' => 886.99,
                        'series_id' => 14,
                    ),
                ),

                array(        //Series array    //YOGA
                    array(    //Product array   //product_id = 48
                        'name' => 'Lenovo Yoga 920-13IKB 80Y70030GE 35.3 cm (13.9 inch) Convertible-Notebook (silver)',
                        'buying_price' => 1434.29,
                        'series_id' => 15,
                    ),

                    array(    //Product array   //product_id = 49
                        'name' => 'Lenovo Yoga C930 GLASS 81C400A5GE 35.3 cm (13.9 inch) Convertible-Notebook (gray)',
                        'buying_price' => 2694.49,
                        'series_id' => 15,
                    ),

                    array(    //Product array   //product_id = 50
                        'name' => 'Lenovo Yoga 720-13IKB 80X60095GE 33.8 cm (13.3 inch) Convertible-Notebook (silver)',
                        'buying_price' => 1165,01,
                        'series_id' => 15,
                    ),
                ),
            ),

            array(            //Brand array     //ACER
                array(        //Series array    //swift
                    array(    //Product array   //product_id = 51
                        'name' => 'ACER Swift 3 SF314-54G 35.6 cm (14.0 inch) Notebook Notebook (silver)',
                        'buying_price' => 1379.99,
                        'series_id' => 16,
                    ),

                    array(    //Product array   //product_id = 52
                        'name' => 'Acer Swift 5 Pro SF514-52TP-558Z 35.6 cm (14.0 inch)Convertible-Notebook (blue)',
                        'buying_price' => 999.99,
                        'series_id' => 16,
                    ),

                    array(    //Product array   //product_id = 53
                        'name' => 'Acer Swift7 Pro SF714-51T-M97L 35.6 cm (14.0 inch) Notebook (black)',
                        'buying_price' => 1699.99,
                        'series_id' => 16,
                    ),
                ),


                array(        //Series array    //aspire
                    array(    //Product array   //product_id = 54
                        'name' => 'ACER Aspire 3 A315-53-32WG 39.6 cm (15.6 inch) Notebook Notebook (black)',
                        'buying_price' => 1279.99,
                        'series_id' => 17,
                    ),

                    array(    //Product array   //product_id = 55
                        'name' => 'ACER Aspire 5 A517-51-5832 43.9 cm (17.3 inch) Notebook Notebook (black)',
                        'buying_price' => 789,
                        'series_id' => 17,
                    ),

                    array(    //Product array   //product_id = 56
                        'name' => 'ACER Aspire 7 A715-71G-71NC 39.6 cm (15.6 inch) Notebook Notebook (black)',
                        'buying_price' => 889.99,
                        'series_id' => 17,
                    ),
                ),

                array(        //Series array    //Nitro
                    array(    //Product array   //product_id = 57
                        'name' => 'ACER Nitro 5 AN515-52-74DR 39.6 cm (15.6 inch) Notebook Notebook (black)',
                        'buying_price' => 1672.99,
                        'series_id' => 18,
                    ),

                    array(    //Product array   //product_id = 58
                        'name' => 'Acer Nitro 5 AN515-52-746Z 39.6 cm (15.6 inch) Notebook (black)',
                        'buying_price' => 749.99,
                        'series_id' => 18,
                    ),

                    array(    //Product array   //product_id = 59
                        'name' => 'Acer Nitro 5 AN515-52-53TA 39.6 cm (15.6 inch) Notebook (black)',
                        'buying_price' => 849.99,
                        'series_id' => 18,
                    ),
                ),

                array(        //Series array    //TravelMate X
                    array(    //Product array   //product_id = 60
                        'name' => 'ACER TravelMate X349-M-56RM (14 inch)',
                        'buying_price' => 800.80,
                        'series_id' => 19,
                    ),

                    array(    //Product array   //product_id = 61
                        'name' => 'ACER TravelMate X3 X349-M-7261 (14 inch)',
                        'buying_price' => 1099.99,
                        'series_id' => 19,
                    ),

                    array(    //Product array   //product_id = 62
                        'name' => 'ACER Travelmate X313-M-6824 (11.6 inch)',
                        'buying_price' => 900.50,
                        'series_id' => 19,
                    ),

                    array(    //Product array   //product_id = 63
                        'name' => 'ACER TravelMate X349-G2-M-73W6 (14 inch)',
                        'buying_price' => 1100.50,
                        'series_id' => 19,
                    ),
                ),
            ),

            array(            //Brand array     //APPLE
                array(        //Series array    //MacBook Pro
                    array(    //Product array   //product_id = 64
                        'name' => 'APPLE MacBook Pro Retina MR932D/A 39.1 cm (15.4 inch) Notebook Notebook (space-grey)',
                        'buying_price' => 2989.99,
                        'series_id' => 20,
                    ),

                    array(    //Product array   //product_id = 65
                        'name' => 'APPLE MacBook Pro 33.8 cm (13.3 inch) Notebook Notebook (gray)',
                        'buying_price' => 2292.99,
                        'series_id' => 20,
                    ),

                    array(    //Product array   //product_id = 66
                        'name' => 'APPLE MacBook Pro 33.8 cm (13.3 inch) Notebook Notebook (space-grey)',
                        'buying_price' => 1541.99,
                        'series_id' => 20,
                    ),

                    array(    //Product array   //product_id = 67
                        'name' => 'APPLE MacBook Pro Retina MR962D/A 39.1 cm (15.4 inch) Notebook Notebook (silver)',
                        'buying_price' => 2727.99,
                        'series_id' => 20,
                    ),
                ),

                array(        //Series array    //MacBook Air
                    array(    //Product array   //product_id = 68
                        'name' => 'APPLE MacBook Air MREA2D/A 33.8 cm (13.3 inch) Notebook Notebook (silver)',
                        'buying_price' => 1259.99,
                        'series_id' => 21,
                    ),

                    array(    //Product array   //product_id = 69
                        'name' => 'APPLE MacBook Air MQD42D/A 33.8 cm (13.3 inch) Notebook Notebook (silver)',
                        'buying_price' => 1499.99,
                        'series_id' => 21,
                    ),

                    array(    //Product array   //product_id = 70
                        'name' => 'APPLE MacBook Air MQD32D/A-055445 33.8 cm (13.3 inch) Notebook Notebook (silver)',
                        'buying_price' => 1779.99,
                        'series_id' => 21,
                    ),
                ),
            ),
        );

        foreach ($laptops as $laptopbrand) {
            foreach ($laptopbrand as $laptopseries) {
                foreach ($laptopseries as $laptop) {
                    DB::table('products')->insert([
                        'name' => $laptop['name'],
                        'buying_price' => round(($laptop['buying_price']), 2),
                        'selling_price' => round(($laptop['buying_price']*1.2), 2),
                        'max_possible_discount' => .20,
                        'current_discount' => round(((rand(50,150)/10)/100), 2),
                        'series_id' => $laptop['series_id'],
                    ]);
                }
            }
        }
    }
}
