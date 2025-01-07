<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Interior;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InteriorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = Category::all();

        Interior::factory()
            ->count(25)
            ->create([
                'category_id' => $category->random()->id
            ]);
    }
}
