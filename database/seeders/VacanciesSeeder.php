<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Vacancy;
use Illuminate\Database\Seeder;

class VacanciesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $vacanciesData = [
            [
                'name' => 'Frontend Developer',
                'city' => 'Москва',
                'cooperation_type' => 'remote',
                'work_schedule' => 'full_time',
                'description' => 'Описание вакансии...',
                'salary_min' => 80000,
                'salary_max' => 120000,
                'experience' => '1-3 года',
                'required_skills' => 'HTML, CSS, JavaScript',
                'isMove' => false,
                'from' => 'hh.ru',
            ],
            [
                'name' => 'Backend Developer',
                'city' => 'Санкт-Петербург',
                'cooperation_type' => 'offline',
                'work_schedule' => 'full_time',
                'description' => 'Описание вакансии...',
                'salary_min' => 90000,
                'salary_max' => 130000,
                'experience' => '3-5 лет',
                'required_skills' => 'PHP, MySQL, Laravel',
                'isMove' => false,
                'from' => 'habr.com/vacancies',
            ],
            [
                'name' => 'Data Scientist',
                'city' => 'Новосибирск',
                'cooperation_type' => 'hybrid',
                'work_schedule' => 'full_time',
                'description' => 'Описание вакансии...',
                'salary_min' => 100000,
                'salary_max' => 150000,
                'experience' => '2-4 года',
                'required_skills' => 'Python, Machine Learning, SQL',
                'isMove' => false,
                'from' => 'hh.ru',
            ],
        ];

        foreach ($vacanciesData as $data) {
            $city = City::where('name', $data['city'])->first();

            if ($city) {
                Vacancy::create([
                    'name' => $data['name'],
                    'city_id' => $city->id,
                    'cooperation_type' => $data['cooperation_type'],
                    'work_schedule' => $data['work_schedule'],
                    'description' => $data['description'],
                    'salary_min' => $data['salary_min'],
                    'salary_max' => $data['salary_max'],
                    'experience' => $data['experience'],
                    'required_skills' => $data['required_skills'],
                    'isMove' => $data['isMove'],
                    'from' => $data['from'],
                ]);
            }
        }
    }
}
