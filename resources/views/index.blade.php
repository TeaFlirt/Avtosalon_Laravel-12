@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section class="text-center py-5 mb-5" style="background: linear-gradient(135deg, #93b8d3 0%, #aed6f1 100%); border-radius: 15px;">
    <div class="container py-5">
        <h1 class="display-3 fw-bold mb-3 text-primary">🚗 Добро пожаловать в АвтоМир</h1>
        <p class="lead fs-4 mb-4 text-muted">Ваш надёжный партнёр в мире автомобилей с 2015 года</p>
        <div class="d-flex justify-content-center gap-3">
            <a href="/catalog/trucks" class="btn btn-primary btn-lg px-4">🚛 Грузовые</a>
            <a href="/catalog/cars" class="btn btn-outline-primary btn-lg px-4">🚗 Легковые</a>
            <a href="/catalog/specials" class="btn btn-primary btn-lg px-4">🚜 Спецтехника</a>
        </div>
    </div>
</section>

<!-- Преимущества -->
<section class="container mb-5">
    <div class="row text-center">
        <div class="col-md-4 mb-4">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body py-5">
                    <div class="display-4 mb-3">✅</div>
                    <h4 class="card-title text-primary">Гарантия качества</h4>
                    <p class="card-text text-muted">Вся техника проходит тщательную проверку перед продажей</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body py-5">
                    <div class="display-4 mb-3">🚚</div>
                    <h4 class="card-title text-primary">Быстрая доставка</h4>
                    <p class="card-text text-muted">Доставим технику в любой регион России</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body py-5">
                    <div class="display-4 mb-3">💰</div>
                    <h4 class="card-title text-primary">Лучшие цены</h4>
                    <p class="card-text text-muted">Гибкая система скидок и рассрочки</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Каталог -->
<section class="container mb-5">
    <h2 class="text-center mb-4 fw-bold text-primary">📋 Наш автопарк</h2>
    <div class="row">
        @foreach($images as $image)
        <div class="col-md-4 mb-4">
            <div class="card h-100 border-0 shadow-sm">
                <img src="{{ $image }}" class="card-img-top" alt="Авто" style="height: 250px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title fw-bold text-primary">Наш автопарк</h5>
                    <p class="card-text text-muted">Высокое качество и надёжность каждой единицы техники</p>
                    <a href="/catalog/trucks" class="btn btn-primary">Подробнее →</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

<!-- Призыв к действию -->
<section class="container mb-5">
    <div class="card border-0 text-center py-5 shadow-sm" style="background: linear-gradient(135deg, #89bbdf 0%, #aed6f1 100%); border-radius: 15px;">
        <div class="card-body">
            <h3 class="mb-3 text-primary">📞 Нужна консультация?</h3>
            <p class="lead mb-4 text-muted">Наши специалисты помогут подобрать идеальную технику для ваших задач</p>
            <a href="/contacts" class="btn btn-primary btn-lg px-5">Связаться с нами</a>
        </div>
    </div>
</section>

@endsection