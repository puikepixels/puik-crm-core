<?php

namespace Puikepixels\PuikCrmCore\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Puikepixels\PuikCrmCore\Models\Customer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Customer::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->company(),
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'email' => $this->faker->unique()->safeEmail(),
            'website' => $this->faker->domainName(),
            'phone' => $this->faker->phoneNumber(),
            'mobil' => $this->faker->phoneNumber(),
            'street' => $this->faker->streetName(),
            'street_number' => $this->faker->numberBetween(1, 250),
            'street_number_addition' => $this->faker->streetSuffix(),
            'zip_code' => $this->faker->postcode(),
            'city' => $this->faker->city(),
            'vatnumber' => null,
            'iban' => null,
            'customer_number' => $this->faker->unique()->numberBetween(),
            'chamberofcommercenumber' => null,
            'status' => 1,
            'customer_group_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
