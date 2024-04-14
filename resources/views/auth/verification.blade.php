@extends('layouts.app')

@section('title', 'Подтверждение кода')

<div class="container mt-5">
    <div class="card bg-dark" style="margin: 0px auto; margin-top: 300px;">
        <div class="card-header" style="color: #cccccc;">{{ __('Подтверждение кода') }}</div>

        <div class="card-body">
            @if ($error)
                <div class="alert alert-danger" role="alert">
                    {{ $error }}
                </div>
            @endif

            <form method="POST" action="{{ route('verify') }}">
                @csrf

                <div class="mb-3">
                    <label for="verification_code" class="form-label" style="color: #cccccc;">{{ __('Код подтверждения') }}</label>
                    <input type="text" name="verification_code" id="verification_code" class="form-control" required autofocus>
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">{{ __('Подтвердить') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
