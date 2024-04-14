@extends('layouts.app')

@section('title')
    Детальная страница вакансии
@endsection

@include('layouts.THeader')
@include('layouts.TFooter')

@section('content')
    <section class="mm">
        <div class="container-fluide">
            <div class="vac_vac">
                <div class="vac_pro">
                    <div class="us_promo">
                        <a href="#" class="vac_link"><img src="../images/Remove-bg.ai_1713034722619.png" class="vac_img" alt=""></a>
                        <div class="city">{{ $vacancy->city->name }}</div>
                        <div class="date_ago">Опубликовано:<br>{{ $vacancy->created_at->diffForHumans() }}</div>
                        <div class="date">Регистрация {{ $vacancy->created_at->format('d.m.Y') }}</div>
                    </div>
                    <div class="vac_txt">
                        <div class="vac_header">{{ $vacancy->name }}</div>
                        <div class="vac_skil">Ключевые навыки: {{ $vacancy->required_skills ?? 'Не указано' }} </div>
                        <div class="vac_ex">Опыт работы: {{ $vacancy->experience }}</div>
                        <div class="vac_lan">Языки: {{ $vacancy->languages ?? 'english' }} </div>
                    </div>
                    <div class="responses">Откликов: {{ rand(1, 199) }}</div>
                    <div class="vac_some">
                        <div class="vac_descer">
                            <div class="vac_items">
                                <div class="vac_ff">Оплата:</div>
                                <div class="vac_ss">до {{ $vacancy->salary_max }} ₽</div>
                            </div>
                            <div class="vac_items">
                                <div class="vac_ff">График: </div>
                                <div class="vac_ss">{{ $vacancy->work_schedule }}</div>
                            </div>
                            <div class="vac_items">
                                <div class="vac_ff">Часы:</div>
                                <div class="vac_ss">8-9 часов</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @foreach($users as $user)
            <div class="about">
                <div class="vac_name">{{ $user->name }}</div>
                <div class="bla_bla">
                    <div class="bla_f">Дата рождения: 19.04.2000 <br>
                        Город: {{ $user->city->name }}, ул. Большая Садовая, 121 <br>
                        Образование: Высшее оконченное <br>
                        Университет: {{ $user->city->name }}, Технический <br>
                        E-mail: ivanovivan@mail.ru<br>
                        Телефон: 8-928-123-45-77<br>

                    </div>
                    <div class="bla_s">
                        <div class="bla_title">Навыки:</div>
                        <div class="bla_txt">
                            @if ($user->UserSkills->isNotEmpty())
                                @foreach ($user->UserSkills as $skill)
                                    {{ $skill->name }};
                                @endforeach
                            @else
                                Не указаны
                            @endif
                        </div>
                        <div class="bla_title">О себе:</div>
                        <div class="bla_txt">Занимаюсь разработкой проектов.<br>
                            имеется опыт в других различных сферах IT<br>(@foreach ($user->UserSkills as $skill)
                                {{ $skill->name }};
                            @endforeach). В поисках постоянной работы в<br>пределах дома с хорошей заработной платой.</div>
                    </div>
                </div>
            </div>
            @endforeach
@endsection
