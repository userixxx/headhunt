<?php

namespace Database\Seeders;

use App\Models\Offer;
use App\Models\User;
use App\Models\Vacancy;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OfferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $users = User::all();
        $vacancies = Vacancy::all();

        foreach ($users as $user) {
            $vacancy = $vacancies->random();

            Offer::create([
                'user_id' => $user->id,
                'vacancy_id' => $vacancy->id,
            ]);
        }
    }
}
