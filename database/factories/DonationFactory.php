<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Donation>
 */
class DonationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'slug' => Str::slug($this->faker->name.'-'.Str::random(6)),
            'name' => $this->faker->name(),
            'phone' => $this->faker->phoneNumber(),
            'email' => $this->faker->unique()->safeEmail(),
            'amount' => $this->faker->numberBetween(50000, 2000000),
            'proof' => $this->faker->imageUrl(800, 600, 'news', true),
            'message' => $this->faker->optional()->sentence(),
            'status' => $this->faker->randomElement(['Tertunda', 'Terverifikasi', 'Ditolak']),
        ];
    }
}
