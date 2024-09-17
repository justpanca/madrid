<?php

namespace Database\Seeders;

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
        // Product::factory(2)->create();
       $product = [
        [
            "name" => "Real Madrid Tshirt",
            "description" => "best tshirt for us",
            "price" => 200000,
            "image" => "tshirt.png",
            "stock" => 13
        ],
        [
            "name" => "Real Madrid Ball",
            "description" => "good ball for us",
            "price" => 100000,
            "image" => "ball.png",
            "stock" => 12
        ],
        [
            "name" => "Real Madrid Shoes",
            "description" => "good shoes for us",
            "price" => 400000,
            "image" => "shoes.png",
            "stock" => 11
        ],

    ];

        Product::insert($product);

    }
}
