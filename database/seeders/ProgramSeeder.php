<?php

namespace Database\Seeders;

use App\Models\Program;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create 5 program categories
        $categories = Category::factory()->count(5)->create();

        // Each category has 3 programs
        $categories->each(function ($category) {
            Program::factory()->count(3)->create([
                'category_id' => $category->id,
            ]);
        });
    }
}
