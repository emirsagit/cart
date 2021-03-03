<?php

namespace Database\Seeders;

use App\Models\Option;
use App\Models\Product;
use App\Models\Category;

use App\Models\Attribute;
use App\Models\AttributeValue;
use App\Models\OptionValue;
use App\Models\ProductVariant;
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

        //product option with values
        Option::factory(4)
            ->create()
            ->each(function ($option) {
                OptionValue::factory(6)->create([
                    'option_id' => $option->id
                ]);
            });

        //product attribute with values
        Attribute::factory(4)
            ->create()
            ->each(function ($option) {
                AttributeValue::factory(6)->create([
                    'attribute_id' => $option->id
                ]);
            });

        //product with categories
        Product::factory(30)
            ->create()
            ->each(function ($product) {
                $randomFields = Category::all()->random(rand(0, 4))->pluck('id');
                $product->categories()->attach($randomFields);

                $randomFields = Option::all()->random(rand(1, 2))->pluck('id');
                $product->options()->attach($randomFields);

                $randomFields = Attribute::all()->random(rand(1, 2))->pluck('id');
                $product->attributes()->attach($randomFields);
            });

        $products = Product::get();

        foreach ($products as $product) {
            $attribute = $product->attributes()->first();
            $option = $product->options()->first();
            foreach ($attribute->values as $att) {
                foreach ($option->values as $opt) {
                    ProductVariant::create([
                        'product_id' => $product->id,
                        'option_id' => $option->id,
                        'attribute_id' => $attribute->id,
                        'option_value_id' => $opt->id,
                        'attribute_value_id' => $att->id,
                        'price' => 10000,
                        'stock' => 30
                    ]);
                }
            }
        }
    }
}
