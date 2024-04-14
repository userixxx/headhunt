<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Resume;
use App\Models\User;

class ResumeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();

        foreach ($users as $user) {
            Resume::create([
                'user_id' => $user->id,
                'desired_salary' => rand(30000, 100000),
                'experience' => rand(1, 10),
                'position' => $this->generatePosition(),
            ]);
        }
    }

    /**
     * Генерирует случайную должность.
     *
     * @return string
     */
    private function generatePosition()
    {
        $positions = ['Дизайнер', 'Программист', 'Менеджер', 'Тестировщик', 'Аналитик'];
        return $positions[array_rand($positions)];
    }
}
