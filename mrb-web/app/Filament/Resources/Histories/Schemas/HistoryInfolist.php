<?php

namespace App\Filament\Resources\Histories\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class HistoryInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('hero_title'),
                TextEntry::make('hero_subtitle')
                    ->columnSpanFull(),
                TextEntry::make('quote_text')
                    ->columnSpanFull(),
                TextEntry::make('intro_title'),
                TextEntry::make('intro_description')
                    ->columnSpanFull(),
                TextEntry::make('tsunami_stat_title'),
                TextEntry::make('tsunami_stat_description')
                    ->columnSpanFull(),
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
