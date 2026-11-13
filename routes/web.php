<?php

use Illuminate\Support\Facades\Route;
use App\Models\Truck;
use App\Models\Car;
use App\Models\Special;
use App\Http\Controllers\CatalogController;

// Главная страница
Route::get('/', function () {
    return view('index', [
        'title' => 'Главная',
        'images' => [
            'https://images.unsplash.com/photo-1605559424843-9e4c228bf1c2?w=600', // Легковые
            'https://images.unsplash.com/photo-1601584115197-04ecc0da31d7?w=600', // Грузовые
            'https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?w=600'  // Спецтехника
        ]
    ]);
});

// Страница "О нас"
Route::get('/about', function () {
    return view('about', [
        'title' => 'О нас',
        'images' => [
            'https://images.unsplash.com/photo-1449965408869-eaa3f722e40d?w=600',
            'https://images.unsplash.com/photo-1503376780353-7e6692767b70?w=600',
            'https://images.unsplash.com/photo-1549317661-bd32c8ce0db2?w=600',
            'https://images.unsplash.com/photo-1502877338535-766e1452684a?w=600',
            'https://images.unsplash.com/photo-1568605117036-5fe5e7bab0b7?w=600'
        ]
    ]);
});

// Страница "Контакты"
Route::get('/contacts', function () {
    return view('contacts', [
        'title' => 'Контакты',
        'images' => [
            'https://images.unsplash.com/photo-1560179707-f14e90ef3623?w=600',
            'https://images.unsplash.com/photo-1549317661-bd32c8ce0db2?w=600',
            'https://images.unsplash.com/photo-1502877338535-766e1452684a?w=600',
            'https://images.unsplash.com/photo-1568605117036-5fe5e7bab0b7?w=600',
            'https://images.unsplash.com/photo-1449965408869-eaa3f722e40d?w=600',
            'https://images.unsplash.com/photo-1503376780353-7e6692767b70?w=600'
        ]
    ]);
});
// Каталоги (доступны всем)
Route::get('/catalog/trucks', [CatalogController::class, 'trucks']);
Route::get('/catalog/cars', [CatalogController::class, 'cars']);
Route::get('/catalog/specials', [CatalogController::class, 'specials']);