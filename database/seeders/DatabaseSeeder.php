<?php

namespace Database\Seeders;

use App\Models\Club;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $topClubs = Club::factory()
            ->count(5)
            ->create();

        $topClubs->each(function ($topClub) {
            Club::factory()->count(3)->withParent($topClub->id)->create();
        });
    }
}
