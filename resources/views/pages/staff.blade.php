@extends('layouts.app')

@section('title')Сотрудники@endsection
@include('layouts.THeader')
@include('layouts.TFooter')
@section('content')

    <section class="profile_users">
        <div class="container">
            <div class="user_vacancies">
                @foreach ($users as $user)
                    <div class="user">
                        <img src="../images/user-profile.png" alt="" class="user_img">
                        <div class="properties">
                            <div class="user_item"><strong>{{ $user->name }}</strong></div>
                            <div class="user_item">Телефон: {{ $user->phone }}</div>
                            <div class="user_item">Почта: {{ $user->email }}</div>
                            <div class="user_item">Опыт работы: {{ $user->resume->experience ?? 'Не указан' }} лет</div>
                            <div class="user_item">Должность: {{ $user->resume->position ?? 'Не указана' }}</div>
                            <div class="user_item">З/п: {{ $user->resume->desired_salary ?? 'Не указана' }}</div>
                            <div class="user_item">Навыки:
                                @if ($user->UserSkills->isNotEmpty())
                                    @foreach ($user->UserSkills as $skill)
                                        {{ $skill->name }};
                                    @endforeach
                                @else
                                    Не указаны
                                @endif
                            </div>
                            <div class="user_btn">
                                <button class="yes profile_btn">Принять</button>
                                <button class="no profile_btn">отказать </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
