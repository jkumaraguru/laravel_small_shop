<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $categories = [
            ['name' => 'Smartphones'],
            ['name' => 'Tablets'],
            ['name' => 'Laptops'],
            ['name' => 'Televisions'],
            ['name' => 'Refrigerators'],
            ['name' => 'Air Conditioners'],
            ['name' => 'Washing Machines'],
            ['name' => 'Microwave Ovens'],
            ['name' => 'Fans'],
            ['name' => 'Smart Watches'],
            ['name' => 'Headphones'],
            ['name' => 'Speakers'],
            ['name' => 'Gaming Consoles'],
            ['name' => 'Cameras'],
            ['name' => 'Printers'],
            ['name' => 'Vacuum Cleaners'],
            ['name' => 'Kitchen Appliances'],
            ['name' => 'Fitness Trackers'],
            ['name' => 'Home Theaters'],
            ['name' => 'Monitors'],
            ['name' => 'Projectors'],
            ['name' => 'Smart Home Devices'],
            ['name' => 'Bluetooth Accessories'],
            ['name' => 'Wearable Devices'],
            ['name' => 'Power Banks'],
            ['name' => 'Air Purifiers'],
            ['name' => 'Water Purifiers'],
            ['name' => 'Heaters'],
            ['name' => 'Coffee Machines'],
            ['name' => 'Dishwashers']
        ];

        // Category::insert($categories);
        
        foreach ($categories as $row) 
        {
            Category::create($row);
        }
    }
}
