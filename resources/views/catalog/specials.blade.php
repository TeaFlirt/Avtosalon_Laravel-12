@extends('layouts.app')

@section('content')
<div class="container py-5">
    <!-- Заголовок -->
    <div class="text-center mb-5" style="background: linear-gradient(135deg, #d6eaf8 0%, #aed6f1 100%); border-radius: 15px; padding: 3rem;">
        <h1 class="display-4 fw-bold text-primary">🚜 Специальная техника</h1>
        <p class="lead text-muted mb-0">Профессиональное оборудование для любых задач</p>
    </div>

    <!-- Таблица (4 поля) -->
    <div class="card shadow-sm border-0">
        <div class="card-header text-white" style="background: linear-gradient(135deg, #5dade2 0%, #3498db 100%);">
            <h5 class="mb-0">Каталог спецтехники</h5>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover table-striped mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th class="text-center" style="width: 120px;">Фото</th>
                            <th>Название</th>
                            <th>Марка</th>
                            <th class="text-end">Цена</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($vehicles as $vehicle)
                        <tr>
                            <td class="text-center">
                                @if($vehicle->photo)
                                    <img src="{{ Storage::url($vehicle->photo) }}" alt="{{ $vehicle->name }}" class="img-thumbnail" style="width: 100px; height: 75px; object-fit: cover;">
                                @else
                                    <span class="text-muted">Нет фото</span>
                                @endif
                            </td>
                            <td class="fw-bold">{{ $vehicle->name }}</td>
                            <td>{{ $vehicle->brand }}</td>
                            <td class="text-end fw-bold text-success">{{ number_format($vehicle->price, 0, '.', ' ') }} ₽</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="text-center py-5">
                                <p class="text-muted mb-0">📭 Записей пока нет</p>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Кнопки навигации -->
    <div class="d-flex justify-content-between mt-4">
        <a href="/" class="btn btn-outline-primary">← На главную</a>
        <div class="btn-group">
            <a href="/catalog/trucks" class="btn btn-outline-primary">Грузовые</a>
            <a href="/catalog/cars" class="btn btn-outline-primary">Легковые</a>
        </div>
    </div>
</div>
@endsection