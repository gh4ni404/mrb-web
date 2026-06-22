<?php

namespace App\Filament\Resources\HistoryGalleries\Schemas;

use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class HistoryGalleryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('category_id')
                    ->label('Category')
                    ->relationship('category', 'name', fn ($query) => $query->where('type', 'gallery'))
                    ->createOptionForm([
                        TextInput::make('name')->required(),
                        TextInput::make('slug')->required()->unique(table: 'categories'),
                        Hidden::make('type')
                            ->default('gallery'),
                        Textarea::make('description'),
                    ])
                    ->required()
                    ->native(false),
                TextInput::make('title')
                    ->required(),
                Textarea::make('description')
                    ->default(null)
                    ->columnSpanFull(),
                SpatieMediaLibraryFileUpload::make('images')
                    ->collection('images')
                    ->image()
                    ->maxSize(5120)
                    ->disk('public')
                    ->helperText('Gambar resolusi penuh. Maks 5MB.')
                    ->columnSpanFull(),
                SpatieMediaLibraryFileUpload::make('thumbnail')
                    ->collection('thumbnail')
                    ->image()
                    ->maxSize(2048)
                    ->disk('public')
                    ->helperText('Gambar thumbnail. Maks 2MB. Kosongkan jika tidak ada.')
                    ->columnSpanFull(),
                Toggle::make('is_active')
                    ->required(),
            ]);
    }
}
