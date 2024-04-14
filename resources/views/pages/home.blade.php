@extends('layouts.app')

@section('title')Главная@endsection
@include('layouts.THeader')
@include('layouts.TFooter')
@section('content')
    <section class="promo">
        <div class="container-fluide">
            <div class="promo_meta">
                <div class="card">
                    <img src="../images/logo-icm-2 1 (2).png" alt="" class="card_img ">
                    <div class="card_txt">Ростов-на-Дону </div>
                    <button class="card_btn">Редактировать</button>
                </div>
                <div class="descer">
                    <div class="title">Организация:</div>
                    <div class="subtitle">WS ICM</div>
                    <div class="promo_txt"> О компании: <br><br>
                        <span class="icm_txt">WS ICM</span> - инновационная IT компания, специализирующаяся на разработке высокотехнологичных решений для управления информационными потоками и цифровой трансформации. Наша команда экспертов предлагает полный спектр услуг, включая разработку программного обеспечения, облачные решения, кибербезопасность, аналитику данных и автоматизацию бизнес-процессов. </div>
                    <div class="promo_btn">
                        <div class="btn-item">#Управление</div>
                        <div class="btn-item">#Вакансии</div>
                        <div class="btn-item">#Псих.тесты</div>
                        <div class="btn-item">#Статистика</div>
                        <div class="btn-item">#Сотрудники</div>
                        <div class="btn-item">#Кандидаты</div>
                        <div class="btn-item">#ЧатЧат</div>
                        <div class="btn-item">#Календарь</div>
                        <div class="btn-item">#Обучение</div>
                        <div class="btn-item">#Мероприятия</div>
                        <div class="btn-item">#Квота</div>
                        <div class="btn-item">#Отзывы</div>
                        <div class="btn-item">#Кадровы резерв</div>
                        <div class="btn-item">#Тестовые
                            задания</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

