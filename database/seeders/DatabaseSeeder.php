<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\User;
use App\Models\Stock;
use App\Models\Option;
use App\Models\Product;
use App\Models\Category;
use App\Models\District;
use App\Models\Attribute;
use App\Models\OptionValue;
use App\Models\AttributeValue;
use App\Models\Neighborhood;
use App\Models\ProductVariant;
use Illuminate\Database\Seeder;
use Database\Seeders\AddressCitiesTableSeeder;
use Database\Seeders\AddressDistrictsTableSeeder;
use Database\Seeders\AddressNeighborhoodsTableSeeder;


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
                OptionValue::factory(3)->create([
                    'option_id' => $option->id
                ]);
            });

        //product attribute with values
        Attribute::factory(4)
            ->create()
            ->each(function ($option) {
                AttributeValue::factory(3)->create([
                    'attribute_id' => $option->id
                ]);
            });

        //product with categories
        Product::factory(20)
            ->create()
            ->each(function ($product) {
                $randomFields = Category::all()->random(rand(0, 4))->pluck('id');
                $product->categories()->attach($randomFields);

                $randomFields = Option::all()->random(rand(2, 3))->pluck('id');
                $product->options()->attach($randomFields);

                $randomFields = Attribute::all()->random(rand(2, 3))->pluck('id');
                $product->attributes()->attach($randomFields);
            });

        $products = Product::get();

        foreach ($products as $product) {
            $attribute = $product->attributes->first();
            $option = $product->options->first();
            foreach ($attribute->values as $att) {
                foreach ($option->values as $opt) {
                    $productVariant = ProductVariant::create([
                        'product_id' => $product->id,
                        'option_id' => $option->id,
                        'attribute_id' => $attribute->id,
                        'option_value_id' => $opt->id,
                        'attribute_value_id' => $att->id,
                        'price' => rand(10000, 100000),
                    ]);

                    Stock::create([
                        'quantity' => rand(0, 100),
                        'product_variant_id' => $productVariant->id
                    ]);
                }
            }
        }

        $this->call(AddressCitiesTableSeeder::class);
        $this->call(AddressDistrictsTableSeeder::class);
        $this->call(AddressNeighborhoodsTableSeeder::class);

        for ($i = 0; $i < 100; $i++) {
            User::factory()
                ->hasAddresses(3, [
                    'city_id' => ($city = City::get()->random())->id,
                    'district' => ($district = District::where('city_id', $city->id)->first())->name,
                    'neighborhood' => ($neighborhood = Neighborhood::where('district_id', $district->id)->first())->name,
                    'postal_code' => $neighborhood->postal_code,
                ])
                ->create();
        }
    }
}
