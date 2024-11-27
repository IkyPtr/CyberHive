<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Matakuliah>
 */
class MatakuliahFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'mk_id' => $this->faker->unique()->regexify('[A-Z]{3}[0-9]{2}'),
            'nama_mk' => fake()->randomElement(['Basis Data', 'Pemrograman Web', 'Algoritma', 'Struktur Data', 'Jaringan Komputer']),
            'jam_masuk' => fake()->time('H:i'),
            'jam_keluar' => fake()->time('H:i'),
            'dosen' => fake()->randomElement(['ADF', 'BDG', 'CFH', 'DKL', 'EFG']),
            'ail' => fake()->randomElement(['XYZ', 'ABC', 'DEF', 'GHI', 'JKL'])
        ];
    }
}
