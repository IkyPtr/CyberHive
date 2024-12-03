<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lab>
 */
class LabFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'lab_id' => 'LAB' . fake()->unique()->numerify('###'),
            'no_ruangan' => fake()->numerify('###'),
            'no_loker' => fake()->numerify('##'),
            'no_pc' => fake()->numerify('##'),
            'mouse' => fake()->randomElement(['Rusak', 'Baik']),
            'keyboard' => fake()->randomElement(['Rusak', 'Baik']),
            'monitor' => fake()->randomElement(['Rusak', 'Baik']),
            'jaringan' => fake()->randomElement(['Rusak', 'Baik']),
            'keterangan' => fake()->sentence(),
            'alat' => fake()->sentence(),
            'tanggal' => fake()->date(),
            'nim' => \App\Models\Mahasiswa::factory('nim'),
            'mk_id' => \App\Models\Matakuliah::factory('mk_id'),
            'id_ko' => \App\Models\Koordinator::factory('id_ko'),
            'id_ps' => \App\Models\Peserta::factory('id_ps'),
        ];
    }
}
