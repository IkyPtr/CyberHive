<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teknisi>
 */
class TeknisiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_tk' => strtoupper(fake()->unique()->lexify('????')),
            'username' => $this->faker->unique()->userName,
            'password' => $this->faker->password,
            'nama' => $this->faker->name,
        ];
    }
}
