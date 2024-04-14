@extends('layouts.app')

@section('title')
    Вакансии
@endsection
@include('layouts.THeader')
@include('layouts.TFooter')
@section('content')
    <section class="vacancies">
        <div class="container-fluide">
            @foreach ($vacancies as $vacancy)
            <div class="vac_vac">
                <div class="vac_promo">
                    <div class="us_promo">
                        <a href="#" class="vac_link"><img src="../images/Remove-bg.ai_1713034722619.png" class="vac_img" alt=""></a>
                        <div class="city">{{ $vacancy->city->name }}</div>
                        <div class="date_ago">Опубликовано:<br>{{ $vacancy->created_at->diffForHumans() }}</div>
                        <div class="date">{{ $vacancy->created_at->format('d-m-Y') }}</div>
                    </div>
                    <div class="vac_txt">
                        <div class="vac_header">{{ $vacancy->name }}</div>
                        <div class="vac_skil">Ключевые навыки: {{ $vacancy->required_skills }} </div>
                        <div class="vac_ex">Опыт работы: {{ $vacancy->experience }}</div>
                        <div class="vac_lan">Языки: {{ isset($vacancy->languages) ? $vacancy->languages : 'English' }}</div>
                        <div class="vac_plus">Человеческие качества: <span class="grn">Честность</span></div>
                        <div class="vac_minus">Дисциплинарные качества: <span class="red">Некоммуникабельный </span>
                        </div>
                    </div>
                    <div class="responses">Откликов: {{ rand(1, 199) }}</div>
                    <div class="vac_some">
                        <div class="vac_descer">
                            <div class="vac_items">
                                <div class="vac_ff">Оплата:</div>
                                <div class="vac_ss"> до {{ $vacancy->salary_max }} ₽</div>
                            </div>
                            <div class="vac_items">
                                <div class="vac_ff">График: </div>
                                <div class="vac_ss">{{ $vacancy->work_schedule }}</div>
                            </div>
                            <div class="vac_items">
                                <div class="vac_ff">Часы:</div>
                                <div class="vac_ss">8-9 часов</div>
                            </div>
                            <div class="vac_btn"><a href="{{ route('detailVacancy', ['id' => $vacancy->id]) }}" class="vac_link">Смотреть вакансию</a></div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="filter">
            <div class="filter_title">
                Фильтр
            </div>
            <div class="filter_subtitle">Сфера работы</div>
            <select class="selector">
                <option value="option1">IT</option>
                <option value="option2">Другая</option>
            </select>
            <div class="filter_subtitle">Место работы</div>
            <select class="selector">
                <option value="option1">Ростов-на-Дону</option>
                <option value="option2">Москва</option>
                <option value="option3">Казань</option>
            </select>
            <div class="filter_subtitle">Опыт работы</div>
            <select class="selector">
                <option value="option1">От 3 лет</option>
                <option value="option2">От 4 лет</option>
                <option value="option3">От 5 лет</option>
            </select>
            <div class="filter_subtitle">Возраст</div>
            <select class="selector">
                <option value="option1">От 20 до 35 лет</option>
                <option value="option2">От 35 до 45 лет</option>
                <option value="option3">От 45 до 50 лет</option>
            </select>
            <div class="filter_subtitle">Языки</div>
            <select class="selector">
                <option value="option1">Русский, English</option>
                <option value="option2">Другой</option>
            </select>
        </div>
    </section>
@endsection
