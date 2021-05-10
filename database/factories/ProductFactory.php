<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id'=> Category::factory(),
            'ref'=> $this->faker->randomNumber(2),
            'lib'=> $this->faker->sentence(),
            'desc'=> $this->faker->paragraph(1, true),
            'price'=> $this->faker->randomNumber(2),
            'stock'=> $this->faker->randomNumber(2),
        ];
    }
}
