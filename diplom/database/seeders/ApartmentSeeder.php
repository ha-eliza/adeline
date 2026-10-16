<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ApartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $houses = ['Club', 'Life', 'Residence'];
        $finishingOptions = ['Без отделки', 'White box'];
        $viewOptions = ['Петровский пруд', 'Река Нева'];

        for ($i = 1; $i <= 89; $i++) {
            $formattedNumber = str_pad($i, 2, '0', STR_PAD_LEFT);

            $bedrooms = rand(0, 5);

            switch ($bedrooms) {
                case 0:
                    $apartmentType = 'студия';
                    $priceMin = 5000000;
                    $priceMax = 8000000;
                    $areaMin = 2051;
                    $areaMax = 3003;
                    $img = 'https://res.cloudinary.com/dg4najz1s/image/upload/v1772181807/plan0_rpbzgi.png';
                    break;
                case 1:
                    $apartmentType = '1';
                    $priceMin = 8000000;
                    $priceMax = 10000000;
                    $areaMin = 3102;
                    $areaMax = 5506;
                    $img = 'https://res.cloudinary.com/dg4najz1s/image/upload/v1772181809/plan1_oredls.png';
                    break;
                case 2:
                    $apartmentType = '2';
                    $priceMin = 11000000;
                    $priceMax = 13000000;
                    $areaMin = 5506;
                    $areaMax = 7502;
                    $img = 'https://res.cloudinary.com/dg4najz1s/image/upload/v1772181808/plan2_qaqtxs.png';
                    break;
                case 3:
                    $apartmentType = '3';
                    $priceMin = 14000000;
                    $priceMax = 20000000;
                    $areaMin = 7506;
                    $areaMax = 9504;
                    $img = 'https://res.cloudinary.com/dg4najz1s/image/upload/v1772181808/plan3_yoh28t.png';
                    break;
                case 4:
                    $apartmentType = '4';
                    $priceMin = 21000000;
                    $priceMax = 30000000;
                    $areaMin = 9536;
                    $areaMax = 12001;
                    $img = 'https://res.cloudinary.com/dg4najz1s/image/upload/v1772181808/plan4_uozbyh.png';
                    break;
                case 5:
                    $apartmentType = 'пентхаус';
                    $priceMin = 31000000;
                    $priceMax = 40000000;
                    $areaMin = 12032;
                    $areaMax = 20165;
                    $img = 'https://res.cloudinary.com/dg4najz1s/image/upload/v1772181808/plan5_fnorc4.png';
                    break;
            }

            $price = rand($priceMin, $priceMax);
            $area = rand($areaMin, $areaMax);

            \App\Models\Apartment::create([
                'house' => $houses[array_rand($houses)],
                'floor' => rand(2, 17),
                'number' => $formattedNumber,
                'bedrooms' => $apartmentType,
                'finishing' => $finishingOptions[array_rand($finishingOptions)],
                'view' => $viewOptions[array_rand($viewOptions)],
                'area' => $area / 100,
                'price' => $price,
                'image_plan' => $img,
            ]);
        }
    }
}
