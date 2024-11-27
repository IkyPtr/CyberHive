<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin>
 */
class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_ad' => strtoupper(fake()->unique()->lexify('????')), // Generates 4 char ID
            'username' => substr(fake()->unique()->userName(), 0, 10),
            'password' => substr(fake()->password(8), 0, 10),
            'nama' => fake()->name(),
            'nip' => fake()->unique()->numerify('##########'),
        ];
    }
}
