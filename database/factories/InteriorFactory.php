<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Interior>
 */
class InteriorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $type = $this->faker->randomElement(['B', 'S']);
        $name = $type === 'B'
            ? $this->faker->randomElement([
                'Meja Makan Besar',
                'Sofa Set Ruang Tamu',
                'Lemari Pakaian 4 Pintu',
                'Kabinet Dapur Custom',
                'Tempat Tidur King Size'
            ])
            : $this->faker->randomElement([
                'Lampu Meja Minimalis',
                'Kursi Tunggal',
                'Rak Buku Sederhana',
                'Cermin Dinding Dekoratif',
                'Lemari Laci Kecil'
            ]);

        return [
            'category_id' => Category::factory(),
            'name' => $name,
            'type' => $type,
            'description' => $this->faker->sentence(),
            'price' => $type === 'B' 
                ? $this->faker->numberBetween(100000, 100000000)
                : $this->faker->numberBetween(50000, 1000000),
            'image' => $this->faker->imageUrl(),
        ];
    }
}
