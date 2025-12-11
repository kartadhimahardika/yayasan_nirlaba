<?php

namespace Database\Factories;

use App\Models\Program;
use Illuminate\Support\Str;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Program>
 */
class ProgramFactory extends Factory
{
    protected $model = Program::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array
    {
        $title = $this->faker->sentence(rand(6, 8));

        return [
            'category_id' => Category::factory(),
            'title'       => $title,
            'slug'        => Str::slug($title) . '-' . Str::random(5),
            'photo'       => $this->faker->imageUrl(640, 480, 'program', true),
            'description' => $this->faker->paragraph(4),
        ];
    }
}
