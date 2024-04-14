<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Skill;

class UserSkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();
        $UserSkills = Skill::all();

        foreach ($users as $user) {
            $numberOfSkills = rand(1, 5);

            $randomSkills = $UserSkills->random($numberOfSkills);

            $user->UserSkills()->attach($randomSkills->pluck('id')->toArray());
        }
    }
}
