<?php

namespace Database\Seeders;

use App\Models\Description;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $names = [
            't-shirt',
            'iphone',
            'bags',
            'croocs',
            'ps5',
            'table',
            'chair',
            'laptops',
            'keyboard',
            'mouse',
            'charges',
            'key-holder'
        ];

        $image_url = [
            "assets/images/products/product-1.jpg",
            "assets/images/products/product-2.jpg",
            "assets/images/products/product-3.jpg",
            "assets/images/products/product-4.jpg",
            "assets/images/products/product-5.jpg",
            "assets/images/products/product-6.jpg",
            "assets/images/products/product-7.jpg",
            "assets/images/products/product-8.jpg"
        ];

        foreach($names as $name){

            $description = Description::inRandomOrder()->first();

            Product::create([
                'name' => $name,
                'price' => 5000,
                'description_id' => $description->id,
                'image_url' => $image_url[array_rand($image_url)]
            ]);
        }

    }
}
