<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Donation;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DonationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Donation::factory(10)
            ->recycle(User::all())
            ->create();
    }
}
