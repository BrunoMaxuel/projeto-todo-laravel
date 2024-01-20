<?php

namespace Database\Factories;

use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{

    public function definition(): array
    {

        return [
            'user_id' => $this->faker->randomElement([1,2]),
            'category_id' => $this->faker->randomElement([1,5]),
            'task_name' => $this->faker->text(40),
            'task_description' => $this->faker->text(70),
            'asset_task' =>$this->faker->boolean
        ];
    }
}

