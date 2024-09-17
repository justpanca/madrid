<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // return [
           
        //     'image' => 'https://imgbox.com/g/4GhoUU9Xz8',
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ];

        return [
            'name' => 'Product ' . fake()->numberBetween(1, 100),
            'description' => fake()->text(),
            'price' => fake()->numberBetween(1000, 10000),
            'image' => '',
            'stock' => fake()->numberBetween(1, 100),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
