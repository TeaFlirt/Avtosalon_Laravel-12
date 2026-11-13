<?php

namespace App\Filament\Resources\Cars\Pages;

use App\Filament\Resources\Cars\CarResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewCar extends ViewRecord
{
    protected static string $resource = CarResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }

    protected function getFormSchema(): array
    {
        return [
            \Filament\Forms\Components\Section::make('Информация об автомобиле')
                ->schema([
                    \Filament\Forms\Components\TextInput::make('name')->label('Название')->disabled(),
                    \Filament\Forms\Components\TextInput::make('brand')->label('Марка')->disabled(),
                    \Filament\Forms\Components\TextInput::make('year')->label('Год')->disabled(),
                    \Filament\Forms\Components\TextInput::make('engine')->label('Двигатель')->disabled(),
                    \Filament\Forms\Components\TextInput::make('transmission')->label('КПП')->disabled(),
                    \Filament\Forms\Components\TextInput::make('price')->label('Цена')->disabled(),
                    \Filament\Forms\Components\FileUpload::make('photo')->label('Фото')->disabled(),
                ])
                ->columns(2),
        ];
    }
}