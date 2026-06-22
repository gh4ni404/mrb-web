<?php

namespace App\Filament\Resources\Histories\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class HistoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('hero_title')
                    ->required(),
                Textarea::make('hero_subtitle')
                    ->required()
                    ->columnSpanFull(),
                Textarea::make('quote_text')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('intro_title')
                    ->required(),
                Textarea::make('intro_description')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('tsunami_stat_title')
                    ->required(),
                Textarea::make('tsunami_stat_description')
                    ->required()
                    ->columnSpanFull(),
                Toggle::make('is_active')
                    ->label('Aktif')
                    ->default(true),
            ]);
    }
}
