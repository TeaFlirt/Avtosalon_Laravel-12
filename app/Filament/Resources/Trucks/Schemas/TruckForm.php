<?php

namespace App\Filament\Resources\Trucks\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class TruckForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')->required(),
                TextInput::make('brand')->required(),
                TextInput::make('year')->numeric()->required(),
                TextInput::make('engine')->required(),
                TextInput::make('transmission')->required(),
                TextInput::make('price')->numeric()->prefix('₽')->required(),
                FileUpload::make('photo')
                    ->image()
                    ->directory('vehicles')
                    ->required(),
            ]);
    }
}