<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>АвтоМир</title>
    <!-- ✅ Bootstrap CSS (Пробелы удалены) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- ✅ Принудительный фон для body -->
    <style>
        body {
            background-color: #dcf2fa !important;
            min-height: 100vh;
        }
        .navbar {
            background: linear-gradient(135deg, #3498db 0%, #0f4c75 100%) !important;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(52, 152, 219, 0.2) !important;
        }
        .btn-primary {
            background: linear-gradient(135deg, #489cd4 0%, #3498db 100%);
            border: none;
        }
        .btn-primary:hover {
            background: linear-gradient(135deg, #428ec2 0%, #2980b9 100%);
        }
        footer {
            background: linear-gradient(135deg, #5dade2 0%, #3498db 100%) !important;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="/">АвтоМир</a>
            <div class="navbar-nav">
                <a class="nav-link" href="/">Главная</a>
                <a class="nav-link" href="/catalog/trucks">Грузовые</a>
                <a class="nav-link" href="/catalog/cars">Легковые</a>
                <a class="nav-link" href="/catalog/specials">Спецтехника</a>
                <a class="nav-link" href="/about">О нас</a>
                <a class="nav-link" href="/contacts">Контакты</a>
            </div>
        </div>
    </nav>

    <main class="container">
        @yield('content')
    </main>

    <footer class="bg-dark text-white text-center py-3 mt-5">
        <p>&copy; 2026 АвтоМир. Все права защищены.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js     "></script>
</body>
</html>