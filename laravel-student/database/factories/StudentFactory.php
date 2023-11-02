<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => fake()->name(),
            'nim' => fake()->unique()->numberBetween(1000000000, 1999999999),
            'jurusan' => fake()->randomElement(['Teknik Informatika', 'Sistem Informasi', 'Teknik Komputer']),
            'email' => fake()->unique()->safeEmail(),
        ];
    }
}
