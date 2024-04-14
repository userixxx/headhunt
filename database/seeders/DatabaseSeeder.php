<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Offer;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(SkillsSeeder::class);
        $this->call(CitiesSeeder::class);
        $this->call(VacanciesSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(UserSkillSeeder::class);
        $this->call(ResumeSeeder::class);
        $this->call(OfferSeeder::class);
    }
}
