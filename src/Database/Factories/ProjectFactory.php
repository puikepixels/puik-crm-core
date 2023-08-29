<?php

namespace Puikepixels\PuikCrmCore\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Puikepixels\PuikCrmCore\Models\Project;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Project::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(2),
            'description' => $this->faker->sentence(25),
        ];
    }
}
