<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        \Puikepixels\PuikCrmCore\Models\CustomerGroup::factory(10)->create();
        \Puikepixels\PuikCrmCore\Models\TaskPriority::factory(3)->create();
        \Puikepixels\PuikCrmCore\Models\TaskStatus::factory(3)->create();

        \Puikepixels\PuikCrmCore\Models\Customer::factory(1000)->create();

        //todo random id customer
        \Puikepixels\PuikCrmCore\Models\Project::factory(250)->create([
            'customer_id' => rand(1, \Puikepixels\PuikCrmCore\Models\Customer::count()),
        ]);

        //todo tasks seeder
    


    }
}
