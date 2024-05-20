<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\KepalaSurat>
 */
class KepalaSuratFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_kop' => $this->faker->company,
            'alamat_kop' => $this->faker->address,
            'nama_tujuan' => $this->faker->name,
            'id_user' => User::all()->random()->id
        ];
    }
}
