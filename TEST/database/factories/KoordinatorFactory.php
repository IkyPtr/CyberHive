<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Koordinator>
 */
class KoordinatorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_ko' => strtoupper(fake()->unique()->lexify('????')), // Generates 4 char ID
            'nama_ko' => fake()->name(),
            'nim_nip' => fake()->unique()->numerify('##########'),
            'no_hp' => fake()->unique()->numerify('08##########'),
            'email' => fake()->unique()->safeEmail(),
            'username' => substr(fake()->unique()->userName(), 0, 10),
            'password' => substr(fake()->password(8), 0, 10),
        ];
    }
}
