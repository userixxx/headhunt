@extends('layouts.app')
@vite('resources/css/auth.css')
@section('title', 'Вход')

    <div class="container mt-5" style="height: 100%; width: 100%; display: flex; justify-content: center; align-items: center;">
        <div class="card bg-dark">
            <div class="card-header text-white">{{ __('Вход') }}</div>

            <div class="card-body bg-dark text-white">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="email" class="form-label">{{ __('Email') }}</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">{{ __('Пароль') }}</label>
                        <input type="password" name="password" id="password" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">{{ __('Войти') }}</button>
                        <a class="ml-3" href="/register">Регистрация</a>
                    </div>

                </form>
            </div>
        </div>
    </div>
