<?php

namespace Puikepixels\PuikCrmCore\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Puikepixels\PuikCrmCore\Models\TaskPriority;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TaskPriority>
 */
class TaskPriorityFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TaskPriority::class;

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
