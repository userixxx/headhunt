<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Models\User;
use App\Models\Vacancy;
use Illuminate\Http\Request;

class VacancyController extends Controller
{
    /**
     * @Route("/catalog", name="catalog")
     */
    public function index()
    {
        $vacancies = Vacancy::all();

        return view('pages.vacancy', compact('vacancies'));
    }
    public function show($id)
    {
        $vacancy = Vacancy::query()
            ->where('id', $id)
            ->with('city')
            ->firstOrFail();

        $usersVacancy = Offer::query()
            ->where('vacancy_id', $id)
            ->pluck('user_id')
            ->toArray();

        $users = User::whereIn('id', $usersVacancy)->get();

        return view('pages.detailVacancy', compact('vacancy', 'users'));
    }
    public function showUser($id)
    {
        $vacancy = Vacancy::query()
            ->where('id', $id)
            ->with('city')
            ->firstOrFail();

        $usersVacancy = Offer::query()
            ->where('vacancy_id', $id)
            ->pluck('user_id')
            ->toArray();

        $users = User::whereIn('id', $usersVacancy)->get();

        return view('pages.vacancyUser', compact('vacancy', 'users'));
    }
}
