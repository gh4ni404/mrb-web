<?php

namespace App\Filament\Resources\HistoryFeatures\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\SpatieMediaLibraryImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class HistoryFeatureInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('category')
                    ->badge(),
                TextEntry::make('title'),
                TextEntry::make('tagline')
                    ->placeholder('-'),
                TextEntry::make('description')
                    ->columnSpanFull(),
                SpatieMediaLibraryImageEntry::make('images')
                    ->collection('images')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('sort_order')
                    ->numeric(),
                IconEntry::make('is_active')
                    ->boolean(),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
