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
            $clubs2 = Club::factory()
                ->count(3)
                ->withParent($topClub->id)
                ->create();

            $clubs2->each(function ($club2) {
                Club::factory()
                    ->count(15)
                    ->withParent($club2->id)
                    ->create();
            });
        });
    }
}
