<?php

namespace Database\Factories;

use App\Models\Address;
use Illuminate\Database\Eloquent\Factories\Factory;

class AddressFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Address::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'description' => $this->faker->word,
            'phone' => $this->faker->phoneNumber,
            'address' => $this->faker->address,
            'neighborhood' => $this->faker->streetName,
            'district' => $this->faker->city,
            'postal_code' => $this->faker->postcode,
            'is_default' => $this->faker->boolean(50),
            'is_delivery' => $this->faker->boolean(50),
            'is_billing' => $this->faker->boolean(50),
        ];
    }
}
