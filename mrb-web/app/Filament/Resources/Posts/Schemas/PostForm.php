<?php

namespace App\Filament\Resources\Posts\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Auth;

class PostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                TextInput::make('slug')
                    ->required(),
                Textarea::make('content')
                    ->required()
                    ->columnSpanFull(),
                Textarea::make('excerpt')
                    ->default(null)
                    ->columnSpanFull(),
                Select::make('type')
                    ->options(['berita' => 'Berita', 'artikel' => 'Artikel', 'khutbah' => 'Khutbah'])
                    ->default('berita')
                    ->required(),
                TextInput::make('category_id')
                    ->numeric()
                    ->default(null),
                Toggle::make('is_published')
                    ->label('Published')
                    ->visible(fn() => Auth::user()->can('Publish:Post'))
                    ->required(),
            ]);
    }
}
