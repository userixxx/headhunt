<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $userData = [
            [
                'name' => 'Прохоров Игорь',
                'email' => 'user3@example.com',
                'phone' => '123456789',
                'password' => Hash::make('password'),
                'account_type' => 'user',
                'account_status' => 'candidate',
                'city_id' => 7,
                'skills' => true,
            ],
            [
                'name' => 'Попов Леонид',
                'email' => 'user4@example.com',
                'phone' => '987654321',
                'password' => Hash::make('password'),
                'account_type' => 'user',
                'account_status' => 'reserve',
                'city_id' => 1,
                'skills' => true,
            ],
            [
                'name' => 'Бабаханян Айк',
                'email' => 'user5@example.com',
                'phone' => '987654321',
                'password' => Hash::make('password'),
                'account_type' => 'user',
                'account_status' => 'dismissed',
                'city_id' => 2,
                'skills' => true,
            ],
            [
                'name' => 'Субботин Владислав',
                'email' => 'user6@example.com',
                'phone' => '987654321',
                'password' => Hash::make('password'),
                'account_type' => 'user',
                'account_status' => 'active',
                'city_id' => 2,
                'skills' => true,
            ],
            [
                'name' => 'Стокозов Валентин',
                'email' => 'user7@example.com',
                'phone' => '987654321',
                'password' => Hash::make('password'),
                'account_type' => 'user',
                'account_status' => 'candidate',
                'city_id' => 3,
                'skills' => true,
            ],
        ];

        foreach ($userData as $data) {
            User::create($data);
        }
    }
}
