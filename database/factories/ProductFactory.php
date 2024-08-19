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
        return [
            // content
            'name' => $this->faker->word, // Nama produk acak
            'price' => $this->faker->randomNumber(5), // Harga acak dengan 5 digit
           'image' => $this->faker->image('public/storage/product-images', 640, 480, null, false)

        ];
    }
}
