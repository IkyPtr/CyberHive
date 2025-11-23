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
            'id_ko' => uniqid(),
            'nama' => $this->faker->name(),
            'nim_nip' => $this->faker->numerify('NIP###'),
            'email' => $this->faker->unique()->safeEmail(),
            'jumlah' => $this->faker->numberBetween(10, 100),
            'kegiatan' => $this->faker->sentence(2),
            'tanggal_mulai' => $this->faker->date(),
            'tanggal_selesai' => $this->faker->date(),
            'keterangan_status' => '-', // ✅ default biar tidak error
            'status' => 'pending',
            'lab_id' => uniqid(),
        ];
    }
}
