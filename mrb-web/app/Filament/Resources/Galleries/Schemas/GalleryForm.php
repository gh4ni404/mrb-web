<?php

namespace App\Filament\Resources\Galleries\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class GalleryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                Textarea::make('description')
                    ->default(null)
                    ->columnSpanFull(),
                Select::make('type')
                    ->options(['foto' => 'Foto', 'video' => 'Video'])
                    ->default('foto')
                    ->required(),
                TextInput::make('category_id')
                    ->numeric()
                    ->default(null),
                Toggle::make('is_featured')
                    ->required(),
            ]);
    }
}
