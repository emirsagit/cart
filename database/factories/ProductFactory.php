<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Support\Str;
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
        $name = $this->faker->unique()->word;
        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'image' => 'https://picsum.photos/1000/1000',
            'price' => $this->faker->numberBetween(1000, 300000),
            'description' => $this->faker->paragraph,
            'show_on_slider' => $this->faker->boolean(30),
            'show_on_homepage' => $this->faker->boolean(42),
            'slider_order' => $this->faker->numberBetween(1, 10),
            'homepage_order' => $this->faker->numberBetween(1, 10),
        ];
    }
}
