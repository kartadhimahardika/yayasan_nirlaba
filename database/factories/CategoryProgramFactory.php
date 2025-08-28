<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\CategoryProgram;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CategoryProgram>
 */
class CategoryProgramFactory extends Factory
{
    protected $model = CategoryProgram::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array
    {
        $category_name = fake()->sentence(rand(1, 3), false);
        return [
            'name' => $category_name,
            'slug' => Str::slug($category_name),
        ];
    }
}
