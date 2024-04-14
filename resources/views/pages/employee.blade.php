@extends('layouts.app')

@section('title')Список сотрудников@endsection
@include('layouts.THeader')
@include('layouts.TFooter')
@section('content')
    <section class="employees">
        <div class="container-fluide">
            <div class="employees_title">Сотрудники</div>
            <div class="employees_btns">
                <button class="employees_btns_item">Все сотрудники</button>
                <button class="employees_btns_item">Активные</button>
                <button class="employees_btns_item">Уволенные</button>
                <button class="employees_btns_item">В резерве</button>
            </div>

            @foreach ($users as $user)
            <div class="employees_promo">
                <a href=""><img src="../images/user (1).png" alt="" class="employees_promo_img"></a>
                <div class="employees_fio">
                    <div class="status">ONLINE</div>
                    <div class="employees_name"><strong>{{ $user->name }}</strong></div>
                    <div class="employees_job">{{ $user->resume->position ?? 'Не указана' }}</div>
                    <div class="employees_email">{{ $user->email }}</div>
                </div>
                <a href="#" class="mail_link"><img src="img/free-icon-chat-bubble-6421255 1.png" alt="" class="mail"></a>
            </div>
            @endforeach
        </div>
    </section>
@endsection
