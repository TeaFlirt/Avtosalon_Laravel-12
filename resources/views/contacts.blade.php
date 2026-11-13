@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section class="text-center py-5 mb-5" style="background: linear-gradient(135deg, #d6eaf8 0%, #aed6f1 100%); border-radius: 15px;">
    <div class="container py-4">
        <h1 class="display-3 fw-bold mb-3 text-primary">📞 Наши контакты</h1>
        <p class="lead fs-4 text-muted">Свяжитесь с нами любым удобным способом</p>
    </div>
</section>

<!-- Контактная информация -->
<section class="container mb-5">
    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="card h-100 border-0 shadow">
                <div class="card-header text-white" style="background: linear-gradient(135deg, #5dade2 0%, #3498db 100%);">
                    <h4 class="mb-0">📍 Основная информация</h4>
                </div>
                <div class="card-body">
                    <div class="mb-4">
                        <h5 class="fw-bold text-primary">🏢 Адрес офиса:</h5>
                        <p class="text-muted fs-5">г. Москва, ул. Автомобильная, д. 1, стр. 2</p>
                    </div>
                    <div class="mb-4">
                        <h5 class="fw-bold text-primary">📞 Телефоны:</h5>
                        <p class="text-muted fs-5">
                            <strong>Отдел продаж:</strong> +7 (999) 000-00-00<br>
                            <strong>Сервисный центр:</strong> +7 (999) 000-00-01<br>
                            <strong>Бухгалтерия:</strong> +7 (999) 000-00-02
                        </p>
                    </div>
                    <div class="mb-4">
                        <h5 class="fw-bold text-primary">✉️ Email:</h5>
                        <p class="text-muted fs-5">
                            <strong>Общие вопросы:</strong> info@avtomir.ru<br>
                            <strong>Отдел продаж:</strong> sales@avtomir.ru<br>
                            <strong>Сервис:</strong> service@avtomir.ru
                        </p>
                    </div>
                    <div>
                        <h5 class="fw-bold text-primary">🕒 Режим работы:</h5>
                        <p class="text-muted fs-5">
                            <strong>Пн-Пт:</strong> 9:00 — 20:00<br>
                            <strong>Сб-Вс:</strong> 10:00 — 18:00
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-6 mb-4">
            <div class="card h-100 border-0 shadow">
                <div class="card-header text-white" style="background: linear-gradient(135deg, #5dade2 0%, #3498db 100%);">
                    <h4 class="mb-0">📝 Напишите нам</h4>
                </div>
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Ваше имя</label>
                            <input type="text" class="form-control" placeholder="Иван Иванов">
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Email</label>
                            <input type="email" class="form-control" placeholder="example@mail.ru">
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Телефон</label>
                            <input type="tel" class="form-control" placeholder="+7 (___) ___-__-__">
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Сообщение</label>
                            <textarea class="form-control" rows="4" placeholder="Ваш вопрос..."></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">📤 Отправить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Карта и дополнительные контакты -->
<section class="container mb-5">
    <div class="row">
        <div class="col-md-8 mb-4">
            <div class="card border-0 shadow">
                <div class="card-header text-white" style="background: linear-gradient(135deg, #5dade2 0%, #3498db 100%);">
                    <h4 class="mb-0">🗺️ Мы на карте</h4>
                </div>
                <div class="card-body p-0">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2244.0!2d37.6!3d55.75!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNTXCsDQ1JzAwLjAiTiAzN8KwMzYnMDAuMCJF!5e0!3m2!1sru!2sru!4v1600000000000" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 mb-4">
            <div class="card h-100 border-0 shadow">
                <div class="card-header text-white" style="background: linear-gradient(135deg, #5dade2 0%, #3498db 100%);">
                    <h4 class="mb-0">🌐 Соцсети</h4>
                </div>
                <div class="card-body text-center">
                    <p class="text-muted mb-4">Подписывайтесь на наши социальные сети для получения новостей и акций</p>
                    <div class="d-grid gap-2">
                        <a href="#" class="btn btn-outline-primary">📘 ВКонтакте</a>
                        <a href="#" class="btn btn-outline-info">🐦 Telegram</a>
                        <a href="#" class="btn btn-outline-danger">📺 YouTube</a>
                        <a href="#" class="btn btn-outline-success">📷 Instagram</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Галерея офиса -->
<section class="container mb-5">
    <h2 class="text-center fw-bold mb-4 text-primary">🏢 Наш офис</h2>
    <div class="row">
        @foreach($images as $image)
        <div class="col-md-4 mb-4">
            <div class="card h-100 border-0 shadow-sm">
                <img src="{{ $image }}" class="card-img-top" alt="Офис" style="height: 200px; object-fit: cover;">
            </div>
        </div>
        @endforeach
    </div>
</section>

@endsection