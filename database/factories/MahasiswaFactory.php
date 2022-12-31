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
    public function definition()
    {
        return [
            'jurusan_id' => mt_rand(1,2),
            'no_bp' => $this->faker->randomNumber(8, true),
            'name' => $this->faker->name(),
            'no_tlp' => $this->faker->phoneNumber(),
            'alamat' => $this->faker->address(),
            'nama_orang_tua' => $this->faker->name()
        ];
    }
}
