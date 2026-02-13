<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bank>
 */
class BankFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->randomElement(['BCA', 'BRI']);
        $number = $this->faker->numerify('############');

        return [
            'name' => $name,
            'slug' => Str::slug($name.'-'.substr($number, -4)),
            'number' => $number,
            'holder' => 'Panti Asuhan Harapan',
        ];
    }
}
