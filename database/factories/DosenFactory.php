<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dosen>
 */
class DosenFactory extends Factory
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
            'nidn' =>  $this->faker->unique()->randomNumber(5, true),
            'nip' => $this->faker->unique()->randomNumber(8, true),
            'nama' => $this->faker->name(),
            'no_tlp' => $this->faker->phoneNumber(),
            'alamat' => $this->faker->address()
        ];
    }
}
