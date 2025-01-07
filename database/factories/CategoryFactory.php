<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $category = $this->faker->randomElement([
            'Ruang Tamu',
            'Kamar Tidur',
            'Dapur',
            'Kamar Mandi',
            'Ruang Kerja',
            'Ruang Keluarga',
            'Taman'
        ]);

        return [
            'name' => $category,
        ];
    }
}
