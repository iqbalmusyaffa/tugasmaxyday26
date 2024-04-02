<?php

namespace Database\Factories;

use App\Models\Product;
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
    protected $model = Product::class;

    public function definition(): array
    {
        return [
                'nama_barang' => $this->faker->word,
                'deskripsi' => $this->faker->sentence,
                'harga' => $this->faker->randomFloat(2, 10, 1000),
        ];
    }
}
