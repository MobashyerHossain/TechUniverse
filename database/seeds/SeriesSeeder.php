<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Other\Image;

class SeriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seriesAll = array(
            array(                      //product type Array    //laptops
                array(                  //Brand array       //HP
                    array(              //Series Array      //series_id = 1
                      'name' => 'Pavilion',
                      'details' => "HPs Pavilion line features workhorse models designed for just about everyone — from students to executives — who are not looking to spend too much money. The Pavilion 15z is unique in using an AMD processor, a competitor to Intel, theoretically designed to bring higher-end performance and graphics to the masses",
                      'brand_id' => 1,
                    ),

                    array(              //Series Array      //series_id = 2
                      'name' => 'Specter',
                      'details' => "Elevate your creativity with the improved precision of an HP Specter and its digital pen. Write, draw, and compute as naturally as ever with true-to-life feel creating a seamless an enjoyable working experience",
                      'brand_id' => 1,
                    ),

                    array(              //Series Array      //series_id = 3
                      'name' => 'EliteBook',
                      'details' => "Beautifully crafted with the modern professional in mind, the highly secure and manageable HP EliteBook 840 offers powerful collaboration tools, so you can be as productive as ever, on the go or at the office. Brilliant new design, this ultra-slim, precision-crafted aluminum laptop with a narrow border display goes anywhere, and looks great doing it",
                      'brand_id' => 1,
                    ),

                    array(              //Series Array      //series_id = 4
                      'name' => 'Envy',
                      'details' => 'An exceptionally powerful laptop in a sleek, stylish design. Elegance and durability are crafted in a thin and light, all-aluminum laptop design perfect for your mobile lifestyle. Micro-edge display syncs beautifully with a full-size keyboard for an incredible compact design. Confidently power through projects with the latest Intel® Core™ processors, optional NVIDIA® graphics card and up to 16GB RAM',
                      'brand_id' => 1,
                    ),
                ),

                array(                  //Brand array       //ASUS
                    array(              //Series Array      //series_id = 5
                      'name' => 'ROG',
                      'details' => "Asus latest flagship laptop series, the ROG GM5, looks good -- so good, in fact, that the look is trickling down to Asus mainstream line. The Asus ROG GU501 ($1,500)is almost identical to that flagship machine, but it has a midrange Nvidia GeForce GTX 1060 GPU. You still get a customizable RGB keyboard and strong audio quality, but its weak point is a dim display",
                      'brand_id' => 2,
                    ),

                    array(              //Series Array      //series_id = 6
                      'name' => 'VivoBook',
                      'details' => "The Asus VivoBook is eye-catching design is backed by good performance and solid battery life. Sleek design; Gorgeous color options; Good performance; Runs cool; Affordable. The Asus VivoBook S15 S530UA ($699) proves that innovation isn't limited to premium laptops. This excellent mainstream system is truly one of a kind. Inspired by the laptop maker pricier ZenBook S, the VivoBook S15 features Asus' new ErgoLift hinge, which angles the keyboard for a more comfortable typing experience. As if that weren't unique enough, the VivoBook is available in several striking color schemes, including a gorgeous turquoise green and a blinding yellow",
                      'brand_id' => 2,
                    ),

                    array(              //Series Array      //series_id = 7
                      'name' => 'TUF',
                      'details' => "The Asus TUF Gaming FX series laptop is a budget gaming laptop with solid performance and audio, but its dim display may give you pause. Very affordable; Good gaming performance for the price; Solid audio; Runs cool. The Asus TUF FX504 is the first laptop to carry the TUF name. The branding is designed to cater towards entry-level gamers who may not want to spend more on a 'proper' Republic of Gamers (ROG) system. As a result, the budget TUF FX504 sits right below the cheapest ROG laptop available in the class hierarchy",
                      'brand_id' => 2,
                    ),

                    array(              //Series Array      //series_id = 8
                      'name' => 'ZenBook',
                      'details' => "ASUS ZenBook Flip S is one of the world’s thinnest and lightest convertible laptops, designed for anywhere and everywhere. It combines elegant sophistication with the convenience and versatility of a 360°-flippable display. This ultra-thin, ultra-light convertible is a stylish laptop, a handy tablet — or anything in between. The 8th Generation Intel® Core i7 processor lets you sail through everyday computing tasks with ease. And it supports a stylus, so it’s your perfect partner for Windows 10! ZenBook Flip S is a timelessly elegant masterpiece, exquisitely crafted from solid aluminum",
                      'brand_id' => 2,
                    ),
                ),

                array(                  //Brand array       //MSI
                    array(              //Series Array      //series_id = 9
                      'name' => 'GL',
                      'details' => "Experience incredible power boosted by the coolest tech. The newest 8th Generation Intel® Core™ processor delivers more than 20% better performance when compared to previous generations. The new 6 core architecture benefits from the Cooler Boost design in all scenarios. Load applications faster and run demanding programs without lag. Laptops support up to DDR4-2666.Unleash the full performance potential of the latest SSD technology with support up to NVMe SSD read speeds. Experience the fastest 120Hz 3ms refresh rate panels powered by NVIDIA GeForce GTX graphics with full Microsoft DirectX 12 support. Moving objects look sharper and gameplay is more fluid giving you time to react instantly. This is everything you have ever wanted in a desktop monitor in a laptop",
                      'brand_id' => 3,
                    ),

                    array(              //Series Array      //series_id = 10
                      'name' => 'GE',
                      'details' => "Load applications faster and run demanding programs without lag. Laptops support up to DDR4-2666. Experience the fastest 120Hz 3ms refresh rate panels powered by NVIDIA GeForce GTX graphics with full Microsoft DirectX 12 support. Moving objects look sharper and gameplay is more fluid giving you time to react instantly. This is everything you have ever wanted in a desktop monitor in a laptop",
                      'brand_id' => 3,
                    ),

                    array(              //Series Array      //series_id = 11
                      'name' => 'GS',
                      'details' => "Every hardware detail of this keyboard is calculated and especially designed for professional gamers’ needs. Better responsive and tactile feedback, optimum WASD zone and support of multi-key inputs are all for gamers to gain full command over gaming missions",
                      'brand_id' => 3,
                    ),
                ),

                array(                  //Brand array       //LENOVO
                    array(              //Series Array      //series_id = 12
                      'name' => 'ThinkPad',
                      'details' => "The Maserati of business laptops, Lenovo's thinkpad X Carbon packs plenty of performance and battery life into a slim and sexy carbon-fiber chassis. Starting at $1,063,the 6th-Generation X1 Carbon retains the fantastic keyboard and colorful display of its predecessor but dramatically improves on the previous model's performance by going from an Intel 7th Gen dual-core processor to an 8th Gen, quad-core CPU. That's like moving from a four-cylinder to an eight-cylinder engine. Throw in some new design elements, an eye-popping HDR screen and far-field microphones, and this luxurious laptop is the best productivity system money can buy",
                      'brand_id' => 4,
                    ),

                    array(              //Series Array      //series_id = 13
                      'name' => 'Ideapad',
                      'details' => 'Diverse Styles, Singular Performance, Everyday laptops for first-time users. High-performance laptops for serious gamers. Convertible PCs for those who like their entertainment on the go. There’s an Ideapad for everyone. Embracing form, function, style, and fun, each Ideapad delivers responsive performance you can count on',
                      'brand_id' => 4,
                    ),

                    array(              //Series Array      //series_id = 14
                      'name' => 'Legion',
                      'details' => "Stylishly Savage. You work hard during the day and tend to other obligations at night - but there's still a warrior inside you. Lenovo legion delivers gaming PCs that give that warrior the power to compete, with style that's impressive in any environment",
                      'brand_id' => 4,
                    ),

                    array(              //Series Array      //series_id = 15
                      'name' => 'Yoga',
                      'details' => "Ever better. Continuing a legacy of breaking boundaries, the Yoga family is expanding beyond 2‑in‑1 convertibles to deliver you the absolute best in innovation, craftsmanship, and premium experiences. Enjoy sleek portability with new ultra-thin clamshell laptops or amplify your creativity with a powerful desktop All‑in‑One. You deserve choices",
                      'brand_id' => 4,
                    ),
                ),

                array(                  //Brand array       //ACER
                    array(              //Series Array      //series_id = 16
                      'name' => 'Swift',
                      'details' => "The entry-level US model nets you a 7th-generation Intel Core i3 processor, 4GB of RAM and a 128GB SSD. The UK model bumps up the RAM to 8GB of DDR4. However, like most laptops you will find in 2018, the Acer Swift 3 comes in a range of options, each complete with unique specifications and pricing",
                      'brand_id' => 5,
                    ),

                    array(              //Series Array      //series_id = 17
                      'name' => 'Aspire',
                      'details' => "On paper at least, the 8th-generation Acer Aspire 3 laptop seems to offer quite a bit for its rather slender asking price. You get a well-sized 15.6-inch Windows 10 machine, packing a Full HD display and Intel Core i3 chipset. Not bad specs for a budget notebook. It’s certainly an option worth considering for students and families who want to get online without breaking the bank. For a budget laptop, the Aspire A315 is rather fetching. The attractive gunmetal grey chassis sports a textured finish, both on the lid and the interior. It is a neat finish that compliments the durable construction nicely",
                      'brand_id' => 5,
                    ),

                    array(              //Series Array      //series_id = 18
                      'name' => 'Nitro',
                      'details' => "The Pros Fast overall performance. Solid graphics, Lots of ports. Decent value The Cons Subpar display; Awful webcam; Keyboard could be more clicky. The Acer Nitro 5 gaming laptop provides solid midtier graphics performance on a budget and speedy overall performance, but the display does not pop",
                      'brand_id' => 5,
                    ),

                    array(              //Series Array      //series_id = 19
                      'name' => 'TravelMate X',
                      'details' => "Specially Designed For Professional Performance; Take on a more serious workload and conquer larger tasks with an 8th Gen Intel® Core™ i71 processor. Coupled with high speed DDR4 memory, apps load faster and graphics run more smoothly. Even heavy processing jobs like large spreadsheets and video transcoding are no match for this powerful processing comb",
                      'brand_id' => 5,
                    ),
                ),

                array(                  //Brand array       //APPLE
                    array(              //Series Array      //series_id = 20
                      'name' => 'MacBook Pro',
                      'details' => 'MacBook Pro elevates the notebook to a whole new level of performance and portability. Wherever your ideas take you, you’ll get there faster than ever with high performance processors and memory, advanced graphics, blazing‑fast storage, and more.With eighth-generation Intel Core processors, MacBook Pro reaches new heights in compute performance. The 15‑inch model now features a 6‑core Intel Core i9 processor that works up
                      to 70 percent faster than the previous generation, enabling up to 4.8GHz Turbo Boost speeds.',
                      'brand_id' => 6,
                    ),

                    array(              //Series Array      //series_id = 21
                      'name' => 'MacBook Air',
                      'details' => 'The most loved Mac is about to make you fall in love all over again. Available in silver, space gray, and gold, the new thinner and lighter MacBook Air features a brilliant Retina display, Touch ID, the latest-generation keyboard, and a Force Touch trackpad. The iconic wedge is created from 100 percent recycled aluminum, making it the greenest Mac ever.1 And with all-day battery life, MacBook Air is your perfectly portable,       do-it-all notebook.With a resolution of 2560-by-1600 for over 4 million pixels, the results are positively jaw dropping. Images take on a new level of detail and realism.',
                      'brand_id' => 6,
                    ),
                ),
            ),
        );

        foreach ($seriesAll as $seriestype) {
            foreach ($seriestype as $seriesbrand) {
                foreach ($seriesbrand as $series) {
                    DB::table('series')->insert([
                        'name' => $series['name'],
                        'details' => $series['details'],
                        'brand_id' => $series['brand_id'],
                    ]);
                }
            }
        }
    }
}
