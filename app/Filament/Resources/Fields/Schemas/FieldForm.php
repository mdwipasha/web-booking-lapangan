<?php

namespace App\Filament\Resources\Fields\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class FieldForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                Textarea::make('description')
                    ->columnSpanFull(),
                TextInput::make('price_per_hour')
                    ->required()
                    ->numeric(),
                TextInput::make('location')
                    ->required(),
                TextInput::make('latitude'),
                TextInput::make('longtitude'),
                TextInput::make('images'),
                Toggle::make('is_active')
                    ->required(),
            ]);
    }
}
