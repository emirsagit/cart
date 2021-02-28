<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $category = Category::factory()->create();
        Category::factory(7)->create();
        Category::factory(4)->create([
            'parent_id' => $category->id
        ]);
        Product::factory(30)
            ->create()
            ->each(function ($product) {
                $randomFields = Category::all()->random(rand(0, 4))->pluck('id');
                $product->categories()->attach($randomFields);
            });
    }
}
