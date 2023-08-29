<?php

namespace Puikepixels\PuikCrmCore\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Puikepixels\PuikCrmCore\Models\CustomerNote;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CustomerNote>
 */
class CustomerNoteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CustomerNote::class;
    
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'description' => $this->faker->sentence()
        ];
    }
}
