# L — Автосалон / Автотехникум (Laravel 12 + Filament) - РАБОЧИЙ

Учебный проект: каталог автомобилей, грузовиков и спецтехники с админ-панелью на Filament.

## 📋 Что внутри

- **Публичная часть**: каталог авто (`/catalog/cars`), грузовиков (`/catalog/trucks`), спецтехники (`/catalog/specials`), страницы `/about`, `/contacts`
- **Админ-панель** (Filament): `/admin` — управление машинами, грузовиками, спецтехникой
- **Модели**: `Car`, `Truck`, `Special`
- **Filament-ресурсы**: CRUD для всех трёх сущностей

## 🛠 Стек

- **Laravel** 12.52
- **Filament** (админ-панель)
- **MySQL** (база)
- **Vite + Tailwind CSS** (фронтенд)

## 🚀 Запуск

### 1. Клонировать и установить зависимости

git clone https://github.com/TeaFlirt/L-filament-auto.git
cd L-filament-auto

composer install
npm install

### 2. Настроить окружение

cp .env.example .env
php artisan key:generate

Открой .env и настрой БД:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=L_filament_auto
DB_USERNAME=root
DB_PASSWORD=твой_пароль

### 3. Создать БД и накатить миграции
# В MySQL:
# CREATE DATABASE L_filament_auto CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

php artisan migrate

### 4. Собрать ассеты и запустить

npm run build          # или npm run dev (для разработки)
php artisan serve

### 5. Создать админа для Filament

php artisan make:filament-user
# введи email, имя, пароль

### Важно:

    .env не коммитится (в .gitignore) — создавай из .env.example

    vendor/ и node_modules/ — не коммитятся, ставятся через composer install / npm install

    Ассеты Filament (public/css/filament/, public/js/filament/, public/fonts/filament/) — коммитятся (это норма для Filament)

    Ассеты Vite (public/build/) — не коммитятся, собираются через npm run build

Гл страница: http://localhost:8000/