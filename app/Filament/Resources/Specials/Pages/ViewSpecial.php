<?php

namespace App\Filament\Resources\Specials\Pages;

use App\Filament\Resources\Specials\SpecialResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewSpecial extends ViewRecord
{
    protected static string $resource = SpecialResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }

    protected function getFormSchema(): array
    {
        return [
            \Filament\Forms\Components\Section::make('Информация о технике')
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