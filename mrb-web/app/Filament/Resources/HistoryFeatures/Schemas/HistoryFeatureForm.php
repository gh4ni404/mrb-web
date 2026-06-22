<?php

namespace App\Filament\Resources\HistoryFeatures\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class HistoryFeatureForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('category')
                    ->options(['estetika' => 'Estetika', 'modern' => 'Modern'])
                    ->required(),
                TextInput::make('title')
                    ->required(),
                TextInput::make('tagline')
                    ->default(null),
                Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),
                SpatieMediaLibraryFileUpload::make('images')
                    ->collection('images')
                    ->image()
                    ->maxSize(2048)
                    ->disk('public')
                    ->helperText('Maks 2MB. Rasio disarankan 4:3.')
                    ->columnSpanFull(),
                TextInput::make('sort_order')
                    ->required()
                    ->numeric()
                    ->default(0),
                Toggle::make('is_active')
                    ->required(),
            ]);
    }
}
