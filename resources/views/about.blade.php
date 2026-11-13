@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section class="text-center py-5 mb-5" style="background: linear-gradient(135deg, #d6eaf8 0%, #aed6f1 100%); border-radius: 15px;">
    <div class="container py-4">
        <h1 class="display-3 fw-bold mb-3 text-primary">🏢 О нашей компании</h1>
        <p class="lead fs-4 text-muted">Более 10 лет на рынке автомобильной техники</p>
    </div>
</section>

<!-- История компании -->
<section class="container mb-5">
    <div class="row align-items-center">
        <div class="col-md-6 mb-4">
            <h2 class="fw-bold mb-4 text-primary">📜 Наша история</h2>
            <p class="text-muted fs-5">Компания «АвтоМир» была основана в 2015 году группой энтузиастов автомобильного бизнеса. За годы работы мы выросли из небольшого автосалона в крупную компанию с собственным сервисным центром и складом запчастей.</p>
            <p class="text-muted">За это время мы успешно завершили более <strong>5,000 сделок</strong> и заработали репутацию надёжного партнёра для сотен компаний по всей России.</p>
            
            <div class="row mt-4">
                <div class="col-4 text-center">
                    <h3 class="fw-bold text-primary">10+</h3>
                    <p class="text-muted">Лет опыта</p>
                </div>
                <div class="col-4 text-center">
                    <h3 class="fw-bold text-primary">5000+</h3>
                    <p class="text-muted">Клиентов</p>
                </div>
                <div class="col-4 text-center">
                    <h3 class="fw-bold text-primary">24/7</h3>
                    <p class="text-muted">Поддержка</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card border-0 shadow">
                <img src="https://images.unsplash.com/photo-1560179707-f14e90ef3623?w=600" class="card-img-top" alt="Офис" style="height: 400px; object-fit: cover;">
            </div>
        </div>
    </div>
</section>

<!-- Специализация -->
<section class="container mb-5">
    <h2 class="text-center fw-bold mb-4 text-primary">🔧 Чем мы занимаемся</h2>
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card h-100 border-0 shadow-sm text-center">
                <div class="card-body py-5">
                    <div class="display-4 mb-3">🚛</div>
                    <h4 class="card-title fw-bold text-primary">Грузовые автомобили</h4>
                    <p class="card-text text-muted">Продажа и обслуживание грузовиков всех классов: от лёгких коммерческих до тяжелых седельных тягачей</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card h-100 border-0 shadow-sm text-center">
                <div class="card-body py-5">
                    <div class="display-4 mb-3">🚗</div>
                    <h4 class="card-title fw-bold text-primary">Легковые автомобили</h4>
                    <p class="card-text text-muted">Широкий выбор легковых автомобилей для личного и корпоративного использования</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card h-100 border-0 shadow-sm text-center">
                <div class="card-body py-5">
                    <div class="display-4 mb-3">🚜</div>
                    <h4 class="card-title fw-bold text-primary">Спецтехника</h4>
                    <p class="card-text text-muted">Строительная, сельскохозяйственная и коммунальная техника для любых задач</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Галерея -->
<section class="container mb-5">
    <h2 class="text-center fw-bold mb-4 text-primary">📸 Наша команда и объекты</h2>
    <div class="row">
        @foreach($images as $image)
        <div class="col-md-4 mb-4">
            <div class="card h-100 border-0 shadow-sm">
                <img src="{{ $image }}" class="card-img-top" alt="О нас" style="height: 250px; object-fit: cover;">
            </div>
        </div>
        @endforeach
    </div>
</section>

<!-- Ценности -->
<section class="container mb-5">
    <div class="card border-0 py-5 shadow-sm" style="background: linear-gradient(135deg, #d6eaf8 0%, #aed6f1 100%); border-radius: 15px;">
        <div class="container">
            <h2 class="text-center fw-bold mb-4 text-primary">⭐ Наши ценности</h2>
            <div class="row text-center">
                <div class="col-md-3">
                    <h4 class="text-primary">🤝 Честность</h4>
                    <p class="text-muted">Прозрачные условия сделки</p>
                </div>
                <div class="col-md-3">
                    <h4 class="text-primary">🎯 Качество</h4>
                    <p class="text-muted">Только проверенная техника</p>
                </div>
                <div class="col-md-3">
                    <h4 class="text-primary">⚡ Скорость</h4>
                    <p class="text-muted">Быстрое оформление</p>
                </div>
                <div class="col-md-3">
                    <h4 class="text-primary">🛡️ Надёжность</h4>
                    <p class="text-muted">Гарантия на всю технику</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection