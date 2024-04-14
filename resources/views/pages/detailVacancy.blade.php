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
            <div class="about">
                <div class="vac_name">Кандидаты:</div>
                <div class="vac_butt">
                    @foreach($users as $user)
                        <div class="vac_butt_item z"><a href="{{ route('vacancyUser', ['id' => $user->id]) }}" class="vac_butt_item_link">{{ $user->name }}</a></div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
