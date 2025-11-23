<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mahasiswa>
 */
class MahasiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nim' => '23' . str_pad(fake()->unique()->numberBetween(1, 9999999), 0, '0', STR_PAD_LEFT),
            'nama' => fake()->name(),
            'kelas' => fake()->randomElement(['2TIA', '2TIB', '2TIC', '2TID', '2TIE', '2TIF']),
        ];
    }
}
