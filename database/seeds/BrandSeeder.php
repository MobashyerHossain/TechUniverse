<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Other\Image;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brands = array(
            array(                //laptop brand array
                array(					                   //brand_id = 1
                  'name' => 'HP',
                  'type' => 'Laptop',
                  'details' => "The Hewlett-Packard Company(HP) is an American multinational information technology company headquarted in Palo Alto, California. It developed and provided a wide variety of hardware components as well as software and related services to consumers, small- and medium-sized businesses (SMBs) and large enterprises, including customers in the government, health and education sectors. Hewlett- Packard company events included the spin-off of its electronic and bio-analytical measurement instruments part of its business as Agilent Technologies in 1999, its merger with Compaq in 2002, and the acquisition of EDS in 2008, which led to combined revenues of $118.4 billion in 2008 and a Fortune 500 ranking of 9 in 2009",
                ),

                array(					                   //brand_id = 2
                  'name' => 'ASUS',
                  'type' => 'Laptop',
                  'details' => "Asus tied with Acer for fourth place this year, sitting squarely in the middle of the pack. The company impressed us with its incredible range of value, premium and gaming systems, as well as its stellar design at every price. Asus stunned us with the ROG Zephyrus, a superthin gaming notebook with an innovative hinge and an Nvidia Max-Q GPU. But the company lost a lot of points on tech support, with a poorly designed website and long hold times. Great design: Asus metal, minimalist designs won our hearts on the consumer side, while the compact Zephyrus and other gaming laptops showcased how good a gaming rig can look. Strong value: Asus sells laptops at a wide range of prices, from entry-level VivoBooks to premium ZenBooks",
                ),

                array(					                   //brand_id = 3
                  'name' => 'MSI',
                  'type' => 'Laptop',
                  'details' => "Experience incredible power boosted by the coolest tech. The newest 8th Generation Intel® Core™ processor delivers more than 20% better performance when compared to previous generations. The new 6 core architecture benefits from the Cooler Boost design in all scenarios. Load applications faster and run demanding programs without lag. Laptops support up to DDR4-2666.Unleash the full performance potential of the latest SSD technology with support up to NVMe SSD read speeds. Experience the fastest 120Hz 3ms refresh rate panels powered by NVIDIA GeForce GTX graphics with full Microsoft DirectX 12 support. Moving objects look sharper and gameplay is more fluid giving you time to react instantly. This is everything you have ever wanted in a desktop monitor in a laptop",
                ),

                array(					                   //brand_id = 4
                  'name' => 'LENOVO',
                  'type' => 'Laptop',
                  'details' => "Lenovo Group Ltd. or Lenovo PC International, often shortened to Lenovo, is a Chinese multinational technology company with headquarters in Beijing, China, and Morrisville, North Carolina, United States.[4] It designs, develops, manufactures, and sells personal computers, tablet computers, smartphones, workstations, servers, electronic storage devices, IT management software, and smart televisions. Lenovo was the world's largest personal computer vendor by unit sales from 2013 to 2015. It markets the ThinkPad line of notebook computers, IdeaPad, Yoga and Legion lines of notebook laptops, and the IdeaCentre and ThinkCentre lines of desktops",
                ),

                array(					                   //brand_id = 5
                  'name' => 'ACER',
                  'type' => 'Laptop',
                  'details' => "Acer Inc. commonly known as Acer is a Taiwanese multinational hardware and electronics  corporation, specializing in advanced electronics technology, headquartered in Xizhi, New Taipei City, Taiwan. Acers  products include desktop PCs, laptop PCs (clamshells, 2-in-1s, convertibles and Chromebooks), tablets, servers, storage  devices, virtual reality devices, displays, smartphones and peripherals",
                ),

                array(					                   //brand_id = 6
                  'name' => 'APPLE',
                  'type' => 'Laptop',
                  'details' => "Apple Inc. is an American multinational technology company headquartered in Cupertino, California, that designs, develops, and sells consumer electronics, computer software, and online services. It is considered one of the Big Four of technology along with Amazon, Google and Facebook.[6][7] The company's hardware products include the iPhone smartphone, the iPad tablet computer, the Mac personal computer, the iPod portable media player, the Apple Watch smartwatch, the Apple TV digital media player, and the HomePod smart speaker. Apple's software includes the macOS and iOS operating systems, the iTunes media player, the Safari web browser, and the iLife and iWork creativity and productivity suites, as well as professional applications like Final Cut Pro, Logic Pro, and Xcode. Its online services include the iTunes Store, the iOS App Store and Mac App Store, Apple Music, and iCloud",
                ),
            ),

            array(                //smart phone brand array
                array(					                   //brand_id = 7
                  'name' => 'SAMSUNG',
                  'type' => 'Smart Phone',
                  'details' => "Samsung is a South Korean multinational conglomerate headquartered in Samsung Town, Seoul.[1] It comprises numerous affiliated businesses,[1] most of them united under the Samsung brand, and is the largest South Korean chaebol (business conglomerate). Samsung was founded by Lee Byung-chul in 1938 as a trading company. Over the next three decades, the group diversified into areas including food processing, textiles, insurance, securities, and retail. Samsung entered the electronics industry in the late 1960s and the construction and shipbuilding industries in the mid-1970s; these areas would drive its subsequent growth. Following Lee's death in 1987, Samsung was separated into four business groups – Samsung Group, Shinsegae Group, CJ Group and Hansol Group. Since 1990, Samsung has increasingly globalised its activities and electronics; in particular, its mobile phones and semiconductors have become its most important source of income",
                ),

                array(					                   //brand_id = 8
                  'name' => 'HUAWEI',
                  'type' => 'Smart Phone',
                  'details' => "Huawei Technologies Co., Ltd. is a Chinese multinational telecommunications equipment and consumer electronics manufacturer, headquartered in Shenzhen. Ren Zhengfei, a former communist engineer in the People's Liberation Army, founded Huawei in 1987. At the time of its establishment, Huawei focused on manufacturing phone switches, but has since expanded to include building telecommunications networks, providing operational and consulting services and equipment to enterprises inside and outside of China, and manufacturing communications devices for the consumer market. Huawei had over 170,000 employees as of September 2017, around 76,000 of them engaged in research and development (R&D). It has 21 R&D institutes in countries including China, the United States, Canada, the United Kingdom, Pakistan, Finland, France, Belgium, (Germany), Colombia, Sweden, Ireland, India, Russia, Israel, and Turkey. As of 2017 the company invested US$13.8 billion in R&D, up from US$5 billion in 2013",
                ),

                array(					                   //brand_id = 9
                  'name' => 'OPPO',
                  'type' => 'Smart Phone',
                  'details' => "Oppo Electronics Corporation, commonly referred to as Oppo, is a Chinese consumer electronics and mobile communications company, known for its smartphones, Blu-ray players and other electronic devices. A leading manufacturer of smartphones, Oppo was the top smartphone brand in China in 2016 and was ranked No. 8 worldwide. The brand name Oppo was registered in China in 2001 and launched in 2004. Since then, they have expanded to all parts of the world. In June 2016, Oppo became the biggest smartphone maker in China, selling its phones at more than 200,000 retail outlets. In 2017, Oppo successfully won the bid to sponsor the Indian national cricket team and has achieved the rights to display their logo on the team’s kits from 2017 to 2022. Between this period the Indian national cricket team will play 259 International matches consisting of 62 Tests, 152 ODIs, and 45 T20 Internationals",
                ),

                array(					                   //brand_id = 10
                  'name' => 'VIVO',
                  'type' => 'Smart Phone',
                  'details' => "Vivo Communication Technology Co. Ltd. is a Chinese technology company owned by BBK Electronics that makes smartphones, smartphone accessories, software, and online services. It was founded in 2009 in Dongguan, China. The company develops software for their phones such as the Vivo App Store, iManager included in their proprietary Android-based operating system called Funtouch OS. Vivo joined the ranks of the top 10 smartphone makers in the first quarter of 2015 with a global market share of 2.7%. With research and development centers in Shenzhen and Nanjing, the company employs 1,600 R&D personnel as of January 2016. Since the company's founding in 2009, Vivo has expanded to over 100 countries around the world. Vivo began its international expansion in 2014 when it entered the Thai market. The company quickly followed up with launches in the India, Indonesia, Malaysia, Myanmar, the Philippines, Thailand, and Vietnam",
                ),

                array(					                   //brand_id = 11
                  'name' => 'ONE PLUS',
                  'type' => 'Smart Phone',
                  'details' => "OnePlus is a Shenzhen-based Chinese smartphone manufacturer founded by Pete Lau (CEO) and Carl Pei in December 2013. The company officially serves 34 countries and regions around the world as of July 2018. They have released numerous phones, amongst other products. OnePlus was founded on 16 December 2013 by former Oppo vice-president Pete Lau and Carl Pei. According to the Chinese government's documentation, the only institutional stockholder in OnePlus is Oppo Electronics. Lau denied that OnePlus was a wholly-owned subsidiary of Oppo and stated that Oppo Electronics and not Oppo Mobile (the phone manufacturer) is a major investor of OnePlus and that they are 'in talks with other investors'. The company's main goal was to design a smartphone that would balance high-end quality with a lower price than other phones in its class, believing that users would 'Never Settle' for the lower-quality devices produced by other companies",
                ),

                array(					                   //brand_id = 12
                  'name' => 'XIAOMI',
                  'type' => 'Smart Phone',
                  'details' => "Xiaomi Corporation is a Chinese electronics company headquartered in Beijing. Xiaomi makes and invests in smartphones, mobile apps, laptops, and related consumer electronics. Xiaomi released its first smartphone in August 2011 and rapidly gained market share in China to become the country's largest smartphone company in 2014. At the start of Q2 of 2018, Xiaomi was the world's fourth-largest smartphone manufacturer, leading in both the largest market, China, and the second-largest market, India. Xiaomi has 15,000 employees in China, India, Malaysia, Singapore and is expanding to other countries including Indonesia, the Philippines, and South Africa. According to Forbes magazine, Lei Jun, the founder and CEO, has an estimated net worth of US$12.5 billion. He is China's 11th richest person and 118th in the world. Xiaomi is the world's 4th most valuable technology start-up after receiving US$1.1 billion funding from investors, making Xiaomi's valuation more than US$46 billion",
                ),
            ),
        );

        $logo = (new Image)->getLogoFirstIndex();
        foreach ($brands as $subbrand) {
            foreach ($subbrand as $brand) {
                DB::table('brands')->insert([
                    'name' => $brand['name'],
                    'type' => $brand['type'],
                    'details' => $brand['details'],
                    'logo' => $logo,
                ]);
                $logo++;
            }
        }
    }
}
