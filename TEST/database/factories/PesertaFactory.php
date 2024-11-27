<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Peserta>
 */
class PesertaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_ps' => fake()->unique()->numerify('PS##'),
            'nama_ps' => fake()->name(),
            'nim_nip' => '23' . str_pad(fake()->unique()->numberBetween(1, 9999999), 0, '0', STR_PAD_LEFT),
            'kelas' => fake()->randomElement(['23TIA', '23TIB', '23TIC', '23TII', '23TID', '23TLA', '23SIA', '23TRA', '23AKC', '23TRE', '23MSC']),
        ];
    }
}
