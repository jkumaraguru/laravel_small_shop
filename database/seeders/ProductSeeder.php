<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Category;
use App\Models\Brand;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
                // Category
                $smartphones = Category::where('name', 'Smartphones')->first();

                $laptops = Category::where('name', 'Laptops')->first();

                $air_conditioners = Category::where('name', 'Air Conditioners')->first();

                $fans = Category::where('name', 'Fans')->first();

                $refrigerators = Category::where('name', 'Refrigerators')->first();

                // Brand
                $samsung = Brand::where('name', 'Samsung')->first();

                $redmi = Brand::where('name', 'Redmi')->first();

                $realme = Brand::where('name', 'Realme')->first();

                $vivo = Brand::where('name', 'Vivo')->first();

                $dell = Brand::where('name', 'Dell')->first();

                $apple = Brand::where('name', 'Apple')->first();

                $hp = Brand::where('name', 'HP')->first();

                $lg = Brand::where('name', 'LG')->first();

                $bajaj = Brand::where('name', 'Bajaj')->first();

                $usha = Brand::where('name', 'Usha')->first();

                $whirlpool = Brand::where('name', 'Whirlpool')->first();

                $products = [
                    [
                        'category_id'=> $smartphones->id,
                        'brand_id'=> $samsung->id,
                        'name'=> 'Note 30 5g',
                        'price'=> 100
                    ],
                    [
                        'category_id'=> $smartphones->id,
                        'brand_id'=> $redmi->id,
                        'name'=> 'Redmi Note 13',
                        'price'=> 1003
                    ],
                    [
                        'category_id'=> $smartphones->id,
                        'brand_id'=> $realme->id,
                        'name'=> 'Realme 12',
                        'price'=> 1002
                    ],
                    [
                        'category_id'=> $smartphones->id,
                        'brand_id'=> $vivo->id,
                        'name'=> 'Vivo V13',
                        'price'=> 1001
                    ],
                    [
                        'category_id'=> $smartphones->id,
                        'brand_id'=> $samsung->id,
                        'name'=> 'Samsung S24 Ultra',
                        'price'=> 1000
                    ],
                    [
                        'category_id'=> $laptops->id,
                        'brand_id'=> $dell->id,
                        'name'=> 'Dell XPS 13',
                        'price'=> 1200
                    ],
                    [
                        'category_id'=> $laptops->id,
                        'brand_id'=> $apple->id,
                        'name'=> 'MacBook Pro M1',
                        'price'=> 1500
                    ],
                    [
                        'category_id'=> $laptops->id,
                        'brand_id'=> $hp->id,
                        'name'=> 'HP Spectre x360',
                        'price'=> 1100
                    ],
                    [
                        'category_id'=> $air_conditioners->id,
                        'brand_id'=> $lg->id,
                        'name'=> 'LG Dual Inverter AC',
                        'price'=> 600
                    ],
                    [
                        'category_id'=> $air_conditioners->id,
                        'brand_id'=> $samsung->id,
                        'name'=> 'Samsung Wind-Free AC',
                        'price'=> 700
                    ],
                    [
                        'category_id'=> $fans->id,
                        'brand_id'=> $bajaj->id,
                        'name'=> 'Bajaj Ceiling Fan',
                        'price'=> 50
                    ],
                    [
                        'category_id'=> $fans->id,
                        'brand_id'=> $usha->id,
                        'name'=> 'Usha Mist Air Fan',
                        'price'=> 45
                    ],
                    [
                        'category_id'=> $refrigerators->id,
                        'brand_id'=> $lg->id,
                        'name'=> 'LG 260L Double Door Fridge',
                        'price'=> 500
                    ],
                    [
                        'category_id'=> $refrigerators->id,
                        'brand_id'=> $whirlpool->id,
                        'name'=> 'Whirlpool 240L Fridge',
                        'price'=> 450
                    ]
                ];


                foreach ($products as $row) 
                {
                    Product::create($row);
                }

    }
}
