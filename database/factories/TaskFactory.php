<?php

namespace Database\Factories;

use App\Models\TaskGroup;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user = User::pluck('id')
            ->toArray();
        $taskgroup = TaskGroup::pluck('id')
            ->toArray();

        return [
            'user_id' => $this->faker->randomElement($user),
            'task_group_id' => $this->faker->randomElement($taskgroup),
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->text,
        ];
    }
}
