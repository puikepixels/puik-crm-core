<?php

namespace Puikepixels\PuikCrmCore\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Puikepixels\PuikCrmCore\Models\Project;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
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
            'title' => $this->faker->unique()->word,
        ];
    }
}
