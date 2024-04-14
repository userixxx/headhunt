@extends('layouts.app')


@section('title', 'Регистрация')

<div class="container mt-5">
    <div class="card bg-dark" style="margin: 0px auto; margin-top: 300px;">
        <div class="card-header text-white">{{ __('Регистрация') }}</div>

        <div class="card-body text-white bg-dark">
            <form id="verification-form" method="POST" action="{{ route('send.verification.code') }}">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="slonik@mail.ru" required>
                </div>
                <button type="submit" class="btn btn-primary">Отправить код подтверждения</button>
                <div id="error-message" style="color: red; margin-top: 10px; display: none;"></div>
            </form>
        </div>
    </div>
</div>


<script>
    document.getElementById('verification-form').addEventListener('submit', function(event) {
        event.preventDefault();

        fetch(this.action, {
            method: this.method,
            body: new FormData(this),
            headers: {
                'X-CSRF-TOKEN': this.querySelector('input[name="_token"]').value
            }
        })
            .then(response => {
                if (response.ok) {
                    window.location.href = "{{ route('verification.form') }}";
                } else {
                    return response.json().then(data => {
                        throw new Error(data.message);
                    });
                }
            })
            .catch(error => {
                document.getElementById('error-message').innerText = error.message;
                document.getElementById('error-message').style.display = 'block';
                console.error('Произошла ошибка:', error);
            });
    });
</script>
