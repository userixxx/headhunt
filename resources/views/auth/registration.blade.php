@extends('layouts.app')

@section('title', 'Дальнейшая регистрация')

@section('content')
    <div class="container mt-5">
        <div class="card bg-dark" style="margin: 0px auto; margin-top: 300px;">
            <div class="card-header" style="color: #cccccc;">{{ __('Дальнейшая регистрация') }}</div>

            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('process.registration') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label" style="color: #cccccc;">{{ __('Имя') }}</label>
                        <input type="text" id="name" name="name" class="form-control" required autofocus>
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label" style="color: #cccccc;">{{ __('Номер телефона') }}</label>
                        <input type="text" id="phone" name="phone" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label" style="color: #cccccc;">{{ __('Пароль') }}</label>
                        <input type="password" id="password" name="password" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label" style="color: #cccccc;">{{ __('Подтверждение пароля') }}</label>
                        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">{{ __('Зарегистрироваться') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
