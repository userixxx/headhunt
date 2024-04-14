<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $cities = [
            'Москва',
            'Санкт-Петербург',
            'Новосибирск',
            'Екатеринбург',
            'Нижний Новгород',
            'Казань',
            'Челябинск',
            'Омск',
            'Самара',
            'Ростов-на-Дону',
            'Уфа',
            'Красноярск',
            'Пермь',
            'Воронеж',
            'Волгоград',
            'Краснодар',
            'Саратов',
            'Тюмень',
            'Тольятти',
            'Ижевск',
        ];

        foreach ($cities as $city) {
            City::create(['name' => $city]);
        }
    }
}
