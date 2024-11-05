<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Brand;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = [
            ['name'=> 'Infinix'],
            ['name'=> 'Samsung'],
            ['name'=> 'Motorola'],
            ['name'=> 'Realme'],
            ['name'=> 'Redmi'],
            ['name'=> 'Oppo'],
            ['name'=> 'Vivo'],
            ['name'=> 'OnePlus'],
            ['name'=> 'Apple'],
            ['name'=> 'Google Pixel'],
            ['name'=> 'Xiaomi'],
            ['name'=> 'Huawei'],
            ['name'=> 'Nokia'],
            ['name'=> 'Sony'],
            ['name'=> 'LG'],
            ['name'=> 'Asus'],
            ['name'=> 'HTC'],
            ['name'=> 'Tecno'],
            ['name'=> 'Lenovo'],
            ['name'=> 'Honor'],
            ['name'=> 'Meizu'],
            ['name'=> 'ZTE'],
            ['name'=> 'BlackBerry'],
            ['name'=> 'Poco'],
            ['name'=> 'iQOO'],
            ['name'=> 'Lava'],
            ['name'=> 'Micromax'],
            ['name'=> 'Fairphone'],
            ['name'=> 'Dell'],
            ['name'=> 'HP'],
            ['name'=> 'Bajaj'],
            ['name'=> 'Usha'],
            ['name'=> 'Whirlpool'],
        ];
        
        
        foreach ($brands as $row) {
            Brand::create($row);
        }
    }
}

